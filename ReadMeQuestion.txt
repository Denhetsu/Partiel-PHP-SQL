Nom : Milovanovic
Prénom : Léo
classe : BTC 24.1
Ecole : .Ipssi


Question 2 : B
La ligne de commande serait : 

INSERT INTO `personnage` (`id`, `Nom`, `Espèce`, `âge`) VALUES ('3', 'Carlos', 'Calamar', '23');

Question 3 : B 

La requête a effectuer pour afficher le personnage et sa voiture serait : 

SELECT * FROM `personnage` INNER JOIN `voiture` ON voiture.id = personnage.id_voiture;

Question 3 : C

La requête a effectuer pour afficher le personnage et son sport serait : 

SELECT * FROM `personnage` INNER JOIN `sport` ON sport.id = personnage.id_sport;

Question 4 : 

La requête a effectuer pour afficher uniquement les utilisateurs participant au sport "Concours de mangeur de pâté de crabe" ou qui possède la voiture "Sous-marin" serait :

SELECT * FROM `personnage` INNER JOIN `sport` ON sport.id = personnage.id_sport AND voiture.id = personnage.id_voiture WHERE `sport` LIKE "%concours%" OR `voiture` LIKE "%sous-marin%"
 