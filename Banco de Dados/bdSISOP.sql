CREATE TABLE usuario (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  matricula VARCHAR(9) NOT NULL,
  nome VARCHAR(35) NOT NULL,
  sobrenome VARCHAR(35) NOT NULL,
  email VARCHAR(50) NOT NULL,
  senha VARCHAR(12) NOT NULL,
  confirmaSenha VARCHAR(12) NOT NULL,
  
  PRIMARY KEY(id_usuario)
);

CREATE TABLE direcao(
  id_direcao INT NOT NULL AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  PRIMARY KEY(id_direcao),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE sesop(
  id_sesop INT NOT NULL  AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  PRIMARY KEY(id_sesop),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE aluno (
  id_aluno INT NOT NULL	AUTO_INCREMENT,
  matricula VARCHAR(10) NOT NULL,
  nome VARCHAR(35) NOT NULL,
  sobrenome VARCHAR(35) NOT NULL,
  telefone INT NOT NULL,
  email VARCHAR(50),
  turma VARCHAR(6) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  PRIMARY KEY(id_aluno)
);
  
CREATE TABLE disciplina(
  id_disciplina INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(20) NOT NULL,
  quant_tempos INT NOT NULL,
  PRIMARY KEY (id_disciplina)
);

CREATE TABLE aluno_disciplina(
	id_aluno INT NOT NULL ,
	id_disciplina INT NOT NULL,
	frequencia FLOAT,
	PRIMARY KEY(id_aluno, id_disciplina),
	FOREIGN KEY (id_aluno) REFERENCES aluno(id_aluno),
	FOREIGN KEY (id_disciplina) REFERENCES disciplina(id_disciplina)
);

CREATE TABLE avaliacao(
  id_aluno INT NOT NULL,
  id_disciplina INT NOT NULL,
  c1 FLOAT,
  c2 FLOAT,
  c3 FLOAT,
  apoio1 FLOAT,
  apoio2 FLOAT,
  media FLOAT,
  PFV FLOAT,
  PRIMARY KEY (id_aluno, id_disciplina),
  FOREIGN KEY (id_aluno) REFERENCES aluno(id_aluno),
  FOREIGN KEY (id_disciplina) REFERENCES disciplina(id_disciplina)
);

CREATE TABLE responsavel(
  id_responsavel INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  telefone INT NOT NULL,
  email VARCHAR(50) NOT NULL,
  endereco VARCHAR(100),
  id_aluno INT NOT NULL,
  PRIMARY KEY(id_responsavel),
  FOREIGN KEY (id_aluno) REFERENCES aluno(id_aluno)
);

CREATE TABLE atendimento(
  id_atendimento INT NOT NULL AUTO_INCREMENT,
  data DATE NOT NULL,
  hora TIME NOT NULL,
  descricao VARCHAR(1000),
  id_sesop INT NOT NULL,
  id_aluno INT NOT NULL,
  id_responsavel INT NOT NULL,
  PRIMARY KEY(id_atendimento),
  FOREIGN KEY (id_sesop) REFERENCES sesop(id_sesop),
  FOREIGN KEY (id_aluno) REFERENCES aluno(id_aluno),
  FOREIGN KEY (id_responsavel) REFERENCES responsavel(id_responsavel)
);

CREATE TABLE responsavel_aluno(
  id_aluno INT NOT NULL,
  id_responsavel INT NOT NULL,
  parentesco VARCHAR(20) NOT NULL,
  PRIMARY KEY(id_aluno, id_responsavel),
  FOREIGN KEY (id_aluno) REFERENCES aluno(id_aluno),
  FOREIGN KEY (id_responsavel) REFERENCES responsavel(id_responsavel)
);
