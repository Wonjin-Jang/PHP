<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>
    <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        } else {
            echo "Welcome";
        }
    ?>
    </title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
        <ol>
        <?php 
            $list = scandir('./data'); 
            $i = 0;
            while($i<count($list)){
                if ($list[$i] != '.'){ 
                    if ($list[$i] != '..'){
                        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";  
                    }    
                } 
                $i = $i + 1;                   
            }
        ?>
    </ol>
    <a href="create.php">Create</a>
    <form action="create_process.php" method="post">
    <p>
      <input type="text" name="title" placeholder="Title">
    </P>
    <p>
      <textarea name="decription" placeholder="Description"></textarea>
    </P>
    <p>
    <input type="submit">
    </p>
    </form>
</body>
</html>