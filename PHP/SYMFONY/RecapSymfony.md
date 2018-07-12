# Recap Symfony

- [Installation](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#installation)
- [Entité](https://github.com/Neji57/cours_WF3/blob/master/PHP/SYMFONY/RecapSymfony.md#entit%C3%A9)
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

## Entité