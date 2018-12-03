const URL = '/admin/design/' + $('meta[name=sliders]').attr('content');
const csrfToken = $('meta[name=csrf-token]').attr('content');

$(function() {
    // Toggle status
    $('i.material-icons.toggle').click(function(event) {
        const icon = this;
        const id = $(event.target).parent().attr('id');

        $.ajax({
            url: `${URL}/${id}`,
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                response ? icon.innerHTML = 'check' : icon.innerHTML = 'close';
            }
        });
    });

    // Delete
    $('i.material-icons.delete').click(function(event) {
        const id = $(event.target).parent().attr('id');

        $.ajax({
            url: `${URL}/${id}`,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function() {
                location.reload();
            }
        });
    });

    // Make slider edit name appear
    $('ul#slider-list i.edit').click(function() {
        $(this).siblings('form').toggle('300');
    });
});

