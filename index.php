<?php
    require_once("database/connection-database.php");
    include_once("templates/header.php");
?>
    <!-- Main -->
    <main class="to-do-container">
        <!-- Header -->
        <section class="to-do-header">
            <h1>Things to do</h1>
            <form action="" class="to-do-form">
                <input type="text" name="description" placeholder="Write your task here" required>
                <button type="submit" class="form-button create-button">
                    <i class="bi bi-plus"></i>
                </button>
            </form>
        </section>
        <!-- List -->
        <section class="to-do-list">
            <div class="to-do-task">
                <input type="checkbox" name="progress" class="task-progress">
                <p class="task-description">My task one</p>
                <div class="task-actions">
                    <button type="submit" class="action-button update-button">
                        <i class="bi bi-pen"></i>
                    </button>
                    <button type="submit" class="action-button delete-button">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
                <form action="" class="to-do-form task-form hidden">
                    <input type="text" name="description" placeholder="Edit your task here">
                    <button type="submit" class="form-button confirm-button">
                        <i class="bi bi-check"></i>
                    </button>
                </form>
            </div>         
        </section>
        <!-- Footer -->
        <section class="to-do-footer">
            <img src="img/logo.png" alt="Logo">
            <p>My tasks</p>
        </section>    
    </main>
<?php
    include_once("templates/footer.php");
?>