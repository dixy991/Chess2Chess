@extends("pages.admin.layouts.layout")

@section("content")
    <main>
        <div class="container-fluid">
            @include("pages.admin.partials.breadcrumb")
            <div class="row">
                @include("partials.displayerrors")
                <div class="col-12 text-right">
                    <a href="{{route("menu.create")}}" type="button" class="btn btn-outline-dark">Add new <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-12 mt-3">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">#Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Route</th>
                            <th scope="col">ParentId</th>
                            <th scope="col">Order</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($menu as $m)
                                <tr>
                                    <th scope="row" class="text-left">{{$m->id}}</th>
                                    <td>{{$m->name}}</td>
                                    <td>{{$m->route}}</td>
{{--                                    istom bojom da ih spojim?--}}
                                    <td>{{$m->parent_id}}</td>
                                    <td>{{$m->order}}</td>
                                    {{--                                jel moze preko geet? ... vidi kako je luka radio--}}
{{--                                    eo i ovo moze se isecka--}}
                                    <td><a href="{{route("menu.edit",$m->id)}}"><i class="fa fa-edit"></i></a></td>
                                    <td><form action="{{route("menu.destroy",$m->id)}}" method="post">
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
