<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminArticleController extends Controller
{
    /**
     * 
     * @Route("/ad/article", name="index_article")
     */
    public function index(ArticleRepository $repo)
    {
        //recuperation de tous les articles
        
        $articles = $repo->findAll();

        return $this->render('ad/article.html.twig', [
            'articles' => $articles
        ]);
    }


    /**
     * permet l'affichage pour l'admin
     * 
     * @Route("/admin/article/index", name="admin_index_article")
     */
    public function adminIndex(ArticleRepository $repo)
    {
        //recuperation de tous les articles
        
        $articles = $repo->findAll();

        return $this->render('admin/article/index.html.twig', [
            'articles' => $articles
        ]);
    }




    /**
     * Permet d'afficher un article
     * 
     * @Route("/ad/{slug}", name="article_show")
     * @return Response
     */
    public function show(Article $article, ArticleRepository $repo) {
        // On récupère l'article par rapport à l'entite article
        
        $articles = $repo->findAll();

        return $this->render('ad/show.html.twig',[
            'article'=> $article,
            'articles' => $articles
        ]);
    }

    /**
     * Permet la création d'article
     * 
     * @Route("/admin/article/new", name="admin_article_create")
     * @return Response
     */
    public function create (Request $request, ObjectManager $manager) {
        $article = new Article();

        // creation du formulaire on lui passe l'article
        $form = $this->createForm(ArticleType::class, $article);

        // recuperation des données grace à form en utilisant handleRequest
        $form->handleRequest($request);

        // on verifie si le formulaire a étè sousmit et si il est valide
        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($article); // persiste dans le temps
            $manager->flush();   // envoies la requête à la db
            
             //message pour prevenir que cela c'est bien passé       
            $this->addFlash(
                'success',
                "L'article <strong>{$article->getTitle()}</strong> a bien étè enregistrée."
            );
            
            // gérer la redirection la redirection 
            return $this->redirectToRoute('admin_article_create');
        }

        return $this->render('admin/article/new.html.twig', [
            'form' => $form->createView()    // permet de faire passer a twig un plus petit objet
            ]);    
    }

    /**
     * Permet de supprimer un article
     * 
     * @Route("/admin/article/{id}/delete", name="admin_article_delete")
     * 
     * 
     * @param Article $article
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Article $article, ObjectManager $manager) {
        // demande au manager de supprimer la réservation
        $manager->remove($article);
        $manager->flush();

        //message flash
        $this->addFlash(
            'success',
            "L'article a bien été supprimée !"
        );

        // fait une redirection aprés avoir supprimer
        return $this->redirectToRoute("admin_article_index");

    }

    
}
