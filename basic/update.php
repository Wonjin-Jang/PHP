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
            $list = scandir('./data'); // scandir() = readdir
            // .. = 상위 디렉토리
            $i = 0;
            while($i<count($list)){
                if ($list[$i] != '.'){ // '!=' = 우항과 같지 않으면
                    if ($list[$i] != '..'){
                        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";  // \n = 일반적인 텍스트 문서에서 줄바꿈
                // \"index.php\" 여기에서 \" 는 \뒤에 나오는 문자의 문법을 무시한다.
                    }    
                } 
                $i = $i + 1;                   
            }
        ?>
    </ol>
    <a href="create.php">Create</a>
    <?php
        if(isset($_GET['id'])){ ?>
            <a href="update.php?id=<?php echo $_GET['id']; ?>">Update</a>
        <?php }?>
    <h2>
        <?php
            if(isset($_GET['id'])){
                echo $_GET['id'];
            } else {
                echo "Welcome";
            }
        ?>
    </h2>
    <?php
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
            } else {
                echo "Hello, PHP";
            }
    ?>
    
    <form action="update_process.php" method="post">
    <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
    <p>
      <input type="text" name="title" placeholder="Title" value="<?php if(isset($_GET['id'])){
            echo $_GET['id'];
        } else {
            echo "Welcome";
        } ?>">
    </P>
    <p>
      <textarea name="description" placeholder="Description"><?php if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
            } else {
                echo "Hello, PHP";
            } ?></textarea>
    </P>
    <p>
    <input type="submit">
    </p>
    </form>
</body>
</html>