# estudo-php

inciando estudos dia 25/02/2025

---

Aula 1 : O que é PHP??

browser / client side | servidor / server side
(html, css e JS) | (DB, linguagem servidor, servidor web)

ciclo de requisição

browser --> web server --> linguagem(php) --> DB --> linguagem(php) --> browser

php linguagem responsavel por trazer dinamismo a aplicação permitindo consultas no banco de dados trazendo informações para o client side populando o html com dados do banco

wordpress construido em cima do PHP

---

Aula 2 : O que é NGINX?

servidores web como Apache responsavel poor servir sites e sistemas web, ele tambem atua como proxy reverso direcionando arequisições para outro servidor, como um backend em Node ou PHP. O NGINX tambem faz balanceamento de trafego entre servidores para evitar sobrecarga

portas do servidor
22 = acessa o servidor externamente de forma segura
80 = acesso http sem criptografia
443 = acesso http com criptografia HTTPS

---

Aula 3 : Configurando Ambiente de Desenvolvimento (Windows)

Passo 1 -> baixar o xampp (conjunto de ferramentas Apache, MySql, PHP e Perl) www.apachafriends.org
Passo 2 -> Instalar a ferramenta
Passo 3 -> baixar vscode code.visualstudio.com/download
Passo 4 -> instalar vscode

---

Aula 4 : Criando os primeiros comandos em PHP
php -S localhost:8080 -d auto_prepend_file=server.php // Define a diretiva auto_prepend_file para que server.php seja incluído automaticamente antes de qualquer outro script ser executado.

o comando echo serve para imprimir algo na tela como por exemplo uma mensagem
exemplo echo "digite aqui seu texto";

---

Aula 5 : O que são variáveis?

Variaveis são um espaço utilizado na memoria RAM do computador para armazenar algum dado seja ele texto, valor inteiro ou booleano (true ou false).
toda variavel em php se inicia com $
O codigo em php é lido de cima para baixo da esquerda para a direita

---

Aula 6 : O que são condicionais e booleanos ?

valores booleanos se tratam de apenas dois, true(verdadeiro) ou false(falso) ou 1 para true e 0 para false

condicionais são estruturas que servem para controlar o fluxo e decidir qual sentido a aplicação deve seguir de acordo com a condição.

---

Aula 7: Entendendo sobre Arrays

o array é uma estrutura de dados que armazena diversos valores de diversos tipos como por exemplo uma String, um valor inteiro ou um valor booleano. Arrays tambem são conhecidos como vetores

---

Aula 8: Funções

uma função nada mais é do que um bloco de codigo reutilizavel que tem como finalidade executar uma tarefa especifica sua estrutura se define em:
function nomeFuncao( parametros ){
//logica da função
}

parametros são usados para fazer uso de dados que estão declaradas fora da função

---

Aula 9 : O que são filtros?

função para filtrar dados especificos.
