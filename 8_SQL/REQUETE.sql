/*1 : Sélectionner toutes les colonnes de la table SERV.*/
SELECT* FROM serv;

/*3 : Sélectionner les colonnes SERVICE et NOSERV de la table SERV.*/
SELECT SERVICE,NOSERV FROM serv;

/*5 : Sélectionner les emplois de la table EMP.*/
SELECT emploi FROM EMP;

/*7 : Sélectionner les employés du service N°3.*/
SELECT * FROM emp where noserv = 3;

/*9 : Sélectionner les noms, numéros de service de tous les services dont le numéro est supérieur à 2.*/
SELECT nom, noserv FROM emp where noserv > 2;

/*11 : Sélectionner les employés dont la commission est inférieure au salaire. Vérifiez le résultat jusqu’à obtenir la bonne réponse.*/
SELECT * FROM emp where comm < sal;

/*13 : Sélectionner les employés qui touchent éventuellement une commission et dans l’ordre croissant des commissions.*/
SELECT *, sal FROM emp where comm is not null ORDER by comm ASC;

/*15 : Sélectionner les employés qui n’ont pas de chef.*/
SELECT * FROM emp where sup is Null;

/*17 : Sélectionner les vendeurs du service 6 qui ont un revenu mensuel supérieur ou égal à 9500 €.*/
select* from emp where noserv = 6 and sal > 9500 and emploi = 'VENDEUR';

/*19 : Sélectionner les directeurs qui ne sont pas dans le service 3.*/
select* from emp where noserv != 3 and emploi = 'DIRECTEUR';

/*21 : Sélectionner les « directeurs et les techniciens » du service 1.*/
select* from emp where noserv = 1 and (emploi = 'DIRECTEUR' or emploi = 'TECHNICIEN') ;

/*23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et travaillant dans le service 1.*/
select* from emp where  noserv = 1 and emploi not in ('DIRECTEUR', 'TECHNICIEN');

/*25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur.*/
select* from emp where emploi not in ('VENDEUR','TECHNICIEN', 'COMPTABLE');

/*27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5.*/
select * from emp where sup is not null and noserv not in(1,3,5);

/*29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros.*/
select * from emp where sal BETWEEN 20000 and 40000;

/*31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN.*/
select * from emp where emploi ='DIRECTEUR' and noserv BETWEEN 2 and 5;

/*33 : Sélectionner les employés dont le nom se termine par T.*/
select * from emp where nom like '%T';

/*35 : Sélectionner les employés ayant exactement un E dans leur nom.*/
select * from emp where nom not like '%E%E%' and nom like '%E%';

/*37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N.*/
select * from emp where nom like '______' and nom like '%N';

/*39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères.*/
select * from emp where nom not like '_____';

/*41 : Trier les employés (nom, prénom, n° de service , salaire) du service 3 par ordre de salaire décroissant.*/
select * from emp where noserv = 3 ORDER by sal DESC;

/*43 : Trier les employés (nom, prénom, n° de service, salaire, emploi) par emploi, et pour chaque emploi par ordre décroissant de salaire.*/
select * from emp  ORDER by emploi ASC, sal DESC;

/*45 : Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre croissant de commission.*/
select * from emp where noserv = 3  ORDER by comm ASC;

/*47 : Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé pour tous les employés.*/
select e.nom, e.prenom, e.emploi, s.service from emp e, serv s where e.noserv = s.noserv;

/*48 : Sélectionner le nom, l'emploi, le numéro de service, le nom du service pour tous les employés.*/
select e.nom, e.emploi, e.noserv, s.noserv, s.service from emp e, serv s where e.noserv = s.noserv;

/*49 : Idem en utilisant des alias pour les noms de tables.*/
select e.nom, e.prenom, e.emploi, s.service from emp e, serv s where e.noserv = s.noserv;

/*50 : Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table SERV pour tous les employés.*/
select e.nom, e.emploi, s.noserv, s.* from emp e, serv s where e.noserv = s.noserv;

