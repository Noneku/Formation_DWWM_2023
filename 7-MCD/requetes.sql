/* 1 : Sélectionner toutes les colonnes de la table SERV. */
SELECT * from serv;

/* 3 : Sélectionner les colonnes SERVICE et NOSERV de la table SERV. */
SELECT service, noserv from serv;

/* 5 : Sélectionner les emplois de la table EMP */
SELECT emploi from emp;

/* 7 : Sélectionner les employés du service N°3. */
SELECT * from emp where noserv = 3;

/* 9 : Sélectionner les noms, numéros de service de tous les services dont le numéro est supérieur à 2. */
SELECT nom, noserv from emp where noserv > 2;

/* 11 : Sélectionner les employés dont la commission est inférieure au salaire. Vérifiez le résultat jusqu’à obtenir la bonne réponse. */
select * from emp where COALESCE (comm, 0) < sal;

/* 13 : Sélectionner les employés qui touchent éventuellement une commission et dans l’ordre croissant des commissions. */
SELECT * FROM emp where comm is not null and comm > 0 order by comm;

/* 15 : Sélectionner les employés qui n’ont pas de chef. */
select * from emp where sup is null;

/* 17 : Sélectionner les vendeurs du service 6 qui ont un revenu mensuel supérieur ou égal à 9500 €. */
select * from emp where sal >= 9500 and noserv = 6 and emploi = 'VENDEUR';

/* 19 : Sélectionner les directeurs qui ne sont pas dans le service 3. */
select * from emp where emploi = 'DIRECTEUR' and noserv != 3;

/* 21 : Sélectionner les « directeurs et les techniciens » du service 1. */
SELECT * FROM emp where (emploi = 'DIRECTEUR' or emploi = 'TECHNICIEN') and noserv = 1;

/* 23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et travaillant dans le service 1. */
SELECT * FROM emp where emploi not in ('DIRECTEUR', 'TECHNICIEN') and noserv = 1;

/* 25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur. */
select * from emp where emploi not in ('TECHNICIEN', 'COMPTABLE', 'VENDEUR');

/* 27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5. */
select * from emp where sup is not null and noserv not in (1, 3, 5);

/* 29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros. */
select * from emp where sal not between 20000 and 40000;

/* 31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN. */
select * from emp where emploi = 'DIRECTEUR' and noserv between 2 and 5;

/* 33 : Sélectionner les employés dont le nom se termine par T. */
select * from emp where nom like '%T';

/* 35 : Sélectionner les employés ayant exactement un E dans leur nom. */
SELECT * FROM emp where nom like '%E%' and nom not like '%E%E%';

/* 37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N. */
SELECT * FROM emp WHERE nom like '_____N';

/* 39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères. */
SELECT * FROM emp where nom not like '_____';

/* 41 : Trier les employés (nom, prénom, n° de service , salaire) du service 3 par ordre de salaire décroissant. */
select nom, prenom, noserv, sal from emp where noserv = 3 order by sal desc;

/* 43 : Trier les employés (nom, prénom, n° de service, salaire, emploi) par emploi, et pour chaque emploi par ordre décroissant de salaire. */ 
select nom, prenom, noserv, emploi, sal from emp order by emploi, sal desc;

/* 45 : Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre croissant de commission. */
select nom, prenom, noserv, comm from emp where noserv = 3 order by comm;

/* 47 : Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé pour tous les employés. */
select emp.nom, emp.prenom, emp.emploi, serv.service from emp inner join serv on emp.noserv = serv.noserv;

/* 48 : Sélectionner le nom, l'emploi, le numéro de service, le nom du service pour tous les employés. */
select emp.nom, emp.emploi, emp.noserv, serv.service from emp inner join serv on  emp.noserv = serv.noserv;

/* 49 : Idem en utilisant des alias pour les noms de tables. */
select e.nom, e.emploi, e.noserv, s.service from emp e, serv s where e.noserv = s.noserv;

/* 50 : Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table SERV pour tous les employés. */
select e.nom, e.emploi, s.* from emp e, serv s where e.noserv = s.noserv;

/* 51 : Sélectionner les noms et dates d'embauche des employés suivi des noms et dates d'embauche de leur supérieur pour les employés plus ancien que leur supérieur, dans l'ordre noms employés, noms supérieurs. */
select employe.nom, employe.embauche, superieur.nom, superieur.embauche
from emp employe, emp superieur
where employe.sup = superieur.noemp
and employe.embauche>superieur.embauche
order by employe.nom, superieur.nom;

