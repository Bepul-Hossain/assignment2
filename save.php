<?php
    require_once 'phpSql.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save</title>
</head>

<body>
    <?php
        $Title = $_POST['Title'];
        // echo $Title;
        $Author = $_POST['Author'];
        $Available = $_POST['Available'];
        $Pages = $_POST['Pages'];
        $ISBN = $_POST['ISBN'];

        $task = array(':Title' =>$Title,
        ':Author' =>$Author,
        ':Available' =>$Available,
        ':Pages' => $Pages,
        'ISBN' => $ISBN
        );

        $sql = "INSERT INTO Info(Title, Author, Available, Pages, ISBN)
                    Values(:Title, :Author, :Available, :Pages, :ISBN)";

        $q = $pdo->prepare($sql);
        $q->execute($task);
        header('Location:index.php');
    ?>
</body>

</html>