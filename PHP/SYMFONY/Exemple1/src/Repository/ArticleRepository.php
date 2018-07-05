<?php

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Article;
use Doctrine\ORM\Mapping\OrderBy;

class ArticleRepository extends ServiceEntityRepository
{
	public function __construct(RegistryInterface $registry)
	{
		parent::__construct($registry, Article::class);
	}

	public function findByPage($page = 1, $count = 10)
	{
		$first = ($page - 1) * $count;
		$queryBuilder = $this->createQueryBuilder('a')
			->OrderBy('a.dateCreate', 'ASC')
			->setFirstResult($first)
			->setMaxResults($count)
		;
	}
}
