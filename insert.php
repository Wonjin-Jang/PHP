<?php
    $conn = mysqli_connect("localhost", "root", "123123", "opentutorials");
    $sql = "
        INSERT INTO topic (
            title, 
            description, 
            created
        )VALUES(
            'MySQL',
            'MySQL is ...',
            NOW()
        )";
    
    $result = mysqli_query($conn, $sql);
    if ($result === false){
        echo mysqli_error($conn);  
    }
?>  