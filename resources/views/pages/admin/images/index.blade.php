@extends("pages.admin.layouts.layout")

@section("content")
    <main>
        <div class="container-fluid">
            @include("pages.admin.partials.breadcrumb")
            <div class="row">
                @include("partials.displayerrors")
                <div class="col-12 text-right">
                    <a href="{{route("images.create")}}" type="button" class="btn btn-outline-dark">Add new <i class="fa fa-plus"></i></a>
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
                            <th scope="col">Image</th>
                            <th scope="col">Image alt</th>
                            <th scope="col">Category</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody id="adminSlike">

                        @foreach($images as $image){{--dal zapravo key daispisujem?!--}}
                            <tr>
                                <th scope="row" class="text-left">{{$image->id}}</th>
                                <td> <figure class="mx-auto" style="width: 100px">
                                        <img src="{{asset("assets/img/". $image->img_src)}}" class="w-100" alt=""/>
                                    </figure></td>
                                <td>{{$image->img_alt}}</td>
                                <td>{{$image->categories->name}}</td>
                                <td><a href="{{route("images.edit",$image->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td><form action="{{route("images.destroy",$image->id)}}" method="post">
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
                    {{$images->links("partials.pagination")}}
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
