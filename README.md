# E-Commerce Platform

Une plateforme de commerce électronique qui permet aux utilisateurs de naviguer, rechercher et acheter des produits en ligne.

## Technologies utilisées

- **Backend** : PHP
- **Frontend** : HTML, CSS, JavaScript, Bootstrap
- **Base de données** : MySQL

## Fonctionnalités principales

- **Affichage des produits** : Liste des produits avec images, descriptions et prix.
- **Panier d'achat** : Ajout et suppression de produits dans le panier.
- **Système d'authentification** : Connexion et inscription sécurisées.
- **Gestion des commandes** : Passation de commandes et visualisation de l'historique.

## Installation

1. **Cloner le dépôt** :
   ```bash
   git clone https://github.com/mohammed-adachi/E_commerce_platform.git
2-
cree un database: storess 
- crer un table items qui son colonnes :id ,name price
autre table users  qui son colonnes: `id`, `name`, `email`, `password`, `contact`, `city`, `address`
apres  jointure table users_items`:`id`, `user_id`, `item_id`, `status`

3- commande pour runing cet projet  php -S localhost:8000
