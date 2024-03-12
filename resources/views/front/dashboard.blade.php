@extends('front.layouts.app')


@section('content')
    <h1 class="app-page-title">Dashboard</h1>

    @if (isset($searchResults))
        <div class="container-fluid">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8">
                    <div class="alert alert-success" role="alert">
                        Résultats de la recherche
                    </div>
                </div>
            </div>
        </div>
    @endif

    <style>
        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -7.5px;
            margin-left: -7.5px;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem;
        }

        body {
            margin: 0;
            font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }

        .bg-danger,
        .bg-danger>a {
            color: #fff !important;
        }

        .bg-danger {
            background-color: #dc3545 !important;
        }

        .small-box {
            border-radius: .25rem;
            box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
            display: block;
            margin-bottom: 20px;
            position: relative;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .small-box p {
            font-size: 1rem;
        }

        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        section {
            display: block;
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            width: 100%;
            padding-right: 7.5px;
            padding-left: 7.5px;
            margin-right: auto;
            margin-left: auto;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        div {
            display: block;
        }

        .card-header {
            background-color: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            padding: .75rem 1.25rem;
            position: relative;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-footer {
            padding: .75rem 1.25rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 0 solid rgba(0, 0, 0, .125);
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            list-style: none;
            border-radius: 0.25rem;
            flex-wrap: nowrap;
        }

        .pagination {
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: .25rem;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            box-shadow: inset 0 0 0 transparent;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .form-control-sm {
            height: calc(1.8125rem + 2px);
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: none;
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

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            background-color: transparent;
        }

        table {
            border-collapse: collapse;
        }

        table {
            border-collapse: separate;
            text-indent: initial;
            line-height: normal;
            font-weight: normal;
            font-size: medium;
            font-style: normal;
            color: -internal-quirk-inherit;
            text-align: start;
            border-spacing: 2px;
            white-space: normal;
            font-variant: normal;
        }

        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .bg-success,
        .bg-success>a {
            color: #fff !important;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        .mb-1,
        .my-1 {
            margin-bottom: .25rem !important;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
    </style>

    <div class="row g-4 mb-4">
        <div class="col-lg-3 col-12">
            <div class="small-box"
                style="background-color: #28a745; color: #fff; border-radius: 10px; border: 2px solid #218838;">
                <div class="inner">
                    <h4>{{ $totalTransactions }}</h4>
                    <p>Mes transactions</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-12">
            <div class="small-box"
                style="background-color: #ffc107; color: #212529; border-radius: 10px; border: 2px solid #ff9800;">
                <div class="inner">
                    <h4>{{ number_format($totalTransfertsXOF, 0, ',', ' ') }} XOF</h4>
                    <p>Totale de mes transferts</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>

            @if($totalTransfertsXOF > $plafond)
            <div class="alert alert-warning" role="alert">
                Vous avez dépassé le plafond de transferts pour ce pack pour ce mois.
            </div>
            @endif
        </div>

        <div class="col-lg-5 col-12">
            <div class="small-box"
                style="background-color: #dc3545; color: #fff; border-radius: 10px; border: 2px solid #c82333;">
                <div class="inner">
                    <h4>{{ $user->solde }} XOF</h4>
                    <p>Solde</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
        </div>

    </div><!--//row-->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header  justify-content-between d-flex align-items-center">
                            <marquee behavior="left" direction="right">
                                <h3 class="card-title mb-0">Liste de toutes les Transactions</h3>
                            </marquee>
                        </div>



                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dt-buttons btn-group flex-wrap"> </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example1_filter" class="dataTables_filter"><label></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1"
                                        class="table table-bordered dataTable no-footer dtr-inline collapsed"
                                        data-toggle="table" data-pagination="true" data-search="true"
                                        data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                        data-key-events="true" data-show-toggle="true" data-resizable="true"
                                        data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                        data-click-to-select="true" data-toolbar="#toolbar"
                                        aria-describedby="example1_info">
                                        <thead>
                                            <tr class="table-success">
                                                <th scope="col" data-field="date" data-editable="true"
                                                    class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Dates: activate to sort column descending">Dates</th>
                                                <th scope="col" data-field="expediteur" data-editable="true"
                                                    class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Expediteurs: activate to sort column ascending">Expediteurs
                                                </th>
                                                <th scope="col" data-field="beneficiaire" data-editable="true"
                                                    class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Beneficiare: activate to sort column ascending">Beneficiare
                                                </th>
                                                <th scope="col" data-field="ville" data-editable="true" class="sorting"
                                                    tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                    aria-label="Villes: activate to sort column ascending">Villes</th>
                                                <th scope="col" data-field="ville" data-editable="true" class="sorting"
                                                    tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                    aria-label="Villes: activate to sort column ascending">Etats</th>
                                                <th scope="col" data-field="somme" data-editable="true"
                                                    class="sorting" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Sommes: activate to sort column ascending">Sommes</th>
                                                <th scope="col" data-field="voir" data-editable="true"
                                                    class="sorting" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Voir: activate to sort column ascending">Voir</th>
                                            </tr>
                                            @foreach ($transactions as $transaction)
                                                <tr>
                                                    <td>{{ $transaction->created_at }}</td>
                                                    <td>{{ $transaction->nom_expediteur }}</td>
                                                    <td>{{ $transaction->nom_beneficiaire }}
                                                        {{ $transaction->prenom_beneficiaire }}</td>
                                                    <td>{{ $transaction->ville_origine }} =>
                                                        {{ $transaction->ville_destinaire }}</td>
                                                    <td>
                                                        <p class="bg-success font-size-15 mb-1" align="center">
                                                            Validé</p>
                                                    </td>
                                                    <td>{{ $transaction->montant }} XOF</td>
                                                    <td>
                                                        <!-- Boutons d'action -->
                                                        <!-- Exemple de bouton pour voir les détails de la transaction -->
                                                        <a href="{{ route('transactions.show', $transaction->id) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                height="25" fill="green" class="bi bi-eye-fill"
                                                                viewBox="0 0 16 16">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z">
                                                                </path>
                                                                <path
                                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <!-- Autres boutons d'action ici -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                        Showing 1 to 3 of 3 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="example1_previous"><a href="#" aria-controls="example1"
                                                    data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="example1_next"><a
                                                    href="#" aria-controls="example1" data-dt-idx="2"
                                                    tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer clearfix pagination">

        </div>
    </section>
@endsection
