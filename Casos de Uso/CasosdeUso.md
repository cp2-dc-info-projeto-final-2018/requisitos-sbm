# Casos de Uso

# Sumário

- [CDU 1 - Cadastrar Aluno](#cdu-1---cadastrar-aluno)
- [CDU 2 - Autenticar](#cdu-2---autenticar)
- [CDU 3 - Cadastrar Usuário](#cdu-3---cadastrar-usuario)
- [CDU 4 - Visualizar Calendário](#cdu-4---visualizar-calendario)
- [CDU 5 -  Visualizar lista dos próximos atendimentos e eventos](#cdu-5---visualizar-lista-dos-próximos-atendimentos-e-eventos)
- [CDU 6 - Gerenciar Calendário](#cdu-6---gerenciar-calendario)
- [CDU 7 - Registrar Atendimento](#cdu-7---registrar-atendimento)
- [CDU 8 - Visualizar Atendimento](#cdu-8---visualizar-atendimento)

## CDU 1 - Cadastrar Aluno


**Ator:** SESOP.

**Pré-condições:** Usuário deve estar autenticado.

**Fluxo Principal:** 

1.	Usuário deve acessar a tela de cadastramento de aluno;
2.	Usuário deve inserir os dados do aluno: 
	- Nome;
	- Sobrenome;
	- Matrícula;
	- Turma;
	- Data de nascimento;
3.	Sistema irá guardar os dados.

## CDU 2 - Autenticar

**Atores:** SESOP e Direção.

**Pré-condições:** Autenticar a matrícula do usúario.

**Fluxo Principal:**

1. Usuário informa matrícula e senha;
2. Sistema averigua e mostra a tela de acordo com o usuário;

## CDU 3 - Cadastrar Usuário

**Ator:** SESOP. 

**Pré-condições:** Usuário deve estar autenticado.

**Fluxo Principal:** 

1. Usuário acessa a tela de cadastramento de usuário.
2. Usuário insere os seguintes dados: 
	- Senha; 
	- Nome; 
	- E-mail;
	- Matrícula; 
	- Sobrenome;
	- Data de Nascimento;
	- Categoria - se atua no SESOP ou na direção.

3. Sistema irá cadastrar o usuário e atualizar o banco de dados.

## CDU 4 - Visualizar Calendário

**Autores:** SESOP e Direção.

**Pré-Condições:** Usuário deve estar autenticado.

**Fluxo Principal:**

1. Usuário acessa o calendário e visualiza as datas do mês.

## CDU 5 - Visualizar lista dos próximos atendimentos e eventos.

**Autores:** SESOP.

**Pré-Condições:** Usuário deve estar autenticado.

**Fluxo Principal:**

1. Usuário acessa a listagem e ver os próximos atendimentos realizados pelo SESOP e eventos que irá acontecer na escola.
2. Separados em dia, mês ou semana.


## CDU 6 - Gerenciar Calendário

**Ator:** SESOP. 

**Pré-condições:** Usuário deve ser autenticado.

**Fluxo Principal:** 

1. Usuário acessa o calendário;
2. Usuário poderá gerenciar o calendário, inserindo a hora e o dia do atendimento ou do evento.
## CDU 7 - Registrar Atendimento

**Ator:** SESOP. 

**Pré-condições:** Usuário deve ser autenticado.

**Fluxo Principal:**

1.  Usuário acessará a tela de cadastramento de atendimento.
2.  Usuário irá informar uma breve descrição sobre o assunto que será tratado na reunião com o aluno.
3.  Sistema irá atualizar o banco de dados, calendário e a listagem.

## CDU 8 - Visualizar Atendimento

**Atores:** SESOP e Direção. 

**Pré-condições:** Usuário deve estar autenticado.

**Fluxo Principal:** 

1. Usuário irá acessar a tela de atendimento.
2. O usúario irá acessar o calendário e visualizar os próximos atendimentos.
