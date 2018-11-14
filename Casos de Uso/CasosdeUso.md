# Casos de Uso

# Sumário

- [CDU 1 - Cadastrar Aluno](#cdu-1---cadastrar-aluno)
- [CDU 2 - Autenticar](#cdu-2---autenticar)
- [CDU 3 - Cadastrar Usuário](#cdu-3---cadastrar-usuario)
- [CDU 4 - Visualizar Calendário](#cdu-4---visualizar-calendario)
- [CDU 5 - Pesquisar Aluno](#cdu-5---pesquisar-aluno)
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
3.	Sistema irá guardar os dados;
4.  Usuário poderá atualizar o sistema. 

## CDU 2 - Autenticar

**Atores:** SESOP e Direção.

**Pré-condições:** Autenticar a matrícula do usúario.

**Fluxo Principal:**

1. Usuário informa login e senha;
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

3. Sistema irá cadastrar o usuário e atualizar o sistema.

## CDU 4 - Visualizar Calendário

**Autores:** SESOP e Direção.

**Pré-Condições:** 

**Fluxo Principal:**

1. Usuário acessa o calendário.

## CDU 5 - Pesquisar Aluno

**Atores:** SESOP e Direção.

**Pré-condições:** Uma pequena busca por um aluno específico ou com especificações de filtros. 

**Fluxo Principal:** 
 
 1.	Duas formas de visualização onde uma foca no perfil/foto do aluno pra facilitar e a outra em lista evidenciando os nomes e informações;
 2.	Filtros especializados em ambas as telas para facilitar a procura de informações mais específicas.

Uma tela de início irá aparecer a qual deverá ser informada a matrícula e senha do usuário, depois iram aparecer um menu de opções para a visualização do aluno como: exibir por foto de perfil, nome, matrícula ou gravidade. 
Caso seja selecionado gravidade será aberto um submenu para escolher entre: quantidade(s) do(s) apoio(s), as faltas e atrasos.
Logo, após ser selecionado as opções irá aparecer a ficha dos alunos que se encaixam na pesquisa até o usuário achar o aluno que procura.
*Isto será válido para a direção e o SESOP, mas a única diferença é que o SESOP poderá adicionar, modificar ou excluir os dados da ficha dos alunos*

## CDU 6 - Gerenciar Calendário

**Ator:** SESOP. 

**Pré-condições:** Usuário deve ser autenticado.

**Fluxo Principal:** 

1. Usuário acessa o calendário;
2. Usuário poderá gerenciar o calendário, inserindo a hora e o dia do atendimento;
3. Sistema verifica se já possui algum evento no horário e dia determinados;
4. Usuário atualizará o sistema.

## CDU 7 - Registrar Atendimento

**Ator:** SESOP. 

**Pré-condições:** Usuário deve ser autenticado.

**Fluxo Principal:**

1.  Usuário acessará a tela de cadastramento de atendimento.
2.  Usuário irá informar o que aconteceu durante a reunião com o aluno.
3.	Sistema irá atualizar o sistema.

## CDU 8 - Visualizar Atendimento

**Atores:** SESOP e Direção. 

**Pré-condições:** 

**Fluxo Principal:** 

1. Usuário irá acessar a tela de atendimento.
2. Sistema irá ordenar os próximos atendimentos e mostra-los. 
