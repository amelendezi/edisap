<?php
require_once 'loader.php';
use devadmin\InsertApartments as InsertApartments;
$script = new InsertApartments();
$script->Run();
echo "Data Loaded";