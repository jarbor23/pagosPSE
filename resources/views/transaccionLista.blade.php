<!DOCTYPE html>
<html>
    @include('head')
    <body>
        @include('nav')
        <div class="container">
            <div class="row"><br><br><br>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Transacciones</div>
                        <div class="panel-body">
                            

                            <form method="GET" action="{{ url('transaction-list') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>

                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>transactionID</th>
                                            <th>CUS</th>
                                            <th>sessionID</th>
                                            <th>estado</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transaccion as $item)
                                        <tr>
                                            <td>{{ $loop->iteration or $item->id }}</td>
                                            <td>{{ $item->transactionID }}</td>
                                            <td>{{ $item->trazabilityCode }}</td>
                                            <td>{{ $item->sessionID }}</td>
                                            <!-- <td>{{ $item->numero_persona_trabajando }}</td>
                                            <td>{{ $item->numero_cliente }}</td> -->
                                            <td>{{ $item->estado }}</td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination-wrapper"> {!! $transaccion->appends(['search' => Request::get('search')])->render() !!} </div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    </body>