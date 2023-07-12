
-- 1 : Sélectionner toutes les colonnes de la table SERV
select * from emp
-- 3 : Sélectionner les colonnes SERVICE et NOSERV de la table SERV.
select SERVICE,NOSERV from SERV
-- 5 : Sélectionner les emplois de la table EMP.
SELECT emploi from emp
-- 7 : Sélectionner les employés du service N°3.
select * from emp WHERE noserv = 3
-- 9 : Sélectionner les noms, numéros de service de tous les services dont le numéro est supérieur à 2.
SELECT nom,noserv from emp where noserv > 2
-- 11 : Sélectionner les employés dont la commission est inférieure au salaire. Vérifiez le résultat jusqu’à obtenir la bonne réponse.
select * from emp where comm > sal
-- 13 : Sélectionner les employés qui touchent éventuellement une commission et dans l’ordre croissant des commissions.
select * from emp where comm is not null ORDER BY comm desc
-- 15 : Sélectionner les employés qui n’ont pas de chef.
SELECT * FROM `emp` WHERE SUP IS NULL
-- 17 : Sélectionner les vendeurs du service 6 qui ont un revenu mensuel supérieur ou égal à 9500 €.
SELECT * FROM `emp` WHERE emploi = "VENDEUR" && noserv = 6 && sal > 9500
-- 19 : Sélectionner les directeurs qui ne sont pas dans le service 3.
SELECT * FROM `emp` WHERE noserv <> 3
-- 21 : Sélectionner les « directeurs et les techniciens » du service 1.
SELECT * FROM emp where emploi = "DIRECTEUR" || emploi = "TECHNICIEN" && noserv = 1
-- 23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et travaillant dans le service 1.
SELECT * FROM emp WHERE noserv = 1 AND (emploi <> "DIRECTEUR" OR emploi <> "TECHNICIEN");
-- 25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur.
SELECT * FROM emp WHERE emploi NOT IN ('COMPTABLE', 'TECHNICIEN', 'VENDEUR');
-- 27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5.
SELECT * from emp WHERE noserv not in (1,3,5)
-- 29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros.
SELECT * from emp WHERE sal < 20000 || sal > 40000
-- 31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN.
SELECT * from emp where emploi = "DIRECTEUR" && noserv <= 5 && noserv >= 2
-- 33 : Sélectionner les employés dont le nom se termine par T.
SELECT * FROM `emp` WHERE nom like "%T"
-- 35 : Sélectionner les employés ayant exactement un E dans leur nom.
SELECT * FROM `emp` WHERE nom like "%E%" and nom not like "%E%E%"
-- 37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N.
SELECT * FROM emp WHERE nom like "_____N"
-- 39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères.
SELECT * FROM emp WHERE nom not like "_____"
-- 41 : Trier les employés (nom, prénom, n° de service , salaire) du service 3 par ordre de salaire décroissant.
SELECT nom,prenom,noserv,sal FROM emp WHERE noserv = 3 order by sal desc
-- 43 : Trier les employés (nom, prénom, n° de service, salaire, emploi) par emploi, et pour chaque emploi par ordre décroissant de salaire.
SELECT nom,prenom,noserv,sal,emploi FROM emp order by emploi desc
-- 45 : Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre croissant de commission.
select nom,prenom,noserv,comm from emp where noserv = 3 order by comm ASC
--* 47 : Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé pour tous les employés
select nom,prenom,service,emploi from emp, serv
-- 48 : Sélectionner le nom, l'emploi, le numéro de service, le nom du service pour tous les employés.
select e.nom,e.emploi,e.noserv,s.service from emp e, serv s
--* 49 : Idem en utilisant des alias pour les noms de tables.
select e.nom,e.prenom,s.service,e.emploi from emp as e, serv as s
-- 50 : Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table SERV pour tous les employés.
select e.nom, e.emploi, s.* from emp e, serv s
-- 51 : Sélectionner les nom et date d'embauche des employés suivi des nom et date d'embauche de leur supérieur pour les employés plus ancien que leur supérieur, dans l'ordre nom employés, noms supérieurs. 
select e.nom,s.nom as nomSuperieur,e.embauche,s.embauche as embaucheSuperieur from emp e, emp s where s.noemp = e.sup && e.embauche < s.embauche ORDER BY `nom` ASC
-- 52 : Sélectionner sans doublon les prénoms des directeurs et « les prénoms des techniciens du service 1 » avec un UNION.
select prenom from emp where emploi = "DIRECTEUR" union select prenom from emp where emploi = "TECHNICIEN" && noserv = 1
-- 53 : Sélectionner les numéros de services n’ayant pas d’employés sans une jointure externe

