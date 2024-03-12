<!-- resources/views/transaction/envoyer-argent.blade.php -->
@extends('front.layouts.app')
<style>
    label {
        display: inline-block;
        margin-bottom: .5rem;

        .btn.disabled,
        .btn:disabled {
            cursor: not-allowed;
        }
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn.disabled,
    .btn:disabled {
        opacity: .65;
        box-shadow: none;
    }

    btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        box-shadow: none;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    button,
    select {
        text-transform: none;
    }

    button,
    input {
        overflow: visible;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    button {
        border-radius: 0;
    }
</style>
@section('content')
    <section class="container my-4 p-4 rounded shadow bg-light">
        <!-- Afficher les erreurs de validation -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('transfert.store') }}" method="POST">
            @csrf
            <input type="hidden" name="_token" value="ma01782KW1WfEQcUoGz9zjgtkFyuw2XwBbbTs9Hl">
            <div class="text-center my-4">
                <h2 class="display-4">Transférez de l'argent en toute simplicité</h2>
                <p class="lead">Remplissez le formulaire ci-dessous pour effectuer votre transfert d'argent rapidement et
                    en toute sécurité.</p>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="prenom_expediteur" class="form-label"><strong>Prénom expéditeur</strong></label>
                    <input type="text" class="form-control" id="prenom_expediteur" required=""
                        name="prenom_expediteur" value="{!! auth('front')->user()->name !!}" placeholder="Votre prénom" readonly>
                </div>
                <div class="col-md-6">
                    <label for="telephone_expediteur" class="form-label"><strong>Téléphone expéditeur</strong></label>
                    <input type="text" name="telephone_expediteur" value="{!! auth('front')->user()->telephone !!}"
                        placeholder="Votre Numéro de téléphone" readonly class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="montant" class="form-label"><strong>Montant</strong></label>
                    <input type="number" class="form-control" id="montant" required="" name="montant"
                        :value="old('montant')" placeholder="Le minimum de dépôt est 1 000 XOF">
                </div>
                <div class="col-md-6">
                    <label for="ville_origine" class="form-label"><strong>Ville d'origine:</strong></label>
                    <select class="form-select" id="ville_origine" name="ville_origine" required="">
                        <option value="" selected disabled>Sélectionnez une ville</option>
                        <option value="dakar"@if (old('ville_origine') == 'dakar') checked @endif>Dakar</option>
                        <option value="diamniadio" @if (old('ville_origine') == 'diamniadio') checked @endif>Diamniadio</option>
                        <option value="fatick" @if (old('ville_origine') == 'fatick') checked @endif>Fatick</option>
                        <option value="ziguinchor" @if (old('ville_origine') == 'ziguinchor') checked @endif>Ziguinchor</option>
                        <option value="rufisque" @if (old('ville_origine') == 'rufisque') checked @endif>Rufisque</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom_beneficiaire" class="form-label"><strong>Nom bénéficiaire</strong></label>
                    <input type="text" class="form-control" id="nom_beneficiaire" required="" name="nom_beneficiaire"
                        :value="old('nom_beneficiaire')" placeholder="Nom du bénéficiaire">
                </div>
                <div class="col-md-6">
                    <label for="prenom_beneficiaire" class="form-label"><strong>Prénom bénéficiaire</strong></label>
                    <input type="text" class="form-control" id="prenom_beneficiaire" required=""
                        name="prenom_beneficiaire" :value="old('prenom_expediteur')" placeholder="Prénom du bénéficiaire">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="telephone_beneficiaire" class="form-label"><strong>Téléphone
                            bénéficiaire</strong></label>
                    <input type="text" placeholder="Téléphone du bénéficiaire" name="telephone_beneficiaire"
                        :value="old('telephone_beneficiaire')" class="form-control" required="">
                </div>
                <div class="col-md-6">
                    <label for="ville_destinaire" class="form-label"><strong>Ville de destination:</strong></label>
                    <select class="form-select" id="ville_destinataire" name="ville_destinaire" required="">
                        <option value="" selected disabled>Sélectionnez une ville</option>
                        <option value="dakar"@if (old('ville_destinataire') == 'dakar') checked @endif>Dakar</option>
                        <option value="diamniadio" @if (old('ville_destinataire') == 'diamniadio') checked @endif>Diamniadio</option>
                        <option value="fatick" @if (old('ville_destinataire') == 'fatick') checked @endif>Fatick</option>
                        <option value="ziguinchor" @if (old('ville_destinataire') == 'ziguinchor') checked @endif>Ziguinchor</option>
                        <option value="rufisque" @if (old('ville_destinataire') == 'rufisque') checked @endif>Rufisque</option>
                    </select>
                </div>
                <div class="row mb-3 mt-2">
                    <div class="col-md-6">
                        <label for="email_beneficiaire" class="form-label"><strong>Email bénéficiaire</strong></label>
                        <input type="email" placeholder="Email du bénéficiaire" name="email_beneficiaire"
                            :value="old('email_beneficiaire')" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="row mb-3">
                    <div class="col text-center">
                        <button id="submit_button" type="submit" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Soumettre
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
