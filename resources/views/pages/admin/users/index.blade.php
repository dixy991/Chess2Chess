@extends("pages.admin.layouts.layout")

@section("content")
    <main>
        <div class="container-fluid">
            @include("pages.admin.partials.breadcrumb")
            <div class="row">
                @include("partials.displayerrors")
                <div class="col-12 text-right">
                    <a href="{{route("users.create")}}" type="button" class="btn btn-outline-dark">Add new <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-12 mt-3">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">#Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Active</th>
                            <th scope="col">Role</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <th scope="row" class="text-left">{{$user->id}}</th>
                                <td>{{$user->username}}</td>
                                {{--                                iseci tekst--}}
                                <td>{{$user->email}}</td>
                                <td>{{$user->active ? "jeste" : "nije"}}</td>
                                <td>{{$user->name}}</td>
                                {{--                                jel moze preko geet? ... vidi kako je luka radio--}}
                                <td><a href="{{route("users.edit",$user->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td><form action="{{route("users.destroy",$user->id)}}" method="post">
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