/*51 : Sélectionner les nom et date d'embauche des employés suivi des nom et date d'embauche de leur supérieur pour les employés plus ancien que leur supérieur, dans l'ordre*/
select e.nom, e.prenom, e.embauche,e.sup , s.noemp, s.nom, s.prenom, s.embauche from emp e, emp s  WHERE e.sup = s.noemp and e.embauche < s.embauche;

/*52 : Sélectionner sans doublon les prénoms des directeurs et « les prénoms destechniciens du service 1 » avec un UNION.*/
select nom, prenom from emp where emploi ='DIRECTEUR' union select nom, prenom from emp where emploi ='TECHNICIEN' and noserv =1;

/*53 : Sélectionner les numéros de services n’ayant pas d’employés sans une jointure externe*/
select noserv from serv where noserv not in (select distinct noserv from emp);

/*54 : Sélectionner les services ayant au moins un employé.*/
select service from serv where noserv in (select distinct noserv from emp);

/*55 : Sélectionner les employés qui travaillent à LILLE. SOLUTION N2*/
SELECT E.*, S.VILLE FROM EMP E JOIN SERV S ON E.NOSERV = S.NOSERV WHERE VILLE = 'LILLE';

/*56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu.*/
SELECT E.*, S.NOM, S.PRENOM FROM EMP E JOIN EMP S ON E.SUP = S.NOEMP WHERE E.SUP = (SELECT E.SUP FROM EMP E WHERE E.NOM ='DUBOIS') AND E.NOM !='DUBOIS' ;

/*57 : Sélectionner les employés embauchés le même jour que DUMONT.*/
SELECT * FROM EMP WHERE EMBAUCHE = (SELECT EMBAUCHE FROM EMP WHERE NOM ='DUMONT');

/*58 : Sélectionner les nom et date d'embauche des employés plus anciens que MINET, dans l’ordre des embauches.*/
SELECT NOM, EMBAUCHE FROM EMP WHERE EMBAUCHE < (SELECT EMBAUCHE FROM EMP WHERE NOM ='MINET') ORDER BY EMBAUCHE ASC;

/*59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens que tous les employés du service N°6. (Attention MIN)*/
SELECT NOM, PRENOM, EMBAUCHE, NOSERV FROM EMP WHERE EMBAUCHE < (SELECT MIN(EMBAUCHE) FROM EMP WHERE NOSERV = 6) ORDER BY EMBAUCHE ASC;

/*60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant des revenus mensuels.*/
SELECT NOM, PRENOM, SAL FROM EMP WHERE SAL >(SELECT MIN(SAL) FROM EMP WHERE NOSERV = 3) ORDER BY SAL ASC;

/*61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des personnes travaillant dans la même ville que HAVET.*/
SELECT E.NOM, E.PRENOM, E.NOSERV, E.EMPLOI, E.SAL, S.VILLE  
FROM EMP E 
JOIN SERV S 
ON E.NOSERV = S.noserv 
WHERE S.VILLE = (
    SELECT S.VILLE 
    FROM SERV S, EMP E 
    WHERE E.NOSERV = S.noserv 
    AND E.NOM = 'HAVET');

/*62 : Sélectionner les employés du service 1, ayant le même emploi qu'un employé du service N°3.*/
SELECT * FROM EMP WHERE EMPLOI IN (SELECT EMPLOI FROM EMP WHERE NOSERV = 3) AND NOSERV = 1;

/*63 : Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3.*/
SELECT * FROM EMP WHERE EMPLOI NOT IN (SELECT EMPLOI FROM EMP WHERE NOSERV = 3) AND NOSERV = 1;

/*64 : Sélectionner nom, prénom, emploi, salaire pour les employés ayant même emploi et un salaire supérieur à celui de CARON.*/
SELECT * FROM EMP WHERE EMPLOI = (
    SELECT EMPLOI FROM EMP WHERE NOM ='CARON') AND SAL > (
        SELECT SAL FROM EMP WHERE NOM ='CARON');

