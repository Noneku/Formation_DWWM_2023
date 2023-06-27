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
/*Sélectionner les noms, le numéro de service, l’emplois et le salaires des
personnes travaillant dans la même ville que HAVET.*/
select nom,emp.noserv,emploi,sal 
from emp,serv 
where emp.noserv=serv.noserv 
and ville=(select ville
                from serv,emp
                where emp.noserv=serv.noserv
                and nom='HAVET');
/*Sélectionner les employés du service 1, ayant le même emploi qu'un employé du
service N°3.*/
SELECT * from emp 
where emploi in 
(select emploi from emp where noserv=3) and noserv=1;
/*Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3.*/
SELECT * from emp 
where emploi not in(select emploi from emp where noserv=3) and noserv=1;
/*Sélectionner nom, prénom, emploi, salaire pour les employés ayant même emploi et un
salaire supérieur à celui de CARON.*/
select nom,prenom,sal from emp
where emploi =
(select emploi from emp where nom='CARON') and sal>(select sal from emp where nom='CARON');
/*Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du
service des VENTES.*/
SELECT * from emp where noserv=1 and emploi in
(select emploi from emp inner join serv on emp.noserv=serv.noserv where service='VENTES');
/*Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier le
résultat dans l'ordre alphabétique des noms.*/
select * from emp inner join serv on emp.noserv=serv.noserv 
where ville='LILLE'
and emploi=(select emploi from emp where nom='RICHARD')
order by  nom  asc;
/*Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur
service (moyenne des salaires = avg(sal)), résultats triés par numéros de service.*/
select nom, prenom, sal, noserv
from emp e
where sal > (select avg(sal)
                from emp m
                where e.noserv=m.noserv)
order by noserv;
 /*Sélectionner les employés du service INFORMATIQUE embauchés la même année
qu'un employé du service VENTES.
( année -> oracle : to_char(embauche,’YYYY’)> MYSQL: DATE_FORMAT(embauche,’%Y’)*/
SELECT * from emp inner join serv on emp.noserv=serv.noserv 
where service='INFORMATIQUE' 
and DATE_FORMAT(embauche,"%Y")
in (select DATE_FORMAT(embauche,"%Y") 
from emp inner join serv on emp.noserv=serv.noserv where service ='VENTES');
/*Sélectionner le nom, l’emploi, la ville pour les employés qui ne travaillent pas dans le
même service que leur supérieur hiérarchique direct.*/
select nom, emploi, ville
from emp e, serv s
where e.noserv = s.noserv
and e.noserv <> (select noserv
                 from emp e1
                 where e1.noemp = e.sup);
/*Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des
subalternes, trier le résultat suivant le revenu décroissant.*/
select nom,prenom,service,sal from emp 
inner join serv on emp.noserv=serv.noserv
where noemp in(select sup from emp)
order by sal desc;
/*Sélectionner le nom, l’emploi, le revenu mensuel (nommé Revenu) avec deux décimales
pour tous les employés, dans l’ordre des revenus décroissants*/
SELECT nom,emploi, ROUND ((sal+nvl(comm,0)),2) AS revenu FROM emp ORDER BY revenu DESC;
/*Sélectionner nom, prénom, emploi, le pourcentage de commission (deux décimales) par
rapport au revenu mensuel ( renommé "% Commissions") , pour tous les vendeurs dans l'ordre
décroissant de ce pourcentage*/
select nom,prenom,emploi,round((sal*100/comm),2) as " % commission" 
from emp 
where emploi='VENDEUR' 
order by " % commission" desc;
/*Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les
vendeurs.*/
select nom,service,round(12*(sal+comm),0) as revenu from emp 
inner JOIN serv 
on emp.noserv=serv.noserv 
where emploi='VENDEUR';
/*Sélectionner nom, prénom, emploi, salaire, commissions, revenu mensuel pour les employés
des services 3,5,6*/
SELECT nom,prenom,emploi,sal,IFNULL(comm,0),round((sal+IFNULL(comm,0)),0)
as "revenu mensuel" 
from emp where noserv=3 or noserv=5 or noserv=6;
/*Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés des services
3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au centime près.*/
SELECT nom,prenom,emploi,round((sal/22),1) "salaire journalier",round((sal/22/8),1) "salaire horraire"
from emp where noserv=3 or noserv=5 or noserv=6;
/*Idem sans arrondir mais en tronquant.*/
SELECT nom,prenom,emploi,TRUNCATE((sal/22),2) "salaire journalier",TRUNCATE((sal/22/8),2) "salaire horraire"
from emp where noserv=3 or noserv=5 or noserv=6;
