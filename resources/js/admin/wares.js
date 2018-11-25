const URL = '/admin/wares/' + $('meta[name=ware]').attr('content');
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

    // Make product form appear
    $('div#category button#product-button').click(function() {
        $('div#create-product-form').toggle('300');
    });

    // Make category edit name appear
    $('ul#category-list i.edit').click(function() {
        $(this).siblings('form').toggle('300');
    });
});

