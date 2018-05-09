@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Customer</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                        </tr>

                        @foreach($sigma as $s)

                            <tr>
                                <th>{{ $s->Norek }}</th>
                                <th>{{ $s->Nopin }}</th>
                            </tr>

                        @endforeach
                    </table>

                    {{ $sigma->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection