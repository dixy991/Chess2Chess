@extends("layouts.layout")

@section("galerijaIzgled")
    <link rel="stylesheet" href="{{asset("assets/simplelightbox-master/dist/simple-lightbox.min.css")}}"/>
@endsection

@section("content")
@section("linija") border-bottom @endsection
<main class="container-fluid px-5 mb-5">
    <div class="container">
        @include("partials.subtitle",["subtitle"=>"Chess memes"])
    </div>
    <div class="row mx-lg-5">
        <div class="col-12 d-flex gallery flex-wrap justify-content-center px-0" id="tabla">
            @foreach($images as $image)
                <figure class="mb-0 kolona ">
                    <a href="{{asset("assets/img/" . $image->img_src)}}">
                        <img
                            src="{{asset("assets/img/".$image->img_src)}}"
                            class="w-100"
                            alt="{{$image->img_alt}}"
                        />
                    </a>
                </figure>
            @endforeach
        </div>
    </div>
</main>
@endsection

@section("galerija")
    <script src="{{asset("assets/simplelightbox-master/dist/simple-lightbox.min.js")}}"></script>
    <script>
        var gallery = new SimpleLightbox(".gallery a", {});
        // var lightbox = new SimpleLightbox('.gallery a', { /* options */ });
    </script>
@endsection
