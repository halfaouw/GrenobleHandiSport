  CREATE TABLE user (
    id int,
    nom STRING,
    prenom STRING,
    age int,
    email STRING,
    mdp STRING,
    statut STRING
  );



/*


Compte (id,nom,prenom,mail,adresse,telephone,statut)
Inscription(numInscript,sexe,nom,prenom,mail,dateNaiss,Nationalité,Profession,tel,adresse,bénévole,validée,handicap,attestationmedicale,date)
DemandeSport(numInscript,nomsport)
Sport(nomsport,competition)



Choses à faire :

Valider une inscription
Faire un formulaire d'inscription speciale pour les benevoles
Pouvoir modifier son MDP


TESTS UNITAIRES :

Connexion/Déconnexion marche bien.
Enregistrement dans la base de donnée d’une inscription fonctionnel.
Une fois connecté, on n'a plus accès à la page d'inscription ni à celle de connexion.
Navbar spéciale sur la page de l’espace personnel et est différente en fonction du statut de l’utilisateur.
Impossible de créer plusieurs comptes avec le même mail, même en rafraichissant la page.




*/
