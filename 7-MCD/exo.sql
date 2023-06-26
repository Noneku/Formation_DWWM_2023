
/* 1 : Sélectionner toutes les colonnes de la table SERV. */ 

SELECT * from serv;


/* 3 : Sélectionner les colonnes SERVICE et NOSERV de la table SERV. */ 

SELECT noserv , service FROM serv;


/* 5 : Sélectionner les emplois de la table EMP.*/

SELECT emp from emp; 


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



