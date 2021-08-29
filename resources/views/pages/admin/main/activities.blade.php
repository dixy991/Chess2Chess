@extends("pages.admin.layouts.layout")

@section("content")
    <main>
        <div class="container-fluid">
            @include("pages.admin.partials.breadcrumb")
            <div class="row">
                <div class="col-5">
                    <h5>Date from:</h5>
                    <div class="input-group w-50">
                        <input id="dateFrom" type="date" class="form-control date">
                    </div>
                </div>
                <div class="offset-2"></div>
                <div class="col-5 text-right">
                    <h5>Date to:</h5>
                    <div class="input-group float-right w-50">
                        <input id="dateTo" type="date" class="form-control date">
                    </div>
                </div>
                <div class="col-12 mt-3 table-responsive">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th scope="col" class="text-left">#Id</th>
                            <th scope="col">Activity</th>
                            <th scope="col">Ip address</th>
                            <th scope="col">User</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody id="aktivnosti">

                        @foreach($activities as $activity)
                            <tr>
                                <th scope="row" class="text-left">{{$activity->id}}</th>
                                <td>{{$activity->activity}}</td>
                                <td>{{$activity->ip_address}}</td>
                                <td>{{$activity->users->email}}</td>
                                <td>{{$activity->date}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 text-center">
                    {{$activities->links("partials.pagination",["ajdi"=>""])}}
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
