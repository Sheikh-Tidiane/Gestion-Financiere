<x-app-layout>

    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Liste Des Comptes</h1>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <form class="table-search-form row gx-1 align-items-center">
                            <div class="col-auto">
                                <input type="text" id="search-orders" name="searchorders"
                                    class="form-control search-orders" placeholder="Search">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn app-btn-secondary">Search</button>
                            </div>
                        </form>

                    </div><!--//col-->
                    <div class="col-auto">
                        <a class="btn app-btn-secondary" href="">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg>
                            Ajouter un Compte
                        </a>
                    </div>
                </div><!--//row-->
            </div><!--//table-utilities-->
        </div><!--//col-auto-->
    </div><!--//row-->
    <div class="row mt-2 mb-2">
        @if (Session::get('message_success'))
            <div class="alert alert-success">
                <b>BRAVO: </b>{{ Session::get('message_success') }}
            </div>
        @endif
        <div class="row mt-2 mb-2">
            @if (Session::get('message_delete'))
                <div class="alert alert-danger">
                    <b>ALERTE: </b>{{ Session::get('message_delete') }}
                </div>
            @endif
        </div>
        <div class="tab-content" id="orders-table-tab-content">
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell uppercase-text">ID</th>
                                        <th class="cell uppercase-text">Prenom & Nom</th>
                                        <th class="cell uppercase-text">Email</th>
                                        <th class="cell uppercase-text">Clé RIB</th>
                                        <th class="cell uppercase-text">Type de Pack</th>
                                        <th class="cell uppercase-text">Type de Compte</th>
                                        <th class="cell uppercase-text">Solde</th>
                                        <th class="cell uppercase-text" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td><span>{{ $user->id }}</span></td>
                                            <td>{{ $user->name }}</td>
                                            <td><span>{{ $user->email }}</td>
                                            <td>{{ $user->rib }}</td>
                                            <td>{{ $user->pack_id }}</td>
                                            <td>{{ $user->type_compte }}</td>
                                            <td>
                                                <button class="btn btn-success btn-sm text-white">{{ $user->solde }}
                                                    XOF</button>
                                            </td>
                                            <td>
                                                <form action="{{ route('block.account', $user->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm">Bloquer</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('unblock.account', $user->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                    class="btn btn-success btn-sm text-white">Debloquer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->

                    </div><!--//app-card-body-->
                </div><!--//app-card-->
                <nav class="app-pagination">

                </nav><!--//app-pagination-->

            </div><!--//tab-pane-->

</x-app-layout>
