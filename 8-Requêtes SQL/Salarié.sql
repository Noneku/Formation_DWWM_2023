/*1:Sélectionner toutes les colonnes de la table SERV.*/
select * from serv;

/*3:Sélectionner les colonnes SERVICE et NOSERV de la table SERV.*/
select service,noserv from serv;

/*5:Sélectionner les emplois de la table EMP.*/
select emploi from emp;

/*7 : Sélectionner les employés du service N°3.*/
select nom, prenom from emp where NOSERV=3;

/*9 : Sélectionner les noms, numéros de service de tous les services
dont le numéro est supérieur à 2 */
select service,noserv from serv where noserv>2;

/*11 : Sélectionner les employés dont la commission est inférieure
au salaire. Vérifiez le résultat jusqu'à obtenir la bonne rponse.*/
select nom,prenom, sal,comm from emp where comm < sal;

/*13 : Sélectionner les employés qui touchent éventuellement une
commission et dans l'ordre croissant des commissions.*/
select nom,prenom,comm from emp where comm is not null order by comm;

/*15 : Sélectionner les employés qui n'ont pas de chef.*/
select nom,prenom,sup from emp where sup is null;

/* 17 : Sélectionner les vendeurs du service 6 qui ont un revenu mensuel
supérieur ou égal à 9500 €.*/
select nom, sal+comm as revenu, noserv, emploi 
from emp where emploi='VENDEUR' and noserv=6 and sal+nvl(comm,0)>=9500;

/* 19 : Sélectionner les directeurs qui ne sont pas dans le service 3.*/
select * from emp where emploi='DIRECTEUR' and not noserv=3;

/*21 : Sélectionner les "directeurs et les techniciens" du service 1.*/
select * from emp where noserv=1 and emploi in ('DIRECTEUR','TECHNICIEN');

/*23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et
travaillant dans le service 1.*/
select * from emp where emploi not in ('DIRECTEUR','TECHNICIEN') and noserv=1;

/* 25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur.*/
select * from emp where emploi not in('TECHNICIEN','COMPTABLE','VENDEUR');

/*27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5.*/
select *  from emp where sup is not null and noserv not in(1,3,5);

/*29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros.*/
select nom, emploi,sal+nvl(comm,0) as revenu from emp
where sal+nvl(comm,0) not BETWEEN 20000 and 40000;

/* 31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN.*/
select * from emp where emploi= 'DIRECTEUR' and noserv between 2 and 5;

/*33 : Sélectionner les employés dont le nom se termine par T.*/
select nom, prenom, emploi, noserv from emp where nom like '%T';

/*35 : Sélectionner les employés ayant exactement un E dans leur nom.*/
select nom, prenom, emploi, noserv from emp
where nom like '%E%' and nom not like '%E%E%';

/*37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N.*/
select nom, prenom, emploi, noserv
from emp where nom like '_____N'

/* 39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères.*/
select nom, prenom, emploi, noserv
from emp
where nom not like '_____';

/*41 : Trier les employés (nom, prénom, n° de service , salaire) du service 3
par ordre de salaire décroissant.*/
select nom,prenom, noserv, sal from emp
where noserv=3 order by sal desc;

/*43 : Trier les employés (nom, prénom, n° de service, salaire, emploi) par
emploi, et pour chaque emploi par ordre décroissant de salaire.*/
select nom, prenom, noserv, sal, emploi
from emp order by  emploi, sal desc;

/*45 : Trier les employés (nom, prénom, n° de service, commission) du service
3 par ordre croissant de commission.*/
select nom,prenom, noserv, comm from emp
where noserv=3 order by comm;

/*47 : Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé
pour tous les employés.*/
select nom, prenom, emploi, service
from emp, serv where emp.noserv= serv.noserv;

/*48 : Sélectionner le nom, l'emploi, le numéro de service, le nom du service
pour tous les employés.*/
select emp.nom, emp.emploi, emp.noserv, serv.service
from emp, serv where emp.noserv= serv.noserv;

/*49 : Idem en utilisant des alias pour les noms de tables.*/
select e.nom, e.emploi, e.noserv, s.service
from emp e, serv s where e.noserv= s.noserv;

