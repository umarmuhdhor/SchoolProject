<!-- resources/views/murid/layout/main.blade.php -->
@extends('murid/layout.main')
@section('content')
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .iframe-container {
            width: 100%;
            height: 100vh;
        }

        .google-form-iframe {
            width: 100%;
            height: 100%;
        }
    </style>

    <body>
        <div class="card">
            <div class="card-body">
                <iframe class="google-form-iframe" src="{{ $link }}" frameborder="0" marginheight="0"
                    marginwidth="0">Memuat…</iframe>
            </div>
        </div>

        <script>
            var warningCount = 0;

            function showAlert() {
                warningCount += 1
                if(warningCount > 3){
                    redirectToDashboard();
                }
                return confirm("Anda yakin ingin meninggalkan halaman ini? Ini adalah peringatan ke-" + (warningCount));
            }

            function redirectToDashboard() {
                window.location.href =
                    '{{ route('murid.dashboard') }}'; // Ganti "dashboard" dengan nama rute ke halaman dashboard
            }

            // Event listener saat perubahan visibilitas halaman
            document.addEventListener('visibilitychange', function() {
                console.log('alert 3')

                showAlert();
            });
        </script>
    </body>
@endsection
