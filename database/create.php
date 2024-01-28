<?php 
    require_once("connection-database.php");

    $method = $_SERVER["REQUEST_METHOD"];

    // Create task
    if ($method === "POST") {
        // Taking data from the form via the name attribute
        $description = filter_input(INPUT_POST, 'description');

        if ($description) { 
            // Saving description on task    
            $tasksQuery = $connection->prepare("INSERT INTO task (description) VALUES (:description)");
            
            // Filtering inputs
            $tasksQuery->bindValue(':description', $description);
            
            $tasksQuery->execute();
        }

        // Returns to the previous page
        header("Location: ..");
        exit; 
    }  
?>