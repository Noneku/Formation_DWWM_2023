
/* 1 : Sélectionner toutes les colonnes de la table SERV. */ 

SELECT * from serv;


/* 3 : Sélectionner les colonnes SERVICE et NOSERV de la table SERV. */ 

SELECT noserv , service FROM serv;


/* 5 : Sélectionner les emplois de la table EMP.*/

SELECT emploi from emp; 


/* 6 : Sélectionner les employés du service N°3.*/

SELECT * from emp where noserv = 3; 


/* 9 : Sélectionner les noms, numéros de service de tous les services dont le numéro est supérieur à 2.*/

SELECT nom , noserv from emp where noserv > 2;


/* 11 : Sélectionner les employés dont la commission est inférieure au salaire. Vérifiez le résultat jusqu’à obtenir la bonne réponse.*/

SELECT * from emp where comm < sal ; 


/*13 : Sélectionner les employés qui touchent éventuellement une
commission et dans l’ordre croissant des commissions.*/

SELECT * from emp where comm is not null order by comm ASC;


/* 15 : Sélectionner les employés qui n’ont pas de chef.*/

SELECT * from emp where sup is NULL;


/*17 : Sélectionner les vendeurs du service 6 qui ont un revenu mensuel supérieur ou
égal à 9500 €.*/

SELECT * from emp where noserv = 6 AND sal >= 9500;



/*19 : Sélectionner les directeurs qui ne sont pas dans le service 3.*/

select * from emp where emploi = "DIRECTEUR" AND noserv != 3;



/*21 : Sélectionner les « directeurs et les techniciens » du service 1.*/

SELECT * from emp where emploi = "DIRECTEUR" or emploi = "TECHNICIEN" AND noserv = 1;

/*23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et travaillant
dans le service 1.*/

SELECT * from emp where emploi != "DIRECTEUR" and emploi != "TECHNICIEN" AND noserv = 1;


/*25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur.*/

SELECT * from emp where emploi NOT IN("TECHNICIEN" , "COMPTABLE" , "VENDEUR");


/*27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5.*/

select * 
from emp
where sup is not null
and noserv not in(1,3,5);


/* 29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros.*/

SELECT * from emp where sal NOT BETWEEN 20000 and 40000;


/*31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN.*/

SELECT * from emp where emploi = "DIRECTEUR" AND noserv between 2 AND 5;


/*33 : Sélectionner les employés dont le nom se termine par T.*/

SELECT * from emp where nom LIKE '%T';


/*35 : Sélectionner les employés ayant exactement un E dans leur nom.*/

SELECT * from emp where nom LIKE "%E%" AND nom NOT LIKE "%E%E%";


/*37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N.*/

SELECT * from emp where nom LIKE "_____%N";


/*39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères*/

SELECT * from emp where nom NOT LIKE "_____";



/*41 : Trier les employés (nom, prénom, n° de service , salaire) du service 3 par ordre de
salaire décroissant.*/

SELECT nom , prenom , noserv , sal from emp where noserv = 3 ORDER BY sal DESC;



/* 43 : Trier les employés (nom, prénom, n° de service, salaire, emploi) par emploi, et pour chaque emploi par ordre décroissant de salaire.*/

SELECT nom , prenom , noserv , sal , emploi from emp ORDER BY emploi , sal DESC; 




/*47 : Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé pour tous les employés*/

SELECT nom , prenom , emploi , service from emp join serv on emp.noserv = serv.noserv;



/*48 : Sélectionner le nom, l'emploi, le numéro de service, le nom du service pour tous les employés.*/

SELECT nom , prenom , emploi , serv.noserv, service from emp join serv on emp.noserv = serv.noserv;



/*49 : Idem en utilisant des alias pour les noms de tables.*/

SELECT nom , prenom , emploi , service from emp as e join serv s on e.noserv = s.noserv;


/*50 : Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table SERV pour tous les employés.*/

SELECT emp.nom , emp.emploi , serv.* from emp , serv where emp.noserv = serv.noserv order by serv.noserv;



/*51 : Sélectionner les nom et date d'embauche des employés suivi des nom et date
d'embauche de leur supérieur pour les employés plus ancien que leur supérieur, dans l'ordre nom employés, noms supérieurs. */


