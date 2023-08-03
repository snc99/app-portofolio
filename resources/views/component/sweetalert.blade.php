<script>
    $('.delete').click(function() {
        var dataId = $(this).data('id');

        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    var deleteUrl = "/dashboard/about/" + dataId;
                    window.location = deleteUrl;
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    });
</script>
