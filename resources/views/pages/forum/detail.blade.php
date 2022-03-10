@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border mb-3 rounded-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $forum->title }}</h5>
                    <div class="card-text">{!! $forum->description !!}</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="author">oleh <span>{{ optional($forum->User)->name }}</span> pada {{ $forum->created_at }}</div>
                        </div>
                        <div class="col-6 text-end">
                            <a href="#" class="btn btn-sm rounded-pill btn-outline-warning">
                                &nbsp; {{ $forum->MhForumTag->title }} &nbsp;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="mb-3" />
            @if (Auth::check())

            @each('panel.forum.card_comment', $comments, 'comment')

            <div class="card border mb-3 rounded-3">
                <div class="card-header">
                    Tambahkan Tanggapan
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('comment.store', ['forum' => $forum->id]) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="comment" class="form-label">Tanggapan</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3">{{ old('comment') }}</textarea>
                            @error('comment')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">
                                Kirim Tanggapan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{ $comments->links() }}

            @endif
        </div>
        <div class="col-md-4">
            @include('panel.sideright')
        </div>
    </div>
</div>
@endsection
