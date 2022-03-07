// $(document).ready(function () {

//     $('#btnToggleTask').on('click', function () {
//         alert('coucou');
//         let id = $(this).attr('data-task-id');
//         // $.getJSON('/tasks/' + id + '/toggle').then(function (rep) { alert(rep); });
//         $(this).load('/tasks/' + id + '/toggle');
//     });

//     $('#btnDeleteTask').on('click', function () {
//         let id = $(this).attr('data-task-id');
//         $.getJSON('/tasks/' + id + '/delete')
//             .then(function (rep) {
//                 if (rep == 'ok') {
//                     $('#task-' + id).remove();
//                 }
//             });
//     });

// });

$(function () {
    $('.sorted-list').sortable({
        stop: function (event, ui) {
            if (!ui.sender) { }
        },
        receive: function (event, ui) {
            let id = $(ui.item).attr('data-task-id');
            $.getJSON('/tasks/' + id + '/toggle');
        },
        connectWith: ".sorted-list",
        appendTo: 'body',
    }).disableSelection();
});

$(document).ready(function () {
    $('#btnaddtask').on('click', function () {
        $('#hidden').toggle();
    });
});
