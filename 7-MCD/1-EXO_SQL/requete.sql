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