# TO DO 01 février 

L'objectif est de transformer cet exercice et au lieu d'utiliser des tableaux, utiliser des objets.

## Etapes
- créer un nouvelle branche nommée enmodeobjet
  faire git branch enmodeobjet sur le terminal
  
- travailler depuis cette branche
  pour aller sur cette nouvelle branche je fais gitcheckout enmodeobjet
  je check avec git branch (la enmodeobjet branch est en vert)
  au premier push, on va avoir un soucis car la branche n'est pas crée à distance donc faire la commande précisée sur le terminal


- créer un dossier classes dans le dossier inc
  

- créer une classe Article dans le dossier classes avec les attributs et méthodes dont vous avez besoin




- dans datas.php : transformer le tableau de tableaux $dataArticlesList en un tableau d'objets Article
- créer une classe Data. Cette classe aura 3 propriétés :    $articlesList,
$authorsList, $categoriesList.
Cette classe permet d'instancier des objets dont les méthodes vont permettre : d'obtenir un tableau contenant des objets / un tableau des catégories / un tableau des auteurs.
- modifier vos templates pour utiliser vos objets.


# OLD

## Code fourni

- l'intégration HTML/CSS bien moche est faite
- y'a rien qui marche et tout est en dur :expressionless:

## Etapes 

1) faire déjà en sorte que ce qui existe s'affiche sur notre fichier point d'entrée

2) à la racine du projet, créer les fichiers :
- category.php => page listant toutes les catégories. 
- author.php => page listant tous les auteurs.
- article.php => page affichant un article. Dans un premier temps, faites simplement un affichage de "Je suis un article".

3) dans le dossier correspondant au template :
- créer un fichier de template par page
- faites le html nécessaire

4) dans les fichiers racines
- inclure les données nécessaires pour le bon fonctionnement du code
- afficher le code HTML grâce aux templates 
- vérifier l'affichage correct des 3 nouvelles pages et les intégrer à la navigation
#   E X O _ D A T A _ M V C _ O B J E T _ M O D E L E - M A T H I L D E  
 #   E X O _ D A T A _ M V C _ O B J E T _ M O D E L E - M A T H I L D E  
 