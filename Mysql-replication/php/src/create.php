<?php
function createData($conn) {
    $name = randomName();
    $pass = generateRandomString();
    $sql = "INSERT INTO users (username, password)
VALUES ('$name', '$pass')";
    if ($conn->query($sql) === TRUE) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function randomName() {
    $names = array(
        'Juan',
        'Luis',
        'Pedro',
        'Hoang',
        'Viet',
        'Dung',
        'Trung',
        'Giang',
        'Cuong',
        'Anh',
        'Kieu',
        'Thien'
    );
    return $names[rand(0, count($names) - 1)];
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
