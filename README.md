# my-pdo-test
Exemplo simples para o uso do PDO em PHP.

##Porque usar o PDO (PHP Data Object)
Ainda hoje ao tratar de sistemas legados me deparo com os comandos como *mysql_connect* ou *mysql_query*, respectivamente para conexões e consultas aos bancos de dados no MySQL. De cara temos um problema, não há abstração na camada de dados de forma que a troca do SGBD seja menos traumática. Outro ponto, é que essas funções não são muito "limpas"(*clear code*) se pensando no ponto em que se encontra o PHP hoje, cercado de boas práticas em OO. Por isso desdea versão PHP 5.5 as funções mysql_* são consideradas obsoletas e o uso do PDO recomendado.

##O exemplo
O exemplo apresentado ainda é incompleto, falta uma boa prática nele como um todo. Vou colocar as melhorias em formato de *issue* e os resolvendo com o tempo. Mas você me pergunta, porque vai deixar aqui um código vergonhoso?

Bom, um projeto deve ter planejamento. O meu foi simples, criar código de exemplo para o uso do PDO. A execução/codificação vai passar por uma refatoração, aos poucos. Nesse momento não houve preocupação com a qualidade do código, pois era preciso estruturar as ideias. Então veja isso como um rascunho do projeto, um protótipo que já faz algo do que deveria. Mesmo que apresente o resultado, pode não chegar nele da forma correta. 

Desenvolvedores têm medo de mostrar seu código inicial, talvez, pela questão do julgamento dos seus colegas. Todo mundo deveria assumir que ao iniciar um projeto faz código ruim, e a partir dele gerar a cultura da refatoração. Refatorar o código deveria ser ao comum, como fazer testes unitários. Mostrar código inicial também gera discussões interessantes, assim, deixa que leiam seu código inicial, aproveite as críticas e seja feliz :-) 

Voltando, o objetivo é dar os seguintes exemplos:
*De como fazer uma conexão PDO com o PHP;
*De como fazer uma consulta simples;
*De como fazeruma consulta com filtro;
*De como usar Prepared Statements;
*De como proceder com uma inserção;
*De como proceder com uma atualização;
*De como proceder com uma deleção.

##Alternativa ao PDO
Você também pode utilizar a extensão MySQLi, que traz uma boa implementação e garante o uso das funcionalidades mais recentes do MySQL. Ainda como desvantagem tem a questão de ser uma forma exclusiva de acesso ao MySQL, não podendo ser utilizada por outros SGBDs.

[MySQLi](http://php.net/manual/pt_BR/book.mysqli.php "Extensão MySQLi")
