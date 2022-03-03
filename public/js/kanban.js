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
$(document).ready(function () {

    // There's the gallery and the trash
    var $todo = $("#todo"),
        $done = $("#done"),
        $sortable = $("#sortable"),
        $trash = $("#trash");


    // Test sortable --> marche pas
    $($sortable).sortable();

    // Let the gallery items be draggable
    $("li", $todo).sortable().draggable({ revert: "invalid" });
    $("li", $done).draggable({ revert: "invalid" }).sortable();
    $($trash).draggable({ revert: "invalid" });

    // Let the trash be droppable, accepting the gallery items
    $trash.droppable(
        {
            drop: function (event, ui) {
                let id = $(this).attr('data-task-id');
                $.getJSON('/tasks/' + id + '/delete')
                    .then(function (rep) {
                        if (rep == 'ok') {
                            $('#task-' + id).remove();
                        }
                    });
            }
        });


    // Let the gallery be droppable as well, accepting items from the trash
    $todo.droppable({
        accept: "#trash",
        classes: {
            "ui-droppable-active": "custom-state-active"
        },
        drop: function (event, ui) {
            recycleImage(ui.draggable);
        }
    });

});
