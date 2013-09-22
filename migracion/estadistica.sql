-- cargamos data a procucto
--
truncate estadistica cascade;
insert into estadistica(id, producto_id, mes, estacionalidad, categoria_id)
select 
  nextval('estadistica_id_seq'),
  b.id,
  a.mes,
  a.normal,
  c.id
from 
  prodestac a INNER JOIN
  producto b ON a.descripcion = b.nombre INNER JOIN
  categoria c ON a.estado = c.codigo;