SELECT emp.nom , emp.embauche , superieur.nom , superieur.embauche 
from emp , emp as superieur 
where emp.sup = superieur.noemp and emp.embauche < superieur.embauche;


/*52 : Sélectionner sans doublon les prénoms des directeurs et « les prénoms destechniciens du service 1 » avec un UNION.*/

SELECT prenom from emp where emploi =  "DIRECTEUR" 
UNION
SELECT prenom from emp where emploi = "TECHNICIEN" and noserv = 1;


/*53 : Sélectionner les numéros de services n’ayant pas d’employés sans une
jointure externe*/

SELECT noserv 
from emp 
where noserv not in (select distinct noserv from emp);



/*54 : Sélectionner les services ayant au moins un employé.*/

SELECT service from serv s where noserv in (select distinct noserv from emp);


/*55 : Sélectionner les employés qui travaillent à LILLE.*/

SELECT * from emp e 
join serv s on e.noserv = s.noserv 
where s.ville = "LILLE";



/*56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu.*/

Select DISTINCT e2.nom, e2.prenom 
from emp e2 , emp e 
where e.nom="DUBOIS" AND e.sup = e2.sup AND e2.nom != "DUBOIS" ;


/*57 : Sélectionner les employés embauchés le même jour que DUMONT.*/

Select DISTINCT e2.* , e.*
from emp e2 , emp e 
where e.nom="DUMONT" AND e.embauche = e2.embauche AND e2.nom != "DUMONT" ;




/*58 : Sélectionner les nom et date d'embauche des employés plus anciens que MINET, dans l’ordre des embauches.*/

SELECT e2.nom ,e2.embauche  from emp e , emp e2 where e.nom ="MINET" AND e2.embauche < e.embauche order by e2.embauche;




/*59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens que tous les employés du service N°6. (Attention MIN)*/

SELECT e2.nom , e2.prenom , e2.embauche , MIN(e.embauche) from emp e , emp e2 where e.embauche > e2.embauche and e.noserv = 6 ;


/*60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant des revenus mensuels.*/

SELECT Distinct e.nom , e.prenom , e.sal from emp e , emp e2 where e2.noserv = 3 and e.sal > e2.sal order by sal ASC;


/*61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des
personnes travaillant dans la même ville que HAVET.*/

SELECT e2.nom , e2.prenom , e2.noserv , e2.emploi , e2.sal from emp e ,serv s join emp e2 on s.noserv = e2.noserv where e.nom = "HAVET" and s.ville = (SELECT ville from serv s2 where s2.ville = "LILLE" and s2.noserv = e2.noserv);

/*62 : Sélectionner les employés du service 1, ayant le même emploi qu'un employé du service N°3.*/

SELECT DISTINCT * from emp e , emp e2 where e.noserv = 3 and e2.noserv = 1 and e.emploi = e2.emploi;


/*63 : Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3.*/

SELECT DISTINCT e.*  from emp e , emp e2 where e.noserv = 3 and e2.noserv = 1 and e2.emploi NOT IN(e.emploi) order by e.emploi;


/*64 : Sélectionner nom, prénom, emploi, salaire pour les employés ayant même emploi et un salaire supérieur à celui de CARON.*/

SELECT e2.nom , e2.prenom , e2.emploi , e2.sal from emp e , emp e2 where e.emploi = e2.emploi and e.nom="CARON" and e.sal < e2.sal;


/*65 : Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du service des VENTES.*/

SELECT DISTINCT e.* from emp e , serv s join emp e2 on e2.noserv = s.noserv where e.noserv = 1 and s.service = "VENTES" and e.emploi = e2.emploi;


/*66 : Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier le résultat dans l'ordre alphabétique des noms.*/

SELECT DISTINCT e.* from emp e , serv s join emp e2 on e2.noserv = s.noserv where e2.nom = "RICHARD" and s.ville = "LILLE" and e.emploi IN(e2.emploi) ;



/*67 : Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur service (moyenne des salaires = avg(sal)), résultats triés par numéros de service.*/

SELECT e.*
FROM emp e
INNER JOIN (
    SELECT noserv, AVG(sal) AS salaire_moyen
    FROM emp
    GROUP BY noserv
) AS avg_sal ON e.noserv = avg_sal.noserv
WHERE e.sal > avg_sal.salaire_moyen
ORDER BY e.noserv ASC;




