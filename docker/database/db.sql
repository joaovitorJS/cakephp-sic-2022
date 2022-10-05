CREATE TABLE usuarios (
  id SERIAL PRIMARY KEY,
  nome VARCHAR(200) NOT NULL,
  usuario VARCHAR(20) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  created TIMESTAMP,
  modified TIMESTAMP,
  UNIQUE (usuario)
);

CREATE TABLE perguntas (
  id SERIAL PRIMARY KEY,
  pergunta TEXT NOT NULL,
  usuario_id INT NOT NULL,
  created TIMESTAMP,
  modified TIMESTAMP,
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE respostas (
  id SERIAL PRIMARY KEY,
  resposta TEXT NOT NULL,
  usuario_id INT NOT NULL,
  pergunta_id INT NOT NULL,
  created TIMESTAMP,
  modified TIMESTAMP,
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (pergunta_id) REFERENCES perguntas(id) ON DELETE CASCADE ON UPDATE CASCADE
);