/* 52 : Sélectionner sans doublon les prénoms des directeurs et « les prénoms des techniciens du service 1 » avec un UNION. */
SELECT DISTINCT PRENOM, EMPLOI, NOSERV FROM EMP WHERE EMPLOI = 'DIRECTEUR' UNION (SELECT PRENOM, EMPLOI, NOSERV FROM EMP WHERE EMPLOI = 'TECHNICIEN' AND NOSERV = 1);

/* 53 : Sélectionner les numéros de services n’ayant pas d’employés sans une jointure externe */
select noserv from serv where noserv not in (select distinct noserv from emp);

/* 54 : Sélectionner les services ayant au moins un employé. */
SELECT SERVICE FROM SERV WHERE NOSERV IN (SELECT DISTINCT NOSERV FROM EMP);

/* 55 : Sélectionner les employés qui travaillent à LILLE. */
SELECT EMP.*, SERV.VILLE FROM EMP, SERV WHERE EMP.NOSERV = SERV.NOSERV AND VILLE = 'LILLE';

/* 56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu. */
SELECT * FROM EMP WHERE SUP = (SELECT SUP FROM EMP WHERE NOM = 'DUBOIS') AND NOM != 'DUBOIS';

/* 57 : Sélectionner les employés embauchés le même jour que DUMONT */
SELECT * FROM EMP WHERE EMBAUCHE = (SELECT EMBAUCHE FROM EMP WHERE NOM = 'DUMONT'); 

/* 58 : Sélectionner les noms et dates d'embauche des employés plus anciens que MINET, dans l’ordre des embauches. */
SELECT NOM, EMBAUCHE FROM EMP WHERE EMBAUCHE < (SELECT EMBAUCHE FROM EMP WHERE NOM = 'MINET') ORDER BY EMBAUCHE; 

/* 59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens que tous les employés du service N°6. (Attention MIN) */
SELECT NOM, PRENOM, EMBAUCHE FROM EMP WHERE EMBAUCHE < (SELECT MIN(EMBAUCHE) FROM EMP WHERE NOSERV = 6); 

/* 60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant des revenus mensuels. */
SELECT NOM, PRENOM, SAL FROM EMP WHERE SAL > (SELECT MIN(SAL) FROM EMP WHERE NOSERV = 3) ORDER BY SAL; 

/* 61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des personnes travaillant dans la même ville que HAVET. */
SELECT E.NOM, E.PRENOM, E.EMPLOI, E.SAL, S.VILLE 
FROM EMP E, SERV S 
WHERE E.NOSERV = S.NOSERV 
AND VILLE = (SELECT SERV.VILLE FROM SERV INNER JOIN EMP 
WHERE SERV.NOSERV = EMP.NOSERV AND EMP.NOM = 'HAVET'); 

/* 62 : Sélectionner les employés du service 1, ayant le même emploi qu'un employé du service N°3. */
SELECT NOM, PRENOM, EMPLOI FROM EMP WHERE NOSERV = 1 AND EMPLOI IN (SELECT EMPLOI FROM EMP WHERE NOSERV = 3); 

/* 63 : Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3. */
SELECT NOM, PRENOM, EMPLOI FROM EMP WHERE NOSERV = 1 AND EMPLOI NOT IN (SELECT EMPLOI FROM EMP WHERE NOSERV = 3); 

/* 64 : Sélectionner nom, prénom, emploi, salaire pour les employés ayant le même emploi et un salaire supérieur à celui de CARON. */
SELECT NOM, PRENOM, EMPLOI, SAL FROM EMP WHERE EMPLOI = (SELECT EMPLOI FROM EMP WHERE NOM = 'CARON') AND SAL > (SELECT SAL FROM EMP WHERE NOM = 'CARON'); 

/* 65 : Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du service des VENTES. */
SELECT E.NOM, E.PRENOM, E.EMPLOI, S.SERVICE FROM EMP E, SERV S WHERE E.NOSERV = 1 AND S.SERVICE IN (SELECT SERVICE FROM SERV WHERE SERVICE = 'VENTES'); 

/* 66 : Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier le résultat dans l'ordre alphabétique des noms. */
SELECT DISTINCT E.NOM, E.PRENOM, E.EMPLOI, S.VILLE
FROM EMP E, SERV S
WHERE S.NOSERV = E.NOSERV AND E.EMPLOI IN (SELECT DISTINCT EMPLOI FROM EMP WHERE NOM = 'RICHARD') AND S.VILLE = 'LILLE' ORDER BY NOM;

