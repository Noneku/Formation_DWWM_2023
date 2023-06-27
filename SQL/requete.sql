/* Sélectionner toutes les colonnes de la table SERV*/
SELECT * FROM serv;
/*Sélectionner les colonnes SERVICE et NOSERV de la table SERV*/
SELECT service,noserv from serv;
/*Sélectionner les emplois de la table EMP.*/
SELECT emploi from emp;
/*Sélectionner les employés du service N°3.*/
select * from emp where noserv=3;
/*Sélectionner les noms, numéros de service de tous les services dont le numéro est supérieur à 2.*/
SELECT nom,noserv from emp where noserv>2;
/*Sélectionner les employés dont la commission est inférieure au salaire. Vérifiez le résultat jusqu’à obtenir la bonne réponse.*/
select * from emp where comm<sal;
/*Sélectionner les employés qui touchent éventuellement une commission et dans l’ordre croissant des commissions.*/
select * from emp where comm is not null ORDER BY comm ASC;
/*Sélectionner les employés qui n’ont pas de chef.*/
select * from emp where sup is null;
/*Sélectionner les vendeurs du service 6 qui ont un revenu mensuel supérieur ou
égal à 9500 €.*/
select * from emp where emploi='VENDEUR' and noserv=6 and sal>=9500;
/* Sélectionner dans les employés tous les présidents et directeurs. Attention, le
français et la logique sont parfois contradictoires.*/
select * from emp where emploi='PRESIDENT'OR emploi ='DIRECTEUR';
/*Sélectionner les directeurs et « les techniciens du service 1 ».*/
SELECT * FROM emp where emploi='DIRECTEUR'or (emploi='TECHNICIEN'and noserv=1);
 /*Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur.*/
 SELECT * FROM emp where emploi not in ('TECHNICIEN','COMPTABLE','VENDEUR');
 /*Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5.*/
SELECT * from emp where sup is not null and noserv not in (1,3,5);
/*Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros.*/
select * from emp where sal BETWEEN 20000 and 40000;
/*Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN.*/
select * from emp where emploi='DIRECTEUR' and noserv BETWEEN 2 and 5;
/*Sélectionner les employés dont le nom se termine par T*/
select * from emp where nom like'%T';
/*Sélectionner les employés ayant exactement un E dans leur nom.*/
select * from emp where nom like '%E%'and nom not like '%E%E%';
/*Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N.*/
select * from emp where nom like '_____N';
/*Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères.*/
select * from emp where nom not like '_____';
/*Trier les employés (nom, prénom, n° de service , salaire) du service 3 par ordre de
salaire décroissant.*/
select nom,prenom,noserv,sal from emp where noserv=3  order by sal desc;
/*Trier les employés (nom, prénom, n° de service, salaire, emploi) par emploi, et pour chaque emploi par ordre décroissant de salaire.*/
select nom,prenom,noserv,sal,emploi from emp order by emploi asc,sal desc;
/*Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre croissant de commission.*/
select nom,prenom,noserv,comm from emp where noserv=3 order by comm asc;
/*Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé pour tous les employés.*/
select nom,prenom,emploi,service from emp INNER join serv on emp.noserv=serv.noserv;
/*Sélectionner le nom, l'emploi, le numéro de service, le nom du service pour tous les employés,en utilisant des alias pour les noms de tables.*/
select nom,emploi,e.noserv,service from emp as e INNER join serv as s on e.noserv=s.noserv;
/*Sélectionner le nom, l'emploi, le numéro de service, le nom du service pour tous les employés**/
select nom,emploi,emp.noserv,service from emp INNER join serv on emp.noserv=serv.noserv;
/*Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table SERV pour tous les employés.*/
select nom,emploi,serv.* from emp INNER join serv on emp.noserv=serv.noserv;
/*Sélectionner les nom et date d'embauche des employés suivi des nom et date
d'embauche de leur supérieur pour les employés plus ancien que leur supérieur, dans l'ordre nom employés, noms supérieurs.*/ 
select e.nom,e.embauche,s.nom,s.embauche from emp as e, emp as s where e.embauche<s.embauche and e.sup=s.noemp order by e.nom,s.nom;
/*Sélectionner sans doublon les prénoms des directeurs et « les prénoms destechniciens du service 1 » avec un UNION.*/
select prenom  from emp where emploi='DIRECTEUR' union select prenom from emp where emploi='TECHNICIEN' and noserv=1;
/*Sélectionner les numéros de services n’ayant pas d’employés sans une
jointure externe.*/
select noserv
from serv 
where noserv not in (select distinct noserv from emp);
 /*Sélectionner les services ayant au moins un employé.*/
select service
from serv 
where noserv  in (select distinct noserv from emp)
/*Sélectionner les employés qui travaillent à LILLE.*/
select * 
from emp 
where noserv IN
(select noserv from serv where ville='LILLE');
/*Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu.*/
select * 
from emp
where nom<>'DUBOIS'
and sup IN
(select sup from emp where nom='DUBOIS');
/*Sélectionner les employés embauchés le même jour que DUMONT.*/
select * 
from emp
where embauche =
(select embauche from emp where nom='DUMONT');
/*Sélectionner les nom et date d'embauche des employés plus anciens que MINET, dans l’ordre des embauches.*/
select nom,embauche 
from emp
where embauche <
(select embauche from emp where nom ='MINET');
/*Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens que tous les employés du service N°6. (Attention MIN)*/
select nom,prenom,embauche 
from emp 
where embauche <
(select MIN(embauche) from emp where noserv=6);
/*Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant des revenus mensuels.*/
select nom,prenom,sal
from emp
where sal>
(select MIN(sal) from emp where noserv=3) order by sal DESC;