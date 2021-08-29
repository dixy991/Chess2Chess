@extends("pages.admin.layouts.layout")

@section("content")
    <main>
        <div class="container-fluid">
            @include("pages.admin.partials.breadcrumb")
            <div class="row">
                @include("partials.displayerrors")
                <div class="col-12 text-right">
                    <a href="{{route("categories.create")}}" type="button" class="btn btn-outline-dark">Add new <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-12 mt-3">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">#Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Related table</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($categories as $category)
                            <tr>
                                <th scope="row" class="text-left">{{$category->id}}</th>
                                <td>{{$category->name}}</td>
                                <td> <figure style="width: 100px" class="mx-auto">
                                        <img src="{{asset("assets/img/". $category->thumbnail)}}" class="w-100" alt=""/>
                                    </figure></td>
                                <td>{{$category->related_table}}</td>
                                <td><a href="{{route("categories.edit",$category->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td><form action="{{route("categories.destroy",$category->id)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                                    </form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
