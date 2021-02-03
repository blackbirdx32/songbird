<html>
    <head>
        <title>Álbum</title>
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
            <div class="bloco">
                <img class="album" src="..\imagens\<?php echo $row['imagem']?>">
            </div>

            <div class="bloco">
                <p><?php echo $row['nome']?></p>
                <p><?php echo $row['banda']?></p>
                <p><?php echo $row['musica']?></p>
                <p><?php echo $row['imagem']?></p>
                <p>TOP: <?php echo $row['top']?></p>
                <form method="POST" action="alterar_form.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                    <input type="submit" value="ALT" class="borda">        
                </form>
                <form method="POST" action="deletar.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                    <input type="submit" value="DEL" class="borda">        
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