<form action="@if($action=="update") {{route("roles." . $action,$role->id)}} @else {{route("roles." . $action)}} @endif " method="post">
    @csrf
    @if($action=="update")
        @method("PUT")
    @endif
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" value="{{$role->name ?? old("name")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error("name")<span class="text-danger">{{$message}}</span>@enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>{{-- //i ovo? --}}
</form>
