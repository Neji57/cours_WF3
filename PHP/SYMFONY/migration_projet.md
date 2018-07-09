# Migrer un projet

## Lorsque tu veux migrer un projet ou quand tu le récupère sur github, les fichiers du projet ne sont pas forcément tous présents. il faut entrer quelques commandes pour que tout fonctionne correctement.

## Commandes

Pour installer les modules :
- Ces commandes sont à entrer dans le terminal. elles permettent de télécharger tous les modules qui sont listées dans le fichier package.json du projet.
```
npm install --save-dev
```
```
composer install
```

# Créer une base de données :
Si la base de données n'existe pas encore, il faut la créer :
- Dans le fichier `.env`, modifier la ligne **23** dans l'exemple1 par la ligne suivante :
```
DATABASE_URL=mysql://root@127.0.0.1:3306/Sf_exo
```
- Entre cette commande dans le terminal :
```
php bin/console doctrine:database:create
```

- Si il y a toujours un soucis après ça, il faut faire une mise à jour de la base de données.
- Entre cette commande dans le terminal :
```
php bin/console doctrine:schema:update --force
```

# Compiler le projet

Normalement tu devrais avoir un projet fonctionnel (sans erreurs) cependant, il est possible que les styles et les scripts ne soient pas pris en compte.
- Pour résoudre le problème, il faut compiler le projet. Entre cette commande dans le terminal :
```
npm run build
```