-- 54 : Sélectionner les services ayant au moins un employé

-- 55 : Sélectionner les employés qui travaillent à LILLE.
select * from emp, serv where ville = "LILLE"
-- 56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu
select * from emp WHERE sup = (SELECT sup from emp where nom = "DUBOIS") and nom != "DUBOIS"
-- 57 : Sélectionner les employés embauchés le même jour que DUMONT.
SELECT s.* from emp e, emp s WHERE e.nom = "DUMONT" && e.embauche = s.embauche
-- 58 : Sélectionner les nom et date d'embauche des employés plus anciens que MINET, dans l’ordre des embauches.
select nom,embauche from emp where embauche > (SELECT embauche from emp where nom = "MINET")
-- 59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens que tous les employés du service N°6. (Attention MIN)
select e.nom,e.prenom,e.embauche from emp e where embauche > (select min(embauche) from emp where noserv = 6)
-- 60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant des revenus mensuels.
SELECT e.nom,e.prenom,e.sal from emp e where sal > (select min(sal) from emp where noserv = 3) order by sal asc
--* 61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des personnes travaillant dans la même ville que HAVET.
select e.nom,e.noserv,s.emploi,e.sal from emp e, serv s where s.ville = (select ville from serv, emp where nom = "HAVET")
--* 62 : Sélectionner les employés du service 1, ayant le même emploi qu'un employé du service N°3.
select * from emp WHERE noserv = 1 && emploi = (SELECT emploi from emp WHERE noserv = 3)
-- 63 : Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3.
select * from emp WHERE noserv = 1 and emploi not in (select service from serv WHERE noserv = 3)
-- 64 : Sélectionner nom, prénom, emploi, salaire pour les employés ayant même emploi et un salaire supérieur à celui de CARON.
select nom,prenom,emploi,sal from emp WHERE emploi = (SELECT emploi from emp where nom = "CARON") && sal > (SELECT sal from emp where nom = "CARON")
-- 65 : Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du service des VENTES.
select * FROM emp WHERE noserv = 1 AND emploi IN (SELECT emploi FROM emp WHERE noserv = (SELECT noserv FROM serv WHERE service = 'VENTES'));
-- 66 : Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier le résultat dans l'ordre alphabétique des noms.
select emp.*, serv.ville from emp JOIN serv on emp.noserv = serv.noserv where serv.ville = "LILLE" and emploi = (select emploi from emp where nom = "RICHARD") 
-- 67 : Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur service (moyenne des salaires = avg(sal)), résultats triés par numéros de service.
select emp.* from emp JOIN serv on emp.noserv = serv.noserv where emp.sal > (select avg(sal) from emp where noserv = serv.noserv)
-- 68 : Sélectionner les employés du service INFORMATIQUE embauchés la même année qu'un employé du service VENTES.

--69 :

-- 70 : Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des subalternes, trier le résultat suivant le revenu décroissant.