/*65 : Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du service des VENTES.*/
SELECT * FROM EMP E WHERE EMPLOI IN (
    SELECT EMPLOI FROM EMP E, SERV S WHERE E.NOSERV = S.NOSERV AND S.SERVICE = 'VENTES') 
AND NOSERV = 1;

/*66 : Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier le résultat dans l'ordre alphabétique des noms.*/
SELECT *, S.VILLE FROM EMP E, serv S WHERE E.NOSERV = S.noserv AND EMPLOI IN (
    SELECT EMPLOI FROM EMP E WHERE E.NOM = 'RICHARD')
AND S.VILLE = 'LILLE';

/*67 : Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur service (moyenne des salaires = avg(sal)), résultats triés par numéros de service.*/
select  * from emp e join serv s  on e.noserv = s.noserv
where sal > (select AVG(sal)  from emp group by s.service) order by e.noserv;

/*68 : Sélectionner les employés du service INFORMATIQUE embauchés la même année qu'un employé du service VENTES.( année -> oracle : to_char(embauche,’YYYY’)> MYSQL: DATE_FORMAT(embauche,’%Y’)*/
select  * from emp e join serv s  on e.noserv = s.noserv WHERE DATE_FORMAT(embauche,"%Y") IN (
    SELECT DATE_FORMAT(embauche,"%Y") FROM EMP E, SERV S 
    WHERE E.NOSERV = S.noserv AND S.service ='VENTES')
and S.service ='INFORMATIQUE';

/*69 : Sélectionner le nom, l’emploi, la ville pour les employés qui ne travaillent pas dans
le même service que leur supérieur hiérarchique direct.*/ pas Fait 

select employe.nom,employe.emploi, employe.noserv,ville,s.noserv from emp as employe INNER JOIN emp as s on employe.sup = s.noemp inner join serv on employe.noserv=serv.noserv and employe.noserv != (select noserv from emp where emp.noemp=employe.sup);


/*70 : Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des subalternes, trier le résultat suivant le revenu décroissant.*/

SELECT E.NOM, E.PRENOM, ROUND(E.SAL+COALESCE(E.COMM,0), 2) AS "REVENU", E.EMPLOI, S.SERVICE FROM EMP E INNER JOIN SERV S ON E.NOSERV = S.NOSERV  WHERE NOEMP IN (SELECT DISTINCT SUP FROM EMP) ORDER BY E.SAL+COALESCE(E.COMM,0) DESC;


/*71 :Sélectionner le nom, l’emploi, le revenu mensuel (nommé Revenu) avec deux décimales pour tous les employés, dans l’ordre des revenus décroissants.*/
select nom, prenom, emploi, round((sal + nvl(COMM,0)),2) as revenu from emp order by revenu DESC;

/*72 : Sélectionner le nom, le salaire, commission des employés dont la commission représente plus que le double du salaire.*/
select nom, prenom, sal, comm  from emp where comM > (SAL + SAL);

/*73 : Sélectionner nom, prénom, emploi, le pourcentage de commission (deux décimales) par rapport au revenu mensuel ( renommé "% Commissions") , pour tous les vendeurs dans l'ordre décroissant de pourcentage.*/
select nom, prenom, emploi, ROUND((NVL(COMM, 0) /(SAL + (NVL(COMM,0))) * 100),2) as '% COMMISSIONS' from emp order by '% COMMISSIONS' DESC;

/*74 : Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les vendeurs.*/
select nom, prenom, emploi, S.SERVICE, ROUND(SAL) from emp E, SERV S WHERE E.NOSERV = S.NOSERV;


/*75 : Sélectionner nom, prénom, emploi, salaire, commissions, revenu mensuel pour les employés des services 3,5,6*/
select nom, prenom, emploi,SAL, COMM, E.NOSERV, (SAL + NVL(COMM, 0)) AS 'REVENU MENSUEL' from emp E, SERV S WHERE E.NOSERV = S.NOSERV AND (E.NOSERV = 5 OR E.NOSERV = 3 or E.NOSERV = 6);

