/*Criando a tabela de produtos*/
CREATE TABLE produtos(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    descricao VARCHAR(120) DEFAULT NULL,
    preco FLOAT NOT NULL,
    PRIMARY KEY(id)
);

/*Inserindo valores na tabela*/
INSERT INTO produtos(nome, descricao, preco) VALUES
  ('Produto 01', 'Esse � o  produto 01 do estoque', 1.10),
  ('Produto 02', 'Esse � o  produto 02 do estoque', 1.20),
  ('Produto 03', 'Esse � o  produto 03 do estoque', 1.30),
  ('Produto 04', 'Esse � o  produto 04 do estoque', 1.40),
  ('Produto 05', 'Esse � o  produto 05 do estoque', 1.50),
  ('Produto 06', 'Esse � o  produto 06 do estoque', 1.60),
  ('Produto 07', 'Esse � o  produto 07 do estoque', 1.70),
  ('Produto 08', 'Esse � o  produto 08 do estoque', 1.80),
  ('Produto 09', 'Esse � o  produto 09 do estoque', 1.90),
  ('Produto 10', 'Esse � o  produto 10 do estoque', 2.00);