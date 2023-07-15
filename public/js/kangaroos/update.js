export function updateKangaroo() {
    $('#formEditKangaroo').submit(function(e) {
        $('.loading_modal').show();
        e.preventDefault();
    
        var formData = $(this).serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            url: '/kangaroos/' + $('#recordId').val(),
            type: 'PUT',
            data: formData,
            success: function(response) {
                location.reload();
            },
            error: function(xhr) {
                $('.loading_modal').hide();
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            var errorMessages = errors[key].join(', ');
                            $('#' + key + 'EditError').text(errorMessages);
                            $('#' + key + 'Edit').addClass('error-input');
                        }
                    }
                } else {
                    console.log(xhr);
                }
            }
        });
    });

    $('#modalEditKangaroo').on('hidden.bs.modal', function () {
        $('.error').text('');
        $('.form-control').removeClass('error-input');
    });
}