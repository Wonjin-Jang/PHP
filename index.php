<?php
    $conn = mysqli_connect(
        "localhost", 
        "root", 
        "123123", 
        "opentutorials"
    );
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $list = '';
    while($row = mysqli_fetch_array($result)){    
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <?=
            $list
            ?>
        </ol>
        <a href="create.php">Create</a>
        <h2>Welcome</h2>
        Welcome 
    </body>
</html>
