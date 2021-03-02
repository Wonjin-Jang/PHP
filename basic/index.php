<?php
    function print_tilte (){
        if(isset($_GET['id'])){
            echo $_GET['id'];
        } else {
            echo "Welcome";
        }
    }
      //unset(); = 변수 지우기
      function print_description (){
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
            } else {
                echo "Hello, PHP";
            }
      }
      function print_list (){
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
      }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>
    <?php
        print_title();
    ?>
    </title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
        <ol>
        <?php 
            print_list();
        ?>
    </ol>
    <h2>
        <?php
            print_title();
        ?>
    </h2>
    <?php
        print_description();
    ?>
</body>
</html>