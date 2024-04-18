
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="assetsLogin/app.css" rel="stylesheet">

    <style>
        .form-container {
            width: 100%;
            padding: 40px;
            box-sizing: border-box;
        }

        .sign-up-container {
            display: none;
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    @if (Session::get('success'))
        <div class="alert"
            style="position: fixed; top: 10px; right: 10px; z-index: 1000; opacity: 1; transition: opacity 2s ease-in-out; background-color: #28a745; color: #fff; padding: 10px; border-radius: 5px;opacity:0.7">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Create Account</h1>
                <span>use your email for registration</span>
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" placeholder="Name" />
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" placeholder="Email" />
                <input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" placeholder="Password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                    required autocomplete="new-password" placeholder="Konfirmasi Password" />

                <input type="hidden" name="role" value="admin" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>use your account</span>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" placeholder="Email" />
                <input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" placeholder="Password" />

                {{-- <a href="#">Forgot your password?</a> --}}
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>
    <script src="assetsLogin/app.js"></script>
    <script>
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 3000); // Tampil selama 5 detik (5000 milidetik)
    </script>
</body>

</html>
