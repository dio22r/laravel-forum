@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border mb-3 rounded-3">
                <div class="card-body">
                    <form method="GET">
                        <div class="input-group rounded-pill">
                            <input type="text" class="form-control" name="search" placeholder="Cari Forum" aria-describedby="button-addon2" value="{{ request('search') }}">
                            <button class="btn btn-outline-primary" type="submit" id="button-addon2">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card border mb-3 rounded-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $forum->title }}</h5>
                    <p class="card-text">{{ $forum->description }}</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="author">oleh <span>Admin</span> pada {{ $forum->created_at }}</div>
                        </div>
                        <div class="col-6 text-end">
                            <a href="#" class="btn btn-sm rounded-pill btn-outline-warning">
                                &nbsp; {{ $forum->MhForumTag->title }} &nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <ul class="list-group  list-group-flush">
                    <li class="list-group-item">Semua Forum</li>
                    <li class="list-group-item">Semua Tag</li>
                </ul>
            </div>

            <!-- <div class="card mb-3">
                <div class="card-header">
                    Tag Popular
                </div>
                <ul class="list-group  list-group-flush">
                    <li class="list-group-item">Gereja</li>
                    <li class="list-group-item">Gembala</li>
                    <li class="list-group-item">Musda</li>
                    <li class="list-group-item">Mubes</li>
                </ul>
            </div> -->

            <div class="card mb-3">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Haleluya</h5>
                    <p class="card-text">
                        Selamat Datang di Aplikasi Forum GPdI Sulut.
                        Biarlah kita dapat saling memberkati lewat aplikasi ini.
                        Ini merupakan aplikasi resmi dari GPdI Sulut
                    </p>
                    <a href="#" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
