CREATE DATABASE contatosCurupacu;

CREATE TABLE contatos(
  id INT PRIMARY KEY auto_increment,
  nome VARCHAR(255),
  ddd VARCHAR(3),
  telefone VARCHAR(13),
  email VARCHAR(255),
  assunto VARCHAR(15),
  mensagem TEXT,
  data DATETIME,
  situacao INT default 0
);