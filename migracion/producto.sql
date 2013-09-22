-- cargamos data a procucto
--
TRUNCATE producto CASCADE;
INSERT INTO producto(id, nombre, descripcion, precio, variacion, path)
SELECT 
  nextval('producto_id_seq'),
  descripcion, 
  descripcion, 
  random() *  8 + 3, 
  random() * 10 - 5, 
  NULL 
FROM 
  prodporproc 
GROUP BY
  descripcion;
