$(document).ready(function () {
    // Show task form
    $('.update-button').on('click', function () {
        let task = $(this).closest('.to-do-task');
        
        task.find('.task-description').addClass('hidden');
        task.find('.task-actions').addClass('hidden');
        task.find('.task-form').removeClass('hidden');
    });
});