/*76 : Idem pour les employés des services 3,5,6 en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par COMMISSIONS, SAL+IFNULL(COMM,0) par GAIN_MENSUEL.*/
select nom, prenom, emploi,SAL AS SALAIRE, COMM AS COMMISSIONS, E.NOSERV, (SAL + IFNULL(COMM, 0)) AS 'GAIN_MENSUEL' from emp E, SERV S WHERE E.NOSERV = S.NOSERV AND (E.NOSERV = 5 OR E.NOSERV = 3 or E.NOSERV = 6);

/*77 : Idem pour les employés des services 3,5,6 en remplaçant GAIN_ MENSUEL par GAINMENSUEL*/
select nom, prenom, emploi,SAL AS SALAIRE, COMM AS COMMISSIONS, E.NOSERV, (SAL + IFNULL(COMM, 0)) AS GAINMENSUEL from emp E, SERV S WHERE E.NOSERV = S.NOSERV AND (E.NOSERV = 5 OR E.NOSERV = 3 or E.NOSERV = 6);


/*78 : Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés des services 3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au centime près.*/
select nom, prenom, emploi, SAL/22 AS SAL_J, ROUND((SAL/22/8),2) AS 'SAL_H' FROM EMP E, SERV S WHERE E.NOSERV = S.NOSERV AND (E.NOSERV = 5 OR E.NOSERV = 3 or E.NOSERV = 6);

/*79 : Idem sans arrondir mais en tronquant.*/
select nom, prenom, emploi, TRUNCATE(SAL/22,2) AS SAL_J, TRUNCATE(SAL/22/8,2) AS 'SAL_H' FROM EMP E, SERV S WHERE E.NOSERV = S.NOSERV AND (E.NOSERV = 5 OR E.NOSERV = 3 or E.NOSERV = 6);

/*80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", les premières lettres des noms de villes doivent se trouver sur une même verticale.
SELECT GROUP_CONCAT(SERVICE,'---->',VILLE) FROM SERV GROUP BY SERVICE;

/*82 : Sélectionner les employés en remplaçant les noms par '*****' dans le service n°1, trier le résultat suivant le N° de service.*/
UPDATE emp
SET NOM = '*****'
WHERE NOSERV = 1;

/*84 : Sélectionner les employés embauchés en 1988.*/
SELECT * FROM EMP WHERE DATE_FORMAT(EMBAUCHE,"%Y") = 1988;

/*86 : Sélectionner les positions des premiers M et E dans les noms des employés*/
SELECT *, LOCATE('M',nom) AS P_M, LOCATE('E',nom) AS P_E FROM emp;

/*88 : Tracer un Histogramme des salaires avec nom, emploi, salaire triés dans l'ordre décroissant (max de l’histogramme avec 30 caractères).*/
SELECT NOM, EMPLOI, SAL, lPAD('@',SAL/2000,'@') FROM emp;

/*90 : Même chose en écrivant la colonne embauche sous la forme ‘dd-mm-yy’, renommée embauche.*/
SELECT NOM, EMPLOI, DATE_FORMAT(EMBAUCHE,"%y-%m-%d") FROM emp;

/*92 : Même chose en écrivant la colonne embauche sous la forme ‘day dd month(abv) yy'*/
SELECT NOM, EMPLOI, DATE_FORMAT(EMBAUCHE,"%W %d %b %y") FROM emp;

/*94 : Même chose en écrivant la colonne embauche sous la forme ‘Day-dd-Month-yyyy'*/
SELECT NOM, EMPLOI, DATE_FORMAT(EMBAUCHE,"%w %D %M %Y") FROM emp;

/*96 : Sélectionner les employés avec leur ancienneté en mois dans l'entreprise.*/
SELECT *, TIMESTAMPDIFF(MONTH,EMBAUCHE,'2023-06-28') FROM EMP;

