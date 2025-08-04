<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wowdash - Bootstrap 5 Admin Dashboard HTML Template</title>
    @include('partials.header')

</head>

<body>
    @include('partials.sidebar')


    <main class="dashboard-main">
        @include('partials.nav')

        @yield('content')

        @include('partials.footer')

    </main>

    @include('partials.footer_link')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const messageSuccess = @json(session('success'));
            const messageError = @json(session('error'));

            if (messageSuccess) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: messageSuccess,
                    timer: 3000,
                    showConfirmButton: false,
                    timerProgressBar: true
                });
            }

            if (messageError) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: messageError,
                    timer: 3000,
                    showConfirmButton: false,
                    timerProgressBar: true
                });
            }
        });
    </script>
</body>

</html>