<?php
    require_once("connection-database.php");

    $method = $_SERVER["REQUEST_METHOD"];

    // Get data for task list
    if ($method === "GET") {
        $tasks = [];

        $tasksQuery = $connection->query("SELECT * FROM task");
        
        $tasks = $tasksQuery->fetchAll(PDO::FETCH_ASSOC);
    }
?>