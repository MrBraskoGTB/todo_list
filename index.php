<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
</head>
<body>
    <h1>ToDoList est content de vous revoir !</h1>
    <h3>Commencez-donc par rentrer les informations dont vous avez besoin que je m'en souvienne pour vous !</h3>
    <form name="ToDoToGo" method="post" action="index.php">
            Donnez un titre a votre tache : <input type="text" name="task1"/><br/>
            Nommez votre tache :  <input type="text" name="task2"/><br/>
            <input type="submit" name="valider" value="Enregistrer"/>
    
</body>
</html>




<?php
        if(isset($_POST['valider'])){
            $task1=$_POST['task1'];
            $task2=$_POST['task2'];
            echo 'Salut tu as choisi de '. $task1.' ce qui inclut '. $task2.'<br/>Bon courage !';
        }
        if (!isset($_SESSION['ToDoToGo'])) {

            $_SESSION['ToDoToGo'] = array();
        }
        if (isset($_POST['ToDoToGo'])) {
        
            array_push($_SESSION['ToDoToGo'], $_POST['ToDoToGo']);
        } 
        foreach ($_SESSION['ToDoToGo'] as $tache) {
            echo $tache . "<br>";
        }
?>

   