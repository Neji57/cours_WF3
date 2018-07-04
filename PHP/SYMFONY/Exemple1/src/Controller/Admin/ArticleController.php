<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Article;
use App\Form\ArticleType;

/**
 * @Route("/admin/article")
 */
class ArticleController extends Controller
{
	/**
	 * @Route("/")
	 */
	public function index()
	{
		return $this->render('admin/article/index.html.twig');
	}

	/**
	 * @Route("/new")
	 */
	public function new(Request $request)
	{
		$article = new Article;

		// Création du formulaire
		$form = $this->createForm(ArticleType::class, $article);
		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid())
		{
				// Sauvegarde dans la BDD
			$em = $this->getDoctrine()->getManager();
			$em->persist($article);
			$em->flush();

			return $this->redirectToRoute('app_admin_article_index');
		}

		// if(!empty($_POST))
		// {
		// 	$post = array();
		// 	foreach($_POST as $key => $p)
		// 	{
		// 		$post[$key] = trim($p);
		// 	}
		// 	$article
		// 		->setTitle(strip_tags($_POST['title']))
		// 		->setContent($post['content'])
		// 	;

		// 	// Sauvegarde dans la BDD
		// 	$em = $this->getDoctrine()->getManager();
		// 	$em->persist($article);
		// 	$em->flush();
		// }

		return $this->render('admin/article/new.html.twig', array(
			'form' =>$form->createView(),
		));
	}

	/**
	 * @Route("/edit/{id}", requirements={"id" = "\d+"}) void
	 */
	public function edit(Request $request)
	{
		// Création du formulaire
		$form = $this->createForm(ArticleType::class, $article);
		$form->handleRequest($request);

		return $this->render('admin/article/edit.html.twig', array(
			'form' => $form->createView(),
		));
	}
}
