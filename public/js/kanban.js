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
    $('.btntabsenter').on('click', function () {
        let id = $(this).attr('data-enter-btn');
        $('[data-enter-btn=' + id + ']').toggle();

    });
    //-------------------------------------------------------------------------
    // $('.btntabsexit').on('click', function () {
    //     let id = $(this).attr('data-exit-btn');
    //     $('[data-exit-btn=' + id + ']').toggle();
    //     $('[data-enter-btn=' + id + ']').toggle();
    // });
    //-------------------------------------------------------------------------
    $('.btndelete').on('click', function () {
        let id = $(this).attr('data-delete-id');
        $.getJSON('/tasks/' + id + '/delete')
            .then(function (rep) {
                if (rep == 'ok') {
                    $('#task-' + id).remove();
                }
            });
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

$('#btnEditClientSubmit').click(function (event) {
    let id = $(this).attr('data-edit-id');
    var $form = $(this).parent();
    var data = $form.serialize();
    var url = '/tasks/' + id + '/edit ';
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        dataType: 'html',
        // success: function (response) {
        //     let id = $('#btnEditClientSubmit').attr('data-edit-id');
        //     $('[data-task-id=' + id + '].card-task').html(response);
        //     $('[data-exit-edit=' + id + ']').click().toggle();
        //     $('[data-enter-edit=' + id + ']').toggle();

        // }
    }).done(
        function (response) {
            let id = $('#btnEditClientSubmit').attr('data-edit-id');
            $('[data-task-id=' + id + '].card-task').html(response);
            $('[data-exit-edit=' + id + ']').click();
            $('[data-enter-btn=' + id + ']').toggle();

        }
    )

});

