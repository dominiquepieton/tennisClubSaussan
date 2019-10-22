<?php

namespace App\service;

use Doctrine\Common\Persistence\ObjectManager;

class Pagination {
    
    private $entityClass;   // pour savoir quelle entity on utilise
    private $limit = 10;   //retour du nombre de valeur à retourner
    private $currentPage = 1; // savoir sur quelle page on se situe
    private $manager;    // permettra de recuperer le repository


    public function __construct(ObjectManager $manager){
        $this->manager = $manager;

    }

    public function getPages(){
        $repo = $this->manager->getRepository($this->entityClass);
        $total = count($repo->findAll()); //total de données
        // nbre de pages au nombre superieur
        $pages = ceil($total / $this->limit);

        return $pages;
    }

    public function getData(){
        // calculer le point de depart a chaque fois
        $offset = $this->currentPage * $this->limit - $this->limit;
        // demander le repository pour disposer de tous les elements
        $repo = $this->manager->getRepository($this->entityClass);
        $data = $repo->findBy([], [], $this->limit, $offset);

        // renvois des données en question
        return $data;
    }

    public function setPage($page){
        $this->currentPage = $page;
    }

    public function getPage(){
        return $this->currentPage;
    }

    public function setLimit($limit){
        $this->limit = $limit;

        return $this;
    }

    public function getLimit(){
        return $this->limit;
    }

    public function setEntityClass($entityClass){
        $this->entityClass = $entityClass;

        return $this;
    }

    public function getEntityClass(){
        return $this->entityClass;
    }

}

?>