/*68 : Sélectionner les employés du service INFORMATIQUE embauchés la même année qu'un employé du service VENTES.*/
SELECT e.*
FROM emp e
INNER JOIN serv s ON e.noserv = s.noserv
WHERE s.service = 'INFORMATIQUE'
AND YEAR(e.embauche) IN (
    SELECT YEAR(e2.embauche)
    FROM emp e2
    INNER JOIN serv s2 ON e2.noserv = s2.noserv
    WHERE s2.service = 'VENTES'
);





/*69 : Sélectionner le nom, l’emploi, la ville pour les employés qui ne travaillent pas dans le même service que leur supérieur hiérarchique direct.*/

SELECT employé.nom , employé.emploi , s.ville 
from  emp employé , serv s 
where employé.noserv = s.noserv and employé.noserv <> (SELECT superieur.noserv from emp superieur where employé.sup = superieur.noemp);


/*70 : Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des
subalternes, trier le résultat suivant le revenu décroissant.*/

SELECT DISTINCT e2.nom , e2.prenom , s.service , e2.sal from emp e , emp e2
join serv s on s.noserv = e2.noserv
where e2.noemp > e.sup ;


/*71 :Sélectionner le nom, l’emploi, le revenu mensuel (nommé Revenu) avec deux décimales pour tous les employés, dans l’ordre des revenus décroissants.*/

SELECT e.nom , e.emploi , ROUND(e.sal , 2) as revenu_mensuel
from emp e
order by revenu_mensuel DESC;


/*72 : Sélectionner le nom, le salaire, commission des employés dont la commission représente plus que le double du salaire.*/

SELECT nom , sal , comm 
from emp 
where comm > sal *2;

/*73 : Sélectionner nom, prénom, emploi, le pourcentage de commission (deux décimales) par rapport au revenu mensuel ( renommé "% Commissions") , pour tous les vendeurs dans l'ordre décroissant de ce pourcentage.*/

SELECT DISTINCT nom , prenom , emploi , COALESCE(ROUND((sal*100)/COALESCE(comm , 0), 2) , 0) as "%_Commission" 
from emp e , serv s 
where e.emploi = "VENDEUR";

/*74 : Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les vendeurs.*/

SELECT DISTINCT nom , emploi , s.service , round(sal*12 + COALESCE(comm*12 , 0) , 0) REVENU_ANNUEL 
from emp e , serv s 
where e.emploi = "VENDEUR" and e.noserv = s.noserv;

/*75 : Sélectionner nom, prénom, emploi, salaire, commissions, revenu mensuel pour les employés des services 3,5,6 */

SELECT nom , prenom , emploi , sal , COALESCE(comm , 0) as comm , Round((sal + COALESCE(comm , 0)),2) as revenu_mensuel 
from emp e 
where e.noserv IN(3 , 5 , 6);

/*76 : Idem pour les employés des services 3,5,6 en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par COMMISSIONS, SAL+IFNULL(COMM,0) par GAIN_MENSUEL.*/

SELECT nom , prenom , emploi , sal SALAIRE , COALESCE(comm , 0) as COMMISSIONS , Round((sal + COALESCE(comm , 0)),2) GAIN_MENSUEL 
from emp e 
where e.noserv IN(3 , 5 , 6);



/*77 : Idem pour les employés des services 3,5,6 en remplaçant GAIN_ MENSUEL par GAINMENSUEL*/

SELECT nom , prenom , emploi , sal SALAIRE , COALESCE(comm , 0) as COMMISSIONS , Round((sal + COALESCE(comm , 0)),2) GAINMENSUEL 
from emp e 
where e.noserv IN(3 , 5 , 6);


/*78 : Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés des services 3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au centime près.*/

SELECT nom , emploi , round(((sal / 12) / 8), 2) salaire_journalier 
from emp e  
where e.noserv IN(3 , 5 , 6);


/*79 : Idem sans arrondir mais en tronquant.*/
SELECT nom , emploi , SUBSTR(((sal / 12) / 8), 1 , 5) salaire_journalier 
from emp e 
 where e.noserv IN(3 , 5 , 6);
 
 
 /*80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", les premières lettres des noms de villes doivent se trouver sur une même verticale.*/
 
 SELECT CONCAT(service,"  ----->  " , ville)
