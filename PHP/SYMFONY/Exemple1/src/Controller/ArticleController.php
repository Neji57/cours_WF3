<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Entity\ArticleFollow;

/**
 * @Route("/article")
 */

class ArticleController extends Controller
{
	/**
	 * @Route("/{page}", requirements={"page" = "\d+"}, defaults={"page" = 1})
	 */
	public function index($page)
	{
		$count = 10;

		$em = $this -> getDoctrine() -> getManager();

		$entities = $em
			-> getRepository(Article::class)
			->findByPage($page, $count)
		;

		$nbPages = ceil(count($entities) / $count);
		$nbPages = $nbPages == 0 ? 1 : $nbPages;
		if($nbPages < $page)
		{
			$t = $this->get('translator');
			$this->addFlash('danger', $t->transChoice('page_error', $nbPages,  array('%nbPages%' => $nbPages)));
			return $this->redirectToRoute('app_article_index');
		}

		return $this->render('article/index.html.twig', array(
			'entities' => $entities,
			'nbPages' => (int)$nbPages,
			'page' => $page
		));
	}

	/**
	 * @Route ("/show/{id}", requirements={"id" = "\d+"})
	 */
	public function show(request $request, Article $article)
	{
		$formBuilder = $this->createFormBuilder()
			->setAction($this->generateUrl('app_article_follow', ['id' => $article->getId()]))
			->setMethod('POST');

		$form = $formBuilder->getForm();
		$form->handleRequest($request);

		return $this->render('article/show.html.twig', array(
			'entity' => $article,
			'form' => $form->createView(),
		));
	}

	/**
	 * @route("/follow/{id}", requirements={"id" = "\d+"})
	 *
	 */
	public function follow(request $request, Article $article)
	{
		$user= $this->get('security.token_storage')->getToken()->getUser();
		if($request->getMethod() == 'POST' && !is_null($user)) //is_object($user), $user instanceof \App\Entity\User)
		{
			$af = new ArticleFollow();
			$af
				->setArticle($article)
				->setUser($user)
			;

			$em = $this->getDoctrine()->getManager();
			$em->persist($af);
			$em->flush();
		}
		return $this->redirectToRoute('app_article_show', array('id' => $article->getId()));
	}
}
