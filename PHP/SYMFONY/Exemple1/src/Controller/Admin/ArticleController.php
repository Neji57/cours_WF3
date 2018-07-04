<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
	public function index()
	{
		var_dump('OK');
		return $this->render('admin/article/index.html.twig');
	}
}