/* 67 : Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur service (moyenne des salaires = avg(sal)), résultats triés par numéros de service. */
SELECT NOM, PRENOM, EMPLOI, SAL, NOSERV 
FROM EMP WHERE SAL > (SELECT AVG(SAL) 
FROM EMP WHERE NOSERV IN (SELECT NOSERV FROM EMP)) ORDER BY NOSERV; 

/* 68 : Sélectionner les employés du service INFORMATIQUE embauchés la même année qu'un employé du service VENTES. ( année -> oracle : to_char(embauche,’YYYY’)> MYSQL: DATE_FORMAT(embauche,’%Y’) */
SELECT E.NOM, E.PRENOM, E.EMPLOI, E.EMBAUCHE, S.SERVICE 
FROM EMP E INNER JOIN SERV S ON E.NOSERV = S.NOSERV 
WHERE SERVICE = 'INFORMATIQUE' AND DATE_FORMAT(EMBAUCHE, '%Y') IN (SELECT DATE_FORMAT(EMBAUCHE, '%Y') 
FROM EMP INNER JOIN SERV ON EMP.NOSERV = SERV.NOSERV WHERE SERVICE = 'VENTES'); 

/* 69 : Sélectionner le nom, l’emploi, la ville pour les employés qui ne travaillent pas dans le même service que leur supérieur hiérarchique direct. */
SELECT EMPLOYE.NOM, EMPLOYE.EMPLOI, EMPLOYE.NOSERV, VILLE, S.NOSERV 
FROM EMP AS EMPLOYE INNER 
JOIN EMP AS S ON EMPLOYE.SUP = S.NOEMP INNER 
JOIN SERV ON EMPLOYE.NOSERV = SERV.NOSERV 
AND EMPLOYE.NOSERV != (SELECT NOSERV FROM EMP WHERE EMP.NOEMP = EMPLOYE.SUP);

/* 70 : Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des subalternes, trier le résultat suivant le revenu décroissant. */
SELECT E.NOM, E.PRENOM, ROUND(E.SAL+COALESCE(E.COMM,0), 2) AS "REVENU", E.EMPLOI, S.SERVICE 
FROM EMP E 
INNER JOIN SERV S ON E.NOSERV = S.NOSERV 
WHERE NOEMP IN (SELECT DISTINCT SUP FROM EMP) ORDER BY E.SAL+COALESCE(E.COMM,0) DESC;

/* 71 :Sélectionner le nom, l’emploi, le revenu mensuel (nommé Revenu) avec deux décimales pour tous les employés, dans l’ordre des revenus décroissants. */
SELECT NOM, PRENOM, EMPLOI, ROUND(SAL+COALESCE(COMM,0),2) AS REVENU FROM EMP ORDER BY REVENU DESC; 

/* 72 : Sélectionner le nom, le salaire, commission des employés dont la commission représente plus que le double du salaire. */
SELECT NOM, PRENOM, SAL, COMM FROM EMP WHERE COMM > SAL*2;

/* 73 : Sélectionner nom, prénom, emploi, le pourcentage de commission (deux décimales) par rapport au revenu mensuel ( renommé "% Commissions") , pour tous les vendeurs dans l'ordre décroissant de ce pourcentage. */
SELECT NOM, PRENOM, EMPLOI, ROUND(COALESCE(COMM,0)/(SAL+COALESCE(COMM,0))*100,2) AS "% COMMISSION" 
FROM EMP WHERE EMPLOI = 'VENDEUR' ORDER BY "% COMMISSION";

/* 74 : Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les vendeurs. */
SELECT E.NOM, E.PRENOM, E.EMPLOI, SERVICE, ROUND(SAL+COALESCE(COMM,0)*12,0) AS "REVENU ANNUEL" 
FROM EMP E INNER JOIN SERV ON E.NOSERV = SERV.NOSERV WHERE EMPLOI = 'VENDEUR';

/* 75 : Sélectionner nom, prénom, emploi, salaire, commissions, revenu mensuel pour les employés des services 3,5,6 */
SELECT NOM, PRENOM, EMPLOI, SAL, COALESCE(COMM,0), ROUND(SAL+COALESCE(COMM,0),2) AS "REVENU MENSUEL", NOSERV 
FROM EMP WHERE NOSERV IN (3,5,6);

