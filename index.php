<?php
    require_once("database/read.php");
    include_once("templates/header.php");
?>
    <!-- Main -->
    <main class="to-do-container">
        <!-- Header -->
        <section class="to-do-header">
            <h1>Things to do</h1>
            <form action="database/create.php" method="POST" class="to-do-form">
                <input type="text" name="description" placeholder="Write your task here" required>
                <button type="submit" class="form-button create-button">
                    <i class="bi bi-plus"></i>
                </button>
            </form>
        </section>
        <!-- List -->
        <section class="to-do-list">  
            <?php if($tasksQuery->rowCount() == 0): ?> 
                <p class="to-do-empty">Empty list</p>
            <?php else: ?>    
                <?php foreach($tasks as $task): ?>         
                    <div class="to-do-task">
                        <p class="task-description"><?= $task['description'] ?></p>   
                        <div class="task-actions">
                            <button type="submit" class="action-button update-button">
                                <i class="bi bi-pen"></i>
                            </button>
                            <a href="database/delete.php?id=<?= $task['id'] ?>">
                                <button type="button" class="action-button delete-button">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </a>                          
                        </div>
                        <form action="database/update.php" method="POST" class="to-do-form task-form hidden">
                            <input type="hidden" name="id" value="<?= $task['id'] ?>">
                            <input type="text" name="description" placeholder="Edit your task here" value="<?= $task['description'] ?>">
                            <button type="submit" class="form-button confirm-button">
                                <i class="bi bi-check"></i>
                            </button>
                        </form>
                    </div>
                <?php endforeach ?>
            <?php endif; ?>               
        </section>
        <!-- Footer -->
        <section class="to-do-footer">
            <img src="img/logo.png" alt="Logo">
            <p>My <span>tasks</span></p>
        </section>    
    </main>
<?php
    include_once("templates/footer.php");
?>