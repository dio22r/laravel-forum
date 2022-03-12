<div class="card border shadow mb-3 rounded-3">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('tag.detail', ['slug' => $tag->slug]) }}">
                {{ Str::words($tag->title, 20) }}
            </a>
        </h5>

        <p class="card-text">{{ Str::words(strip_tags($tag->description), 40) }}</p>
        <div class="row">
            <div class="col-6">
                <div class="counter">{{ $tag->mh_forum_topic_count }} Forum</div>
            </div>
        </div>

    </div>
</div>
