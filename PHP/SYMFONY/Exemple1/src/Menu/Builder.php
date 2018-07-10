<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;

class Builder
{
	private $factory;

	public function __construct(FactoryInterface $factory)
	{
		$this->factory = $factory;
	}

	public function createAdminMenu()
	{
		$menu = $this->factory->createItem('root');
		$menu->setChildrenAttribute('class', 'navbar-nav');

		$articleParent = $menu->addChild('article.article', ['route' => 'app_admin_article_index']);
		$articleParent->addChild('article.articles', ['route' => 'app_admin_article_index']);
		$articleParent->addChild('article.add', ['route' => 'app_admin_article_new']);

		$categoryParent = $menu->addChild('category.categories', ['route' => 'app_admin_category_index']);
		$categoryParent->addChild('category.categories', ['route' => 'app_admin_category_index']);
		$categoryParent->addChild('category.add', ['route' => 'app_admin_category_new']);

		$menu->addChild('user.user', ['route' => 'app_article_index']);
		return $menu;
	}

	public function createMainMenu()
	{
		$menu = $this->factory->createItem('root');
		$menu->setChildrenAttribute('class', 'navbar-nav');
		$menu->addChild('article.article', ['route' => 'app_article_index']);
		$menu->addChild('admin.admin', ['route' => 'app_admin_article_index']);
		return $menu;
	}

	public function createUserMenu()
	{
		$menu = $this->factory->createItem('root');
		$menu->setChildrenAttribute('class', 'navbar-nav');
		$menu->addChild('user', ['uri' => '#']);
		$parent->addChild('logout', ['route' => 'fos_user_security_logout']);
		return $menu;
	}


}