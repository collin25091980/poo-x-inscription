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