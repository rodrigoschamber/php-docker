<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dev Environment</title>
</head>

<body>
    <?php
        echo "Hello from the docker container";

        $mysqli = new mysqli("db", "root", "example", "company1");

        $sql = "INSERT INTO users (name, fav_color) VALUES('Lil Sneazy', 'Yellow')";
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO users (name, fav_color) VALUES('Nick Jonas', 'Brown')";
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO users (name, fav_color) VALUES('Maroon 5', 'Maroon')";
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO users (name, fav_color) VALUES('Tommy Baker', '043A2B')";
        $result = $mysqli->query($sql);

        $sql = 'SELECT * FROM users';

        if ($result = $mysqli->query($sql)) {
            while ($data = $result->fetch_object()) {
                $users[] = $data;
            }
        }

        foreach ($users as $user) {
            echo "<br>";
            echo $user->name . " " . $user->fav_color;
            echo "<br>";
        }
    ?>
</body>

</html>