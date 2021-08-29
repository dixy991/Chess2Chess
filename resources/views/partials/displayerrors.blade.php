@if(session()->has("success"))
    <div class="col-12 mb-3 text-center text-success">{{session()->get("success")}}</div>
@endif
@if(session()->has("error"))
    <div class="col-12 mb-3 text-center text-danger">{{session()->get("error")}}</div>
@endif
