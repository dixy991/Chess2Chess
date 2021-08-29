@extends("layouts.layout")

@section("content")
@section("linija") border-bottom @endsection
<main
    class="container-md mb-5"
    id="slikaIza"
    style="background-image: url({{asset("assets/img/log.png")}}"
>
    @include("partials.subtitle",["subtitle"=>"Login"])
    <div class="row w-75 mx-auto">
        @include("partials.displayerrors")
        <div class="col-12 text-center mb-5">
            <form class="w-50 skrozSirina mx-auto" action="{{route("logovanje")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input
                        type="email"
                        class="form-control rounded-0"
                        name="email"
                        id="exampleFormControlInput1"
                    />
                    <span class="text-danger">@error("email"){{$message}}@enderror</span>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlInput1">Password</label>
                    <input
                        type="password"
                        class="form-control rounded-0"
                        name="password"
                        id="exampleFormControlInput1"
                    />
                    <span class="text-danger">@error("password"){{$message}}@enderror</span>
                </div>
                <div class="form-group mt-5">
                    <button
                        class="btn btn-outline-dark bg-white rounded-0 px-3 py-2"
                        type="submit"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
