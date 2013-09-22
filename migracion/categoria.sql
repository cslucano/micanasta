TRUNCATE categoria cascade;
INSERT INTO categoria(id, codigo, descripcion) VALUES 
(nextval('categoria_id_seq'), 'TA', 'TEMPORADA ALTA'),
(nextval('categoria_id_seq'), 'TB', 'TEMPORADA BAJA'),
(nextval('categoria_id_seq'), 'IN', 'INEXISTENTE');
