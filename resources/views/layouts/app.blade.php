<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @yield('scripts')
      
        <script>
          // success message
          window.addEventListener('swal:success', function(e) {
            Swal.fire(e.detail);
          });
      
          window.addEventListener('swal:confirm', event => {
            Swal.fire({
              title: 'Are you sure?'
              , text: "You wont be able to revert this!"
              , icon: 'warning'
              , showCancelButton: true
              , cancelButtonColor: '#f11'
              , confirmButtonText: 'Yes delete it'
            }).then((result) => {
              if (result.isConfirmed) {
                Livewire.emit('deleteConfirm');
                // Swal.fire(
                //   'Deleted!'
                //   , 'Your file has been deleted'
                //   , 'success'
                // )
              }
            });
          });
      
          window.addEventListener('swal:confirmVerify', event => {
            Swal.fire({
              title: 'Are you sure that the cases is verify?'
              , text: "You won\'t be able to revert this!"
              , icon: 'warning'
              , showCancelButton: true
              , cancelButtonColor: '#f11'
              , confirmButtonText: 'Yes Confirm it'
            }).then((result) => {
              if (result.isConfirmed) {
                Livewire.emit('verify');
                // Swal.fire(
                //   'Deleted!'
                //   , 'Your file has been deleted'
                //   , 'success'
                // )
              }
            });
          });
      
        </script>
    </body>
</html>
