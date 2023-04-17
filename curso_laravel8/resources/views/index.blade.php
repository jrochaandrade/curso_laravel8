<?php

//Colocando váriavel dentro de outra variável - Aqui temos um código HTML dentro de uma variável PHP
 $nome = "João Paulo";  

 $html = "<!DOCTYPE html>
 <head>
     <title>Site em PHP de $nome</title>
 </head>
 <body>
     <h1>Meu nome é $nome</h1>
     <p>Olá $nome</p>
 </body>
</html>";  

#Podemos criar comentários com duas barras, com # ou com /* AQUI VAI VIRAR UM COMENTÁRIO */
/* Testando o comentário para grandes textos. */

echo $html;

#Declarando variável
$a = 100;
$b = '100';
$c = 3.14;
$d = TRUE;
$d2 = FALSE;

//Imprimindo na tela
echo $a;     
echo'<br>';  //Quebra de linha
echo $b;
echo'<br>';
echo $c;
echo'<br>';
echo $d;
echo'<br>';
echo $d2;
echo'<br>';
//Declaraçãod e variável
$num_1 = 2;
$num_2 = 5;

//Operadores aritiméticos
$soma = $num_1 + $num_2;  //Soma
$subtracao = $num_1 - $num_2;  //Subtração
$mult = $num_1 * $num_2;  //Multiplicação
$div = $num_1 / $num_2;  //Divisão

//Imprimindo resultados das operações anteriores na tela
echo "O resultado da soma entre numero $num_1 e o numero $num_2 é $soma", '<br>';
echo "O resultado da subtração entre numero $num_1  e o numero $num_2 é $subtracao", '<br>';
echo "O resultado da multiplicação entre o numero $num_1  e o numero $num_2 é $mult", '<br>';
echo "O resultado da divisão entre o numero $num_1 e o  numero $num_2 é $div", '<br>';
echo'<br>';

//Arrays
$prateleira = ['O', 'l', 'á', ',', ' ', 'Mundo', '!', 1, 2, 3, 4, 5];

echo $prateleira[0];
echo $prateleira[1];
echo $prateleira[2];
echo $prateleira[3];
echo $prateleira[4];
echo $prateleira[5];
echo $prateleira[6];
echo'<br>';
echo'<br>';
#Nesse caso acima a variável $prateleira armazena várias informações, para imprimir temos que associar qual informação deve ser impressa começando do 0 para o primeiro campo. - Na tela foi impresso Olá, Mundo!

//Array associativo
$compras = ['a'=>'abacate', 'b'=>'bola', 'c'=>'camarão']; //Nesse caso o abacate é acessavel pela letra "a" o "a" é uma chave

echo $compras['a'], '<br>';
echo $compras['b'], '<br>';
echo $compras['c'], '<br>';
echo'<br>';

echo "Eu comprei um " .$compras['a']. " uma " .$compras['b']. " e um pacote de " .$compras['c'];
