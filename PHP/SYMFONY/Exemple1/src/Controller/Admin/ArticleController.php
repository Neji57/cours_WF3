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
	 * @Route("/{page}", requirements={"page" = "\d+"}, defaults={"page"=1})
	 */
	public function index($page)
	{
		$count = 10;
		$em = $this->getDoctrine()->getManager();
		$entities = $em->getRepository(Article::class)->findByPage($page, $count);
		$nbPages = ceil(count($entities) / $count);
		return $this->render('admin/article/index.html.twig', array(
			'entities' => $entities,
			'nbPages' => $nbPages,
			'page' => $page,
		));
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
	public function edit(Request $request, Article $article)
	{
		// Création du formulaire
		$form = $this->createForm(ArticleType::class, $article);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
				// Sauvegarde dans la BDD
			$article->setDateUpdate(new \DateTime);
			$em = $this->getDoctrine()->getManager();
			$em->persist($article);
			$em->flush();
		}

		return $this->render('admin/article/edit.html.twig', array(
			'form' => $form->createView(),
		));
	}

	public function delete(Request $request, Article $article)
	{
			$form = $this->createFormBuilder()
				->setAction($this->generateUrl('app_admin_article_delete', ['id' => $article->getId()]));
	}
}
