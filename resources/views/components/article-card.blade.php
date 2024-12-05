<div>
    @foreach ($articles as $article)
        <div>
            {{!! $article->content !!}}
        </div>
    @endforeach
</div>
