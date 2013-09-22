-- cargamos data a procucto
--
TRUNCATE producto CASCADE;
INSERT INTO producto(id, nombre, descripcion, precio, variacion, path)
SELECT 
  nextval('producto_id_seq'),
  descripcion, 
  descripcion, 
  0, 
  0, 
  NULL 
FROM 
  prodporproc 
GROUP BY
  descripcion;
