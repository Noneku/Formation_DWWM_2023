/*1 : Sélectionner toutes les colonnes de la table SERV*/
SELECT * from serv;
/*3 : Sélectionner les colonnes SERVICE et NOSERV de la table SERV*/
SELECT service, noserv from serv;
/*5 : Sélectionner les emplois de la table EMP*/
SELECT emploi from emp;
/*7 : Sélectionner les employés du service N°3*/
SELECT emploi from emp WHERE noserv = 3;
/*9 : Sélectionner les noms, numéros de service de tous les services dont le numéro est supérieur à 2*/
SELECT nom, noserv from emp WHERE noserv > 2;
/*11 : Sélectionner les employés dont la commission est inférieure au salaire. Vérifiez le résultat jusqu’à obtenir la bonne réponse*/
SELECT nom, prenom, emploi from emp WHERE comm < sal;
/*13 : Sélectionner les employés qui touchent éventuellement une commission et dans l’ordre croissant des commissions*/
SELECT * from emp WHERE comm > 1 ORDER BY comm ASC;
/*15 : Sélectionner les employés qui n’ont pas de chef*/
SELECT * from emp WHERE sup IS NULL;
/*17 : Sélectionner les employés dont la commission est inférieure au salaire. Vérifiez le résultat jusqu’à obtenir la bonne réponse*/
SELECT * from emp WHERE emploi = 'VENDEUR' and noserv = 6 and sal >= 9500;
/*19 : Sélectionner les directeurs qui ne sont pas dans le service 3*/
SELECT * from emp WHERE emploi = 'DIRECTEUR' and noserv != 3;
/*21 : Sélectionner les « directeurs et les techniciens » du service 1*/
SELECT * from emp WHERE emploi = 'DIRECTEUR' || emploi = 'TECHNICIEN';
/*23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et travaillant
dans le service 1*/
SELECT * from emp WHERE emploi != 'DIRECTEUR' && emploi != 'TECHNICIEN' && noserv = 1;
/*25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur*/
SELECT * from emp WHERE emploi != 'TECHNICIEN' && emploi != 'COMPTABLE'&& emploi != 'VENDEUR';
/*27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5*/
SELECT * from emp WHERE sup IS not NULL && noserv not in ('1','3','5');
/*29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros*/
SELECT * from emp WHERE sal BETWEEN '20000' and '40000';
/*31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN*/
SELECT * from emp where emploi = 'DIRECTEUR' and (noserv = 2 or noserv = 3 or noserv = 4 or noserv = 5);
/*33 : Sélectionner les employés dont le nom se termine par T*/
SELECT * from emp where nom LIKE '%T';
/*35 : Sélectionner les employés ayant exactement un E dans leur nom*/
SELECT * from emp where nom LIKE '%E%' and not nom like '%E%E%';
/*37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N*/
SELECT * from emp where nom like '_____N';
/*39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères*/
SELECT * from emp where nom not like '_____';
/*41 : Trier les employés (nom, prénom, n° de service , salaire) du service 3 par ordre de
salaire décroissant*/
SELECT nom, prenom, noserv, sal from emp WHERE noserv = 3 ORDER BY sal DESC;
/*43 : Trier les employés (nom, prénom, n° de service, salaire, emploi) par emploi, et pour chaque emploi par ordre décroissant de salaire.*/
SELECT nom, prenom, noserv, sal, emploi from emp ORDER BY emploi, sal DESC;
/*45 : Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre croissant de commission.*/
SELECT nom, prenom, noserv, comm from emp where noserv = 3 ORDER BY comm ASC;
/*47 : Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé pour tous les employés*/
SELECT nom, prenom, emploi, emp.noserv, serv.service from emp, serv WHERE serv.noserv = emp.noserv;
/*48 : Sélectionner le nom, l'emploi, le numéro de service, le nom du service pour tous les employés.*/
SELECT nom, prenom, emploi, emp.noserv, serv.service, serv.noserv from emp, serv WHERE serv.noserv = emp.noserv;
/*49 : Idem en utilisant des alias pour les noms de tables.*/
SELECT emp1.nom, emp1.prenom, emp1.emploi, emp1.noserv, serv1.service, serv1.noserv from emp emp1, serv serv1 WHERE serv1.noserv = emp1.noserv;
/*50 : Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table SERV pour tous les employés.*/
SELECT emp.nom, emp.emploi, serv.* from emp INNER JOIN serv ON serv.noserv = emp.noserv;
/*51 : Sélectionner les nom et date d'embauche des employés suivi des nom et date
d'embauche de leur supérieur pour les employés plus ancien que leur supérieur, dans l'ordre nom employés, noms supérieurs*/
SELECT e.noemp, e.nom, e.embauche, e.sup, s.noemp, s.nom, s.embauche from emp e INNER JOIN emp s ON e.sup = s.noemp;
/*52 : Sélectionner sans doublon les prénoms des directeurs et « les prénoms des techniciens du service 1 » avec un UNION*/
SELECT prenom, emploi from emp where emploi = 'DIRECTEUR' && emploi = 'TECHNICIEN'
UNION 
SELECT noserv from emp where noserv = 1;
/*53 : Sélectionner les numéros de services n’ayant pas d’employés sans une
jointure externe*/
SELECT noserv where serv where noserv not in (SELECT * from emp);
/*54 : Sélectionner les services ayant au moins un employé*/
SELECT noserv from serv where noserv in (SELECT * from emp);
/*55 : Sélectionner les employés qui travaillent à LILLE*/
SELECT * from emp INNER JOIN serv ON serv.noserv = emp.noserv where serv.ville = 'LILLE';
/*56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu*/
SELECT * from emp WHERE nom != 'DUBOIS' && sup = (SELECT sup from emp WHERE nom = 'DUBOIS');
/*57 : Sélectionner les employés embauchés le même jour que DUMONT.*/
SELECT * from emp where embauche = (SELECT embauche from emp where nom = 'DUMONT');
/*58 : Sélectionner les nom et date d'embauche des employés plus anciens que MINET, dans l’ordre des embauches*/
SELECT nom, embauche from emp where embauche < (SELECT embauche from emp where nom = 'MINET') ORDER BY embauche ASC;
/*59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens que tous les employés du service N°6. (Attention MIN)*/
SELECT nom, prenom, embauche from emp where embauche < (SELECT MIN(embauche) from emp where noserv = 6);
/*60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant des revenus mensuels.*/
SELECT nom, prenom, sal from emp where sal > (SELECT MIN(sal) from emp where noserv = 3) ORDER BY sal ASC;
/*61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des
personnes travaillant dans la même ville que HAVET*/
SELECT E.NOM, E.PRENOM, E.EMPLOI, E.SAL, S.VILLE 
FROM EMP E, SERV S 
WHERE E.NOSERV = S.NOSERV 
AND VILLE = (SELECT SERV.VILLE FROM SERV INNER JOIN EMP 
WHERE SERV.NOSERV = EMP.NOSERV AND EMP.NOM = 'HAVET');
/*62 : Sélectionner les employés du service 1, ayant le même emploi qu'un employé du 
service N°3*/
SELECT * from emp WHERE noserv = 1 AND emploi in (SELECT emploi from emp where noserv = 3);
/*63 : Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3.*/
SELECT * from emp WHERE noserv = 1 AND emploi not in (SELECT emploi from emp where noserv = 3);
/*64 : Sélectionner nom, prénom, emploi, salaire pour les employés ayant même emploi et un 
salaire supérieur à celui de CARON.*/
SELECT nom, prenom, emploi, sal from emp where emploi = (SELECT emploi from emp where nom = 'CARON') AND sal > (SELECT sal from emp where nom = 'CARON');
/*65 : Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du 
service des VENTES.*/
SELECT * from emp INNER JOIN serv on serv.noserv = emp.noserv AND emp.noserv = 1 AND emploi in
 (SELECT emploi from serv INNER JOIN emp where service = 'VENTES');
 /*66 : Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier le 
résultat dans l'ordre alphabétique des noms.*/
SELECT * from emp INNER JOIN serv ON serv.noserv = emp.noserv and serv.ville = 'LILLE' and emploi in (SELECT emploi from emp where nom = 'RICHARD') GROUP BY nom;
/*67 : Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur 
service (moyenne des salaires = avg(sal)), résultats triés par numéros de service.*/
SELECT NOM, PRENOM, EMPLOI, SAL, NOSERV FROM EMP WHERE SAL > (SELECT AVG(SAL) FROM EMP WHERE NOSERV IN (SELECT NOSERV FROM EMP)) ORDER BY NOSERV;
/*68 : Sélectionner les employés du service INFORMATIQUE embauchés la même année 
qu'un employé du service VENTES.*/
SELECT * from emp INNER JOIN serv on serv.noserv = emp.noserv where
serv.service = 'INFORMATIQUE' and to_char(embauche, 'YYYY') in 
(SELECT embauche from emp INNER JOIN serv on to_char(embauche, 'YYYY') where service = 'VENTES');
/*69 : Sélectionner le nom, l’emploi, la ville pour les employés qui ne travaillent pas dans le 
même service que leur supérieur hiérarchique direct.

On compare 2 tables*/

