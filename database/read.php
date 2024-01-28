<?php
    require_once("connection-database.php");

    $method = $_SERVER["REQUEST_METHOD"];

    // Get data for task list
    if ($method === "GET") {
        $tasks = [];

        $tasksQuery = $connection->query("SELECT * FROM task ORDER BY id ASC");
        
        $tasks = $tasksQuery->fetchAll(PDO::FETCH_ASSOC);
    }
?>