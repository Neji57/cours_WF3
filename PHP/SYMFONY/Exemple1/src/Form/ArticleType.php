<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\ORM\EntityRepository;
//use Symfony\Component\Form\Extension\Core\Type\CountryType;

class ArticleType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('title', null, array(
				'label' => 'Titre'
			))
			->add('category', null, array(
				'label' => 'category.category',
				'expanded'=>true,
				'required'=>true,
				'query_builder'=>function(EntityRepository $er){
					return $er->createQueryBuilder('c')
						->orderBy('c.name', 'ASC');
				},
			))
			->add('content', null, array(
				'label' => 'Contenu',
				'attr' => array(
					'class' =>'tinymce',
				)
			))
			// ->add('country', CountryType::class, array(
			// 	'mapped' =>false,
			// ))

		;
	}
}