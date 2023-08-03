 {{-- Toastr Alert --}}
 <script>
     toastr.options = {
         "closeButton": true,
         "debug": false,
         "newestOnTop": true,
         "progressBar": true,
         "positionClass": "toast-top-right",
         "preventDuplicates": true,
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
 </script>

 {{-- Toastr success --}}
 @if (session('success'))
     <script>
         toastr.success('{{ session('success') }}', '');
     </script>
 @endif

 {{-- Toastr error --}}
 @foreach ($errors->all() as $error)
     <script>
         toastr.error('{{ $error }}', '');
     </script>
 @endforeach

 {{-- Toastr info --}}
 @if (session('info'))
     <script>
         toastr.info('{{ session('info') }}', '');
     </script>
 @endif

 {{-- Toastr warning --}}
 @if (session('warning'))
     <script>
         toastr.warning('{{ session('warning') }}', '');
     </script>
 @endif
