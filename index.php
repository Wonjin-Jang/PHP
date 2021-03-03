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
    $delete_link='';
    if(isset($_GET['id'])){
        $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
        $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
        
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = $row['title'];
        $article['description'] = $row['description'];

        $update_link = '<a href="update.php?id='.$_GET['id'].'">Update</a>';
        $delete_link = '<form action="process_delete.php" method="post">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="Delete">
      </form>
    ';
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
        <a href="create.php">Create</a>
        <p><?=$update_link?></p>
        <p><?=$delete_link?></p>
        <h2><?=
        $article['title']
        ?></h2>
        <?=$article['description']?>
    </body>
</html>
