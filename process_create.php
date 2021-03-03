<?php
$conn= mysqli_connect("localhost", "root", "123123", "opentutorials");

$filtered = array(
    'title'=>mysqli_real_escape_string($conn,$_POST['title']),
    'description'=>mysqli_real_escape_string($conn,$_POST['description'])
);
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