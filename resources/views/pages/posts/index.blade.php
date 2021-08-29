@extends("layouts.layout")

@section("content")
@section("linija") border-bottom @endsection
<main class="container-md mb-5">
    <div class="row my-5">
        <div class="col-12">
            <h2 class="text-center">
                <small class="w-100 d-block" style="font-size:50%">Browsing category</small>
                <span class="text-uppercase d-block mt-3" style="font-size:35px">
                    @if( $category->name=="funny")
                        {{$category->name}} chess
                    @else
                        chess {{$category->name}}</span>
                    @endif
            </h2>
        </div>
    </div>
    <!-- pretraga -->
   <div class="row my-5 pb-3">
       <div class="col-12 text-center">
{{--           <label class="form-label" for="exampleFormControlInput1"><i class="fa fa-search"></i></label>--}}
           <input type="search" class="form-control text-center rounded-0" id="pretraga" placeholder="search..." />
           <input type="hidden" name="category_id" id="idKategorije" value="{{$category->id}}" />
       </div>
   </div>
    <div class="row mt-5 text-center" id="objave">
        @forelse($posts as $post)
            @include("partials.indexpost")
        @empty
            <h2>No posts yet. Be patient!</h2>
        @endforelse
    </div>
    <!-- paginacija -->
    {{$posts->links("partials.pagination")}}
</main>
@endsection
@section("skripta")
    <script src="{{asset("assets/js/post.js")}}"></script>
    <script src="{{asset("assets/js/pagination.js")}}"></script>
@endsection
