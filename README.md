# todo_list

Step by step pour que tu puisses mieux comprendre à savoir que si je ne parles pas de certains points dans les plus grands détails c'est uniquement par ce que je ne sais pas vraiment à quoi ça correspond vraiment ou alors que ça a pas vraiment d'importance 

1 - J'ai créé le formulaire en html à partir de mes connaissances et tu vas vite voir que en effet, je n'ai pas des connaissances de ouf en dev.
2 - J'ai ensuite créé un bouton de validation des données rentrée dans le formulaire.
3 - Ensuite une petite phrase de confirmation en PHP qui synthétise les données rentrées.
4 - CEs dernières informations sont enregistrés et reste affichées jusauq ce que une nouvelle série de données est rentrée. Donc oui on peut dire que c'est une ToDoList à usage unique.
5 - C'est dans le point 4 que l'on peut voir que c'est une SESSION qui enregistre les données.
6- Et c'est un peu près tout.

 7-      if(isset($_POST['valider'])){
            $task1=$_POST['task1'];
            $task2=$_POST['task2'];
            echo 'Salut tu as choisi de '. $task1.' ce qui inclut '. $task2.'<br/>Bon courage !';

La condition if va selectionner les reponse task1 et task 2 pour forumler une phrase synthèse.

8 -  if (!isset($_SESSION['ToDoToGo'])) {

            $_SESSION['ToDoToGo'] = array();
        }
        if (isset($_POST['ToDoToGo'])) {
        
            array_push($_SESSION['ToDoToGo'], $_POST['ToDoToGo']);
        } 
        foreach ($_SESSION['ToDoToGo'] as $tache) {
            echo $tache . "<br>";
        
La SESSIOn sert à enregistrer les données précédemment rentrées.

Merci d'avoir lu, c'est cool, maitenant je vais assumer ma (mauvaise) note, perdre mon boulot, perdre 12.3 dentds, perdres mon compte épargne, perdre ma brosse a dent, etc
    echo (1)

    