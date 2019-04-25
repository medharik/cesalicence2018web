create or replace procedure   agmenter_salaire(id in number , taux in number)
is


begin

update employees set salary = salary *(1+taux/100) where employee_id =id;
dbms_output.put_line('augmentation ok');

end;

create or replace procedure   augmenter_salaire(id in number , taux in number)
is

emp employees%rowtype;

begin

select * into emp   from employees where employee_id=id; 
dbms_output.put_line(emp.first_name ||' '||emp.last_name ||' touche un salaire (avant) de  '||emp.salary );
update employees set salary = salary *(1+taux/100) where employee_id =id;
select * into emp   from employees where employee_id=id; 
dbms_output.put_line(emp.first_name || ' '||emp.last_name ||' touche un salaire (apres) de  '||emp.salary );

dbms_output.put_line('augmentation ok');


end;
-----------------
declare
 cursor c_emp is select * from employees where Jo
begin 

for ligne in c_emp
augmenter_salaire(ligne.employee_id,10);

end ;





--------------------------------

create or replace procedure empl_par_job (v_job_id employees.job_id%type)
	is
-- x number ;
	cursor emp   is select * from employees   ;

	begin 

for e in emp 

loop
if e.job_id = v_job_id then
dbms_output.put_line(e.first_name ||' '||e.last_name||' touche un salaire de  '||e.salary );

end if;

end loop;

exception 

when others then 

dbms_output.put_line('erreur ...');

	end;



