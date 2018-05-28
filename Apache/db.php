<?php
try{
    $npro = (String) $_GET['npro'];
    echo $npro;
    $conn = new PDO("mysql:host=172.17.0.4;dbname=admin", 'admin', 'jeanjean');
    $sql = "SELECT * FROM PRODUIT WHERE NPRO = \"".$npro .'"';
    echo $sql;
    $rep = $conn->query($sql);

    while ($donnees = $rep->fetch())
    {
        echo $donnees["NPRO"] . ' : ' . $donnees['LIBELLE'];
    }
} catch (PDOException $e)
{
    echo "<p> Connection failed: " . $e->getMessage()."</p>";
}
