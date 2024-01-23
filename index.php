<?php
    include_once("database/connection-database.php");
    include_once("templates/header.php");
?>
    <!-- Main -->
    <main class="to-do">
        <section class="to-do-header">
            <h1>Things to do</h1>
            <form action="" class="to-do-form">
                <input type="text" name="description" placeholder="Write your task here" required>
                <button type="submit" class="form-button">
                    <i class="bi bi-plus"></i>
                </button>
            </form>
        </section>
        <section class="to-do-tasks">
            <div class="task">
                <input type="checkbox" name="progress" class="task-progress">
                <p class="task-description">Task 1</p>
            </div>
            <div class="task-actions">
                <button type="button" class="action-button edit-button">
                    <i class="bi bi-pen"></i>
                </button>
                <button type="button" class="action-button delete-button">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
            <form action="" class="to-do-form task-edit-form">
                <input type="text" name="description" placeholder="Edit your task here">
                <button type="submit" class="form-button confirm-button">
                    <i class="bi bi-check"></i>
                </button>
            </form>
        </section>    
    </main>
<?php
    include_once("templates/footer.php");
?>