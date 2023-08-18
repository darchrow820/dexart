<?php

	// if($_POST['action'] == 'callback') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dexart";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM transaction";
    $result = $conn->query($sql);

    $arr = [];
    while ($row = $result->fetch_assoc()) {
        $user = [];
        array_push($user, $row["date"], $row["sum"], $row["currency_id"],$row["user_id"], $row["external_id"]);
        array_push($arr, $user);
    }


    $fp = fopen(date("Y-m-d H.i.s") . ".csv", 'w');

    $headers = [["date", "sum", "currency_id", "user_id", "external_id"]];

    foreach ($headers as $fields) {
        fputcsv($fp, $fields, ";");
    }

    foreach ($arr as $fields) {
        fputcsv($fp, $fields, ";");
    }

    fclose($fp);
	// }
?>