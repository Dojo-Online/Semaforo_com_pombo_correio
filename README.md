##### Problema do pombo correio #####
#### Perguntei ao professor e o mesmo diz está certo mas alguns amigos dizem tá errado, refiz mas sei que pode ser melhorado, fique a vontade para mexer no problema, agradeço.
#####

Considere a seguinte situação.
Um pombo correio leva mensagens entre os sites A e B, m
as só quando o número de
mensagens acumuladas chega a 20.
Inicialmente, o pombo fica em A, esperando que existam 20
mensagens para carregar, e dormindo enquanto não houver.
Quando as mensagens chegam a 20, o pombo deve levar exatamente (nenhuma a mais nem a menos) 20 mensagens de A para B, e em seguida voltar para A. 
Caso existam outras 20 mensagens, ele parte imediatamente;
caso contrário, ele dorme de novo até que existam as 20 mensagens.
As mensagens são escritas em um post-it pelos usuários;
cada usuário, quando tem uma mensagem pronta, cola sua mensagem na mochila do pombo.
Caso o pombo tenha partido, ele deve esperar o seu retorno p/ colar
a mensagem na mochila. O vigésimo usuário deve acordar o pombo caso ele esteja
dormindo. Cada usuário tem seu bloquinho inesgotável de post-it e
continuamente prepara uma mensagem e a leva ao pombo.

Usando semáforos, modele o processo pombo e o processo usuário,
lembrando que existem muitos usuários e apenas um pombo.
Identifique regiões críticas na vida do usuário e do pombo.
