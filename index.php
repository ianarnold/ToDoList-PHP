<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Task Manager</title>
</head>
<body>
    <h1>Tasks Manager</h1>
    <form action="">
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Nome da tarefa:
                <input type="text" name="nome" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>
    <br>

    <?php

      $listaTarefas = [];

      if (array_key_exists('nome', $_GET))
      {
          $_SESSION['listaTarefas'][] = $_GET['nome'];
      }
      $listaTarefas = [];
      if (array_key_exists('listaTarefas', $_SESSION))
      {
          $listaTarefas = $_SESSION['listaTarefas'];
      }

    ?>

    <table>
        <tr>
            <th>
                Nome tarefa
            </th>
        </tr>

          <?php foreach($listaTarefas as $tarefa) : ?>

        <tr>
            <td>
                <?php echo $tarefa ?>
            </td>
        </tr>

          <?php endforeach; ?>

    </table>
</body>
</html>
