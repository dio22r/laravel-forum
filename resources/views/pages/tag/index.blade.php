@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border mb-3 rounded-3">
                <div class="card-body">
                    <form method="GET">
                        <div class="input-group rounded-pill">
                            <input type="text" class="form-control" name="search" placeholder="Cari Tag" aria-describedby="button-addon2" value="{{ request('search') }}">
                            <button class="btn btn-outline-primary" type="submit" id="button-addon2">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            @each('panel.forum.card_tag', $listTag, 'tag')
            {{ $listTag->withQueryString()->links() }}

        </div>
        <div class="col-md-4">
            @include('panel.sideright')
        </div>
    </div>
</div>
@endsection
