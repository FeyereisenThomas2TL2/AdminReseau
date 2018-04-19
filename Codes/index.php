<?php

        try {
        $conn = new PDO("mysql:host=172.17.0.5;dbname=mydb00", 'root', 'jeanjean');
        // set the PDO error mode to exception
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p> Connected successfully </p>";
        $query = requete.value;
        echo $query;
        echo "<br>";
        $stmt=$conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        echo "<br>";
        for($i=0 ; $i<count($result[0]) ; $i++){
                echo $result[0][$i]." ";
        }
        //for($i=0 ; i<count($result); $i++){
          //      echo $result[i];
       // }
    }
    catch(PDOException $e)
    {
        echo "<p> Connection failed: " . $e->getMessage()."</p>";
    }
?>
<!DOCTYPE html>
<html>
<meta charset=utf-8>
<head><title>Index</title>
        <script>
        </script>
</head>
<body>
        <br>
        <input type = "text" id = "requete">
        <input type = "submit" value = "Envoyer la requête" id = "subm">
        <br>
        <span id = "result">Champ du résultat</span>
</body>
</html>
