
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

SELECT nom , prenom , emploi , sal , COALESCE(comm , 0) as comm , Round((sal + COALESCE(comm , 0)),2) as revenu_mensuel from emp e where e.noserv IN(3 , 5 , 6);

/*76 : Idem pour les employés des services 3,5,6 en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par COMMISSIONS, SAL+IFNULL(COMM,0) par GAIN_MENSUEL.*/

SELECT nom , prenom , emploi , sal SALAIRE , COALESCE(comm , 0) as COMMISSIONS , Round((sal + COALESCE(comm , 0)),2) GAIN_MENSUEL from emp e where e.noserv IN(3 , 5 , 6);



/*77 : Idem pour les employés des services 3,5,6 en remplaçant GAIN_ MENSUEL par GAINMENSUEL*/

SELECT nom , prenom , emploi , sal SALAIRE , COALESCE(comm , 0) as COMMISSIONS , Round((sal + COALESCE(comm , 0)),2) GAINMENSUEL from emp e where e.noserv IN(3 , 5 , 6);


/*78 : Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés des services 3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au centime près.*/

SELECT nom , emploi , round(((sal / 12) / 8), 2) salaire_journalier from emp e  where e.noserv IN(3 , 5 , 6);


/*79 : Idem sans arrondir mais en tronquant.*/
SELECT nom , emploi , SUBSTR(((sal / 12) / 8), 1 , 5) salaire_journalier 
from emp e 
 where e.noserv IN(3 , 5 , 6);
 
 
 /*80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", les premières lettres des noms de villes doivent se trouver sur une même verticale.*/
 
 

