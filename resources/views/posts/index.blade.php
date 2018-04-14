@extends('layouts.master')
@section('title') All Posts @endsection
@section('content')
        <div id="content" class="site-content">
            <div id="blog-wrapper">
                <div class="blog-holder center-relative">


                    <article id="post-1" class="blog-item-holder featured-post">
                        <div class="entry-content relative">
                            <div class="content-1170 center-relative">
                                <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#">Crafting</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-date published">February 12, 2016</div>
                                <h2 class="entry-title">
                                    <a href="posts/1">Whatever is begun in anger ends in shame</a>
                                </h2>
                                <div class="excerpt">
                                    Now when I had mastered the language of this water and had come to know every trifling feature that bordered the great river as familiarly as I knew the letters of the alphabet, I had made a valuable acquisition. I still keep in mind a certain wonderful sunset which I witnessed when and steamboating<a class="read-more" href="single.html"></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </article>

                    @foreach($posts as $post)
                        @include('posts.post')
                    @endforeach


                </div>
                <div class="clear"></div>
                <div class="block load-more-holder">LOAD MORE ENTRIES</div>
            </div>

            <div class="featured-image-holder">
                <div class="featured-post-image" style="background-image: url(demo-images/featured-image.jpg)"></div>

            </div>
            <div class="clear"></div>
        </div>@endsection