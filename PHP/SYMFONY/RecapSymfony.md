# Recap Symfony

- [Installation](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#installation)
	- [Nouveau projet](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#nouveau-projet)
- [Structure du projet](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#structure-du-projet)
	- [Dossiers](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#dossiers)
	- [WebPack Encore](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#webpack-encore)
- [Entité](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#entité)
	- [Création](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#création)
	- [Relations](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#relations)
	- [Cycle de vie](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#cycle-de-vie)
- [Controller](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#controller)
	- [Routes](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#routes)
	- [Param converter](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#param-converter)
	- [L'objet Request](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#lobjet-request)
	- [Les objets Response](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#les-objets-response)
- [Repository](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#repository)
	- [Ecrire une requête](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#ecrire-une-requête)
	- [L'objet Paginator](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#lobjet-paginator)
	- [Appel dans un controller](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#appel-dans-un-controller)
	- [Sauvegarder et supprimer des entités]()
- [Formulaire](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#formulaire)
	- [Form builder](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#form-builder)
	- [Types de champs](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#types-de-champs)
	- [Formulaires imbriqués](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#formulaires-imbriqu%C3%A9s)
	- [Les collections](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#les-collections)
	- [Création dans un controller](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#création-dans-un-controller)
- [Les services](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#les-services)
	- [Principe](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#principe)
	- [Quelques services utiles](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#quelques-services-utiles)
- [Twig](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#twig)
	- [Commandes de base](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#commandes-de-base)
	- [Les blocks](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#les-blocks)
	- [Les formulaires](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#les-formulaires)
	- [Filtres](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#les-filtres)
	- [Traduction](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#traduction)
	- [Extensions](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#extensions)
- [Quelques erreurs](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#quelques-erreurs)

## Installation

### Nouveau projet

- Via composer
```
composer create-project symfony/website-skeleton NomDuProjet
```

- Projet existant sur Git
```
git clone http://github.com/projet
```

- Pour installer et mettre à jour les bibliothèques PHP
```
composer install
composer update
```

- Pour installer les bibliothèques CSS/JS
```
npm install
```
---
## Structure du projet

### Dossiers

Contenu des dossiers:

- `assets` contient tous les fichiers SCSS/JS du projet
- `bin` contient la console
- `config` contient les fichiers *yaml* de configuration du projet, le dossier contient également les configs de bibliothèques externes
- `node_modules` contient toutes les bibliothèques CSS/JS
- `public` contient le fichier *index.php* (dossier web Sf V < 4)
- `src` contient tous les fichiers sources *php* de l'application
- `templates` contient toutes les vues *twig*
- `tests` contient les fichiers de tests *PHPUnit*
- `translations` contient les traductions de l'application
- `vendor` Contient les bibliothèques *php* externes
---
### WebPack Encore

Encore est un module de Symfony pour faciliter l'intégration de WebPack dans un projet.

WebPack est une bibliothèque qui va interpréter et *minifier* automatiquement les fchiers SCSS et JS. Il assemble plusieurs fichiers *assets* en un seul

- Commandes pour créer les fichiers publiques
```
npm run dev             (Plus rapide et ne minifie pas les fichiers CSS/JS)
npm run build           (Plus complet et minifie les fichiers pour la fin du projet)
npm run watch           (analyse les changements à chaque sauvegarde de fichier)
```
---
## Entité

Les entités *(Entity)* sont des objets stockés dans la BDD, ces fichiers se trouvent dans src/entity

*1 table = 1 entité*

### Création

- Pour créer une nouvelle entité:
```
php bin/console make:entity
```

 - Pour créer la base de données
    ```
    php bin/console doctrine:database:create
    ```

La BDD est définie par des annotations *(Instructions dans les commentaires)*

- Pour définir une colonne
```php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Column(name="nom_du_champ", type="string | text | integer | float | datetime | json_array", nullable=true length=255)
*/

private $nomDuChamp;
```

- Mettre à jour la base de données :
```
php bin/console doctrine:schema:update --force
```
---
### Relations

Les relations permettent de faire des clés étrangères dans le BDD

- Une seule image peut être associé à un seul article
```php
/**
 * @ORM\OneToOne(targetEntity="App\Entity\Image", cascade="all", orphanRemoval=true)
*/
private $image;
```

- Plusieurs articles peuvent être associés à une seule catégorie
```php
/**
 * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
*/
private $category;
```

- Relation inverse *(Obtenir les articles d'une catégorie)*
```php
/**
 * @ORM\OneToMany(targetEntity="Article", mappedBy="Category")
*/
private $articles; // Type ArrayCollection
```

- Plusieurs articles peuvent être associésà plusieurs utilisateurs
```php
/**
 * @ORM\ManyToMany(targetEntity="User", inversedBy="articles")
*/
private $users;
```

- Relation inverse *(Tous les articles d'un utilisateur)*
```php
/**
 * @ORM\ManyToMany(targetEntity="Article", inversedBy="users")
*/
private $articles;
```

- Plusieurs produits dans plusieurs paniers avec des paramètres

```php
// Entity Panier
/**
 * @ORM\OneToMany(targetEntity="PanierProduit", mappedBy="panier")
*/
private $panierProduits

// PanierProduit
/**
 * @ORM\OneToMany(targetEntity="Panier", inversedBy="panierProduits")
*/
private $panier

/**
 * @ORM\OneToMany(targetEntity="Produit", inversedBy="panierProduits")
*/
private $roduit

// Produit
/**
 * @ORM\OneToMany(targetEntity="PanierProduit", mappedBy="produit")
*/
private $panierProduits
```

- Comportement de l'article lors de la suppression d'une categorie

	*Mets l'attribut à `null` si la catégorie est supprimée*
```php
// Entity Article
/**
 * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
 * @ORM\JoinColumn(onDelete="SET NULL")
*/
private $category;
```
---
### Cycle de vie

Permet à Doctrine d'appeler automatiquement des méthodes de l'entité lors d'une action (`persist` ou `remove`)

- Avant la déclaration de la classe :
```php
/**
 * @ORM\HasLifecycleCallbacks
*/
```
*Quand ils sont mis au dessus d'une méthode, le fait d'appeler une commande percist va autimatiquement appeler la méthode sur laquelle il y a une des commandes suivantes :*
```php
/**
 * @ORM\PrePersist()
 * @ORM\PreUpdate()
 * @ORM\PreRemove()
 * @ORM\PostPersist()
 * @ORM\PostUpdate()
 * @ORM\PostRemove()
 */
public function prePercist() {...}
```
---
## Controller

Les controllers sont les classes qui vont être utilisées lors de l'appel d'une route, ils sont stockés dans le dossier `src/controller`

### Routes

pour définir un préfixe pour toutes les routes d'un controller :

*mettre avant la déclaration de la class :*
```php
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/prefixe/article/")
 */
class ArticleController extends Controller
```

*Avant la déclaration d'une méthode :*
```php
/**
 * @Route("/new")
 */
public function new()
{
	# code ...
}
```

*Pour définir des paramètres :*
```php
/**
 * @Route("/edit{id}", requirements={"id" = "/d+"})
 */
public function edit($id)
{
	# code ...
}
```

*Valeur par défaut :*
```php
/**
 * @Route("/list/{page}", requirements={"page" = "/d+"}, defaults={"page=1"})
 */
public function liste($page)
{
	# code ...
}
```

- Afficher la liste des routes de l'application :
```
php bin/console debug:router
```
---
### Param converter

Il permet de nous envoyer les types demandés dans une méthode d'un controller
```php
/**
 * @Route("/edit{id}", requirements={"id" = "/d+"})
 */
public function edit(Article $article)
{
	# code ...
}
```

*Le param converter retourne automatiquement un objet Article en fonction de son id.*
```php
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
/**
 * @Route("/show{id}", requirements={"id" = "/d+", "comment" = "/d+"})
 * @Entity("comment", expr="repository.find(comment_id)")
 */
public function show(Article $article, Comment $comment)
{
	# code ...
}
```
---

### L'objet Request

L'objet Request permet d'obtenir des informations sur la requête client `(POST/GET ...)`
```php
use Symfony\Component\HttpFoundation\Request;

public function new(Request $request)
{
	# code ...
}
```

- Pour hydrater un formulaire à partir des données `$_POST`
```php
$form->handleRequest($request);
```

- Pour récupérer les valeure de la requête`
```php
$post = $request->request->get('nom', 'valeur par defaut'); // $_POST['nom']
$get = $request->query->get('nom'); // $_GET['nom']
```

- Tester si la requête est en `AJAX`
```php
if ($request->isXmlHttpRequest) {
	# Code ...
}
```
---

### Les objets Response

Une action d'un controller doit toujours retourner un objet de type Response

*Retourner une réponse qui contient une vue `Twig`*
```php
return $this->render('chemin/de/la/vue.html.twig', array(
	'param1' => $param1,
	'param2' => $param2,
));
```

*Retourner une redirection*
```php
return $this->redirectToRoute('nom_de_la_route');
return $this->redirect('lien');
```

*Retourner une reponse `JSON`*
```php
use Symfony\Component\HttpFoundation\JsonResponse;
return new JsonResponse(array(
	'donnee1' => $donnee1,
	'donnee2' => $donnee2,
))
```
---
## Repository

Le repository contient les requêtes d'une entité (1 entité = 1 repository)

### Ecrire une requête

```php
public function findByName($name)
{
	$qb = $this->createQueryBuilder('a') // Alias de l'objet
		->where('a.name = :name')
		->setParameter('name' = $name)
	;

	return $qb->getQuery()->getResult();
}
```
Quelques méthodes
```php
->where('e.value = :value')
->andWhere(...)
->orWhere(...)
->orderBy('e.id', 'ASC|DESC')
->setMaxResults(10) // LIMIT
->setFirstResults(0) // OFFSET
->leftJoin('e.objet', 'o')
->distinct()
->groupBy('e.val')

// Resultats
->getResult();
->getOneResult();
->getOneOrNullResult();
->getScalarResult(); // ->select('COUNT(e)')
```
---

### L'objet Paginator

Objet pour gérer une pagination,  retourne les entités d'une page et le nombre total d'entités.
```php
use Doctrine\ORM\Tools\Pagination\Paginator;

return new Paginator($querybuilder)
```
---
### Appel dans un controller

Il faut  d'abord récupérer l'entity manager puis appeler le repository de l'entité
```php
$em = $this->getDoctrine()->getManager();
$articleRepository = $em->getRepository(Article::class);
$aricles = $articleRepository->findByName('nom');
```
### Sauvegarder et supprimer des entités
```php
$em->persist($article) // Persist d'une entité
//Persist = prépare une requête
$em->remove($article); // Supprime
$em->flush(); // Execute les requêtes
```
---
## Formulaire

Les formulaires d'entité sont dans des classes à part dans le dossier `src/form`, elles sont nommées avec le suffixe `"type"`(ArticleType)

### Form builder

- Pour c'éer un formulaire :
```
php bin/console make:form
```

Dans une classe de formulaire, une méthode buildForm doit être implémentée.
```php
public function buildForm(FormBuilderInterface $builder, array $option)
{
	# code ...
}
```

On ajoute avec la méthode `add`de l'objet builder
```php
$builder->add('name', null, array(
	'label' => 'label.traduction',
	'required' => false,
));
```


---
### Types de champs

*Type select*
```php
use Symfony\Component\Form\Extension\Core\Type\TextType;

$builder->('status', ChoiceType::class, array(
	'label' => 'article.status',
	'choices' => array(
		'article.status_actif' => 'active',
		'article_status_draft' => 'inactive',
	)
	'multiple' => false,
	'expanded' => true, // Affichage bouton radio ou select
));
```

*Type entité, pour une relation ManyToOne*
```php
$builder->('categorie', Entity::class, array(
	'class' => 'category.class',
	'choice.label' => 'name', // Attribut de ma catégorie à afficher
	'query_builder' => function (EntityRepository $er) {
		return $er->createBuilder('c')
			->orderBy('c.name', 'ASC');
	}
));
```
---
### Formulaires imbriqués

Pour ajouter un formulaire dans un autre (modifier deux entités), par exemple un formulaire adresse dans un formulaire client.

```php
$builder->add('address', AddressType::class);
```

Ne pas oublier l'attribut cascade dans la relation
```php
/**
 * @ORM\OneToOne(targetEntity="Address", cascade="all")
*/
```
---
### Les collections

[DOC SYMFONY](http://symfony.com/doc/current/reference/constraints/Collection.html)

```php
$builder->add('gallery', CollectionType::class, array(
	'entry_type' => image::class,
));
```

-  Pour créer un nouveau formulaire dans le controller
**Pour créer un nouveau formulaire dans un controller:**
```php
$form = $this -> createForm(ArticleType::class, $article); // $article = entité Article
$form -> handleRequest($request);

if($form -> isSubmitted() && $form -> isValid()) { /*...*/ }
```

---
### Création dans un controller

-  Pour créer un nouveau formulaire dans le controller
```php
$formBuilder = $this->createFormBuilder()
	->setAction('action')
	->setMethod('POST') // DELETE|PUT
	->add('champ', TextType::class)
;
$form = $formBuilder->getForm();
));
```

---
## Les services
```
Vide...
```
---
### Principe
```
Vide...
```
---
### Quelques services utiles
```
Vide...
```
---
## Twig

- [DOC OFFICIELLE](https://twig.symfony.com/doc/2.x/)
- [DOC `{{ loop }}`](https://twig.symfony.com/doc/2.x/tags/for.html)

Twig est un moteur de templates. Il propose un language simplifié spécialement pour faire du front.

### Commandes de base
```twig
{# Condition #}

{% if var == 1 %}
{% else %}
{% endif %}

{# Test si une variable est définie #}
{% if is var is defined %}
{% endif %}

{# Négation #}
{% if var is not defined %}
{% endif %}

{# Boucle (foreach) #}
{% for entity in entities %}
{% endfor %}

{% for entity in entities if entity.active %}
    {# Permet de selectionner le 1er ou dernier item #}
    {{ loop.first }}
    {{ loop.last }}
    {# Donne l'index à partir de 1 #}
    {{ loop.index }}
    {# Donne l'index à partir de 0 #}
    {{ loop.index0 }}
{% endfor %}

{# Faire une boucle de 0 à 10 #}
{% for 0..10 %}
{% endfor %}
```

Débogger une variable
```twig
{{ dump(variable) }}
```
---
### Les blocks
Les blocks permettent de faire de l'héritage de vue et de surcharger des parties de la vue parente.
```twig
{# base.html.twig #}
<header>
</header>
<div class="content">
	{% block content %}
	{% endblock %}
</div>
<footer>
</footer>

{# accueil.html.twig #}
{% extends 'base.html.twig' %}
{% block content %}
	Contenu de la page
{% endblock %}
```

- Pour afficher le contenu d'un bloc parent
```twig
{% block content %}
	{{ parent() }}
{% endblock %}
```

---
### Les formulaires

```twig
{{ form(nomDuForm) }}

{{ form_start(nomDuForm) }}

    {{ form_errors(nomDuChamp) }} {# affiche les erreurs globales (évite qu'elles soient en bas) #}
    {{ form_row(nomDuForm.name) }} {# affiche juste le champ name #}

{{ form_end(nomDuForm) } {# affiche tous les autres champs et le </form> #}
```

**Mettre le bouton submit directement en HTML**
---
### Les filtres

Permettent de transformer une chaîne ou une valeur

```twig
{{ 'MaChaine'|lower }} {# 'machaine' #}
{{ entity.date|date('d/m/Y') }} {# 01/01/2001 #}
{{ '<b>Texte</b>'|raw }} {# permet d'interpréter l'HTML #}
```
### Traduction

**Dans notre Vue:**
```twig
{{ 'article.name'|trans }}
{{ 'article.msg'|trans({"%name%" : entity.name}) }}
{{ 'article.counter'|transchoice(count, {"%counter%" : count}) }}
```
**Dans le fichier `messages.fr.yaml`:**

```yaml
article:
    name: Nom de l'article
    msg: L'article %name% est ajouté
    counter: Il y a %counter% article|Il y a %counter% articles # 1ère version
    counter: Il y a zero ou un article|Il y a plusieurs articles # 2nd version
    counter: "{0} Il n'y a pas d'article|{1} Il y a 1 article|[2, Inf[ Il y a %counter% articles" # 3ème version
```

```php
$t = $this -> get('translator');
$t -> trans('chaine', array());
$t -> transChoice('chaine', $count, array());
```

Dans le PHP
```php
$t = $this->get('translator');
$t->trans('chaine', array());
$t->transChoice('chaine', $count, array());
```
---
### Extensions
**Faire une exension :**
```
php bin/console make:twig-extension
```
---
## Quelques erreurs

- `Must be an instance of` : soit il vous manque un **`use`** soit l'**espace de nom** à mal été écrit
- `Not contains valid YAML` : l'**indentation** n'est sûrement pas bonne ou deux paramètres ont un **nom identique**
- `Could not convert to string` : on essaie d'afficher un objet, il **manque** la méthode magique `__toString()`

