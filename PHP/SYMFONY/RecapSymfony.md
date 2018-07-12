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
-	 [Form builder](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#form-builder)
-	 [Types de champs](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#types-de-champs)
-	 [Formulaires imbriqués](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#formulaires-imbriqu%C3%A9s)
-	 [Les collections](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#les-collections)
-	 [Création dans un controller](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#création-dans-un-controller)
- [Les services](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#les-services)
	- [Lien]()
	- [Lien]()
	- [Lien]()
- [Lien]()
- [Lien]()

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
---
### Types de champs

---
### Formulaires imbriqués

---
### Les collections

---
### Création dans un controller

---
## Les services