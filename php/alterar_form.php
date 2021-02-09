<html>
    <head>
        <title>ALterar</title>
        <link rel="stylesheet" type="text/css" href="..\css\style.css">
    </head>

    <body>
        <section>
            <?php
                $id = $_POST['id'];

                $con = mysqli_connect('127.0.0.1','root','','songbird');
                $sql = "SELECT * FROM album WHERE id='$id'";
                $result = mysqli_query($con,$sql);
               
                while($row = mysqli_fetch_array($result)){
            ?>
            <div class="blocoInfo">
                <img class="imagem" src="..\imagens\<?php echo $row['imagem'];?>">
            </div>

            <div class="formularioAlt">
                <form method="POST" action="alterar.php">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <input type="text" name="nome" value="<?php echo $row['nome'];?>"><p>
                    <input type="text" name="banda" value="<?php echo $row['banda'];?>"><p>
                    <input type="text" name="musica" value="<?php echo $row['musica'];?>"><p>
                    <input type="text" name="imagem" value="<?php echo $row['imagem'];?>"><p>
                    Top : <input type="radio" name="top" value="1">1
				    <input type="radio" name="top" value="2">2<p>   
                    <button type="submit" class="borda">Enviar</button>
                </form>
                <a href="../index.php">Voltar</a>
            </div>
            <?php

                }
                mysqli_close($con);
            ?>
            
        </section>
    </body>

</html>