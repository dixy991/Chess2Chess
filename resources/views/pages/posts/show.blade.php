@extends("layouts.layout")

@section("content")
@section("linija") border-bottom @endsection
<main class="container-md mb-3">
    <div class="row w-75 mx-auto">
        <div class="col-12 my-4 text-center">
            <h2 class="display-3">{{$post->title}}</h2>
        </div>
        <div class="col-12 my-5">
            <figure>
                    <img
                        src="{{asset("assets/img/". $post->thumbnail)}}"
                        class="w-100"
                        alt="{{$post->title}}"
                    />
            </figure>
            <p>{{$post->text}}</p>
        </div>
    </div>
    <!-- komentari -->
    <div class="row w-50 my-5 mx-auto">
        <div class="col-12 position-relative text-center mb-5">
            <p class="crtaPosle" id="brojKomentara">
                @if($post->comments_count==0)
                    No
                @else
                {{$post->comments_count}}
                @endif
                @if($post->comments_count==1) comment @else comments @endif
            </p>
        </div>
        <div class="col-12" id="komentari">
            @foreach($comments as $comment)
                <div class="row mb-3">
                    <div class="col-md-2 mb-sm-3 col-sm-12">
                        <i class="fa fa-user-circle-o" style="font-size:50px"></i>
                    </div>
                    <div class="col-md-10 col-sm-12" id>
                        <h6>{{$comment->users->username}}</h6>
                        <p>{{date('m/d/Y, h:i:s', strtotime($comment->created_at))}}</p>
                        <div class="d-flex justify-content-between">
                            <p>{{$comment->text}}</p>
                            @if(session()->has("user"))
                            @if($comment->users->id == session()->get("user")->id)
                                <i class="fa fa-edit editComentar">edit</i>
                                <textarea class="form-control rounded-0 zaEditComentara" data-idkomentara="{{$comment->id}}"   name="komentar" id="editKomentar"></textarea>
                            @endif
                            @endif
                        </div>
                        <small class="float-end">
                            @if($comment->created_at != $comment->updated_at)
                                Changed at :{{date('m/d/Y, h:i:s', strtotime($comment->updated_at))}}
                            @endif
                        </small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- forma za unos comm -->
    @if(session()->has("user"))
        <div class="row w-75 mb-4 mx-auto">
            <div class="col-12 px-5 py-5" id="komentarisanje" style="border:3px solid black">
                <h5 class="mb-5">Leave a comment</h5>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Comment</label>
                        <textarea class="form-control rounded-0" name="komentar" id="komentar" rows="5"></textarea>
                        <span class="text-danger porukica" id="greska"></span>
                    </div>
                    <div class="form-group mt-3">
                        <button type="button" id="komentarisi" class="btn btn-outline-dark rounded-0">
                            Post comment
                        </button>
                    </div>
                    <input type="hidden" value="{{session()->get("user")->id}}" id="idKorisnika"/>
                    <input type="hidden" value="{{$post->id}}" id="idPosta"/>
                </form>
            </div>
        </div>
    @else
        <div class="row w-75 mb-4 mx-auto text-center">
            <div class="col-12 px-5 py-5" id="komentarisanje" style="border:3px solid black">
                <h5>You have to be logged in to leave a comment!</h5>
                <small><a href="{{route("login")}}">Login?</a></small>
            </div>
        </div>
    @endif
</main>
@endsection
@section("skripta")
    <script src="{{asset("assets/js/comment.js")}}"></script>
@endsection
