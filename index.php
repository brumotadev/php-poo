<?php

require "app/classes/Pessoa.php";
require "app/classes/UploadFoto.php";
require "app/classes/AtividadesPessoa.php";

$upload = new UploadFoto;
$upload->file('foto.png');
$upload->extension();
$upload->rename();
echo $upload->upload();


// $atividadesPessoa = new AtividadesPessoa;
// echo $atividadesPessoa->pular();

// // instanciando a classe pessoa
// $pessoa = new Pessoa;
// $pessoa->idade = 27;
// $pessoa->nome = "Bruno";
// $pessoa->email = "contato@bruno.com";
// echo $pessoa->dadosPessoa();

// $pessoa->idade = 25;
// $pessoa->nome = "Jessica";
// $pessoa->email = "contato@jessica.com";
// echo $pessoa->dadosPessoa();

// $pessoa -> idade = 49;
// $pessoa -> nome = "Rosangela";
// $pessoa -> email = "contato@majestade.com";
// echo $pessoa -> dadosPessoa();

?>