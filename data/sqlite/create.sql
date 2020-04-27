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

connexion marche bien
deconnexion marche bien
Une fois connecter, on n'a plus acces à la page d'inscription ni à celle de connexion





*/
