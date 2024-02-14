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
                <iframe class="google-form-iframe" src="{{$link}}" frameborder="0" marginheight="0"
                marginwidth="0">Memuat…</iframe>
            </div>
        </div>
        {{-- <!-- Tempelkan Kode HTML Formulir Google di sini -->
        <div class="iframe-container">

        </div> --}}

        <script>
            // Cek cookie untuk melacak jumlah peringatan yang sudah muncul
            var warningCount = parseInt(getCookie('warningCount')) || 0;

            window.addEventListener('beforeunload', function (e) {
                // Tampilkan peringatan jika belum mencapai batas 3x dan belum mengunjungi halaman /latihan
                if (warningCount < 3 && !getCookie('latihanVisited')) {
                    var confirmationMessage = 'Anda yakin ingin meninggalkan halaman ini? '
                        + 'Ini adalah peringatan ke-' + (warningCount + 1);
                    (e || window.event).returnValue = confirmationMessage;
                    alert(confirmationMessage);

                    // Update nilai cookie untuk jumlah peringatan
                    setCookie('warningCount', warningCount + 1, 1); // 1 hari, sesuaikan sesuai kebutuhan
                }
            });

            document.addEventListener('visibilitychange', function () {
                if (warningCount < 3 && !getCookie('latihanVisited')) {
                    var confirmationMessage = 'Anda yakin ingin meninggalkan halaman ini? '
                        + 'Ini adalah peringatan ke-' + (warningCount + 1);
                    (e || window.event).returnValue = confirmationMessage;
                    alert(confirmationMessage);

                    // Update nilai cookie untuk jumlah peringatan
                    setCookie('warningCount', warningCount + 1, 1); // 1 hari, sesuaikan sesuai kebutuhan
                }
            });

            // Fungsi untuk mendapatkan nilai cookie
            function getCookie(name) {
                var matches = document.cookie.match(
                    new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)")
                );
                return matches ? decodeURIComponent(matches[1]) : undefined;
            }

            // Fungsi untuk mengatur nilai cookie
            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + value + expires + "; path=/";
            }
        </script>
    </body>
@endsection
