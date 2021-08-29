@extends("layouts.layout")

@section("content")
    @section("linija") border-bottom @endsection
    <main class="container-md mb-5">
        @include("partials.subtitle",["subtitle"=>"About"])
        <div class="row w-75 mx-auto">
            <div class="col-12">
                <h3>WHat is chess2chess?</h3>
                <p>It is a chess blog about everything related to chess.</p>
            </div>
            <div class="col-12 my-5">
                <h3>WHat can i do around here?</h3>
                <p>
                    First of all, you can read a lot. We write chess articles about
                    everything that comes to our mind. We cover chess events. We write
                    book and equipment reviews. We conduct chess interviews. We will also write
                    about chess history. We write articles for beginners. We write
                    random articles about things from the chess world we find funny.
                </p>
                <p>
                    Secondly, you can also do some training here. We post chess tactics
                    regularly. Check our list of chess tactics for an
                    easier set of problems, or check our list of chess tactics if you
                    want to shock your brain with difficulty and beauty. If you are up
                    for a real challenge, you may also try solving some quizzes.
                </p>
            </div>
            <div class="col-12 mt-3 mb-5">
                <h3>Oh dear, it is difficult to navigate this site. What is a good place to start?</h3>
                <p>
                    To see our recent articles, just check our <a href="{{route("home")}}">home page</a>. Thanks!
                </p>
            </div>
        </div>
    </main>
@endsection
