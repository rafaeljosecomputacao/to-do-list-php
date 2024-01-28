<?php
    require_once("connection-database.php");

    $method = $_SERVER["REQUEST_METHOD"];

    // Delete task
    if ($method === "GET") {
        // Taking data from the form via the url
        $id = filter_input(INPUT_GET, 'id');
        
        if ($id) {
            // Deleting a task
            $tasksQuery = $connection->prepare("DELETE FROM task WHERE id = :id");

            // Filtering inputs
            $tasksQuery->bindValue(':id', $id);

            $tasksQuery->execute();     
        }

        // Returns to the previous page
        header("Location: ..");
        exit; 
    }
?>