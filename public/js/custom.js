$('.btn-show-delete-box').on('click', function () {
    var url = $(this).data('action');
    $('#form-delete').attr('action', url);
    $('#modal-delete').modal('show');
});

$(function () {
    $(".datatables-design").DataTable({
        columnDefs: [
            {
                targets: [ 'nosort' ],
                orderable: false
            },
        ],
    });
});
