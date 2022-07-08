CREATE database soapApi;

CREATE table usuario(
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(250),
    apellidos VARCHAR(250),
    estado INT,
    correo VARCHAR(250)
);