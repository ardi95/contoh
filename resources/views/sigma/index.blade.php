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

                        @foreach($sigma->data as $s)

                            <tr>
                                <th>{{ $s->Norek }}</th>
                                <th>{{ $s->Nopin }}</th>
                            </tr>

                        @endforeach
                    </table>
                    <?php $prevpage =  $sigma->current_page - 1; ?>
                    <?php $nextpage =  $sigma->current_page + 1; ?>
                    <nav aria-label="paging-sigma">
                        <ul class="pager">
                            @if($sigma->prev_page_url != null)
                                <li><a href="{{ url('sigma?page='.$prevpage) }}">Previous</a></li>
                            @endif
                            @if($sigma->next_page_url != null)
                                <li><a href="{{ url('sigma?page='.$nextpage) }}">Next</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection