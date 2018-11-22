const URL = '/admin/wares/categories';
const csrfToken = $('meta[name=csrf-token]').attr('content');

// Toggle category status
$(function() {
    $('i.material-icons.category.toggle').click(function(event) {
        const icon = this;
        const id = $(event.target).parent().attr('id');

        $.ajax({
            url: `${URL}/${id}`,
            method: 'PATCH',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                response ? icon.innerHTML = 'check' : icon.innerHTML = 'close';
            }
        });
    });

    // Delete category
    $('i.material-icons.category.delete').click(function(event) {
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
});

