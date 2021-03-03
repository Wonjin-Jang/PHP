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

    $article = array(
        'title'=>'Welcome',
        'description'=>'Hello !'
    );
    $update_link ='';
    if(isset($_GET['id]'])){
        $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
        $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = $row['title'];
        $article['description'] = $row['description'];

        $update_link = '<a href="update.php?id='$_GET['id']'">Update</a>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?=
            $list
            ?>
        </ol>

        <form action="process_create.php" method="post">
        <p><input type="text" name="title" placeholder="title" valie="<?=$article['title']?>"></p>
        <p><textarea name=description placeholder="description"><?=$article['description']?></textarea></p>
        <p><input type="submit"</P>
        </form>
    </body>
</html>
