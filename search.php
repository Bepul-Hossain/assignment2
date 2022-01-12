<?php
    require_once 'phpSql.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <?php 
        $title =$_POST['Title'];
        $query = [];
        $index = 0;

        foreach($q as $key => $item){
           if($title == $item['Title']){
               array_push($query, $item);
           }   
        }
    ?>
     <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Available</th>
            <th>Pages</th>
            <th>ISBN</th>
        </tr>
        <tbody>
            <?php foreach ($query as $key => $item) : ?>
                <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $item['Title']; ?></td>
                    <td><?php echo $item['Author']; ?></td>
                    <td><?php echo $item['Available']; ?></td>
                    <td><?php echo $item['Pages']; ?></td>
                    <td><?php echo $item['ISBN']; ?></td>
                    <td> <a href="<?php echo  './delete.php?id=' . (int)($key1 + 1); ?>">
                            <button class="btn-delete">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
     
</body>
</html>