# MyMusic

MyMusic est un site web Symfony permettant la gestion d'une bibliothèque musicale. Il offre des fonctionnalités d'ajout, de suppression et de modification d'artistes, d'albums et de morceaux de musique.

## Prérequis

- PHP 8.1 ou supérieur
- Composer
- Symfony CLI
- MySQL ou autre système de gestion de base de données compatible

## Installation

1. Clonez ce dépôt sur votre machine locale :

```
git clone https://github.com/Melanie-devv/MyMusic.git
```

2. Naviguez vers le répertoire du projet :

```
cd MyMusic
```

3. Installez les dépendances avec Composer :

```
composer install
```

4. Configurez les paramètres de la base de données dans le fichier `.env` ou `.env.local`.

5. Créez la base de données :

```
php bin/console doctrine:database:create
```

6. Exécutez les migrations pour créer les tables :

```
php bin/console doctrine:migrations:migrate
```

7. (Optionnel) Chargez les données de démonstration :

```
php bin/console doctrine:fixtures:load
```

8. Démarrez le serveur web Symfony :

```
symfony server:start
```

Vous pouvez maintenant accéder à l'application à l'adresse `http://localhost:8000`.

## Utilisation

- Accédez à la page d'accueil pour voir la liste des artistes, albums et morceaux.
- Connectez-vous avec un compte administrateur pour avoir accès aux fonctionnalités de suppression.
- Utilisez les formulaires pour ajouter, modifier ou supprimer des artistes, albums et morceaux.
- Consultez la documentation Symfony pour plus d'informations sur les commandes et les fonctionnalités avancées.