/*50 : Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table
SERV pour tous les employés.*/
select e.nom, e.emploi, s.noserv, s.service, s.ville
from emp e, serv s where e.noserv= s.noserv;

/*51 : Sélectionner les nom et date d'embauche des employés suivi des nom et
date d'embauche de leur supérieur pour les employés plus ancien que leur
supérieur, dans l'ordre nom employés, noms supérieurs.*/
select employe.nom, employe.embauche, superieur.nom, superieur.embauche
from emp employe, emp superieur where employe.sup= superieur.noemp
and employe.embauche<superieur.embauche order by employe.nom, superieur.nom;

/*52 : Sélectionner sans doublon les prénoms des directeurs et " les prénoms des
techniciens du service 1 " avec un UNION.*/
select prenom from emp where emploi='DIRECTEUR'
union select prenom from emp
where emploi='TECHNICIEN' and noserv=1;

/*53 : Sélectionner les numéros de services n’ayant pas d’employés sans une
jointure externe.*/
SELECT s.noserv FROM serv s
LEFT JOIN emp e ON s.noserv = e.noserv
WHERE e.noserv IS NULL;

/*54 : Sélectionner les services ayant au moins un employé.*/
SELECT DISTINCT s.service FROM serv s
INNER JOIN emp e ON s.noserv = e.noserv;

/*54 bis : Sélectionner les numéros de services ayant des employés sans une
jointure externe*/
SELECT distinct noserv FROM emp;

/*55 : Sélectionner les employés qui travaillent à LILLE.*/
SELECT emp. * FROM emp
JOIN serv ON emp.noserv = serv.noserv
WHERE ville = 'LILLE';

/*56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu.*/
SELECT * FROM emp
WHERE sup = (
    SELECT sup
    FROM emp
    WHERE nom = 'DUBOIS'
) AND nom != 'DUBOIS';

/*57 : Sélectionner les employés embauchés le même jour que DUMONT.*/
SELECT * FROM emp
WHERE embauche = (
    SELECT embauche
    FROM emp
    WHERE nom = 'DUMONT'
) AND nom != 'DUMONT';

/*58 : Sélectionner les nom et date d'embauche des employés plus anciens que MINET,
dans l’ordre des embauches.*/
SELECT nom, embauche FROM emp
WHERE embauche < (
    SELECT embauche
    FROM emp
    WHERE nom = 'MINET'
)
ORDER BY embauche;

/*59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens
que tous les employés du service N°6. (Attention MIN)*/
SELECT nom, Prenom, embauche FROM emp
WHERE embauche < (
    SELECT MIN(embauche)
    FROM emp
    WHERE noserv = 6
)
ORDER BY embauche;

/*60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent
plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant
des revenus mensuels.*/
SELECT nom, Prenom, sal
FROM emp
WHERE sal > (
    SELECT MAX(sal)
    FROM emp
    WHERE noserv = 3
)
ORDER BY sal;

/*61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des
personnes travaillant dans la même ville que HAVET.*/
SELECT emp.nom, emp.noserv, emp.emploi, emp.sal
FROM emp
JOIN serv ON emp.noserv = serv.noserv
WHERE serv.ville = (
    SELECT serv.ville
    FROM emp
    JOIN serv ON emp.noserv = serv.noserv
    WHERE emp.nom = 'HAVET');

/*62 : Sélectionner les employés du service 1, ayant le même emploi qu'un employé du
service N°3.*/
SELECT * FROM emp
WHERE noserv = 1 AND emploi IN (
    SELECT emploi
    FROM emp
    WHERE noserv = 3);

/*63 : Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3.*/
SELECT * FROM emp
WHERE noserv = 1 AND emploi NOT IN (
    SELECT emploi
    FROM emp
    WHERE noserv = 3); 

/*64 : Sélectionner nom, prénom, emploi, salaire pour les employés ayant même emploi
et un salaire supérieur à celui de CARON.*/
   SELECT nom, Prenom, emploi, sal
FROM emp
WHERE emploi = (
    SELECT emploi
    FROM emp
    WHERE nom = 'CARON'
) AND sal > (
    SELECT sal
    FROM emp
    WHERE nom = 'CARON');

