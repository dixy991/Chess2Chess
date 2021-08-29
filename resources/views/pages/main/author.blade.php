@extends("layouts.layout")

@section("content")
@section("linija") border-bottom @endsection
<main class="container-md mb-5">
    @include("partials.subtitle",["subtitle"=>"Author"])
    <div class="row w-75 mx-auto">
        <div class="col-6">
            <h3 class="mb-4">Who is behind all of this?</h3>
            <p>Well hello! Didn't see you there...Wanna know something about me, huh? Why?
                Are you working for the police? If not, nice to meet you, my name is Dijana,
                I'm 21 years old and I live in a house. In Belgrade.</p>
            <p>
                After successfully finishing both kindergarten and elementary school, I decided to
                continue my education at the Philological High School because I really liked learning
                about languages. I was so good that I managed to master six of them ( English, French,
                Latin, Serbian, Bosnian and Montenegrin), but I realized I needed a new challenge...I always
                wanted to talk to the machines and the best way to do that is by learning computer languages.
                I will be able to speak to my laptop, right?</p>
        </div>
        <div class="col-6">
            <figure>
                <img src="{{asset("assets/img/author1.jpg")}}" class="w-100" alt="The outher" />
            </figure>
        </div>
    </div>
</main>
@endsection
