# Casos de Uso

# Sumário

- [CDU1 (Cadastrar Aluno)](#cdu1-(cadastrar-aluno))
- [CDU2 (Autenticar)](#cdu2-(autenticar))
- [CDU3 (Cadastrar Usuário)](#cdu3-(cadastrar-usuário))
- [CDU4 (Visualizar Calendário)](#cdu4-(visualizar-calendário))
- [CDU5 (Pesquisar Aluno)](#cdu5-(pesquisar-aluno))
- [CDU6 (Gerenciar Calendário)](#cdu6-(gerenciar-calendário))
- [CDU7 (Registrar Atendimento)](#cdu7-(registrar-atendimento))
- [CDU8 (Visualizar Atendimento)](#cdu8-(visualizar-atendimento))

## CDU1(Cadastrar Aluno)

**Ator:** SESOP.

**Pré-condições:** Só o SESOP poderá cadastrar um aluno novo.

**Fluxo Principal:** 


1.	SESOP utiliza os dados dos alunos presentes em suas fichas;
2.	Cadastro no sistema;
3.	Atualizar o sistema. 

Deve ser cadrastado o aluno através da supervisão do pessoal do SESOP, só esses poderam alterar/adicionar o prontuário do aluno(Adicionar os dados também será responsabilidade do SESOP).
Isso será feito ao indíviduo ao entrar com a matrícula e uma senha específica, isso fará com que as informações dos discentes fiquem em segurança. 
A direção jamais poderá modificar os elementos do banco de dados.



## CDU2(Autenticar)

**Atores:** SESOP e Direção.

**Pré-condições:** Autenticar a matrícula do usúario.

**Fluxo Principal:**

1. Verificar quem está entrando no software.

Este é um procedimento para atestar a identidade e a autenticidade de um indivíduo simplesmente através da detecção da senha criada no cadastramento do usuário. Para que este método seja eficiente, é necessário, que a matrícula e a senha estarem registradas para saber se são autenticas ou não. Caso não sejam autenticas, o usuário será informado e terá a chance de resgatar sua senha através do e-mail que foi utilizado para fazer o cadastro.
As autentificações terão funções distintas já que dependendo se o usuário for membro do SESOP ou da direção, terão visualizações de telas e atribuições diferentes.
*Este e-mail será o do SESOP para evitar que qualquer um se cadastre.*

## CDU3 (Cadastrar Usuário)

**Ator:** SESOP. 

**Pré-condições:** Só o SESOP poderá confirmar o cadastro do novo usuário.

**Fluxo Principal:** 

1)Este cadastro só poderá ser feito pelo administrador do SESOP, através de uma senha especial;
2)Será necessário cadastrar com senha, nome, e-mail, matrícula, categoria( se atua no SESOP ou na direção ), será mandado um pedido para entrar no software através do e-mail do SESOP por questão de segurança.

O usuário seleciona a opção cadastrar, conectado no e-mail do SESOP, senão for assim o usuário não poderá ser cadastrado.
O usuário preenche os dados e depois de clicar em confirmar é enviado as informações para o e-mail do SESOP para ser aprovado.
O sistema verifica os dados digitados. Logo, depois da confirmação este guarda os dados do usuário, fzendo isto é encaminhado ao usuário para página inicial e retorna mensagem de cadastro realizado.
<p> Haverá uma tela que deverá ser preenchida com base dos dados abaixo:</p>
<p>  *Nome	No mínimo 3 no máximo 70 caracteres.</p>
<p>  *Matrícula: Deve possuir números e letras.</p>
<p>  *Categoria:	Deve ser uma das duas opções: atuante do SESOP ou atuante da direção.</p>
<p>  *E-mail:	Deve possuir formato válido como: email@exemplo.com.</p>
<p>  *Senha:	Deve possuir no mínino 6 e no máximo 12 caracteres.</p>
<p>  *Confirmação de senha:	Deve estar preenchido de forma idêntica a senha.</p>


## CDU4: (Visualizar Calendário)

**Autores:** SESOP e Direção.

**Pré-Condições:** Visualização dos agendamentos semanais ou mensais.

**Fluxo Principal:**

1)Será como uma agenda, onde há atendimentos que o SESOP faz, durante um certo período.

Poderá ser visualizado no período semanal ou mensal todos os atendimentos que o SESOP realizou ou irá realizar no período selecionado.
A visualização não poderá alterar nada do sistema, mas sim ter um panorama de quantos atendimentos o SESOP estará fazendo. 
*O SESOP deverá consultar o caledário antes de gerenciar, já precisam saber se há um atendimento agendado ou não.*


## CDU5 (Pesquisar Aluno)

**Atores:** SESOP e Direção.

**Pré-condições:** Uma pequena busca por um aluno específico ou com especificações de filtros. 

**Fluxo Principal:** 
 
 1)	Duas formas de visualização onde uma foca no perfil/foto do aluno pra facilitar e a outra em lista evidenciando os nomes e informações;
 2)	Filtros especializados em ambas as telas para facilitar a procura de informações mais específicas.

Uma tela de início irá aparecer a qual deverá ser informada a matrícula e senha do usuário, depois iram aparecer um menu de opções para a visualização do aluno como: exibir por foto de perfil, nome, matrícula ou gravidade. 
Caso seja selecionado gravidade será aberto um submenu para escolher entre: quantidade(s) do(s) apoio(s), as faltas e atrasos.
Logo, após ser selecionado as opções irá aparecer a ficha dos alunos que se encaixam na pesquisa até o usuário achar o aluno que procura.
*Isto será válido para a direção e o SESOP, mas a única diferença é que o SESOP poderá adicionar, modificar ou excluir os dados da ficha dos alunos*


## CDU6 (Gerenciar Calendário)

**Ator:** SESOP. 

**Pré-condições:** Agendamento do atendimentos.

**Fluxo Principal:** 


1) 	Marcar o horário com os discentes, docentes, responsáveis ou outros;
2) 	Cada agendamento será notificado em lembretes rápidos;
3)	Tela do lembrete será uma coisa a parte, pois irá ser notificado na tela do computador como se fosse um alarme.

