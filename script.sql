CREATE DATABASE IF NOT EXISTS cantina;
USE cantina;

CREATE TABLE users (
    id int primary key auto_increment,
    user varchar(50) not null,
    senha varchar(32) not null
);

INSERT INTO users(id, user, senha) VALUES (0, 'gabriel', '123456')

CREATE TABLE produtos (
    id_prod INT AUTO_INCREMENT PRIMARY KEY,
    nome_prod VARCHAR(150) NOT NULL,
    preco_prod DECIMAL(10, 2) NOT NULL,
    qtd_prod INT DEFAULT 0,
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

CREATE TABLE categorias (
    id_catg INT AUTO_INCREMENT PRIMARY KEY,
    nome_catg VARCHAR(50) NOT NULL
);

INSERT INTO categorias (id, nome) VALUES (0, 'comida');
INSERT INTO categorias (id, nome) VALUES (0, 'bebida');
INSERT INTO categorias (id, nome) VALUES (0, 'doce');

CREATE TABLE vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    produto_id INT,
    quantidade INT,
    valor_total DECIMAL(10, 2),
    data_venda TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);

