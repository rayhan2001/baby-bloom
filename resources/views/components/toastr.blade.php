@if(session('success') || session('error') || session('info') || session('warning'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if(session('success'))
            toastr.success('{{ session('success') }}', 'Success');
        @endif

        @if(session('error'))
            toastr.error('{{ session('error') }}', 'Error');
        @endif

        @if(session('info'))
            toastr.info('{{ session('info') }}', 'Info');
        @endif

        @if(session('warning'))
            toastr.warning('{{ session('warning') }}', 'Warning');
        @endif
    });
</script>
@endif