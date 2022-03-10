<a href="{{ route('forum.add') }}" class="btn btn-sm py-2 d-block mb-3 rounded-pill btn-primary">
    <strong><i class="fas fa-comment-alt"></i> &nbsp; BUAT FORUM</strong>
</a>

<div class="card mb-3">
    <div class="list-group list-group-flush">
        <a href="/" class="list-group-item list-group-item-action">Semua Forum</a>
        <a href="{{ route('tag') }}" class="list-group-item list-group-item-action">Semua Tag</a>
    </div>
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
        @guest
        <a href="#" class="btn btn-primary">Login</a>
        @endguest
    </div>
</div>
