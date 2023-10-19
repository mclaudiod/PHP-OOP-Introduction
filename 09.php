<?php 

    include 'includes/header.php';

    // Connect to DB with Mysqli

    $db = new mysqli("localhost", "root", "root", "real_state");

    // var_dump($db);

    // We create the query

    $query = "SELECT title, img from properties";
    // $result = $db->query($query);

    // Prepared statements are more secure and their performance is better than normal

    // We prepare it

    $stmt = $db->prepare($query);

    // We execute it

    $stmt->execute();

    // We create the variable

    $stmt->bind_result($title,$image);

    // We asign the result

    $stmt->fetch();

    // We print the result

    var_dump($title);
    var_dump($image);

    while($stmt->fetch()):
        var_dump($title);
    endwhile;

    // while($row = $result->fetch_assoc()):
    //     var_dump($row);
    // endwhile;

    // var_dump($result->fetch_assoc());

    include 'includes/footer.php';

?>