TRUNCATE categoria cascade;
INSERT INTO categoria(id, codigo, descripcion, cssclass) VALUES 
(nextval('categoria_id_seq'), 'TA', 'TEMPORADA ALTA', 'bg-success'),
(nextval('categoria_id_seq'), 'TB', 'TEMPORADA BAJA', 'bg-warning'),
(nextval('categoria_id_seq'), 'IN', 'INEXISTENTE', 'bg-danger');
