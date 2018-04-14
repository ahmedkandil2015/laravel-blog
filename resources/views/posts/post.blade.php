
<article id="post-{{$post->id}}" class="blog-item-holder">
    <div class="entry-content relative">
        <div class="content-1170 center-relative">
            <h2 class="entry-title">
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h2>
            <div class="cat-links">
                <ul>
                    <li>
                        <a href="#">{{$post->user->name}}</a>
                    </li>
                </ul>
            </div>
            <div class="entry-date published">{{$post->created_at->toFormattedDateString()}}</div>
            <div class="clear"></div>
        </div>
    </div>
</article>
