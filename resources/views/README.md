# Ennoncé
Développement d'un formulaire de contact sécurisé avec stockage en base de données et page de confirmation.

Liste des champs : type de demande, nom, prénom, email, téléphone, société, message.

A prévoir dans le traitement du formulaire :
- stockage de la date et de l'heure de réception de la demande
- stockage de l'adresse IP
- envoi d'un mail à un administrateur avec le récapitulatif des informations saisies
- destinataire du mail différent en fonction du champ "Type de demande".

Création d'une page listing des demandes de contact avec un accès restreint.
Possibilité d'exporter les demandes au format CSV.



# Informations supplémentaires
- Pour accéder au panel administrateur, il faut aller sur la page `admin.php`.
- Il y a seulement 3 type de demande (site, app, ecommerce) pour en rajouter il faut modifier `index.php` ainsi que `config/destinataires.php` avec l'email des destinataires.
- Pour modifier l'email de l'administrateur, il modifier dans le fichier `config/destinataires.php`.
- Pour lire le fichier exporter en CSV, il faut définir le délimiteur par un virgule (`,`).
- Un service d'envoi de mail doit être installé sur le serveur qui fait tourner le site pour que l'envoi de mail fonctionne.
- Le mot de passe des utilisateurs sont chiffré avec le chiffrement BCRYPT
- Pour rajouter un utilisateur, il faut passer par la base de donnée.
- Un compte admin par défaut est disponible avec comme mail: `demo@demo.fr` avec comme mot de passe: `demo`.
