# SYMFONY

- [MEMO](https://github.com/Neji57/cours_WF3/tree/master/PHP/SYMFONY#memo)
- [Liens utiles](https://github.com/Neji57/cours_WF3/tree/master/PHP/SYMFONY#liens-utiles)

## Créer un projet démo de symfony
```
composer create-project symfony/symfony-demo
```

---
## Commandes

- Installer la toolbar Apache :
```
composer require symfony/apache-pack
```
- à la fin, faire yes : `y`.

- Afficher la liste des routes :
```
php bin/console debug:router
```

- Afficher la liste des services :
```
php bin/console debug:autowiring
```
---

- Créer une base de données :
    - Dans le fichier `.env`, modifier la ligne **23** dans l'exemple1 par la ligne suivante :
    ```
    DATABASE_URL=mysql://root@127.0.0.1:3306/Sf_exo
    ```
    - Dans le terminal :
    ```
    php bin/console doctrine:database:create
    ```

    - Mettre à jour la base de données :
    ```
    php bin/console doctrine:schema:update --force
    ```
---

- Installer fontawesome :
    - dans le terminal :
    ```
    npm i @fortawesome/fontawesome-free-webfonts --save-dev
    ```

    - dans `assets` trouver le fichier CSS ou SCSS et coller ces deux lignes dispo aussi [ici](https://www.npmjs.com/package/@fortawesome/fontawesome-free-webfonts) puis faire `npm run dev`
    ```scss
    @import "~@fortawesome/fontawesome-free-webfonts/scss/fa-solid.scss";
    @import "~@fortawesome/fontawesome-free-webfonts/scss/fontawesome.scss";
    ```
---

- Lorsque l'on fait des modifications dans le dossier `assets`, pour que les changements prennent effet il faut rentrer cette commande dans le terminal :
```
npm run dev
```

- Mettre à jour les bibliothèques (Fontawesome par exemple) :
```
npm update
```

- Lancer le serveur proposé par Symfony (Avantage : les liens ressemblent à ceux de la prod)
```
php bin/console server:run
```

- Compiler son projet:
```
npm run dev             (Plus rapide et ne minifie pas les fichiers)
npm run build           (Plus complet et minifie les fichiers pour la fin du projet)
npm run watch           (analyse les changements à chaque sauvegarde de fichier)
```

- Nettoyer le cache :
```
php bin/console cache:clear
```

- Statut des traductions
```
php bin/console debug:translation fr
```

- Créer un Entity automatiquement
```
php bin/console make:entity
```

- Créer une categorie de formulaire
```
php bin/console make:form
```

- Installer le bundle friendsofsymfony
```
composer require friendsofsymfony/user-bundle
```

- Créer un utilisateur en base de données
```
php bin/console fos:user:create
```

- Créer un utilisateur qui as déjà les droits super admin
```
php bin/console fos:user:create --super-admin
```

- upgrade d'un utilisateur en super admin
```
php bin/console fos:user:promote

    ensuite choisir l'utilisateur et entrer son role

    Please choose a username:Picobuu
    Please choose a role:ROLE_SUPER_ADMIN
```
---

Si erreur ci-dessous :

```
Error: Encore.setOutputPath() cannot be called yet because the runtime environment doesn't appear to be configured. Make sure you're using the encore executable or call Encore.configureRuntimeEnvironment() first if you're purposely not calling Encore directly.
```
-  Dans `webpack.config.js`, ajouter cette partie en dessous de `Encore` :
```js
.configureRuntimeEnvironment('dev')
```

BUNDLE SYMFONY
(aide à faire des menus)
```
composer require knplabs/knp-menu-bundle
```

---
## MEMO

### Twig

Tester si l'utilisateur est connecté
```php
{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
{% endif %}
```

### Installation
```
git add *
git commit -m "Update"
git push origin master
```

Via composer (gestionnaire de bibliothèques externes). `symfony/website-skeleton` peut être remplacé par un lien de dépot git.

```
composer create-project symfony/website-skeleton NomDuProjet
```

### Dossiers

- **ASSETS** : fichiers JS/CSS
- **BIN** : fichiers binaire tel que la console
- **CONFIG** : fichiers de configuration des modules (version Symfony < 4 : un seul fichier `config.yml`)
- **PUBLIC** : contient `index.php` et les fichiers statiques créés par *WebPack*
- **SRC** :  tout le code source de l'application
- **TEMPLATES** : contient toutes les vues (fichiers **Twig**)
- **TESTS** : fichiers pour les tests unitaires
- **TRANSLATIONS** : fichiers de traduction (version Symfony < 4 : les vues sont dans le dossier `Ressource/Views` des Bundle)
- **VAR** : contient le cache et les fichiers log
- **VENDOR** : bibliothèques externes à notre application (comme Doctrine, Twig, SwiftMailer, etc)

### Webpack

Webpack permet de condenser tous les fichiers assets dans un seul. Par exemple, tous les fichiers JavaScript sont minifiés et placés dans un seul fichier.

Pour installer les modules

```
npm install --save-dev
```

### Annotations

Les annotations sont des instructions définies dans un commentaire doc. Elles permettent de définir des paramètres rapidement sans aller dans les fichiers config. Par exemple pour définir les routes dans un controller :

```php
/**
* @Route("/chemin/de/la/route")
*/
```

Avec paramètres :
```php
/**
* @Route("/edit/{id}", requirements={"id":"\d+"})
*/
```

Définir l'entité
*(annotation à mettre au dessus de la déclaration de classe)*
```php
/**
 * @ORM\Entity(repositoryClass="namespace\de\la\classe")
 * @ORM\table(name="nom_de_la_table")
*/
```

Définir une colonne
```php
/**
 * @ORM\Column(name="nom_du_champ", type="string | text | integer | float | datetime | json_array", nullable=true length=255)
*/
```

Définir une relation
- *(Un seul objet peut être associé à un seul autre)*
```php
/**
 * @ORM\OneToOne(targetEntity="namespace\de\la\classe")
*/
```

- *(Plusieurs objets peuvent être associés à un seul autre)*
```php
/**
 * @ORM\ManyToOne(targetEntity="namespace\de\la\classe")
*/
```

- *(Un seul objet peut être associé à unplusieurs autres)*
```php
/**
 * @ORM\OneToMany(targetEntity="namespace\de\la\classe")
*/
```

- *(Plusieurs objets peuvent être associésà plusieurs autres)*
```php
/**
 * @ORM\ManyToMany(targetEntity="namespace\de\la\classe")
*/
```

- Pour faire une relation ManyToMany avec paramètres, il faut créer une entité intermédiaire

- Pour faire une relation ManyToMany avec paramètres, il faut créer une entité intermédiaire

```php
// Panier
/**
 * @ORM\OneToMany(targetEntity="PanierProduit")
*/
private $panierProduits

// PanierProduit
/**
 * @ORM\OneToMany(targetEntity="Panier")
*/
private $panier

/**
 * @ORM\OneToMany(targetEntity="Produit")
*/
private $roduit

// Produit
/**
 * @ORM\OneToMany(targetEntity="PanierProduit")
*/
private $panierProduits
```

### Lifecycle

Il est possible d'appeler automatiquement les méthodes d'une entité. Par exemple avant de faire un persist
Avant la déclaraton de la classe :
```php
/**
 * @ORM\HasLifecycleCallbacks
 */
```
*Quand ils sont mis au dessus d'une méthode, le fait d'appeler une commande percist va autimatiquement appeler la méthode sur laquelle il y a une des commandes suivantes*
```php
/**
 * @ORM\PrePersist()
 * @ORM\PreUpdate()
 * @ORM\PreRemove()
 * @ORM\PostPersist()
 * @ORM\PostUpdate()
 * @ORM\PostRemove()
 */
```
```php
/**
 * @ORM\HasLifecycleCallbacks
 */
```


---
## Ajax

Pour retourner un JSON dans un controlleur
```
use Symfony\component\HttpFoundation\JsonResponse
.
.
return new JsonResponse(array(...))
```

Pour tester si la requête est en Ajax
```
if ($request->isXmlHttpRequest()){
    ...
}
```

---
## Liens utiles

- [OPENCLASSROOMS - Développez votre site web avec le framework Symfony](https://openclassrooms.com/courses/3619856-developpez-votre-site-web-avec-le-framework-symfony)
- [SYMFONY - Querying for Objects: The Repository](http://symfony.com/doc/current/doctrine.html#querying-for-objects-the-repository)