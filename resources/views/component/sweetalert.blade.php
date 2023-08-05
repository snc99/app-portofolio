<script>
    $('.delete-about').click(function(event) {
        event.preventDefault();

        var getData = $(this).attr('data-id');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var form = $('<form>', {
                    'method': 'POST',
                    'action': '/dashboard/about/' + getData
                }).append($('<input>', {
                    'name': '_method',
                    'value': 'DELETE',
                    'type': 'hidden'
                })).append($('<input>', {
                    'name': '_token',
                    'value': '{{ csrf_token() }}',
                    'type': 'hidden'
                }));

                $(document.body).append(form);
                form.submit();
            }
        });
    });

    $('.delete-project').click(function(event) {
        event.preventDefault();

        var getData = $(this).attr('data-id');
        var getNama = $(this).attr('data-nama');

        Swal.fire({
            title: 'Are you sure?',
            text: "The data of " + getNama + " will be permanently deleted and cannot be recovered. ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var form = $('<form>', {
                    'method': 'POST',
                    'action': '/dashboard/project/' + getData
                }).append($('<input>', {
                    'name': '_method',
                    'value': 'DELETE',
                    'type': 'hidden'
                })).append($('<input>', {
                    'name': '_token',
                    'value': '{{ csrf_token() }}',
                    'type': 'hidden'
                }));

                $(document.body).append(form);
                form.submit();
            }
        });
    });
</script>