/*65 : Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du
service des VENTES.*/
SELECT emp.* FROM emp
WHERE noserv = 1 AND emploi IN (
    SELECT emp.emploi
    FROM emp
    JOIN serv ON emp.noserv = serv.noserv
    WHERE serv.service = 'VENTES');

/*66 : Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier
le résultat dans l'ordre alphabétique des noms.*/
SELECT emp.*
FROM emp
JOIN serv ON emp.noserv = serv.noserv
WHERE serv.ville = 'LILLE' AND emploi = (
    SELECT emploi
    FROM emp
    WHERE nom = 'RICHARD')
ORDER BY nom;   

/*67 : Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur
service (moyenne des salaires = avg(sal)), résultats triés par numéros de service.*/
SELECT e1.* FROM emp e1
WHERE sal > (
    SELECT AVG(sal)
    FROM emp e2
    WHERE e1.noserv = e2.noserv)
ORDER BY noserv;

/*68 : Sélectionner les employés du service INFORMATIQUE embauchés la même
année qu'un employé du service VENTES.( année : to_char(embauche,’YYYY’) )*/
SELECT emp.* FROM emp
JOIN serv ON emp.noserv = serv.noserv
WHERE serv.service = 'INFORMATIQUE' AND EXTRACT(YEAR FROM embauche) IN (
    SELECT EXTRACT(YEAR FROM embauche)
    FROM emp
    JOIN serv ON emp.noserv = serv.noserv
    WHERE serv.service = 'VENTES');

/*69 : Sélectionner le nom, l’emploi, la ville pour les employés qui ne travaillent pas dans
le même service que leur supérieur hiérarchique direct.*/
SELECT e1.nom, e1.emploi, serv.ville
FROM emp e1
JOIN emp e2 ON e1.sup = e2.noemp
JOIN serv ON e1.noserv = serv.noserv
WHERE e1.noserv <> e2.noserv; 

/*70 : Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des
subalternes, trier le résultat suivant le revenu décroissant.*/
SELECT emp.nom, emp.prenom, serv.service, emp.sal + coalesce (emp.comm, 0) as revenu
FROM emp
JOIN serv ON emp.noserv = serv.noserv
WHERE emp.noemp IN (
    SELECT sup
    FROM emp
    WHERE sup IS NOT NULL)
ORDER BY revenu DESC;

/*71 :Sélectionner le nom, l’emploi, le revenu mensuel (nommé Revenu) avec deux décimales
pour tous les employés, dans l’ordre des revenus décroissants.*/
SELECT nom, emploi, ROUND(sal + COALESCE(comm, 0), 2) AS Revenu
FROM emp
ORDER BY Revenu DESC;

/*72 : Sélectionner le nom, le salaire, commission des employés dont la commission représente
plus que le double du salaire.*/
SELECT nom, sal, comm
FROM emp
WHERE comm > sal * 2;

/*73 : Sélectionner nom, prénom, emploi, le pourcentage de commission (deux décimales) par
rapport au revenu mensuel ( renommé "% Commissions") , pour tous les vendeurs dans
l'ordre décroissant de ce pourcentage.*/
SELECT nom, prenom, emploi, ROUND((comm / (sal + COALESCE(comm, 0))) * 100, 2) AS "% Commissions"
FROM emp
WHERE emploi = 'VENDEUR'
ORDER BY "% Commissions" DESC;

/*74 : Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les
vendeurs.*/
SELECT emp.nom, emp.emploi, serv.service, ROUND((emp.sal + COALESCE(emp.comm, 0)) * 12) AS "Revenu Annuel"
FROM emp
JOIN serv ON emp.noserv = serv.noserv
WHERE emp.emploi = 'VENDEUR';

/*75 : Sélectionner nom, prénom, emploi, salaire,commissions, revenu mensuel pour les employés
du service dont le numéro sera saisi au clavier.*/
select nom, prenom, emploi, sal, comm, sal + nvl(comm,0) as revenu
from emp
where noserv = noserv;

/*76 : Idem en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par
COMMISSIONS, SAL+NVL(COMM,0) par GAIN_MENSUEL.*/
select nom, prenom, emploi, sal as salaire, comm as commissions, sal+nvl(comm,0) as GAIN_MENSUEL
from emp where noserv= noserv;

