@extends("pages.admin.layouts.layout")

@section("content")
    <main>
        <div class="container-fluid">
            @include("pages.admin.partials.breadcrumb")
            <div class="row">
                @include("partials.displayerrors")
                <div class="col-12 text-right">
                    <a href="{{route("roles.create")}}" type="button" class="btn btn-outline-dark">Add new <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-12 mt-3">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">#Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($roles as $role)
                            <tr>
                                <th scope="row" class="text-left">{{$role->id}}</th>
                                <td>{{$role->name}}</td>
                                <td><a href="{{route("roles.edit",$role->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td><form action="{{route("roles.destroy",$role->id)}}" method="post">
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
