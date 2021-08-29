@extends("pages.admin.layouts.layout")

@section("content")
    <main>
        <div class="container-fluid">
            @include("pages.admin.partials.breadcrumb")
            <div class="row">
                @include("partials.displayerrors")
                <div class="col-12 text-right">{{--to ona komponenta--}}
                    <a href="{{route("posts.create")}}" type="button" class="btn btn-outline-dark">Add new <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-12 mt-3 py-3">
                    @foreach($categories as $category)
                        <div class="form-check form-check-inline">
                            <input class="filterCategories form-check-input" type="checkbox" name="chbxCategories" id="inlineCheckbox1" value="{{$category->id}}">
                            <label class="form-check-label" for="inlineCheckbox1">{{$category->name}}</label>
                        </div>
                    @endforeach
                </div>
                <div class="col-12 mt-3">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">#Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Text</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Category</th>
                            <th scope="col">Comments</th>
                            <th scope="col">Read</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody id="adminPostovi">

                        @foreach($posts as $post)
                            <tr>
                                <th scope="row" class="text-left">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
{{--                                iseci tekst--}}
                                <td>{{substr($post->text,0,150)}}...</td>
                                <td> <figure style="width: 100px">
                                        <img src="{{asset("assets/img/". $post->thumbnail)}}" class="w-100" alt=""/>
                                    </figure></td>
                                <td>{{$post->categories->name}}</td>
                                <td>{{$post->comments_count}}</td>
                                <td><a href="{{route("admin-post",$post->id)}}"><i class="fa fa-eye"></i></a></td>
                                <td><a href="{{route("posts.edit",$post->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td><form action="{{route("posts.destroy",$post->id)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                                    </form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
{{--                @component("partials.pagination",["ajdi" => "","paginator" => $posts->links()])--}}
                <div class="col-12 text-center">
                    {{$posts->links("partials.pagination")}}
                </div>
            </div>
        </div>
    </main>
@endsection
@section("skripta")
    <script src="{{asset("assets/js/admin.js")}}"></script>
    <script src="{{asset("assets/js/post.js")}}"></script>
    <script src="{{asset("assets/js/pagination.js")}}"></script>
@endsection
