<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{
	/**
	 *
	 * @Route ('/admin/article')
	 */
	public function index()
	{
		return $this->render('admin/article/index.html.twig');
	}

	/**
	 *
	 * @Route ('/admin/article')
	 */
	public function new()
	{
		return $this->render('admin/article/new.html.twig');
	}
}
