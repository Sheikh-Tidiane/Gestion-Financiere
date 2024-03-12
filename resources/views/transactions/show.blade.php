@extends('front.layouts.app')

@section('content')
    <!-- Votre contenu HTML ici -->
    <div class="container">
        <h1 class="text-center">Details de la Transaction
            <div class="alert alert-success">
            La transaction a été prise en Compte
          </div>
            <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-send-check-fill" viewBox="0 0 16 16">
              <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"></path>
              <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"></path>
            </svg>
          </span>
        </h1>
        <div class="container-fluide">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice-title">
                                <h5 class="float-end font-size-10">COMMANDE № #-T86WBM
                                    <p class="bg-primary font-size-10 mb-1">En cours </p>
                                </h5>
                                <div class="mb-4">
                                    <h4 class="mb-1 text-muted">{{ $transaction->nom_expediteur }} {{ $transaction->prenom_expediteur }}</h4>
                                </div>
                                <div class="text-muted">
                                    <p class="mb-1">Ville: {{ $transaction->ville_origine }}</p>
                                    <p class="mb-1">Telephone : {{ $transaction->telephone_expediteur }}</p>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-muted">
                                        <h6 class="font-size-16 mb-3">Expedié à:</h6>
                                        <h4 class="mb-1 text-muted">{{ $transaction->nom_beneficiaire }} {{ $transaction->prenom_beneficiaire }}</h4>
                                        <p class="mb-1">Ville: {{ $transaction->ville_destinaire }}</p>
                                        <p class="mb-1">Telephone : {{ $transaction->telephone_beneficiaire }}</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-sm-6">
                                    <div class="text-muted text-sm-end">
                                        <div>
                                            <h5 class="font-size-10 mb-1">Date Envoi:</h5>
                                            <p>{{ $transaction->created_at }}</p>
                                        </div>
                                        <div class="mt-4">
                                            <h5 class="font-size-10 mb-1">Date Expiration:</h5>
                                            <p>{{ $transaction->updated_at }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="py-2">
                                <h5 class="font-size-10">Récapitulatif de la transaction:</h5>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 70px;">No</th>
                                                <th>Expediteur</th>
                                                <th>Beneficiare</th>
                                                <th>Ville</th>
                                                <th>Somme</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $transaction->id }}</td>
                                                <td>{{ $transaction->nom_expediteur }} {{ $transaction->prenom_expediteur }}</td>
                                                <td>{{ $transaction->nom_beneficiaire }} {{ $transaction->prenom_beneficiaire }}</td>
                                                <td>{{ $transaction->ville_origine }} => {{ $transaction->ville_destinaire }}</td>
                                                <td>{{ $transaction->montant }}</td>
                                                <td>{{ $transaction->created_at }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-print-none mt-5">
                                    <div class="float-end d-flex justify-content-between">
                                        <form action="" method="GET">
                                            <input type="hidden" name="_token" value=""> <button type="submit"
                                                class="btn btn-primary me-2">Modifier
                                            </button>
                                        </form>
                                        <br>
                                        <form action="" method="GET">
                                            <button type="submit" class="btn btn-primary me-2">Valider
                                            </button>
                                        </form>
                                        <a href="javascript:window.print()" class="btn btn-primary me-3"><i
                                                class="fa fa-print"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection
