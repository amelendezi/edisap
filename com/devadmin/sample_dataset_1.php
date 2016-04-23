<?php
require_once '../loader.php';
use devadmin\Datasets as Datasets;
use devadmin\DataReset as DataReset;

// Clear all data
$datareset = new DataReset();
$datareset->ClearAll();
echo "Repository was cleared<br>";

// Load datasets
$datasets = new Datasets();
$datasets->LoadDataset1();
echo "Loaded dataset 1<br>";
$datasets->LoadDataset2();
echo "Loaded dataset 2<br>";
echo "Script Finished";