SELECT nom, emploi, ville from emp INNER JOIN serv ON serv.noserv = serv.noserv AND noserv <>
(SELECT noserv from emp where sup = noemp);
/*70 : Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des 
subalternes, trier le résultat suivant le revenu décroissant.*/
SELECT nom, prenom, noserv, sal from emp where sup IN (SELECT noemp from emp) order BY sal DESC;
/*71 :Sélectionner le nom, l’emploi, le revenu mensuel (nommé Revenu) avec deux décimales pour tous les employés, dans l’ordre des revenus décroissants.*/
SELECT nom, emploi, ROUND(sal,2) as Revenu from emp order by Revenu DESC;
/*72 : Sélectionner le nom, le salaire, commission des employés dont la commission représente plus que le double du salaire*/
SELECT nom, sal, comm * 2 as COMM_DOUBLE from emp where COMM_DOUBLE > sal;
/*73 : Sélectionner nom, prénom, emploi, le pourcentage de commission (deux décimales) par rapport au revenu mensuel ( renommé "% Commissions") , pour tous les vendeurs dans l'ordre décroissant de ce pourcentage.*/
SELECT NOM, PRENOM, EMPLOI, ROUND(COALESCE(COMM,0)/(SAL+COALESCE(COMM,0))*100,2) AS "% COMMISSION" FROM EMP WHERE EMPLOI = 'VENDEUR' ORDER BY "% COMMISSION";
/*74 : Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les vendeurs*/
SELECT nom, emploi, noserv, ROUND((sal + comm) * 12,0) as Salaire_Annuel from emp where emploi = 'VENDEUR';
/*75 : Sélectionner nom, prénom, emploi, salaire, commissions, revenu mensuel pour les employés des services 3,5,6*/
SELECT nom, prenom, sal, comm, sal + comm as salaire_mensuel from emp where noserv IN ('3','5','6');
/*76 : Idem pour les employés des services 3,5,6 en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par COMMISSIONS, SAL+IFNULL(COMM,0) par GAIN_MENSUEL*/
SELECT nom, prenom, sal as SALAIRE, comm as COMMISSION, sal + comm as GAIN_MENSUEL from emp where noserv IN ('3','5','6');
/*77 : Idem pour les employés des services 3,5,6 en remplaçant GAIN_ MENSUEL par GAINMENSUEL*/
SELECT nom, prenom, sal as SALAIRE, comm as COMMISSION, sal + comm as GAINMENSUEL from emp where noserv IN ('3','5','6');
/*78 : Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés des services 3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au centime près*/
SELECT nom, prenom, sal / 22 as SALAIRE_JOURNALIER, ROUND(sal / 8, 2) as SALAIRE_HORAIRE, comm as COMMISSION from emp where noserv IN ('3','5','6');
/*79 : Idem sans arrondir mais en tronquant.*/
SELECT nom, prenom, TRUNCATE(sal / 22) as SALAIRE_JOURNALIER, ROUND(sal / 22 / 8, 2) as SALAIRE_HORAIRE, comm as COMMISSION from emp where noserv IN ('3','5','6');
/*80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", 
les premières lettres des noms de villes doivent se trouver sur une même verticale.*/
SELECT CONCAT(service, " ----> ", ville) AS 'Service / Ville' from serv;
/*82 : Sélectionner les employés en remplaçant les noms par '*****' dans le service n°1, trier le résultat suivant le N° de service*/
SELECT noemp, CASE noserv 
when '1' THEN REPLACE(nom,nom,'*****') ELSE nomend as nom,prenom, noservfrom emp order by noserv;
/*84 : Sélectionner les employés embauchés en 1988*/
SELECT * from emp where embauche BETWEEN '1988-01-01' and '1988-12-31';
/*86 : Sélectionner les positions des premiers M et E dans les noms des employés*/
SELECT nom, POSITION('M' in nom) as "position m", POSITION('E' in nom) as "position E" from emp;
/*88 : Tracer un Histogramme des salaires avec nom, emploi, salaire triés dans l'ordre décroissant (max de l’histogramme avec 30 caractères).*/

