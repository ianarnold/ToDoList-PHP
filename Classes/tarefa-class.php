<?php


        $nomeTarefa = $_GET['nome'];
        $descricaoTarefa = $_GET['descricao'];

        header('Location: http://0.0.0.0:8000?name=' . $nomeTarefa);

?>
