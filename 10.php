<?php 

    include 'includes/header.php';

    // Connect to a DB with PDO

    $db = new PDO("mysql:host=localhost; dbname=real_state", "root", "root");

    // We create the query

    $query = "SELECT title, img from properties";

    // $properties = $db->query($query)->fetchColumn();

    // var_dump($properties);

    // We prepare it

    $stmt = $db->prepare($query);

    // We execute it

    $stmt->execute();

    // We obtain the results

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";

    // Iterate

    foreach($result as $property):
        echo $property["title"];
        echo "<br>";
        echo $property["img"];
        echo "<br>";
    endforeach;

    include 'includes/footer.php';

?>