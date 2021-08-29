<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
    <figure>
        <a href="{{route("show-post",$post->id)}}">
            <img
                src="{{asset("assets/img/".$post->thumbnail)}}"
                class="w-100"
                alt="{{route("show-post",$post->id)}}"
            />
        </a>
    </figure>
    <h3><a href="{{route("show-post",$post->id)}}">{{$post->title}}</a></h3>
    <small>{{$post->date}}</small>
    <p class="mt-3">
        {{substr($post->text,0,150)}}
    </p>
    <a class="btn btn-outline-dark rounded-0" href="{{route("posts.show",$post->id)}}">View post</a>
</div>
