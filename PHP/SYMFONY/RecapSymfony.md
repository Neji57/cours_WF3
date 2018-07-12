# Recap Symfony

- [Installation](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#installation)
- [Structure du projet](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#structure-du-projet)
- [Entité](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#entit%C3%A9)
- [Controller]()
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


### Relations

### Cycle de vie

## Controller

### Routes