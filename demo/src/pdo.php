<?php

try {
    $dsn = 'pgsql:dbname=app host=db_app port=5432';
    $dbh = new PDO($dsn, 'vagrant', 'pass');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'pdo ok';
}
catch(Exception $e) {
    echo 'Error:' . $e->getMessage();
}
