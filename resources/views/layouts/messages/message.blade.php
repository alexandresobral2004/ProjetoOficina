 @if (session('success'))
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             Swal.fire({
                 icon: 'success',
                 title: 'Sucesso!',
                 text: '{{ session('success') }}',
                 confirmButtonText: 'Ok'
             });
         });
     </script>
 @endif

 @if ($errors->any())
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             Swal.fire({
                 icon: 'error',
                 title: 'Erro!',
                 text: '{{ $errors->first() }}', // Exibe o primeiro erro
                 confirmButtonText: 'Ok'
             });
         });
     </script>
 @endif
 @if ($errors->any())
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             var errors = @json($errors->all());
             Swal.fire({
                 icon: 'error',
                 title: 'Erro!',
                 html: errors.join('<br>'), // Concatena erros com quebra de linha
                 confirmButtonText: 'Ok'
             });
         });
     </script>
 @endif
