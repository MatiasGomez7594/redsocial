CREATE DATABASE redsocial;

CREATE TABLE usuarios(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    url_foto VARCHAR(500) DEFAULT 'imgs/user-icon.png',
    email VARCHAR(150),
    pass VARCHAR(25),
    estado  VARCHAR(10)
);

CREATE TABLE publicaciones(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    contenido VARCHAR(5000),
    id_usuario INT NOT NULL,
    foreign key (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE imgs_publicacion(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    url_archivo VARCHAR(300),
    id_publicacion INT NOT NULL,
    foreign key (id_publicacion) REFERENCES publicaciones(id)
);

CREATE TABLE seguidores(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_seguidor INT NOT NULL,
    id_usuario_seguido INT NOT NULL,
    FOREIGN KEY (id_seguidor) REFERENCES usuarios(id),
    FOREIGN  KEY(id_usuario_seguido) REFERENCES usuarios(id)
);





CREATE TABLE comentarios(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    contenido VARCHAR(500),
    id_usuario INT NOT NULL,
    id_publicacion INT NOT NULL,
    FOREIGN  KEY(id_usuario) REFERENCES usuarios(id),
    FOREIGN  KEY(id_publicacion) REFERENCES publicaciones(id)
);
CREATE TABLE respuestas(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    contenido VARCHAR(500),
    id_usuario INT NOT NULL,
    id_comentario INT NOT NULL,
    FOREIGN  KEY(id_usuario) REFERENCES usuarios(id),
    FOREIGN  KEY(id_comentario) REFERENCES comentarios(id)
);
CREATE TABLE mensajes(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_receptor INT NOT NULL,
    id_emisor INT NOT NULL,
    mensaje VARCHAR(1000),
    FOREIGN KEY (id_emisor) REFERENCES usuarios(id_usuario),
    FOREIGN KEY(id_receptor) REFERENCES usuarios(id_usuario)
);

CREATE TABLE archivos_mensajes(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    url_archivo VARCHAR(300),
    id_mensaje INT NOT NULL,
    foreign key (id_mensaje) REFERENCES mensajes(id)
);


CREATE TABLE notificaciones(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    contenido VARCHAR(200),
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);


CREATE TABLE me_gustas_publicaciones(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    me_gusta INT(1),
    id_publicacion INT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN  KEY(id_usuario) REFERENCES usuarios(id),
    FOREIGN  KEY(id_publicacion) REFERENCES publicaciones(id)
);
CREATE TABLE me_gustas_comentarios(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    me_gusta INT(1),
    id_comentario INT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN  KEY(id_usuario) REFERENCES usuarios(id),
    FOREIGN  KEY(id_comentario) REFERENCES comentarios(id)
);
CREATE TABLE me_gustas_respuestas(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    me_gusta INT(1),
    id_respuesta INT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN  KEY(id_usuario) REFERENCES usuarios(id),
    FOREIGN  KEY(id_respuesta) REFERENCES respuestas(id)
);