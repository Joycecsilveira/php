<?php

$idade = 16;
$acompanhantes = 0;

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos." . PHP_EOL;
  echo "Pode entrar";
}
else {
  echo "Você não tem permissão para entrar." .PHP_EOL;
}

$mensagem = $acompanhantes <= 0 && $idade < 18  ? 'Você é menor de idade e não tem acompanhante, você não pode entrar' : 'Acesso liberado';
echo $mensagem;
