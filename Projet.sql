CREATE TABLE IF NOT EXISTS Lieu(
	idLieu serial primary key,
	nom_rue varchar(30) not null,
	num_rue int,
	intervalle_rue int4range
);

CREATE TABLE IF NOT EXISTS habitant(
	idHabitant serial primary key,
	nom varchar(20)
);

CREATE TYPE Tprob AS ENUM('panne d’éclairage public', 'chaussée abîmée', 'trottoir abîmé', 'égout bouché', 'arbre à tailler', 'voiture ventouse', 'autre');

CREATE TYPE Tniv AS ENUM ('faible', 'moyen', 'élevé', 'très urgent');

CREATE TABLE IF NOT EXISTS Probleme(
	idProbleme serial primary key,
	idLieu int references Lieu(idLieu),
	nom_probleme Tprob not null,
	description_autre text,
	niveau_prob Tniv default 'faible',
	date date default current_date,
	nb_nonAnonyme int,
	nb_Anonyme int,
	etat_probleme varchar(30) default 'en attente'
		check(etat_probleme in ('en attente', 'résolu')),
	idHabitant int references habitant(idHabitant)
);

CREATE TABLE IF NOT EXISTS Eclairage(
	idEclairage serial primary key,
	jour date default current_date,
	heure time default current_time,
	duree int,
	etat_eclairage varchar(20) default 'éteint'
		check(etat_eclairage in ('allumé', 'éteint')),
	idHabitant int references habitant(idHabitant)
);

CREATE TABLE IF NOT EXISTS Agent(
	idAgent serial primary key,
	nom varchar(20) not null,
	mail varchar(30) not null
);

CREATE TABLE IF NOT EXISTS Responsable(
	idResponsable serial primary key,
	nom varchar(20) not null,
	mail varchar(30) not null
);

CREATE TABLE IF NOT EXISTS Modification(
	idModification serial primary key,
	idProbleme int references Probleme(idProbleme),
	idAgent int references Agent(idAgent),
	date_modif date default current_date
);

