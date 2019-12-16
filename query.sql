CREATE DATABASE loginPHP;
USE loginPHP;
CREATE TABLE usuarios(
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(20) NOT NULL,
  contraseña VARCHAR(20) NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO usuarios(nombre, contraseña)
VALUES
  ('admin', '123456');
SELECT
  *
FROM usuarios
where
  nombre = 'admin'
  AND contraseña = '123456';