/*90 : Même chose en écrivant la colonne embauche sous la forme ‘dd-mm-yy’, renommée embauche.*/
SELECT nom,emploi,to_char(embauche,'DD-MM-YYYY') as embauche FROM emp WHERE noserv=3;
/*92 : Même chose en écrivant la colonne embauche sous la forme ‘day dd month yyyy'*/
SELECT nom,emploi,to_char(embauche,'day dd month yyyy') as embauche FROM emp WHERE noserv=3;
/*94 : Même chose en écrivant la colonne embauche sous la forme ‘fm Day dd Month yyyy'*/
SELECT nom,emploi,to_char(embauche,'fm Day dd Month yyyy') as embauche FROM emp WHERE noserv=3;
/*96 : Sélectionner les employés avec leur ancienneté en mois dans l'entreprise.*/
SELECT nom, embauche,
(TIMESTAMPDIFF(MONTH, embauche, NOW()) DIV 12) * 12 + 
(TIMESTAMPDIFF(MONTH, embauche, NOW()) MOD 12) AS Nombre_de_mois
FROM emp;
/*98 : Sélectionner les employés ayant plus de 12 ans d’ancienneté.*/
/*100 : Depuis combien de jours êtes-vous nés ?*/
SELECT DATEDIFF(NOW(), '1987-05-18');
/*103 : Afficher la somme des salaires et la somme des commissions des vendeurs*/
SELECT SUM(sal) as Somme_Salaire, SUM(comm) as Somme_Comission from emp where emploi = 'VENDEUR';
/*104 : Afficher le plus haut salaire, le plus bas salaire, la différence entre les deux.*/
SELECT MAX(sal) as Max_Sal, MIN(sal) as Min_Sal, ROUND(MAX(sal) - MIN(sal),1) as Difference from emp;
/*106 : Afficher le nombre de lettres du service dont le nom est le plus court.*/
SELECT MIN(LENGTH(service)) from serv;
/*108 : Déterminer le nombre d'employés du service 3 qui reçoivent éventuellement une
commission.*/
SELECT COUNT(*) from emp where noserv = 3 and comm is not NULL;
/*110 : Déterminer le nombre d'employés du service N°3.*/
SELECT COUNT(*) from emp where noserv = 3;
/*112 : Pour chaque service donner le salaire annuel moyen de tous les employés qui ne sont ni 
président, ni directeur.*/
SELECT avg(sal*12) from emp where emploi <> 'PRESIDENT' and emploi <> 'DIRECTEUR';
/*116 : Sélectionner les services ayant au mois deux vendeurs.*/
SELECT EMPLOI, COUNT(EMPLOI) AS "EFFECTIF", SERVICE  FROM SERV INNER JOIN EMP ON EMP.NOSERV = SERV.NOSERV 
WHERE EMPLOI = 'VENDEUR' GROUP BY EMPLOI, SERVICE HAVING COUNT(EMPLOI) >= 2;
/*118 : Sélectionner les emplois ayant un salaire moyen supérieur au salaire moyen des directeurs. */
SELECT EMPLOI, AVG(SAL) AS "SALAIRE MOYEN" 
FROM EMP GROUP BY EMPLOI 
HAVING (AVG(SAL) > (SELECT AVG(SAL) 
FROM EMP WHERE EMPLOI = 'DIRECTEUR')); 