/*77 : Idem en remplaçant GAIN_ MENSUEL par GAIN MENSUEL*/
select nom, prenom, emploi, sal as salaire, comm as commissions, sal+nvl(comm,0) as "GAIN MENSUEL"
from emp where noserv= noserv;

/*78 : Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés du service
dont le numéro sera saisi au clavier (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au
centime près.*/
select nom, emploi, round((sal/22),2) as "salaire journalier", round((sal/22/8),2) as "salaire horaire"
from emp where noserv= noserv;

/*79 : Idem sans arrondir mais en tronquant.*/
select nom, emploi, truncate((sal/22),2) as "salaire journalier", truncate((sal/21/8),2) as "salaire horaire"
from emp
where noserv= noserv;

/*80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", les premières lettres des
noms de villes doivent se trouver sur une même verticale.*/
select service, ville, rpad(service,(select max(length(service)) from serv),'-')|| '--->' || ville as "service-->ville"
from serv;

/*81 : Sélectionner nom, emploi pour les employés en ajoutant une colonne "CODE EMPLOI",
trier le résultat sur ce code.**** 0 signifie que le code emploi n’existe pas.*/
SELECT nom, emploi,
  CASE
    WHEN emploi = 'PRESIDENT' THEN 'A'
    WHEN emploi = 'SECRETAIRE' THEN 'B'
    WHEN emploi = 'VENDEUR' THEN 'C'
    WHEN emploi = 'TECHNICIEN' THEN 'D'
    WHEN emploi = 'COMPTABLE' THEN 'E'
    WHEN emploi = 'DIRECTEUR' THEN 'F'
    WHEN emploi = 'ANALYSTE' THEN 'G'
    WHEN emploi = 'PROGRAMMEUR' THEN 'H'
    WHEN emploi = 'PUPITREUR' THEN 'I'
    WHEN emploi = 'BALAYEUR' THEN 'J'
    ELSE '0'
  END AS "CODE EMPLOI"
FROM emp
ORDER BY "CODE EMPLOI";

/* 82 : Sélectionner les employés en remplaçant les noms par '*****' dans le service n°1, trier le
résultat suivant le N° de service.*/
SELECT 
  CASE WHEN noserv = 1 THEN '*****' ELSE nom END AS nom, prenom, emploi, sal, comm
FROM emp
ORDER BY noserv;

/*83 : Sélectionner les noms des services en affichant que les 5 premiers caractères.*/
SELECT LEFT(service, 5) AS Service_Names
FROM serv;
select substr(service,1,5)
from serv;

/*84 : Sélectionner les employés embauchés en 1988.*/
SELECT * FROM emp
WHERE EXTRACT(YEAR FROM embauche) = 1988;

/* 85 : Sélectionner les noms des employés sur 3 colonnes la première en majuscules, la seconde
avec l'initiale en majuscule et le reste en minuscules, la troisième en minuscules.*/
SELECT 
  UPPER(nom) AS Nom_Upper,
  CONCAT(UPPER(LEFT(nom, 1)), LOWER(SUBSTRING(nom, 2))) AS Nom_Initial,
  LOWER(nom) AS Nom_Lower
FROM emp;

/*86 : Sélectionner les positions des premiers M et E dans les noms des employés*/
SELECT nom,
  INSTR(nom, 'M') AS Position_M,
  INSTR(nom, 'E') AS Position_E
FROM emp;

/*87 : Afficher le nombre de lettres qui sert à écrire le nom de chaque service.*/
SELECT 
  service,
  LENGTH(service) AS Nombre_Lettres
FROM serv;

/*88 : Tracer un Histogramme des salaires avec nom, emploi, salaire triés dans l'ordre décroissant
(max de l’histogramme avec 30 caractères).*/
select nom, emploi,sal, rpad('#',sal/2000,'#') as histo
from emp;

/*89 : Sélectionner nom, emploi, date d'embauche des employés d’un service dont le numéro sera
saisi au clavier.*/
select nom, emploi, embauche, noserv
from emp
where noserv=noserv;

