<?php
$conn= mysqli_connect("localhost", "root", "123123", "opentutorials");
$sql = "
INSERT INTO topic
(title, description, created)
VALUES(
    '{$_POST['title']}',
    '{$_POST['description']}',
    NOW()
    )
";
$result = mysqli_query($conn,$sql);
if($result===false){
    echo 'err';
    error_log(mysqli_error($conn));
} else {
    echo '<a href="index.php">success</a>';
}
echo $sql;
?>