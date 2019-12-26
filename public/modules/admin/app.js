/**
 * Main
 */
$(document).ready(function() {
    callModelConfirmDelete();
    loadDatePicker();
    loadICheck();
});

/**
 * call model confirm delete record
 */
function callModelConfirmDelete() {
    $('.call-modal-confirm-delete-btn').on('click', function() {
        var message = $(this).data('message');
        var form = $(this).parent();
        var modal = $('#modal-confirm-delete');
        modal.find('.modal-body').text(message);
        modal.modal().on('click', '#delete-btn', function() {
            form.submit();
        });
    });
}

function loadDatePicker() {
    $('.date-picker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });
}

function loadICheck() {
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
    });
}