/*90 : Même chose en écrivant la colonne embauche sous la forme ‘dd-mm-yy’, renommée
embauche.*/
SELECT nom, emploi, DATE_FORMAT(embauche, '%d-%m-%y') AS "date d'embauche", noserv
from emp
where noserv=noserv;

/*91 : Même chose en écrivant la colonne embauche sous la forme ‘fm day dd month yyyy'*/
SELECT nom, emploi, DATE_FORMAT(embauche, 'fm %W %e %M %Y') AS "date d'embauche", noserv
from emp
where noserv=noserv;

/*92 : Même chose en écrivant la colonne embauche sous la forme ‘day dd month yyyy'*/
SELECT nom, emploi, DATE_FORMAT(embauche, 'Day %e Month %Y') AS "date d'embauche", noserv
FROM emp
WHERE noserv = noserv;

/*93 : Même chose en écrivant la colonne embauche sous la forme 'dy mon yy'*/
SELECT nom, emploi, DATE_FORMAT(embauche, '%a %b %y') AS "date d'embauche", noserv
FROM emp
WHERE noserv = noserv;

/*94 : Même chose en écrivant la colonne embauche sous la forme ‘fm Day dd Month yyyy'*/
SELECT nom, emploi, DATE_FORMAT(embauche, 'fm %W %e %M %Y') AS "date d'embauche", noserv
FROM emp
WHERE noserv = noserv;

/*95 : Sélectionner les employés avec leur ancienneté en jours dans l'entreprise.*/
SELECT nom, prenom, 
  DATEDIFF(CURDATE(), embauche) AS Anciennete_en_Jours
FROM emp;

/*96 : Sélectionner les employés avec leur ancienneté en mois dans l'entreprise.*/
SELECT nom, prenom, 
  TIMESTAMPDIFF(MONTH, embauche, CURDATE()) AS Anciennete_en_Mois
FROM emp;

/*97 : Sélectionner toutes les dates d’embauche majorées de 12 ans.(en rajoutant 12 ans à leurs anciennetés)*/
SELECT nom, prenom, emploi, embauche, DATE_ADD(embauche, INTERVAL 12 YEAR) AS anciennete
FROM emp
ORDER BY anciennete DESC;

/*98 : Sélectionner les employés ayant plus de 12 ans d’ancienneté.*/
SELECT nom, prenom, emploi, embauche, TIMESTAMPDIFF(MONTH, embauche, CURDATE()) AS anciennete
FROM emp
WHERE TIMESTAMPDIFF(MONTH, embauche, CURDATE()) > 12
ORDER BY anciennete;

/*99 : Depuis combien de jours êtes-vous nés ?*/
SELECT DATEDIFF(CURDATE(), STR_TO_DATE('04/10/1984', '%d/%m/%Y')) AS "Mon age en jours";

/*100 : Quand allez-vous avoir 10.000 jours ? (Pour les plus vieux, mettez la question au passé !)*/
SELECT DATE_ADD(DATE('1984-10-04'), INTERVAL 10000 DAY) AS "La date où j'ai eu 10 000 jours";

/*101 : Afficher la moyenne des revenus (avec commission) des vendeurs.*/
select avg(sal+nvl(comm,0)) as "moyenne salaire"
from emp
where emploi='VENDEUR';

/* 102 : Paramétrer la requête qui précède sur l’emploi.*/
SELECT AVG(sal + COALESCE(comm, 0)) AS "Moyenne des revenus"
FROM emp
WHERE emploi = emploi; 

/* 103 : Afficher la somme des salaires et la somme des commissions des
vendeurs.*/
select sum(sal) as "Toatl des salaires", sum(nvl(comm,0)) as "total des commissions"
from emp 
where emploi='VENDEUR';

/* 104 : Afficher le plus haut salaire, le plus bas salaire, la différence entre les
deux.*/
select max(sal) as "Salaire max", min(sal) as "Salaire Min", (max(sal)-min(sal)) as "ecart des salaires", 
STDDEV(sal) as x1, variance(sal) as x2
from emp;

/* 105 : Compter les employés embauchés chaque trimestre.*/
SELECT COUNT(noemp), EXTRACT(QUARTER FROM embauche) AS "Trimestre"
FROM emp
GROUP BY EXTRACT(QUARTER FROM embauche)
ORDER BY 2;

