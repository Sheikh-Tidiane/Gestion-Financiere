<!doctype html>
<html lang="en">

<head>
    <title>Page de Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(assets2/images/bg-1.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Connexion</h3>
                                </div>
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form method="POST" class="signin-form" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input id="email"  class="form-control" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Mot de Passe</label>
                                    <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password"  placeholder="Mot de Passe" required>
                                </div>
                                <div class="form-group">
                                    <x-button class="ml-3 form-control btn btn-primary rounded submit px-3">
                                        {{ __('Se Connecter') }}
                                    </x-button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Se Suuvenir de Moi
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">Mot de Passe Oublié</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Vous n'avez pas de compte ? <a href="{{ route('register') }}">S'inscrire</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets2/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/js/popper.js') }}"></script>
    <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets2/js/main.js') }}"></script>

</body>

</html>
