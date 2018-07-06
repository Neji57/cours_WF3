<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

use App\Entity\Article;
use App\Form\ArticleType;

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

		if($nbPages < $page)
		{
			$t = $this->get('translator');
			$this->addFlash('danger', $t->transChoice('page_error', $nbPages,  array('%nbPages%' => $nbPages)));
			return $this->redirectToRoute('app_admin_article_index');
		}

		return $this->render('admin/article/index.html.twig', array(
			'entities' => $entities,
			'nbPages' => (int)$nbPages,
			'page' => $page
		));
	}


}
