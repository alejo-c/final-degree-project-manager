<?php
$title = "FDP's Manager | Tables";
$stylesheets = '
    <link rel="stylesheet" href="styles/global.css?v=1">
    <link rel="stylesheet" href="styles/navbar.css?v=1">
    <link rel="stylesheet" href="styles/table.css?v=1">
';
$heading = '
    <header class="title">
        <h2>Database Tables</h2>
    </header>
';

$tableTitle = 'Tables';
$headers = array(
    'Name',
    'Register Count',
);

$mysqli = new mysqli('localhost', 'fdpm-admin', 'P4$$word', 'fdpm-db');
$query = 'SELECT * FROM fdpm-db';
$result = $mysqli->query($query);

$tables = 1;
$data = $tables;

ob_start();
include 'templates/table-template.php';
$tableTemplate = ob_get_contents();
ob_end_clean();

$content = "
    <section class='main-section'>
    $tableTemplate 
    </secti>
";

include 'templates/base-template.php';
