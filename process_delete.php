<?php
$conn= mysqli_connect("localhost", "root", "123123", "opentutorials");

$filtered = array(
    'id'=>mysqli_real_escape_string($conn,$_POST['id'])
);
$sql = "
DELETE
FROM topic
WHERE id = {$filtered['id']}
";

$result = mysqli_query($conn,$sql);
if($result===false){
    echo 'err';
    error_log(mysqli_error($conn));
} else {
    echo '<a href="index.php">success</a>';
}