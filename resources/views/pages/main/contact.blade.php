@extends("layouts.layout")

@section("content")
@section("linija") border-bottom @endsection
<main class="container-md mb-5">
    @include("partials.subtitle",["subtitle"=>"Contact"])
    <div class="row w-75 mx-auto">
        @include("partials.displayerrors")
        <div class="col-12 text-center mb-5">
            <p>You can do it via form down below:</p>
            <form class="w-75 skrozSirina mt-5 text-left mx-auto" action="{{route("kontaktiranje")}}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-lg col-md-12">
                        <label for="exampleFormControlInput1">Name</label>
                        <input
                            type="text"
                            class="form-control rounded-0"
                            id="exampleFormControlInput1"
                            name="name"
                        />
                        <span class="text-danger">@error("name"){{$message}}@enderror</span>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1">Email</label>
                        <input
                            type="email"
                            class="form-control rounded-0"
                            id="exampleFormControlInput1"
                            name="email"
                        />
                        <span class="text-danger">@error("email"){{$message}}@enderror</span>
                    </div>
                </div>
                <div class="form-group my-5">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea
                        class="form-control rounded-0"
                        id="exampleFormControlTextarea1"
                        rows="5"
                        name="message"
                    ></textarea>
                    <span class="text-danger">@error("message"){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <button
                        class="btn btn-outline-dark rounded-0 px-3 py-2"
                        type="submit"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <div class="col-12 text-center">
            <!-- videcemo za vo -->
            <p class=" mb-4">
                Alternatively, you can try reaching us through email directly:
            </p>
            <p class="h3">chess2chess@gmail.com</p>
        </div>
    </div>
</main>
@endsection
