create table departement(
id int primary key AUTO_INCREMENT,
nom varchar(100) unique,
adresse text
)



create table employee(
id int  primary key AUTO_INCREMENT,
nom varchar(100)  ,
prenom varchar(100),
specialite varchar(20) not null,
salaire float default 2000 ,
departement_id int ,
ville varchar(20),    
CONSTRAINT fk_dep_emp FOREIGN key(departement_id) REFERENCES departement(id),
CONSTRAINT uc_np unique(nom,prenom),
constraint ck_salaire check ( salaire >=2000 )   ,
CONSTRAINT ck_ville check (ville in ('casa','mohammedia') )    
    
    
)

sur Oracle
create table fournisseur(
id number  ,
nom varchar2(20),
constraint pk_four primary key(id)
)

create table produit(
id number primary  key,
libelle varchar2(20)  not null,
prix number,
qteSTock number ,
fournisseur_id number ,
constraint uc_lib unique (libelle),
constraint ck_prix check (prix >=0),
constraint ck_qte check ( qteSTock>=0 ) ,
constraint fk_f_p  foreign key(fournisseur_id) references fournisseur(id) on delete cascade

)