@extends("pages.admin.layouts.layout")

@section("content")
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 my-5">
                    <a href="{{route($route)}}" type="button" class="btn btn-dark"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div class="col-12 mt-3">
                    @include($page,["action"=>$action])
                </div>
            </div>
        </div>
    </main>
@endsection
