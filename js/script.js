$(document).ready(function () {
    // Show task form
    $('.update-button').on('click', function () {
        var task = $(this).closest('.to-do-task');
        
        task.find('.task-progress').addClass('hidden');
        task.find('.task-description').addClass('hidden');
        task.find('.task-actions').addClass('hidden');
        task.find('.task-form').removeClass('hidden');
    });

    // Crossing out task in checkbox
    $('.task-progress').on('click', function () {
        if ($(this).is(':checked')) {
            $(this).addClass('done');
        } else {
            $(this).removeClass('done');
        }
    });
});