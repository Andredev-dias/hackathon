
<html>
<head>
<link href="codigo.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="caixa">
    <form method="post" action="codigo.php">
        <div>
            <label for="texto">Digite uma Palavra</label></br>
            <input type="text" name="texto">
        </div>

        <div>
        </br>
            <button type="submit">Pesquisar Anagramas</button>
        </div>
    </form>
</div>
</body>
</html>



<?php

    $f = file("lista.txt");

    $texto = "";

    if(empty($_POST)){

    } else {
        $texto = $_POST['texto'];

        $anagrama = array();

        for($i=0; $i<100; $i++){
            array_push($anagrama, str_shuffle($texto));
        }
    

        $lista = array_unique($anagrama);

       // var_dump($lista);

    }
    ?>
    <table>
    <tr>
        <th>ANAGRAMAS</th>
    </tr>
    <?php

    foreach ($lista as $lista) {
        ?>
        <tr>
            <td><?= $lista ?></td>
        </tr>
    <?php
    }
    ?>
</table>




   

    
 

