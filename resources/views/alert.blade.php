<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@php
    $success = session('success');
    $error   = session('error');
@endphp

<script>

    @if($success)
        Swal.fire({
            icon: 'success',
            text: '{{ $success }}',
        });
    @endif

    @if($error)
        Swal.fire({
            icon: 'error',
            text: '{{ $error }}',
        });
    @endif

    function displayAlert($message, $bakgroundColor){
            Toastify({
                text: $message,
                duration: 4000,
                close:true,
                gravity:"top",
                position: "right",
                backgroundColor: $bakgroundColor,
            }).showToast();
    }

    function alertConfirmationDelete(title,message,url){
        Swal.fire({
            title: title,
            text: message,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type    : 'DELETE',
                    url     : url,
                    success : (response) => {
                        displayAlert(response.message,'#4fbe87')
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    },
                    error: function(error) {
                        displayAlert(error.responseJSON.message,'#eb311c')
                    }
                });
            }
        })
    }

</script>

