export function editKangaroo() {
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
                console.log(response);
                location.reload();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
}