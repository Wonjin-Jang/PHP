<?php
    unlink('data/'.$_post['id']);
    header('Location: /index.php');
?>