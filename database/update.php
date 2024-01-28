<?php 
    require_once("connection-database.php");

    $method = $_SERVER["REQUEST_METHOD"];

    // Update task
    if ($method === "POST") {
        // Taking data from the form via the name attribute
        $description = filter_input(INPUT_POST, 'description');
        $id = filter_input(INPUT_POST, 'id');

        if ($description && $id) { 
            // Updating a task    
            $tasksQuery = $connection->prepare("UPDATE task SET description = :description WHERE id = :id");
            
            // Filtering inputs
            $tasksQuery->bindValue(':description', $description);
            $tasksQuery->bindValue(':id', $id);
            
            $tasksQuery->execute();
        }

        // Returns to the previous page
        header("Location: ..");
        exit; 
    }  
?>