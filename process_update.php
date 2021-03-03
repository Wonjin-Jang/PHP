<?php
$conn= mysqli_connect("localhost", "root", "123123", "opentutorials");

$filtered = array(
    'id'=>mysqli_real_escape_string($conn,$_POST['id']),
    'title'=>mysqli_real_escape_string($conn,$_POST['title']),
    'description'=>mysqli_real_escape_string($conn,$_POST['description'])
);
$sql = "
UPDATE topic
SET
 title='{$filtered['title']}',
 description='{$filtered['description']}'
 WHERE
 id={$filtered['id']}
";

$result = mysqli_query($conn,$sql);
if($result===false){
    echo 'err';
    error_log(mysqli_error($conn));
} else {
    echo '<a href="index.php">success</a>';
}
?>