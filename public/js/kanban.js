$(function () {
    $('.sorted-list').sortable({
        receive: function (event, ui) {
            let ouonest = event.target.id;
            let id = $(ui.item).attr('data-task-id');
            $.getJSON('/tasks/' + id + '/' + ouonest);
        },
        connectWith: ".sorted-list",
        appendTo: 'body',

    }).disableSelection();
});
//----------------------------------------------------------------------------------
$(document).ready(function () {
    $('#btnaddtask').on('click', function () {
        $('#hidden').toggle();
    });
    //-------------------------------------------------------------------------------
    $('.btndelete').on('click', function () {
        let id = $(this).attr('data-task-id');
        $.getJSON('/tasks/' + id + '/delete')
            .then(function (rep) {
                if (rep == 'ok') {
                    $('#task-' + id).remove();
                }
            });
    });

    //-------------------------------------------------------------------------------
    $('.btnedittask').on('click', function () {
        let id = $(this).attr('data-task-id');
        $.getJSON('/tasks/' + id + '/edit');
    });
    //-------------------------------------------------------------------------------
    $(function () {
        $("[data-info=tabs]").tabs({
            beforeLoad: function (event, ui) {
                ui.jqXHR.fail(function () {
                    ui.panel.html(
                        "Vous ne pouvez pas modifier cette tache");
                });
            }
        });
    });
});