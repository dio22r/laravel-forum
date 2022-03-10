<div class="card border border-primary mb-3 rounded-3">
    <div class="card-body">
        <div class="card-text">{{ $comment->comment }}</div>

    </div>
    <div class="card-footer">
        <div class="author">oleh <span>{{ optional($comment->User)->name }}</span> pada {{ $comment->created_at }}</div>
    </div>
</div>
