<?php

 $dbh = new pdo( 'mysql:host=localhost;dbname=moods',
                    'user',
                    'passwd',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


?>