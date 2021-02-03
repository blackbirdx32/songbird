<?php
    $nome = $_POST['nome'];
    $banda = $_POST['banda'];
    $musica = $_POST['musica'];
    $imagem = $_POST['imagem'];
    $top = $_POST['top'];

    $con = mysqli_connect('127.0.0.1','root','','songbird');
    $sql = "INSERT INTO album (nome,banda,musica,imagem,top) VALUES ('$nome','$banda','$musica','$imagem','$top')";

    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "Cadastrado";
?>