<?php
$mysqli = new mysqli("localhost", "surprises_fnbadsoigu325", "8VR9LBRfFKsMLFwe", "surprises_fnbadsoigu325");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query = "SELECT * FROM `surprises` ORDER BY RAND() LIMIT 0,1";

if ($result = mysqli_query($mysqli, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        //printf ("%s \n", $row["name"]);
        $surprise_name = $row["name"];
    }

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */

mysqli_close($mysqli);

?>
