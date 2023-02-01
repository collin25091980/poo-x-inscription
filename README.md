# Projet - POO x Insciption

![image projet](https://believemy.com/uploads/455ab8f6d9e881ef08f7804e27f25d15_da0e5fa9fa3884137f20517a6952dc6b.png)


## [Qu'allons nous faire dans ce projet ?](https://believemy.com/course/le-programme-rocket/129/1)

## Etape 1 - Téléchargez les fichiers de base

Dans cette première étape, je vous invite à télécharger le code de base [en cliquant ici](https://believemy.com/uploads/cf95414c4a2bf8326d8a42391abfae86_9ce4493c5142e5ee9383d87f016250e1.zip) pour que nous puissions nous concentrer sur le PHP.

Comme d'habitude vous pouvez aussi essayer de recréer ce design par vous-même ou utiliser le votre.

## Etape 2 - Faites toutes les vérifications

Dans cette deuxième étape, nous allons faire **deux** choses :

**Premièrement**, commençons par créer la base donnée (je l'ai appelé **poo**) utilisée par le projet, ainsi que la table **utilisateurs**.

Cette table contient **quatre** colonnes :

-  id - Qui continendra l'identifiant de notre utilisateur (pensez à l'auto-incrémenter)
- pseudo - Le pseudo de notre utilisateur
- email - Son adresse email
- password - Son mot de passe

**Deuxièment**, je vous conseille de commencer à détecter l'envoi du formulaire d'inscription. Vous pouvez ensuite procéder à totues les vérifications. Pour ces vérifications, je vous demande de créer une classe **Verifier** (sans accent attention) qui contiendra nos méthodes statiques

- syntaxeEmail($email) - Retourne true si l'email est valise, false dans le cas contraire
- doublonEmail($email) - Retourne true si l'email est déjà utilisé, false dans le cas contraire

Amusez-vous bien !

## Etape 3 - Chiffrez le mot de passe

Dans cette troisième étape, je vous recommande de chiffrer le mot de passe de notre utilisateur

Pour cela pensez bien le fameux **grain de sel** que nous avions fait lorsque du projet sur Netflix pour protéger les mots de passe même si notre base de données venait à être dérobée.

Je veux que vous utiliser **une classe Securite (sans accent non plus) qui continedra la méthode suivante :
- chiffrer($password) - Retourne le mot de passe de façon chiffrée

## Etape 4 - Créez votre utilisateur et ajoutez-le

Pour terminer notre projet, occupons-nous de notre utilisateur.

Je vous propose de créer **une classe Utilisateur** qui contiendra tous les **attributs nécessaires**, tous les **getters** et **setters** nécessaires, mais aussi bien entendu un **constructeur**. Je ne vous aide pas plus davantage volontairement.

Cette classe devra contenir les méthodes suivantes :
- enregistrer() - Enregistre l'utilsateur dans la base de données
- creerLesSessions() - Initialise les sessions qui permettent de montrer que l'utilisateur est bien connecté.

Allez, vous pouvez le faire, croyez en vous autant que je crois en vous !

## Correction