/* 76 : Idem pour les employés des services 3,5,6 en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par COMMISSIONS, SAL+IFNULL(COMM,0) par GAIN_MENSUEL. */
SELECT NOM, PRENOM, EMPLOI, SAL AS SALAIRE, COALESCE(COMM,0) AS COMMISSIONS, 
ROUND(SAL+COALESCE(COMM,0),2) AS "GAIN_MENSUEL", NOSERV 
FROM EMP WHERE NOSERV IN (3,5,6); 

/* 77 : Idem pour les employés des services 3,5,6 en remplaçant GAIN_ MENSUEL par GAIN MENSUEL */
SELECT NOM, PRENOM, EMPLOI, SAL AS SALAIRE, COALESCE(COMM,0) AS COMMISSIONS, 
ROUND(SAL+COALESCE(COMM,0),2) AS "GAIN MENSUEL", NOSERV 
FROM EMP WHERE NOSERV IN (3,5,6); 

/* 78 : Afficher le nom, l'emploi, les salaires journaliers et horaires pour les employés des services 3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au centime près. */
SELECT NOM, PRENOM, EMPLOI, (SAL/22) AS "SALAIRE JOURNALIER", ROUND(((SAL/22)/8),2) AS "SALAIRE HORAIRE", NOSERV 
FROM EMP WHERE NOSERV IN (3,5,6); 

/* 79 : Idem sans arrondir mais en tronquant. */
SELECT NOM, PRENOM, EMPLOI, TRUNCATE((SAL/22),2) AS "SALAIRE JOURNALIER", 
TRUNCATE(((SAL/22)/8),0) AS "SALAIRE HORAIRE", NOSERV FROM EMP WHERE NOSERV IN (3,5,6); 

/* 80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", les premières lettres des noms de villes doivent se trouver sur une même verticale. */
SELECT CONCAT(RPAD(SERVICE, (40-LENGTH(SERVICE)), " -"), "> ", VILLE) AS "SERVICE / VILLE" FROM SERV; 

/* 82 : Sélectionner les employés en remplaçant les noms par '*****' dans le service n°1, trier le résultat suivant le N° de service. */
UPDATE EMP SET NOM = '*****' WHERE NOSERV = 1;
/* OU : */
UPDATE EMP SET NOM = (REPLACE (NOM, NOM, '*****')) WHERE NOSERV = 1; 

/* 84 : Sélectionner les employés embauchés en 1988. */
SELECT * FROM EMP WHERE DATE_FORMAT(EMBAUCHE, '%Y') = '1988';

/* 86 : Sélectionner les positions des premiers M et E dans les noms des employés */
SELECT NOM, PRENOM, LOCATE('M', NOM) AS "POSITION DE LA LETTRE 'M'", LOCATE('E', NOM) AS "POSITION DE LA LETTRE 'E'" FROM EMP;

/* 88 : Tracer un Histogramme des salaires avec nom, emploi, salaire triés dans l'ordre décroissant (max de l’histogramme avec 30 caractères) */
SELECT NOM, PRENOM, EMPLOI, RPAD('€', (SAL/2000), '€') FROM EMP ORDER BY SAL DESC; 

/* 90 : Sélectionner nom, emploi, date d'embauche des employés du service 6 en écrivant la colonne embauche sous la forme ‘dd-mm-yy’, renommée embauche */
SELECT NOM, PRENOM, EMPLOI, NOSERV, DATE_FORMAT(EMBAUCHE, "%d-%m-%Y") AS "EMBAUCHE" FROM EMP WHERE NOSERV = 6; 

/* 92 : Même chose en écrivant la colonne embauche sous la forme ‘day dd month(abv) yy' */
SELECT NOM, PRENOM, EMPLOI, NOSERV, DATE_FORMAT(EMBAUCHE, "%W-%d-%b-%y") AS "EMBAUCHE" FROM EMP WHERE NOSERV = 6; 

/* 94 : Même chose en écrivant la colonne embauche sous la forme ‘Day-dd-Month-yyyy' */
SELECT NOM, PRENOM, EMPLOI, NOSERV, DATE_FORMAT(EMBAUCHE, "%W-%d-%M-%Y") AS "EMBAUCHE" FROM EMP WHERE NOSERV = 6; 

/* 96 : Sélectionner les employés avec leur ancienneté en mois dans l'entreprise */
SELECT NOM, PRENOM, TIMESTAMPDIFF(MONTH, EMBAUCHE, DATE(NOW())) AS "DATE D'ANCIENNETE" FROM EMP; 

