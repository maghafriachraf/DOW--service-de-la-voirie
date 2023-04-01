CREATE TABLE IF NOT EXISTS Lieu(
	idLieu serial primary key,
	nom_rue varchar(30) not null,
	num_rue int
		check (num_rue > 0),
	intervalle_rue int4range
		check (intervalle_rue > int4range(0,0))
);

CREATE TABLE IF NOT EXISTS habitant(
	idHabitant serial primary key,
	nom varchar(20)
);
CREATE TABLE IF NOT EXISTS Probleme(
	idProbleme serial primary key,
	idLieu int references Lieu(idLieu),
	nom_probleme varchar(30) not null
		check (nom_probleme in ('panne d’éclairage public', 'chaussée abîmée', 'trottoir abîmé', 'égout bouché', 'arbre à tailler', 'voiture ventouse', 'autre')),
	description_autre text,
	niveau_prob varchar(20) default 'faible' not null
				check (niveau_prob in ('faible', 'moyen', 'élevé', 'très urgent')),
	date timestamp default current_timestamp,
	nb_nonAnonyme int,
	nb_Anonyme int,
	nb_totale int,
	etat_probleme varchar(30) default 'en attente'
		check(etat_probleme in ('en attente', 'résolu')),
	idHabitant int references habitant(idHabitant)
);

CREATE TABLE IF NOT EXISTS Eclairage(
	idEclairage serial primary key,
	idLieu int references Lieu(idLieu),
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
	date_modif timestamp default current_timestamp
);

CREATE OR REPLACE FUNCTION changement_niveau_urgence(nb int,niv varchar(20)) RETURNS VOID AS $$
BEGIN
	if(nb=10 and niv<>'très urgent') then
		case niv
            when 'faible' then niv := 'moyen';
            when 'moyen' then niv := 'élevé';
            when 'élevé' then niv := 'très urgent';
        end case;
		nb := 0;
	end if;
END;
$$ LANGUAGE plpgsql;

--if autre if anonyme....

CREATE OR REPLACE FUNCTION declarer(prob varchar(30),nomRue varchar(20),numRue int,nom_habitant varchar(20)) RETURNS VOID AS $$
DECLARE 
	lieu int;
	habitant int;
BEGIN
	--check if habitant existe
	insert into habitant(nom) values(nom_habitant);
	select idhabitant into habitant from habitant h where h.nom=nom_habitant;
	--check if lieu existe
	insert into lieu(nom_rue,num_rue) values(nomRue,numRue);
	select idlieu into lieu from lieu l where l.nom_rue=nomRue and l.num_rue=numRue;
	--check if probleme existe 
	insert into probleme(idlieu,nom_probleme,idhabitant,nb_nonanonyme,nb_anonyme,nb_totale) values(lieu,prob,habitant,1,0,1);
END;
$$ LANGUAGE plpgsql;

select * from habitant;
select * from probleme;
select * from lieu;
	


	


		 
		
