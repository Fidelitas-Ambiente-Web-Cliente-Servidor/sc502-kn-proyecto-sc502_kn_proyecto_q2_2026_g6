CREATE TABLE estado (
    id_estado INT AUTO_INCREMENT PRIMARY KEY,
    estado VARCHAR(50) NOT NULL
);

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    rol VARCHAR(50),
    id_estado INT,
    FOREIGN KEY (id_estado) REFERENCES estado(id_estado)
);

CREATE TABLE contacto (
    id_contacto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    telefono VARCHAR(20),
    asunto VARCHAR(200),
    mensaje TEXT,
    fecha_envio DATETIME,
    id_estado INT,
    FOREIGN KEY (id_estado) REFERENCES estado(id_estado)
);

CREATE TABLE actividad (
    id_actividad INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    fecha DATE,
    hora TIME,
    lugar VARCHAR(150),
    id_estado INT,
    FOREIGN KEY (id_estado) REFERENCES estado(id_estado)
);

CREATE TABLE noticia (
    id_noticia INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200),
    descripcion TEXT,
    imagen VARCHAR(255),
    fecha_publicacion DATE,
    id_estado INT,
    FOREIGN KEY (id_estado) REFERENCES estado(id_estado)
);

CREATE TABLE vecino (
    id_vecino INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    cedula VARCHAR(20) UNIQUE,
    telefono VARCHAR(20),
    correo VARCHAR(150),
    direccion VARCHAR(255),
    id_estado INT,
    FOREIGN KEY (id_estado) REFERENCES estado(id_estado)
);

CREATE TABLE salon_comunal (
    id_salon INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT,
    capacidad INT,
    ubicacion VARCHAR(200),
    id_estado INT,
    FOREIGN KEY (id_estado) REFERENCES estado(id_estado)
);

CREATE TABLE reserva (
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    fecha_solicitud DATE,
    fecha_reserva DATE,
    hora_inicio TIME,
    hora_fin TIME,
    motivo TEXT,
    id_vecino INT,
    id_salon INT,
    id_estado INT,
    FOREIGN KEY (id_vecino) REFERENCES vecino(id_vecino),
    FOREIGN KEY (id_salon) REFERENCES salon_comunal(id_salon),
    FOREIGN KEY (id_estado) REFERENCES estado(id_estado)
);


INSERT INTO estado (estado) VALUES
('Activo'),
('Inactivo'),
('Pendiente'),
('Aprobada'),
('Rechazada');

INSERT INTO usuario
(nombre, apellido, correo, contrasena, rol, id_estado)
VALUES
('Carlos', 'Rodríguez', 'carlos@salon.com', '123456', 'Administrador', 1),
('María', 'Jiménez', 'maria@salon.com', '123456', 'Administrador', 1),
('Luis', 'Mora', 'luis@salon.com', '123456', 'Secretario', 1);

INSERT INTO contacto
(nombre, correo, telefono, asunto, mensaje, fecha_envio, id_estado)
VALUES
('Ana López', 'ana@gmail.com', '88881111',
'Solicitud de información',
'Quisiera conocer la disponibilidad del salón.',
'2026-07-20 09:30:00', 3),

('Pedro Vargas', 'pedro@gmail.com', '88882222',
'Consulta',
'¿Cuál es el costo del alquiler?',
'2026-07-21 14:20:00', 3),

('Laura Castro', 'laura@gmail.com', '88883333',
'Felicitación',
'Excelente servicio brindado.',
'2026-07-22 11:15:00', 1);

INSERT INTO contacto
(nombre, correo, telefono, asunto, mensaje, fecha_envio, id_estado)
VALUES
('Ana López', 'ana@gmail.com', '88881111',
'Solicitud de información',
'Quisiera conocer la disponibilidad del salón.',
'2026-07-20 09:30:00', 3),

('Pedro Vargas', 'pedro@gmail.com', '88882222',
'Consulta',
'¿Cuál es el costo del alquiler?',
'2026-07-21 14:20:00', 3),

('Laura Castro', 'laura@gmail.com', '88883333',
'Felicitación',
'Excelente servicio brindado.',
'2026-07-22 11:15:00', 1);

INSERT INTO actividad
(nombre, descripcion, fecha, hora, lugar, id_estado)
VALUES
('Yoga Comunitario',
'Clase abierta para vecinos.',
'2026-08-02',
'08:00:00',
'Salón Principal',
1),

('Asamblea General',
'Reunión de vecinos.',
'2026-08-10',
'18:00:00',
'Salón Principal',
1),

('Curso de Cocina',
'Taller básico de cocina.',
'2026-08-15',
'15:00:00',
'Cocina Comunal',
2);

INSERT INTO noticia
(titulo, descripcion, imagen, fecha_publicacion, id_estado)
VALUES
('Nuevo Reglamento',
'Se actualizó el reglamento del salón comunal.',
'reglamento.jpg',
'2026-07-15',
1),

('Mantenimiento',
'El salón permanecerá cerrado por mantenimiento.',
'mantenimiento.jpg',
'2026-07-18',
1),

('Nuevas Actividades',
'Se agregaron cursos para niños y adultos.',
'actividades.jpg',
'2026-07-25',
2);

INSERT INTO vecino
(nombre, apellido, cedula, telefono, correo, direccion, id_estado)
VALUES
('José', 'Ramírez', '101110111', '88884444',
'jose@gmail.com',
'Tibás, San José',
1),

('Andrea', 'Soto', '202220222', '88885555',
'andrea@gmail.com',
'Santo Domingo, Heredia',
1),

('Fernando', 'Vargas', '303330333', '88886666',
'fernando@gmail.com',
'Moravia, San José',
2);

INSERT INTO salon_comunal
(nombre, descripcion, capacidad, ubicacion, id_estado)
VALUES
('Salón Principal',
'Salón para eventos grandes.',
150,
'Primer Piso',
1),

('Salón Multiuso',
'Espacio para talleres y reuniones.',
80,
'Segundo Piso',
1),

('Terraza',
'Área abierta para actividades sociales.',
50,
'Exterior',
2);

INSERT INTO reserva
(fecha_solicitud, fecha_reserva, hora_inicio, hora_fin, motivo, id_vecino, id_salon, id_estado)
VALUES
('2026-07-20',
'2026-08-05',
'14:00:00',
'18:00:00',
'Cumpleaños Familiar',
1,
1,
3),

('2026-07-21',
'2026-08-12',
'09:00:00',
'12:00:00',
'Reunión Vecinal',
2,
2,
4),

('2026-07-22',
'2026-08-18',
'16:00:00',
'20:00:00',
'Baby Shower',
3,
1,
5);