/* 98 : Sélectionner les employés ayant plus de 12 ans d’ancienneté. */
SELECT NOM, PRENOM, TIMESTAMPDIFF(YEAR, EMBAUCHE, DATE(NOW())) AS "DATE D'ANCIENNETE" FROM EMP WHERE TIMESTAMPDIFF(YEAR, EMBAUCHE, DATE(NOW()))>12; 

/* 100 : Depuis combien de mois êtes-vous nés ? */
SELECT TIMESTAMPDIFF(MONTH, '1994-10-18', DATE(NOW()));  

/* 102 : Paramétrer la requête qui précède sur l’emploi. */
SELECT ROUND(AVG(SAL+COALESCE(COMM, 0)),2) AS "MOYENNE DE REVENU PAR EMPLOI", EMPLOI FROM EMP GROUP BY EMPLOI; 

/* 104 : Afficher le plus haut salaire, le plus bas salaire, la différence entre les deux. */
SELECT MAX(SAL) AS "SALAIRE MAX", MIN(SAL) AS "SALAIRE MIN", ROUND((MAX(SAL)-MIN(SAL)),2) AS "DIFF ENTRE SALAIRE MAX ET SALAIRE MIN" FROM EMP; 

/* 106 : Afficher le nombre de lettres du service dont le nom est le plus court. */
SELECT MIN(LENGTH(SERVICE)) AS "NOMBRE DE LETTRE DU SERVICE DONT LE NOM EST LE PLUS COURT" FROM SERV; 

/* 108 : Déterminer le nombre d'employés du service 3 qui reçoivent éventuellement une commission. */
SELECT COUNT(COMM) FROM EMP WHERE NOSERV = 3 AND COMM IS NOT NULL; 

/* 110 : Déterminer le nombre d'employés du service N°3. */
SELECT COUNT(NOM) FROM EMP WHERE NOSERV = 3;

/* 112 : Pour chaque service donner le salaire annuel moyen de tous les employés qui ne sont ni président, ni directeur. */
SELECT ROUND(AVG((SAL+COALESCE(COMM, 0))*12), 2) AS "SALAIRE ANNUEL MOYEN", SERVICE 
FROM EMP INNER JOIN SERV ON SERV.NOSERV = EMP.NOSERV 
WHERE EMPLOI != 'DIRECTEUR' AND EMPLOI != 'PRESIDENT' GROUP BY SERVICE; 

/* 114 :  Grouper les employés par service et par emploi à l'intérieur de chaque service, pour chaque groupe afficher l'effectif et le salaire moyen en remplaçant le numéro de service par le nom du service. */
SELECT COUNT(NOM) AS "EFFECTIF", ROUND(AVG(SAL), 2) AS "SALAIRE MOYEN", SERVICE, EMPLOI 
FROM EMP INNER JOIN SERV ON EMP.NOSERV = SERV.NOSERV 
GROUP BY SERVICE, EMPLOI ORDER BY AVG(SAL) DESC;

/* 116 : Sélectionner les services ayant au mois deux vendeurs. */ 
SELECT EMPLOI, COUNT(EMPLOI) AS "EFFECTIF", SERVICE 
FROM SERV INNER JOIN EMP ON EMP.NOSERV = SERV.NOSERV 
WHERE EMPLOI = 'VENDEUR' GROUP BY EMPLOI, SERVICE HAVING COUNT(EMPLOI) >= 2;

/* 118 : Sélectionner les emplois ayant un salaire moyen supérieur au salaire moyen des directeurs. */
SELECT EMPLOI, AVG(SAL) AS "SALAIRE MOYEN" 
FROM EMP GROUP BY EMPLOI 
HAVING (AVG(SAL) > (SELECT AVG(SAL) 
FROM EMP WHERE EMPLOI = 'DIRECTEUR')); 

/* 120 : Afficher l'effectif, la moyenne et le total pour les salaires et les commissions par emploi. */
SELECT EMPLOI, COUNT(EMPLOI) AS "EFFECTIF", 
ROUND(AVG(SAL),2) AS "MOYENNE DE SALAIRE", 
ROUND(SAL+COALESCE(COMM, 0), 2) AS "TOTAL DE REVENUS" 
FROM EMP GROUP BY EMPLOI; 

/* 122 : Insérez vous comme nouvel employé embauché aujourd’hui au salaire que vous désirez. Validez. */
INSERT INTO EMP VALUES ('2500','MOUACI','LEÏLA','DEVELOPPEUSE WEB','1000', DATE(NOW()), 7500, 15000,'4');

