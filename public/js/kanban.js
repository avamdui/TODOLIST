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
    var todo = $("#todo"),
        done = $("#done"),
        sortable = $("[data-info=sortable]");
    //var trash = $("#trash");


    // Test sortable --> marche pas
    sortable.sortable();

    // Let the gallery items be draggable
    $("li", todo).draggable({ revert: true, connectToSortable: "[data-info=sortable]" }); // 
    $("li", done).draggable({ revert: true, connectToSortable: "[data-info=sortable]" });
    // $("li", done).draggable({ revert: "invalid" });
    //trash.draggable({ revert: "invalid" });



    // Let the gallery be droppable as well, accepting items from the trash
    todo.sortable({
        accept: "#done",
        classes: {
            "ui-droppable-active": "custom-state-active"
        },
        receive: function (event, ui) {
            console.log('ui', ui);
            let id = $(ui.item).attr('data-task-id');
            // $.getJSON('/tasks/' + id + '/toggle').then(function (rep) { console.log(rep); });
        }
    });

    done.sortable({
        accept: "#todo",
        classes: {
            "ui-droppable-active": "custom-state-active"
        },
        receive: function (event, ui) {
            console.log('ui', ui);
            let id = $(ui.item).attr('data-task-id');
            // $.getJSON('/tasks/' + id + '/toggle')
            //     .then(function (rep) { console.log(rep); })
            //     .fail(function (err) { });
        }
    });

    $('#btnaddtask').on('click', function () {
        $('#hidden').toggle();
    });

});