/*98 : Sélectionner les employés avec leur ancienneté en mois dans l'entreprise.*/
SELECT *, TIMESTAMPDIFF(YEAR,EMBAUCHE,'2023-06-28') FROM EMP WHERE TIMESTAMPDIFF(MONTH,EMBAUCHE,'2023-06-28')>12;

/*100 : Depuis combien de mois êtes-vous nés ?*/
SELECT TIMESTAMPDIFF(MONTH,'1995-02-02','2023-06-28');

/*102 : Paramétrer la requête qui précède sur l’emploi.*/
SELECT EMPLOI, ROUND(AVG(SAL+ NVL(COMM,0)),2) FROM EMP GROUP BY EMPLOI;

/*104 : Afficher le plus haut salaire, le plus bas salaire, la différence entre les deux.*/
SELECT MAX(SAL), MIN(SAL),ROUND(MAX(SAL)-MIN(SAL),2) AS DIFFERENCE FROM EMP;

/*106 : Afficher le nombre de lettres du service dont le nom est le plus court.*/
SELECT MIN(LENGTH(SERVICE)) FROM SERV;

/*108 : Déterminer le nombre d'employés du service 3 qui reçoivent éventuellement unecommission.*/
SELECT COUNT(EMPLOI) FROM EMP WHERE NOSERV = 3 AND COMM IS NOT NULL;

/*110 : Déterminer le nombre d'employés du service N°3.*/
SELECT COUNT(EMPLOI) FROM EMP WHERE NOSERV = 3;

/*112 : Pour chaque service donner le salaire annuel moyen de tous les employés qui ne sont ni président, ni directeur.*/
SELECT NOM, SERVICE, EMPLOI, AVG((SAL+ NVL(COMM,0))*12) FROM EMP E INNER JOIN SERV S  ON E.NOSERV = S.noserv WHERE  E.EMPLOI <> 'PRESIDENT' AND E.EMPLOI <> 'DIRECTEUR' GROUP BY SERVICE;

/*114 : Grouper les employés par service et par emploi à l'intérieur de chaque NOM DE service, pour chaque groupe afficher l'effectif et le salaire moyen.*/
SELECT S.NOSERV, S.SERVICE, E.EMPLOI, AVG(SAL) FROM EMP E, SERV S WHERE E.NOSERV = S.NOSERV GROUP BY S.SERVICE, E.EMPLOI ORDER BY S.NOSERV;

/*116 : Sélectionner les services ayant au mois deux vendeurs.*/
SELECT SERVICE, COUNT(EMPLOI) FROM EMP E, SERV S WHERE E.NOSERV = S.NOSERV AND EMPLOI = 'VENDEUR'  GROUP BY EMPLOI, SERVICE HAVING COUNT(E.EMPLOI)>=2 ;

/*118 : Sélectionner les emplois ayant un salaire moyen supérieur au salaire moyen des directeurs.*/
SELECT EMPLOI, AVG(SAL) FROM EMP  GROUP BY EMPLOI HAVING (AVG(SAL) > (SELECT AVG(SAL) FROM EMP WHERE EMPLOI = 'DIRECTEUR'));

/*120 : Afficher l'effectif, la moyenne et le total pour les salaires et les commissions par emploi.*/
SELECT EMPLOI, COUNT(EMPLOI), AVG(SAL), SUM(SAL + NVL(COMM,0)) FROM emp GROUP BY EMPLOI;

/*122 : Insérez vous comme nouvel employé embauché aujourd’hui au salaire que vous désirez. Valider.*/
INSERT INTO EMP VALUES ('2000','BALLOY','JULIEN','WEB_DEVELOPPEUR','1000','2023-06-28',45000,35000,'4');

