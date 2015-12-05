<?php

$config = array(
    "db" => array(
        "db1" => array(
            "dbname" => "database1",
            "username" => "dbUser",
            "password" => "pa$$",
            "host" => "localhost"
        ),
        "db2" => array(
            "dbname" => "database2",
            "username" => "dbUser",
            "password" => "pa$$",
            "host" => "localhost"
        )
    ),
    "paths" => array(
        "images" => array(
            "FromIndex" => "templates/images/index",
            "FromPrivatePages" => "../../templates/images/index",   
        ),
        "home" => array(
            "FromIndex" => "index.php",
            "FromPrivatePages" => "../../index.php",
        )
    )
);

?>