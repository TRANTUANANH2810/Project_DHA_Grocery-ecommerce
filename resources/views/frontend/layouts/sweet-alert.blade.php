<script type="text/javascript">
    
    var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timerProgressBar: true,
    timer: 3000
    });

    @if (Session::has('success'))
        Toast.fire({
            icon: 'success',
            iconColor: '#198754',
            title: '{{ Session::get('success') }}',
            customClass: {
                timerProgressBar: 'bg-green',
                title: 'cl-green',
            }
        })
    @endif

    @if (Session::has('error'))
        Toast.fire({
            icon: 'error',
            iconColor: '#dc3545',
            title: '{{ Session::get('error') }}',
            customClass: {
                timerProgressBar: 'bg-red',
                title: 'cl-red',
            }
        })
    @endif

    @if (Session::has('warning'))
        Toast.fire({
            icon: 'warning',
            iconColor: '#fd7e14',
            title: '{{ Session::get('warning') }}',
            customClass: {
                timerProgressBar: 'bg-orange',
                title: 'cl-orange',
            }
        })
    @endif
    
</script>