/*124 : Insérer le salarié dont le nom est MOYEN, prénom Toto, no 1010, embauché le 12/12/99,supérieur 1000, pas de comm, service no 1, salaire vaut le salaire moyen des employés.Valider*/
SET @SALAIRE = (SELECT AVG(SAL) FROM EMP);
INSERT INTO EMP VALUES ('1010','MOYEN','TOTO','ASSISTANT','1000', '1999-12-12', @SALAIRE, NULL,'1');

/*126 : Les verrous. Supprimer l’employé créé à l’exercice 122 de votre voisin. Ne pas valider. Vérifiez tous les deux le contenu de la table. Demander à votre voisin d’augmenter son propre salaire de 1000 €. Valider la suppression. Chacun vérifie l’action. Refaire l’exercice en échangeant les rôles.*/
DELETE FROM EMP WHERE NOEMP = 2000;
UPDATE EMP
SET SAL = SAL + 1000
WHERE NOEMP = 2000;

/*127 : Créer les tables EMP1 et SERV1 comme copie des tables EMP et SERV.*/
CREATE TABLE EMP1  AS SELECT * FROM EMP;
CREATE TABLE SERV1  AS SELECT * FROM SERV;

/*128 : Vérifier que la table PROJ n’existe pas*/
SELECT * FROM PROJ;


/*130 : Insérer trois lignes de données dans la table PROJ: 
numéros des projets = 101, 102,103 
noms des projets = alpha, beta, gamma 
budgets = 250000, 175000, 950000
Afficher le contenu de la table PROJ.
Valider les insertions faites dans la table PROJ.*/

CREATE TABLE PROJ
(
    NOPROJ NUMERIC (3),
    NOMPROJ VARCHAR(100),
    BUDGET VARCHAR(8,2)
)

INSERT INTO PROJ (NOPROJ, NOMPROJ, BUDGET)
 VALUES
 ('101', 'ALPHA', 250000),
 ('102', 'BETA', 175000),
 ('103', 'GAMMA', 950000);
 

132 : Ajouter une colonne NOPROJ (type numérique) à la table EMP : Afficher le contenu de la table EMP
ALTER TABLE EMP
ADD NOPROJ NUMERIC(3);
SELECT * FROM EMP;


/*133 : Affecter les employés du service 2 et les directeurs au projet 101.*/
UPDATE EMP
SET NOPROJ = 101
WHERE NOSERV = 2 OR EMPLOI = 'DIRECTEUR'

/*134 : Affecter les employés dont le numéro est supérieur à 1350 au projet 102, sauf ceux qui sont déjà affectés à un projet.*/
UPDATE EMP
SET NOPROJ = 102
WHERE NOEMP > 1350 AND NOPROJ IS NULL

/*135 : Affecter les employés n'ayant pas de projet au projet 103*/
UPDATE EMP
SET NOPROJ = 103
WHERE NOPROJ IS NULL

/*136 : Sélectionner les noms d'employés avec le nom de leur projet et le nom de leur service.*/
SELECT NOM, NOMPROJ, SERVICE FROM EMP E, SERV S, PROJ P WHERE E.NOSERV = S.NOSERV AND E.NOPROJ = P.NOPROJ;

/*138 : Créer la vue EMP1 de la table EMP contenant les colonnes: numéro d'employé, nom et emploi et limitée aux employés du service numéro 1*/
CREATE VIEW EMP2 AS
SELECT NOEMP, NOM, EMPLOI 
FROM EMP 
WHERE NOSERV = 1

/*139 : Sélectionner cette vue EMP2 entièrement*/
SELECT * FROM EMP2;

/*140 : Sélectionner les vendeurs de la vue emp1.*/
SELECT NOM, EMPLOI FROM EMP2 WHERE EMPLOI ='VENDEUR';

/*141 : Modifier la table EMP en transformant l'emploi de NYS en comptable.*/
UPDATE EMP 
SET EMPLOI ='COMPTABLE'
WHERE NOM ='NYS'

/*142 : Sélectionner la vue EMP1.*/
SELECT * FROM EMP2