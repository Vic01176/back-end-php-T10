<?php
// Definindo o torcedor de Futebol
class Torcedor {
    public $nome;
    public $time;
    public $idade;

    // Construtor para inicializar o objeto
    public function __construct($nome, $time, $idade) {
        $this->nome = $nome;
        $this->time = $time;
        $this->idade = $idade;
    }

    // Método para exibir informações
    public function exibir() {
        echo "Torcedor: {$this->nome} {$this->time} ({$this->idade})<br>";
    }
}

// Criando objetos (instâncias)
$torcedor1 = new Torcedor("Ana,", "Flamengo", 16);
$torcedor2 = new Torcedor("Victor,", "Flamengo", 19);
$torcedor3 = new Torcedor("Larissa,", "Vasco", 25);
$torcedor4 = new Torcedor("Remo,", "Marcos", 32);


// Usando métodos
$torcedor1->exibir();
$torcedor2->exibir();
$torcedor3->exibir();
$torcedor4->exibir();

?>