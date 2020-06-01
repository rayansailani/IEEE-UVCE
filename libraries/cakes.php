<?php

function getCon()
{
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $con = new mysqli($server, $username, $password, $db);

    if($con->connect_error)
    die($con->connect_error);

    return $con;

}

?>
