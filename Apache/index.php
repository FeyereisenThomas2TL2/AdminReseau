<head>
    <script type="text/javascript">
        function submitQuery(){
            var xhr = new XMLHttpRequest();
            var query = "db.php?npro=" + document.getElementById('query').value;
            xhr.open('GET', query);
            xhr.onreadystatechange = function() {
                if (xhr.status == 200 && xhr.readyState == 4) {
                    document.getElementById('divQuery').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>

<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 28-05-18
 * Time: 08:18
 */

try {
    $conn = new PDO("mysql:host=172.17.0.4;dbname=admin", 'admin', 'jeanjean');
    echo "<p> Connected successfully </p>";
    $rep = $conn->query('SELECT * FROM PRODUIT');

    while ($donnees = $rep->fetch())
    {
        ?>
        <p>
            <strong>Numéro</strong> : <?php echo $donnees['NPRO']; ?><br>
            <strong>Prix</strong> : <?php echo $donnees["PRIX"]; ?><br>
            <strong>Libellé du produit</strong> : <?php echo $donnees['LIBELLE']; ?>
        </p>
        <?php
    }
}
    catch(PDOException $e)
    {
        echo "<p> Connection failed: " . $e->getMessage()."</p>";
    }
?>
<body>
<div id="divQuery">

</div>
<form>
    <input type="text" id="query" value="testQuery">
    <br>
</form>
<button id="submitQuery" name="Query" value="Query" onclick="submitQuery()">Query</button>
</body>


