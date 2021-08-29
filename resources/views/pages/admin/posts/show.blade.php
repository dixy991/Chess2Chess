@extends("pages.admin.layouts.layout")

@section("content")
    <main>
        <div class="container-fluid">
            @include("pages.admin.partials.breadcrumb")
            <div class="row">
                <div class="col-12">
                    <a href="{{route("admin-posts")}}" type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="row w-75 mx-auto">
                <div class="col-12">
                    <figure>
                        <img src="{{asset("assets/img/". $post->thumbnail)}}" class="w-100" alt=""/>
                    </figure>
                </div>
                <div class="col-12">
                    <p>{{$post->text}}</p>
                </div>
            </div>
            <div class="row w-50 my-5 mx-auto">
                <div class="col-12 position-relative text-center mb-5">
                    <p class="crtaPosle">
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
                        <div class="row mb-3 border-bottom">
                            <div class="col-md-2 mb-sm-3 col-sm-12">
                                <i class="fa fa-user-circle" style="font-size:50px"></i>
                            </div>
                            <div class="col-md-10 col-sm-12" id>
                                <h6>{{$comment->users->username}}</h6>

                                {{--                        <p>{{$comment->created_at}}</p>--}}
                                <div class="d-flex justify-content-between">
                                    <p>{{date('d-m-Y', strtotime($comment->created_at))}}</p>
                                    <form action="{{route("admin-comments-delete",$comment->id)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                                <p>{{$comment->text}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
