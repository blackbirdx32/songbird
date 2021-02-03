<html>
    <head>
        <title>SONGBIRD</title>
        <link rel="stylesheet" type="text/css" href="css\style.css">
    </head>

    <body>
        <section>
            <?php
                $con = mysqli_connect('127.0.0.1','root','','songbird');
                $sql = "SELECT * FROM album";
                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_array($result)){
                    if($row['top']==1){
            ?>
            <div class="bloco">
                <form method="POST" action="php\info.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>	
                    <button type="submit"><img src="imagens\<?php echo $row['imagem']?>"></button>
                </form>
            </div>
            <?php
                    }
                }
                mysqli_close($con);
            ?>

            <div class="bloco">
                <a href="inserir.html"><img src="imagens\boc.jpg"></a>
            </div>
        </section>
    </body>

</html>