/*106 : Afficher le nombre de lettres du service dont le nom est le plus court.*/
select min(length(service))
from serv;

/*107 : Sélectionner nom, emploi, revenu mensuel de l'employé qui gagne le
plus.*/
select nom, emploi, (sal+nvl(comm,0)) as Revenu
from emp
where (sal+nvl(comm,0)) = (select max(sal+nvl(comm,0))
from emp);

/*108 : Déterminer le nombre d'employés du service 3 qui reçoivent
éventuellement une commission.*/
select count(noemp)
from emp
where noserv = 3
and comm is not null;

/* 109 : Déterminer le nombre d'emploi différents du service N°1.*/
select count(distinct emploi)
from emp
where noserv=1;

/*110 : Déterminer le nombre d'employés du service N°3.*/
select count(noemp)
from emp
where noserv=3;

/*111 : Pour chaque service, afficher son N° et le salaire moyen des employés du service
arrondi l’euro près.*/
select noserv,round(avg(sal),0) as "Salaire Moyen"
from emp
group by noserv
order by noserv;

/*112 : Pour chaque service donner le salaire annuel moyen de tous les employés qui ne
sont ni président, ni directeur.*/
select noserv,round(avg(sal*12),0) as "Salaire Annuel Moyen"
from emp
where emploi not in('PRESIDENT','DIRECTEUR')
group by noserv
order by noserv;

/*113 : Grouper les employés par service et par emploi à l'intérieur de chaque service,
pour chaque groupe afficher l'effectif et le salaire moyen.*/
select noserv, emploi, round(avg(sal),0) as "Salaire moyen", count(noemp) as effectif
from emp
group by noserv, emploi
order by noserv, emploi;

/*114 : Idem en remplaçant le numéro de service par le nom du service.*/
select service, emploi, 
count(noemp)as EFF, round(avg(sal),0) as SALMOY
from serv, emp
where serv.noserv=emp.noserv
group by service, emploi
order by service, emploi;

/*115 : Afficher l'emploi, l'effectif, le salaire moyen pour tout type d'emploi ayant plus
de deux représentants.*/
select emploi, count(noemp) as effectif, round(avg(sal+nvl(comm,0))) as Salaire_Moyenne
from emp
having count(noemp)>2
group by emploi;


/* 116 : Sélectionner les services ayant au mois deux vendeurs.*/
SELECT noserv, COUNT(noemp) AS effectif
FROM emp
WHERE emploi = 'VENDEUR'
GROUP BY noserv
HAVING COUNT(noemp) >= 2;

/*117 : Sélectionner les services ayant une commission moyenne supérieure au quart du
salaire moyen.*/
SELECT serv.service, ROUND(AVG(NVL(emp.comm, 0)), 0) AS "Commission moyenne", ROUND(AVG(emp.sal) / 4, 0) AS "Quart du salaire moyen"
FROM emp
INNER JOIN serv ON emp.noserv = serv.noserv
GROUP BY serv.service
HAVING AVG(NVL(emp.comm, 0)) > AVG(emp.sal) / 4;

/*118 : Sélectionner les emplois ayant un salaire moyen supérieur au salaire moyen des
directeurs.*/
SELECT emploi, ROUND(AVG(sal), 0) AS "Salaire moyen"
FROM emp
GROUP BY emploi
HAVING AVG(sal) > (SELECT AVG(sal) FROM emp WHERE emploi = 'DIRECTEUR');

/* 119 : Afficher, sur la même ligne, pour chaque service, le nombre d'employés ne
touchant pas de commission et le nombre d'employés touchant une commission.*/
select service, count(comm) as commOk, count(*)-count(comm)as commPasOk
from emp, serv
where emp.noserv=serv.noserv
group by service;

/*120 : Afficher l'effectif, la moyenne et le total pour les salaires et les commissions par
emploi.*/
select emploi,count(emploi) as effectif, avg(sal) as salMoy, sum(sal) as SalTotal, avg(comm) as commisMoy, sum(comm) as commisTotal
from emp
group by emploi;