@extends('layouts.app')

@section('content')
<div class="card border mb-3 rounded-3">
    <div class="card-body">
        <h5 class="card-title">{{ $tag->title }}</h5>
        <div class="card-text">{!! $tag->description !!}</div>
        <div class="row">
            <div class="col-12">
                ada {{ $tag->mh_forum_topic_count }} Forum
            </div>
        </div>
    </div>
</div>

<hr class="mb-3" />
@each('panel.forum.card_topic', $forums, 'forum')

{{ $forums->links() }}

@endsection