/* 124 : Insérer le salarié dont le nom est MOYEN, prénom Toto, no 1010, embauché le 12/12/99, supérieur 1000, pas de comm, service no 1, salaire vaut le salaire moyen des employés. Validez. */
SET @SALAIRE = (SELECT AVG(SAL) FROM EMP);
INSERT INTO EMP VALUES ('1010','MOYEN','TOTO','ASSISTANT','1000', '1999-12-12', @SALAIRE, NULL,'1');

/* 126 : Supprimer l’employé créé à l’exercice 122 de votre voisin. */
DELETE FROM EMP WHERE NOEMP = 2500;
/* Augmenter son propre salaire de 1000 €. */
UPDATE EMP
SET SAL = SAL + 1000
WHERE NOEMP = 2500;

/* 127 : Créer les tables EMP1 et SERV1 comme copie des tables EMP et SERV. */
CREATE TABLE EMP1 AS (SELECT * FROM EMP);
CREATE TABLE SERV1 AS (SELECT * FROM SERV);

/* 128 : Vérifier que la table PROJ n’existe pas. */
SELECT * FROM PROJ;

/* 129 : Créer une table PROJET avec les colonnes suivantes :
numéro de projet (noproj), type numérique 3 chiffres, doit contenir une valeur. 
nom de projet (nomproj), type caractère, longueur = 10
budget du projet (budget), type numérique, 6 chiffres significatifs et 2 décimales.
Vérifier l'existence de la table PROJET.
Faire afficher la description de la table PROJET.
C’était une erreur!!! Renommez la table PROJET en PROJ */
CREATE TABLE PROJ 
(
    NOPROJ INT(3) NOT NULL, 
    NOMPROJ VARCHAR(10),
    BUDGET FLOAT(6,2)
)

/* 130 : Insérer trois lignes de données dans la table PROJ : 
numéros des projets = 101, 102, 103
noms des projets = alpha, beta, gamma budgets = 250000, 175000, 950000
Afficher le contenu de la table PROJ.
Valider les insertions faites dans la table PROJ */
INSERT INTO PROJ (NOPROJ, NOMPROJ, BUDGET)
 VALUES
 ('101', 'ALPHA', 250000),
 ('102', 'BETA', 175000),
 ('103', 'GAMMA', 950000);
SELECT * FROM PROJ;

/* 132 :
Ajouter une colonne NOPROJ (type numérique) à la table EMP.
Afficher le contenu de la table EMP. */
ALTER TABLE EMP ADD (NOPROJ NUMERIC(3));
SELECT * FROM EMP;

/* 133 : Affecter les employés du service 2 et les directeurs au projet 101. */
UPDATE EMP SET NOPROJ = '101' WHERE NOSERV = 2 OR EMPLOI = 'DIRECTEUR'; 

/* 134 : Affecter les employés dont le numéro est supérieur à 1350 au projet 102, sauf ceux qui sont déjà affectés à un projet. */
UPDATE EMP SET NOPROJ = '102' WHERE NOEMP > 1350 AND NOPROJ IS NULL; 

/* 135 : Affecter les employés n'ayant pas de projet au projet 103. */
UPDATE EMP SET NOPROJ = '103' WHERE NOPROJ IS NULL; 

/* 136 : Sélectionner les noms d'employés avec le nom de leur projet et le nom de leur service. */
SELECT * FROM EMP INNER JOIN SERV ON EMP.NOSERV = SERV.NOSERV INNER JOIN PROJ ON EMP.NOPROJ = PROJ.NOPROJ; 

/* 138 : Créer la vue EMP1 de la table EMP contenant les colonnes : numéro d'employé, nom et emploi et limitée aux employés du service numéro 1 */
CREATE VIEW EMP2 (NOEMP, NOM, EMPLOI) AS SELECT NOEMP, NOM, EMPLOI FROM EMP WHERE NOSERV = 1;

/* 139 : Sélectionner cette vue EMP1 entièrement */
SELECT * FROM EMP2;

/* 140 : Sélectionner les vendeurs de la vue emp1 */
SELECT NOM FROM EMP2 WHERE EMPLOI = 'VENDEUR'; 

/* 141 : Modifier la table EMP en transformant l'emploi de NYS en comptable. */
UPDATE EMP SET EMPLOI = 'COMPTABLE' WHERE NOM = 'NYS';

/* 142 : Sélectionner la vue EMP1 */
SELECT * FROM EMP2;