# Recap Symfony

- [Installation](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#installation)
- [Structure du projet](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#structure-du-projet)
- [Entité](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#entit%C3%A9)
- [Controller](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#controller)
- [Projet]()

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

### WebPack Encore

Encore est un module de Symfony pour faciliter l'intégration de WebPack dans un projet.

WebPack est une bibliothèque qui va interpréter et *minifier* automatiquement les fchiers SCSS et JS. Il assemble plusieurs fichiers *assets* en un seul

- Commandes pour créer les fichiers publiques
```
npm run dev             (Plus rapide et ne minifie pas les fichiers CSS/JS)
npm run build           (Plus complet et minifie les fichiers pour la fin du projet)
npm run watch           (analyse les changements à chaque sauvegarde de fichier)
```

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

### Relations

Les relations permettent de faire des clés étrangères dans le BDD

- Une seule image peut être associé à un seul article
```php
/**
 * @ORM\OneToOne(targetEntity="App\Entity\Image", cascade="all", orphanRemoval=true)
*/
private $image
```

- Plusieurs articles peuvent être associés à une seule catégorie
```php
/**
 * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
*/
private $category
```

- Relation inverse *(Obtenir les articles d'une catégorie)*
```php
/**
 * @ORM\OneToMany(targetEntity="Article", mappedBy="Category")
*/
private $articles // Type ArrayCollection
```

- *(Plusieurs objets peuvent être associésà plusieurs autres)*
```php
/**
 * @ORM\ManyToMany(targetEntity="User", inversedBy="articles")
*/
```

### Cycle de vie

## Controller

### Routes