<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '123123',
  'opentutorials');
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)) { 
  $list = $list."<li><a href=\"index.php?id={$row['id']}\"></a></li>";
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
            <li>HTML</li>
        </ol>
        <form action="process_create.php" method="post">
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea name=description placeholder="description"></textarea></p>
        <p><input type="submit"</P>
        </form>
    </body>
</html>
