<?php
    $conn = mysqli_connect(
        "localhost", 
        "root", 
        "123123", 
        "opentutorials"
    );
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    mysqli_fetch_array($result);
?>    
