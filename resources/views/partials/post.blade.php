<div class="col-10 mx-auto">
    <div class="row mx-auto my-3">
        <div class="col-lg-6 d-lg-block d-sm-flex justify-content-center col-sm-12">
            <a href="{{route("show-post",$post->id)}}" >
                <figure class="d-flex">
                    <img
                        src="{{asset("assets/img/" . $post->thumbnail)}}"
                        alt="{{$post->title}}"
                        class="zaokrugli"
                    />
                </figure>
            </a>
        </div>
        <div class="col-lg-5 col-sm-12 text-md-center">
            <h3 class="mt-3">{{$post->title}}</h3>
            <small>{{$post->date}}</small>
            <p class="pt-3">
                {{substr($post->text,0,150)}}...
            </p>
            <a href="{{route("show-post",$post->id)}}" class="btn btn-outline-dark rounded-0">Read more</a>
        </div>
        <div class="col-lg-1 col-sm-12 py-5 uspravnaSlova">
            <p class="border rounded-pill ml-0 px-1 py-3">{{$post->categories->name}}</p>
        </div>
    </div>
</div>