FROM serv;


/* 82 : Sélectionner les employés en remplaçant les noms par '*****' dans le service n°1, trier le résultat suivant
le N° de service.*/
UPDATE emp 
SET nom = '*****' 
where noserv = 1;

SELECT * 
from emp 
where noserv = 1;


/*84 : Sélectionner les employés embauchés en 1988.*/

SELECT * 
from emp 
where DATE_FORMAT(embauche , '%Y') = 1988;
 
 /*86 : Sélectionner les positions des premiers M et E dans les noms des employés*/
 
 SELECT nom , LOCATE('M', nom) , LOCATE('E', nom)  
 from emp ; 
 
 /*88 : Tracer un Histogramme des salaires avec nom, emploi, salaire triés dans l'ordre décroissant (max de
l’histogramme avec 30 caractères).*/

SELECT floor(sal / 30) * 30 as salaire, count(*)
from emp
group by salaire
order by salaire DESC;

/*90 : Même chose en écrivant la colonne embauche sous la forme ‘dd-mm-yy’, renommée
embauche.*/

SELECT nom , emploi , DATE_FORMAT(embauche, "%d %M  %Y") as embauche
from emp 
where noserv = 6;

/*92 : Même chose en écrivant la colonne embauche sous la forme ‘day dd month(abv) yy'*/

SELECT nom , emploi , DATE_FORMAT(embauche, "%W %d %b  %y") as embauche
from emp 
where noserv = 6;


/*94 : Même chose en écrivant la colonne embauche sous la forme ‘Day-dd-Month-yyyy'*/

SELECT nom , emploi , DATE_FORMAT(embauche, "%W-%d-%M-%Y") as embauche
from emp 
where noserv = 6;

/*96 : Sélectionner les employés avec leur ancienneté en mois dans l'entreprise.*/

SELECT TIMESTAMPDIFF(MONTH, embauche , NOW()) 
from emp;


/*98 : Sélectionner les employés ayant plus de 12 ans d’ancienneté.*/

SELECT * , TIMESTAMPDIFF(YEAR, embauche , NOW()) as ANCIENNETE 
from emp 
where TIMESTAMPDIFF(YEAR, embauche , NOW()) > 12
order by ANCIENNETE ASC;


/*100 : Depuis combien de mois êtes-vous nés ?*/

SELECT TIMESTAMPDIFF(MONTH, "1995-12-26" , NOW());


/*102 : Paramétrer la requête qui précède sur l’emploi.*/
SELECT emploi , ROUND(avg(sal + COALESCE(comm , 0)) , 2) as revenu_moyen 
from emp 
group by emploi;

/*104 : Afficher le plus haut salaire, le plus bas salaire, la différence entre les deux.*/
SELECT MAX(sal) as salaire_max , MIN(sal) as salaire_min , (MAX(sal)-MIN(sal)) as diff 
from emp ;


/*106 : Afficher le nombre de lettres du service dont le nom est le plus court.*/

SELECT MIN(nom) as nom_min , LENGTH(MIN(nom)) as nombre_caractère 
from emp; 


/*108 : Déterminer le nombre d'employés du service 3 qui reçoivent éventuellement une
commission.*/ 

SELECT count(*) 
from emp 
where COALESCE(comm , 0) is not null  and noserv = 3;

/*110 : Déterminer le nombre d'employés du service N°3.*/

SELECT count(*) as nombre_employé 
from emp 
where noserv = 3;

/*112 : Pour chaque service donner le salaire annuel moyen de tous les employés qui ne sont ni
président, ni directeur.*/

SELECT service, round(avg(sal + COALESCE(comm , 0)*12) , 2) as moy_revenu_annuel 
from emp e , serv s 
where e.noserv = s.noserv and emploi NOT IN("PRESIDENT" , "DIRECTEUR") 
group by service;


/*114 : Idem en remplaçant le numéro de service par le nom du service.*/

SELECT service, emploi, count(*) nombre_employée, round(avg(sal + COALESCE(comm , 0)) , 2) as moy_salaire
from emp e , serv s 
where e.noserv = s.noserv  
group by service , emploi; 


/*116 : Sélectionner les services ayant au mois deux vendeurs.*/

