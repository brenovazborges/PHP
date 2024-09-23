<?php 

$nome = $_POST ['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$media = ($nota1+$nota2+$nota3+$nota4) / 4;

echo "Meu nome é $nome e minha nota final é $media";
echo "<br><br>";

if($media>=6)
{
    echo "o aluno $nome está aprovado";
}

elseif($media >=4)
{
    echo "O aluno $nome está de recuperação";
}


else
{
   echo "O $nome está reprovadokkkkk cabaço dms";
}

?>