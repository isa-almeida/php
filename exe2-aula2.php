<?php 

/*
Crie um algoritmo que leia o nome, o endereço e o telefone do usuário, armazene em uma matriz e depois mostre os dados digitados em uma única linha, 
conforme exemplo: Sra Maria Antonieta residente e domiciliada na rua da Maria, nª 18 , portadora do telefone: (11) 2122-157
*/
$nome = "<script> var nome = prompt('Insira o nome'); document.write(nome)</script>";

$endereco = "<script> var endereco = prompt('Insira o endereço'); document.write(endereco)</script>"; 

$telefone = "<script> var telefone = prompt('Insira o telefone'); document.write(telefone)</script>";

$pessoa = array();

$pessoa[0]['nome'] = $nome;
$pessoa[0]['endereco'] = $endereco;
$pessoa[0]['telefone'] = $telefone;

echo "Sr(a). <b>".$pessoa[0]['nome']."</b> residente e domiciliado(a) na rua <b>".$pessoa[0]['endereco']."</b> portador(a) do telefone: <b>".$pessoa[0]['telefone']."</b>";

?> 