SELECT service , count(*) 
from emp e , serv s 
where emploi = "VENDEUR" and e.noserv = s.noserv 
group by service 
HAVING count(*) >= 2 ;

/*118 : Sélectionner les emplois ayant un salaire moyen supérieur au salaire moyen des
directeurs.*/

SELECT emploi from emp 
group by emploi
having avg(sal + COALESCE(comm , 0)) > (SELECT avg(e2.sal + COALESCE(comm , 0)) from emp e2 where e2.emploi = "DIRECTEUR");


/*120 : Afficher l'effectif, la moyenne et le total pour les salaires et les commissions par emploi.*/

SELECT emploi , count(*) nombre_employé , avg(sal) moy_sal , avg(COALESCE(comm , 0)) moy_comm, sum(sal) sal_total , sum(COALESCE(comm , 0)) total_comm from emp
group by emploi;


/*122 : Insérez vous comme nouvel employé embauché aujourd’hui au salaire que vous
désirez. Valider.*/

INSERT into emp2 ( noemp , nom , prenom , emploi , sup , embauche , sal , comm , noserv ) 
VALUES ( 1632 , "OLIVIER" , "QUENTIN" , "TECHNICIEN" , 1300 , NOW() , 13000 , 6000 , 2 );


/*124 : Insérer le salarié dont le nom est MOYEN, prénom Toto, no 1010, embauché le 12/12/99,supérieur 1000, pas de comm, service no 1, salaire vaut le salaire moyen des employés.Valider.*/
SET @salaire_moyen = (SELECT AVG(sal) FROM emp2);

INSERT into emp2 ( noemp , nom , prenom , emploi , sup , embauche , sal , comm , noserv ) 
VALUES ( 1010, "MOYEN" , "TOTO" , NULL , 1000 , "1999-12-12" , @salaire_moyen , NULL , 1 );



/*128 : Vérifier que la table PROJ n’existe pas.*/

SELECT * from proj;


/*129 :
 Créer une table PROJET avec les colonnes suivantes:
numéro de projet (noproj), type numérique 3 chiffres, doit contenir une valeur. nom de projet (nomproj), type caractère, longueur = 10
budget du projet (budget), type numérique, 6 chiffres significatifs et 2 décimales.*/

CREATE TABLE projet
(
    noproj int(3) not null,
    nomproj varchar(10),
    budget DECIMAL(8,2)
    );


SELECT * from projet; 

DESC proj;

ALTER TABLE proj 
RENAME to proj;


/*130 :
 Insérer trois lignes de données dans la table PROJ: numéros des projets = 101, 102,
103
noms des projets = alpha, beta, gamma budgets = 250000, 175000, 950000
 Afficher le contenu de la table PROJ.
 Valider les insertions faites dans la table PROJ.*/

INSERT INTO proj(noproj , nomproj , budget)
VALUES (101 , "alpha" , 250000);

INSERT INTO proj(noproj , nomproj , budget)
VALUES (102 , "beta" , 175000);

INSERT INTO proj(noproj , nomproj , budget)
VALUES (103 , "gamma" , 950000);


/*132 :
Ajouter une colonne NOPROJ (type numérique) à la table EMP.
Afficher le contenu de la table EMP.*/

ALTER TABLE emp add noproj INT(3);

SELECT * from emp;


/*134 : Affecter les employés dont le numéro est supérieur à 1350 au projet 102, sauf ceux qui sont déjà affectés à un projet.*/

UPDATE emp 
SET noproj = 102 
where noemp > 1350 and noproj is NULL; 


/*136 : Sélectionner les noms d'employés avec le nom de leur projet et le nom de leur
service.*/

SELECT nom , nomproj , service 
from emp e , serv s , proj p 
where e.noproj = p.noproj and e.noserv = s.noserv; 


/*138 : Créer la vue EMP1 de la table EMP contenant les colonnes: numéro d'employé, nom et emploi et limitée aux employés du service numéro 1,*/
CREATE VIEW emp1 AS
SELECT noemp, nom, emploi
FROM emp
where noserv = 1;

SELECT * from emp1;


/*140 : Sélectionner les vendeurs de la vue emp1.*/ 

SELECT * from emp1 
where emploi = "VENDEUR";



/*142 : Sélectionner la vue EMP1.*/

SELECT * from emp1;










 