Haverá uma tela para o responsável do SESOP cadastrar o agendamento estabelecendo o dia, mês e ano, no horário escolhido pela preferência. Depois de agendar, deverá escolher um tema objetivo para se alguém visualizar, o lembrete, não haverá uma divulgação dos dados do discente.
Contudo, as alterações do calendário serão feitas somente pelo SESOP, já que são estes que realizam o atendimento.
*Para criar uma tarefa em um calendário, clique em um espaço vazio na data desejada e um editor de tarefas vai aparecer.*


## CDU7 (Registrar Atendimento)

**Ator:** SESOP. 

**Pré-condições:** O SESOP terá que registrar o atendimento.

**Fluxo Principal:**

1)    Registrar o atedimento consite em escrever na ficha do aluno o que foi realizado no mesmo;
2)    É obrigatório que registrem o horário de início do atendimento. Com isso o SESOP terá como comprovar o atendimento, caso um responsável do aluno ou da equipe escolar tenha interesse.

O registro deve conter uma pequena descrição sobre o que foi realizado no atendimento e haverão checklists para selecionar o motivo do atendimento aos que procuram o SESOP sendo totalmente editável para atender as necessidades específicas.
O fluxo do processo de atendimento deve permitir desenvolver a estrutura básica para a gestão entre o relacionamento do SESOP e aluno. Da mesma forma, deve garantir que seja possível o acompanhamento dos alunos, através do checklist, pois no modo de pesquisa haverá uma bolinha com uma cor e sua intensidade, demostra a gravidade daquele fato.


## CDU8 (Visualizar Atendimento)

**Atores:** SESOP e Direção. 

**Pré-condições:** Visualização dos atendimentos para que estejam cientes dos casos do aluno.

**Fluxo Principal:** 

1) Não será obigatório uma descrição longa do atendimento;
2) Ambos terão o acesso para ficarem cientes da situação do aluno.

Diferente do visualizar calendário, o visualizar atendimento é onde o usuário poderá ver a ficha do aluno e a descrição do que foi ocorrido no atendimento com o SESOP. Será exibido a ficha tanto do atendimento do aluno, tanto do atendimento dos resposáveis, dos discentes.
Poderão ser obtidos comentários objetivos, caso o aluno queira descrição da conversa, ou seja, um caso mais pessoal e muito grave.
*Na visualização do atendimento poderá ser informado se o aluno é atendido pelo NAPNE ou se tem algo que precisa ser observado com atenção, como alguma repetencia ou aprovação por COC.*
