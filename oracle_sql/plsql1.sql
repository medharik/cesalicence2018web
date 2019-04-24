declare 
age number :=2;
begin
if age > 18 then 
dbms_output.put_line('majeur car age est '||age||'ans');
elsif age >10 and age<18  then
dbms_output.put_line('gamin car age est '||age||'ans');
else 
dbms_output.put_line('bebe car age est '||age||'ans');
end if;
end;


declare 
v_nom varchar2(100);
v_prenom employees.first_name%type;
v_ligne employees%rowtype;

begin

select first_name , last_name into v_nom, v_prenom
from employees where employee_id =100;
dbms_output.put_line('le nom est '||v_nom||' , prenom est  '||v_prenom);

select * into v_ligne from employees where employee_id =100;
dbms_output.put_line('le nom est '||v_ligne.first_name||' , salaire  est  '||v_ligne.salary);

end;

declare 
v_nom varchar2(100);
v_prenom employees.first_name%type;
v_ligne employees%rowtype;
i number :=0;
begin
loop
select first_name , last_name into v_nom, v_prenom
from employees where employee_id =100;
dbms_output.put_line('le nom est '||v_nom||' , prenom est  '||v_prenom);

select * into v_ligne from employees where employee_id =100;
dbms_output.put_line('le nom est '||v_ligne.first_name||' , salaire  est  '||v_ligne.salary);
i :=i+1;
exit when i = 2 ;
 end loop;
end;