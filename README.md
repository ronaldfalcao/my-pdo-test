# my-pdo-test
Exemplo simples para o uso do PDO em PHP.

##Porque usar o PDO (PHP Data Object)
Ainda hoje ao tratar de sistemas legados me deparo com os comandos como *mysql_connect* ou *mysql_query*, respectivamente para conexões e consultas aos bancos de dados no MySQL. De cara temos um problema, não há abstração na camada de dados de forma que a troca do SGBD seja menos traumática. Outro ponto, é que essas funções não são muito "limpas"(*clear code*) se pensando no ponto em que se encontra o PHP hoje, cercado de boas práticas em OO. Por isso desdea versão PHP 5.5 as funções mysql_* são consideradas obsoletas e o uso do PDO recomendado.

##O exemplo

##Alternativa
Você também pode utilizar a extensão MySQLi, que traz uma boa implementação e garante o uso das funcionalidades mais recentes do MySQL. Ainda como desvantagem tem a questão de ser uma forma exclusiva de acesso ao MySQL, não podendo ser utilizada por outros SGBDs.

[MySQLi](http://php.net/manual/pt_BR/book.mysqli.php "Extensão MySQLi")