-- 72 : Sélectionner le nom, le salaire, commission des employés dont la commission représente plus que le double du salaire.
select nom,sal,comm from emp where comm > (sal*2)
-- 74 : Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les vendeurs.
select nom,emploi,s.service,(round(sal*12)) from emp, serv s where emploi = "VENDEUR"
-- 76 : Idem pour les employés des services 3,5,6 en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par COMMISSIONS, SAL+IFNULL(COMM,0) par GAIN_MENSUEL.
select nom,prenom,emploi,sal as SALAIRE,comm as COMMISSIONS,(round(sal*12)) as GAIN_MENSUEL from emp where noserv in (3,5,6)
-- 78 : Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés des services 3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au centime près.
select nom,emploi,round(sal/31) as SALAIRE_JOURNALIER,round(sal/22)/8 as SALAIRE_HORAIRE from emp
-- 80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", les premières lettres des noms de villes doivent se trouver sur une même verticale.
select concat(service,'---->',ville) from serv
-- 82 : Sélectionner les employés en remplaçant les noms par '*****' dans le service n°1, trier le résultat suivant le N° de service.

-- 84 : Sélectionner les employés embauchés en 1988.
SELECT embauche FROM emp WHERE DATE_FORMAT(embauche, '%Y') = '1988';

-- 86 : Sélectionner les positions des premiers M et E dans les noms des employés
select locate('M',nom),locate('E',nom) from emp
-- 88 : Tracer un Histogramme des salaires avec nom, emploi, salaire triés dans l'ordre décroissant (max de l’histogramme avec 30 caractères).

-- 90 : Même chose en écrivant la colonne embauche sous la forme ‘dd-mm-yy’, renommée embauche.
select nom, emploi, DATE_FORMAT(embauche, '%d-%m-%Y') as embauche from emp where noserv = 6;
-- 92 : Même chose en écrivant la colonne embauche sous la forme ‘day dd month(abv) yy'
select nom, emploi, DATE_FORMAT(embauche, '%D-%d-%M(%b)%Y') as embauche from emp where noserv = 6;
-- 94 : Même chose en écrivant la colonne embauche sous la forme ‘Day-dd-Month-yyyy'
select nom, emploi, DATE_FORMAT(embauche, '%D-%d-%M-%Y') as embauche from emp where noserv = 6;
-- 96 : Sélectionner les employés avec leur ancienneté en mois dans l'entreprise.
select nom, TIMESTAMPDIFF (MONTH,embauche,curdate()) from emp
-- 98 : Sélectionner les employés ayant plus de 12 ans d’ancienneté.
select * from emp where TIMESTAMPDIFF(YEAR,embauche,curdate()) > 12
-- 100 : Depuis combien de mois êtes-vous nés ?

-- 102 : Paramétrer la requête qui précède sur l’emploi

-- 104 : Afficher le plus haut salaire, le plus bas salaire, la différence entre les deux.
select max(sal),min(sal), round((max(sal)-min(sal))) as difference from emp
-- 106 : Afficher le nombre de lettres du service dont le nom est le plus court.
select min(LENGTH(nom)) from emp
-- 108 : Déterminer le nombre d'employés du service 3 qui reçoivent éventuellement une commission.
select COUNT(noserv) from emp where comm is not null
-- 110 : Déterminer le nombre d'employés du service N°3.
select count(noserv) from emp where noserv = 3
-- 112 : Pour chaque service donner le salaire annuel moyen de tous les employés qui ne sont ni président, ni directeur.
select s.service,avg(sal) from emp join serv s on emp.noserv = s.noserv WHERE emploi not in ('PRESIDENT','DIRECTEUR') GROUP BY s.service;
-- 114 : Idem en remplaçant le numéro de service par le nom du service.

-- 116 : Sélectionner les services ayant au mois deux vendeurs.

-- 118 : Sélectionner les emplois ayant un salaire moyen supérieur au salaire moyen des directeurs.

-- 120 : Afficher l'effectif, la moyenne et le total pour les salaires et les commissions par emploi.
select emploi, count(nom) as Effectif,avg(sal) as Moyenne_sal,sum(sal) as som_sal ,comm from emp group by emploi
