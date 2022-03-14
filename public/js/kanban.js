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
    $('.btntabs').on('click', function () {
        let id = $(this).attr('data-hide-id');
        let dataid = '[data-hide-id=' + id + ']';
        $(dataid).toggle();
    });
    //-------------------------------------------------------------------------
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

$('#btnEditClientSubmit').click(function (event) {
    let id = $(this).attr('data-task-id');
    var $form = $(this).closest('form');
    var data = $form.serializeArray();
    var url = '/tasks/' + id + '/edit ';
    $.ajax({
        type: 'POST',
        url: url,
        data: $form.data,
        success: function (response) {
            window.location.reload();
        }
    })
});

