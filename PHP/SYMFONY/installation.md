# Instalation SYMFONY

## Ouvrir le terminal

### Créer un nouveau projet
*(Cette commande cela va créer un dossier avec le nom de votre projet)*
```
composer create-project symfony/website-skeleton 'nom-de-votre-projet'
```


### Déplacez vous dans le dossier de votre projet
*(Cette commande va permettre au terminal en cours de pointer sur le dossier du projet)*
```
cd nom-de-votre-projet
```


### Installer le service
*(Cette commande installera tous les services indispensables)*
```
composer require symfony/web-server-bundle --dev
```


### Démarrer le serveur propre à SYMFONY
```
php bin/console server:run
```

### Installer la barre de debug
```
composer require --dev profiler
```

### Installer les annoatations
*(Cette commande permet d'éviter les switch entre le dossier "config/routes" et "src/controller")*
*(ajouter le use dans le controller (use Symfony\Component\Routing\Annotation\Route;))*
```
composer require annotations -vvv
```

### Installer le moteur de template TWIG
```
composer require twig
```
*(crée le dossier template)*
*(faire un extends dans la classe du controller(extends Controller) et ajouter le use
```php
(use Symfony\Bundle\FrameworkBundle\Controller\Controller;)
```
pour afficher une page)*

### Installer ENCORE
*ENCORE est le composant symfony qui gère le scss et le js dans dossier assets*
```
composer require encore
```
---

### Installation de BREW
*Homebrew installe ce dont vous avez besoin et qu’Apple n’a pas installé.*
*taper la commande suivante pour installer BREW*
```
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

### Installation de YARN
*(Yarn met en cache chaque package installé afin de ne plus avoir à les télécharger.)*
*taper la commande suivante pour installer YARN*
```
brew install yarn
```
---

Activation du CSS et du JS
--
* dans le fichier webpack.config.js

+ décommenter les lignes
	```js
	.addEntry('js/app', './assets/js/app.js')
	.addStyleEntry('css/app', './assets/css/app.scss')
	.enableSassLoader() 	(pour activer le compilateur sass)
	```
+ renommer la ligne du dessus en
	```
	.addStyleEntry('css/app', './assets/scss/app.scss')
	```

+ dans le dossier ASSESTS créer un dossier->scss puis un fichier app.scss
+ dans le dossier ASSESTS créer un dossier->js puis un fichier app.js
---

### Installation de SASS
*pré-processeur Sass, installation des dépendances*
```
yarn add --dev sass-loader node-sass
```

### Installation de LESS
*pré-processeur Less, installation des dépendances*
```
yarn add --dev less-loader less
```


### Lancer la compilation
*le compilateur lancé, il surveille les fichier js et scss dans le dossier ASSETS pour les compiler dans le dossier PUBLIC/BUILD*
```
yarn run encore dev --watch
```

### Pour lier le CSS anisi que le JS au template, asset va le gérer
*taper la commande suivante*
```
composer require asset
```
- Il faudra à l'avenir écrire les liens de cette façon dans les fichier .html.twig:
	```php
	pour le css :  href="{{asset('build/css/app.css')}}"
	pour le js :  scr="{{asset('build/js/app.js')}}"
	```

### Installer BOOTSTRAP
```
yarn add bootstrap --dev
```
- Importer bootstrap dans le fichier app.css*
	```scss
	@import "~bootstrap/scss/bootstrap";;
	```

### Installer JQUERY
```
yarn add jquery --dev
```
- dans le fichier webpack.config.js décommenter la ligne suivante :
```
.autoProvidejQuery()
```

### Installer popper
```
yarn add popper.js --dev
```

### Installer webpack (à jour)
```
yarn add --dev webpack
```
