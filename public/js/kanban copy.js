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


// There's the gallery and the trash
var todo = $("#todo"),
    done = $("#done"),
    sortable = $("[data-info=sortable]");

//----------------------------------TODO--------------------------------------------------
$("li", todo).draggable({
    revert: true,
    connectToSortable: "[data-info=sortabledone]"
});

todo.sortable({

    receive: function (event, ui) {
        let id = $(ui.item).attr('data-task-id');
        $.getJSON('/tasks/' + id + '/toggle');
    }
});

//----------------------------------DONE--------------------------------------------------
$("li", done).draggable({
    revert: true,
    connectToSortable: "[data-info=sortabletodo]"
});

done.sortable({
    receive: function (event, ui) {
        let id = $(ui.item).attr('data-task-id');
        $.getJSON('/tasks/' + id + '/toggle');
    }
});


$(document).ready(function () {

    $('#btnaddtask').on('click', function () {
        $('#hidden').toggle();
    });



});
