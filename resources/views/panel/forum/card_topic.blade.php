<div class="card border border-primary mb-3 rounded-3">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('forum.detail', ['slug' => $forum->slug]) }}">
                {{ Str::words($forum->title, 20) }}
            </a>
        </h5>

        <p class="card-text">{{ Str::words(strip_tags($forum->description), 40) }}</p>
        <div class="row">
            <div class="col-6">
                <div class="author">oleh <span>{{ optional($forum->User)->name }}</span> pada {{ $forum->created_at }}</div>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('tag.detail', ['slug' => $forum->MhForumTag->slug]) }}" class="btn btn-sm rounded-pill btn-outline-warning">
                    &nbsp; {{ $forum->MhForumTag->title }} &nbsp;
                </a>
            </div>
        </div>

    </div>
</div>
