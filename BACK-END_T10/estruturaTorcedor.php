<?php
// Dados do Torcedor
$torcedor1_nome = "Ana";
$torcedor1_time = "Flamengo";
$torcedor1_idade = 16;

$torcedor2_nome = "Victor";
$torcedor2_time = "Flamengo";
$torcedor2_idade = 19;

$torcedor3_nome = "Larissa";
$torcedor3_time = "Vasco";
$torcedor3_idade = 25;

$torcedor4_nome = "Marcos";
$torcedor4_time = "Remo";
$torcedor4_idade = 32;

// Função para exibir informações
function exibirTorcedor($nome, $time, $idade) {
    echo "Torcedor: $nome $time ($idade)<br>";
}

// Usando a função
exibirCarro($torcedor1_nome, $torcedor1_time, $torcedor1_idade);
exibirCarro($torcedor2_nome, $torcedor2_time, $torcedor2_idade);
exibirCarro($torcedor3_nome, $torcedor3_time, $torcedor3_idade);
exibirCarro($torcedor4_nome, $torcedor4_time, $torcedor4_idade);
?>