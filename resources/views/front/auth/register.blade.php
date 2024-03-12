<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Page D'Inscription</title>
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Inscription</div>
        <div class="content">

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nom Complet</span>
                        <input id="name" type="text" name="name" :value="old('name')"
                            placeholder="Entrer le nom complet" required autofocus>
                    </div>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input id="email" type="text" name="email" :value="old('email')"
                            placeholder="Entrer l'adress email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Numéro Téléphone</span>
                        <input id="telephone" type="text" name="telephone"
                            placeholder="Entrer le numéro de téléphone" :value="old('telephone')" required autofocus
                            maxlength="9" pattern="[0-9]{9}"
                            title="Le numéro de téléphone doit contenir exactement 9 chiffres.">
                        <span class="error-message" id="telephoneError"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">CNI</span>
                        <input id="cni" type="text" name="cni" placeholder="Entrer le CNI"
                            :value="old('cni')" required autofocus maxlength="13" pattern="[0-9]{13}"
                            title="La CNI doit contenir exactement 13 chiffres.">
                        <span class="error-message" id="cniError"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Mot de Passe</span>
                        <input placeholder="Mot de Passe" id="password" class="block mt-1 w-full" type="password"
                            name="password" required autocomplete="new-password">
                    </div>
                    <div class="input-box">
                        <span class="details">Confirmer Mot de Passe</span>
                        <input placeholder="Confirmer mot de passe" id="password_confirmation" class="block mt-1 w-full"
                            type="password" name="password_confirmation" required>
                    </div>

                    <input type="hidden" name="pack_id" value="{{ request()->input('pack_id') }}">

                    <div class="input-box">
                        <span class="details">Solde</span>
                        <input id="solde" type="text" name="solde" :value="old('solde')"
                            placeholder="Solde minimum requis" required autofocus>
                        <span class="error-message" id="soldeError"></span>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="type_compte" id="dot-1" value="courant"
                        @if (old('type_compte') == 'courant') checked @endif>
                    <input type="radio" name="type_compte" id="dot-2" value="epargne"
                        @if (old('type_compte') == 'epargne') checked @endif>
                    <span class="gender-title">Type de Compte</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Courant</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Epargne</span>
                        </label>
                    </div>
                </div>
                <div
                    class="button inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    <input type="submit" value="Inscription">
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            var telephone = document.getElementById('telephone').value;
            var cni = document.getElementById('cni').value;
            var solde = document.getElementById('solde').value;
            var telephoneError = document.getElementById('telephoneError');
            var cniError = document.getElementById('cniError');
            var soldeError = document.getElementById('soldeError');
            var hasError = false;

            // Check if telephone contains non-numeric characters
            if (!/^\d+$/.test(telephone)) {
                telephoneError.textContent = 'Le numéro de téléphone ne doit contenir que des chiffres.';
                hasError = true;
            } else {
                telephoneError.textContent = '';
            }

            // Check if cni contains non-numeric characters
            if (!/^\d+$/.test(cni)) {
                cniError.textContent = 'La CNI ne doit contenir que des chiffres.';
                hasError = true;
            } else {
                cniError.textContent = '';
            }

            // Check if solde contains non-numeric characters
            if (!/^\d+$/.test(solde)) {
                soldeError.textContent = 'Le solde ne doit contenir que des chiffres.';
                hasError = true;
            } else {
                soldeError.textContent = '';
            }

            // Prevent form submission if there is an error
            if (hasError) {
                event.preventDefault();
            }
        });
    </script>
</body>

</html>
