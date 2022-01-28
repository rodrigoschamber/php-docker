<?php
    $connection = mysqli_connect('localhost', 'root', 'example', 'cms');
    if ($connection) {
        echo "Connected to the database";
    }
?>