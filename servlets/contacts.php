<?php

$dbconn = pg_connect("host=54.93.65.5 port=5432 dbname=5csongor user=fasttrackit_dev password=fasttrackit_dev");

$query = 'SELECT name, phone FROM contact';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

$allContacts = array();


while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    $allContacts[] = array(
        "firstName" => $line["name"],
        "phone" => $line["phone"],

    );



}
echo json_encode($allContacts);
pg_close($dbconn);