@extends('layouts.master')
@section('title') Show Post @endsection
@section('content')
<div id="content" class="site-content center-relative">
    <div class="single-post-wrapper content-1070 center-relative">

        <article class="center-relative">
            <h1 class="entry-title">
               {{$post->title}}
           </h1>
           <div class="post-info content-660 center-relative">
            <div class="cat-links">
                <ul>
                    <li><a href="#">Science</a></li>
                </ul>
            </div>
            <div class="entry-date published">{{$post->created_at->toFormattedDateString()}}</div>
            <div class="clear"></div>
        </div>

        <div class="entry-content">
            <div class="content-wrap content-660 center-relative">
                <p>{{$post->body}}</p>
                <br>
                <div class="clear"></div>
            </div>
            <div class="post-full-width">
                <script>
                    var slider1_speed = "500";
                    var slider1_auto = "true";
                    var slider1_pagination = "true";
                    var slider1_hover = "true";
                </script>
                <div class="image-slider-wrapper">
                    <div class="caroufredsel_wrapper">
                        <ul id="slider1" class="image-slider slides center-text">
                            <li><img src="{{asset('demo-images/01_blogpost_galery.jpg')}}" alt=""></li>
                            <li><img src="{{asset('demo-images/02_blogpost_galery.jpg')}}" alt=""></li>
                            <li><img src="{{asset('demo-images/03_blogpost_galery.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                    <div class="slider1_pagination carousel_pagination left"></div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content-wrap content-660 center-relative ">
                <p>I still keep in mind a certain wonderful sunset which I witnessed when and steamboating was new to me. A broad expanse of the river was turned too blood in the middle distance the red hue brightened into gold, through which a solitary log came floating, black and conspicuous in one place a long calm slanting mark lay sparkling upon the water in another the surface was broken by boiling, tumbling rings, that were as many-tinted as an opal where the ruddy flush was faintest, was a smooth spot that was covered with graceful circles and radiating lines.</p>
                <br>
                <p class="wrap-blockquote">Ever so delicately traced the shore on our left was densely wooded, and the som ber shadow that fell from this forest was broken in one place by a long, ruffled trail that shone like silver and high above the forest wall.</p>
                <blockquote class="inline-blockquote">
                    <p>There were graceful curves, reflected images, woody on the heights, soft distances and over the whole scene far and so near, the dissolving lights drifted steadily now dissolving lights.</p>
                </blockquote>
                <p class="wrap-blockquote">But as I have said, a day came when I began to cease from noting the glories and the charms which the moon and the sun and the twilight wrought upon the river’s face another day came when I ceased altogether to note them. Then, if that sunset scene had been repeated, I should have looked upon it without rapture, and should have commented upon it, inwardly, after this fashion. But as I have said, a day came when I began to cease from noting the glories and the charms which the moon and the sun and the twilight wrought upon the one graceful curves, reflected images, woody heights, soft distances and over the whole sun scene, far and near, the dissolving lights drifted steadily, enriching it, every passing the moment, with new marvels of coloring. The world was new to me, and I had never seen anything like this at home. But as I have said, a day came when I began to cease from noting the glories and the charms which the moon and the sun and the twilight wrought upon the river’s face another day came when I ceased altogether to note them. Then, if that sunset scene had been repeated, I should have looked upon it without rapture, and should have commented upon it, inwardly, after this fashion.</p>
                <br>
                <br>
                <img src="demo-images/one_drop_post_image02.jpg" alt="">
                <br>
                <br>
                <p>Duis iaculis mattis rutrum. Sed iaculis magna sit amet suscipit ornare. Nulla ornare leo a tortor aliquam, quis interdum ex tempor. Quisque ultricies consequat suscipit. Donec tincidunt tempor ornare. Praesent a enim vel augue suscipit auctor in gravida augue. Suspendisse ut libero sit amet augue molestie fringilla. Fusce molestie, velit a finibus eleifend, nibh odio sagittis est, id aliquet turpis orci quis nibh.</p>
            </div>
            <hr>
            <div class="comments">
                <ul class="list-group">

                    @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}} :&nbsp;
                        </strong>
                        {{$comment->body}}
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="clear"></div>
    </article>
</div>

<div class="row" style="margin-top: 30px;">

    <div class="col-md-10 offset-md-1">
        <form action="/comments" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <input type="hidden" name="user_id" value="1">
            <div class="form-group">

                <textarea class="form-control" name="body" id="" cols="30" rows="10" placeholder="Your Comment" required></textarea>
            </div>
            <div class="form-group">

                <button class="pull-right btn btn-primary">Add Comment</button>
          </div>
      </form>
  </div>
  <div class="col-md-10 offset-md-1" style="margin-top: 20px;">
          @include('layouts.errors')

  </div>
</div>
</div>
@endsection