/*120 : Afficher l'effectif, la moyenne et le total pour les salaires et les commissions par emploi. */
SELECT EMPLOI, COUNT(EMPLOI) AS "EFFECTIF", 
ROUND(AVG(SAL),2) AS "MOYENNE DE SALAIRE", 
ROUND(SAL+COALESCE(COMM, 0), 2) AS "TOTAL DE REVENUS" 
FROM EMP GROUP BY EMPLOI; 

/*122 : Insérez vous comme nouvel employé embauché aujourd’hui au salaire que vous désirez. Validez. */
INSERT INTO EMP VALUES ('2500','Gacem','nassim','DEVOPS','1000', DATE(NOW()), 7500, 15000,'4');

/*124 : Insérer le salarié dont le nom est MOYEN, prénom Toto, no 1010, embauché le 12/12/99, supérieur 1000, pas de comm, service no 1, salaire vaut le salaire moyen des employés. Validez. */
SET @SALAIRE = (SELECT AVG(SAL) FROM EMP);
INSERT INTO EMP VALUES ('1010','MOYEN','TOTO','ASSISTANT','1000', '1999-12-12', @SALAIRE, NULL,'1');

/*126 : Supprimer l’employé créé à l’exercice 122 de votre voisin. */
DELETE FROM EMP WHERE NOEMP = 2500;
/*Augmenter son propre salaire de 1000 €. */
UPDATE EMP
SET SAL = SAL + 1000
WHERE NOEMP = 2500;







