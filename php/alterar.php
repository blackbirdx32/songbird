<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $banda = $_POST['banda'];
    $musica = $_POST['musica'];
    $imagem = $_POST['imagem'];
    $top = $_POST['top'];

    $con = mysqli_connect('127.0.0.1','root','','songbird');
    $sql = "UPDATE album set id='$id',nome='$nome',banda='$banda',musica='$musica',imagem='$imagem',top='$top' WHERE id='$id'";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "ALterado";
?>