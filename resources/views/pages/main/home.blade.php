@extends("layouts.layout")

@section("content")
    <main class="container-md">
        <!-- kategorije -->
        <div class="row bg-dark w-75 mx-auto" id="visinaVesti">
            <!-- glavna levo -->
            <div class="col-lg-6 velikaVisina col-md-12 px-0 pozadinskaSlika" >
                @foreach($categories as $key=>$category)
                    @if($key == 0)
                        @include("partials.category",["route"=>$category->name,"thumbnail"=>$category->thumbnail,"name"=>$category->name])
                        @break
                    @endif
                @endforeach
            </div>
        <!-- ostale desno  ISPIS OVOGAAAAAAAAA-->
            <div class="col-lg-3 col-md-6 col-sm-12 velikaVisina">
                @foreach($categories as $key=>$category)
                    @if(($key == 1) || ($key == 2))
                    <div class="row h-50 pozadinskaSlika">
                        @include("partials.category",["route"=>$category->name,"thumbnail"=>$category->thumbnail,"name"=>$category->name])
                    </div>
                @endif
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 velikaVisina">
                    @foreach($categories as $key=>$category)
                        @if(($key == 3) || ($key == 4))
                        <div class="row h-50 pozadinskaSlika">
                            @include("partials.category",["route"=>$category->name,"thumbnail"=>$category->thumbnail,"name"=>$category->name])
                        </div>
                    @endif
                    @endforeach
            </div>
        </div>
        <!-- vesti -->
        <div class="obrni row my-5 mx-auto" id="najnovijaTriPocetnaClanka">
            @foreach($posts as $post)
                @include("partials.post")
            @endforeach
            <div class="col-12 mt-5 d-flex justify-content-between">
                <a href="#" class="ucitajObjavePoDatumu" data-page="0" data-date="oldest"><i class="fa fa-long-arrow-left"></i> Older posts</a>
                <a href="#" class="ucitajObjavePoDatumu" style="visibility: hidden" data-page="3" data-date="newest">Newer posts <i class="fa fa-long-arrow-right"></i> </a>
            </div>
        </div>
    </main>
@endsection
@section("skripta")
    <script src="{{asset("assets/js/home.js")}}"></script>
@endsection
