<?php
$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$db=new \MongoDB\Driver\BulkWrite;

$db->insert(['nome'=>'Afronesio','idade'=>23]);

$manager->executeBylkWrite('raiz.academicos',$db);