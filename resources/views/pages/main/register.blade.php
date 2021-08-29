@extends("layouts.layout")

@section("content")
@section("linija") border-bottom @endsection
<main class="container-md mb-5">
    @include("partials.subtitle",["subtitle"=>"Register"])
    <div class="row w-75 mx-auto">
        @include("partials.displayerrors")
        <div class="col-12 text-center mb-5">
            <form class="w-50 skrozSirina mx-auto" action="{{route("registracija")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Username</label>
                    <input
                        type="text"
                        class="form-control rounded-0"
                        name="username"
                        id="username"
                    />
                    <span class="text-danger">@error("username"){{$message}}@enderror</span>
                </div>
                <div class="form-group my-3">
                    <label for="exampleFormControlInput1">Email</label>
                    <input
                        type="email"
                        class="form-control rounded-0"
                        name="email"
                        id="email"
                    />
                    <span class="text-danger">@error("email"){{$message}}@enderror</span>
                </div>
                <div class="form-group my-3">
                    <label for="exampleFormControlInput1">Password</label>
                    <input
                        type="password"
                        class="form-control rounded-0"
                        name="password"
                        id="password"
                    />
                    <span class="text-danger">@error("password"){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Confirm password</label>
                    <input
                        type="password"
                        class="form-control rounded-0"
                        name="confirm_password"
                        id="confirmPassword"
                    />
                    <span class="text-danger">@error("confirm_password"){{$message}}@enderror
                    </span>
                </div>
                <div class="form-group mt-5">
                    <button
                        class="btn bg-white btn-outline-dark rounded-0 px-3 py-2"
                        type="submit"
                        id="registracija"
                    >
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
