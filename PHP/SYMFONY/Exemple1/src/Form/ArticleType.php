<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;
use Symfony\ComponentForm\extension\ChoiceType;
//use Symfony\Component\Form\Extension\Core\Type\CountryType;

class ArticleType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('title', null, array(
				'label' => 'Titre'
			))
			->add('categories', null, array(
				'label' => 'category.category',
				'expanded'=>true,
				'required'=>true,
				'query_builder'=>function(EntityRepository $er){
					return $er->createQueryBuilder('c')
						//->where('c.name', 'PHP');
						->orderBy('c.name', 'ASC');
				},
			))
			->add('image', ImageType::class)
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