<?php 
function getData($conn) {
    $sql = "SELECT * FROM users ORDER BY ID DESC LIMIT 10";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["username"]. ' - ' .$row["password"]. " " . "<br>";
          }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>