<form action="@if($action=="update") {{route("menu." . $action,$m->id)}} @else {{route("menu." . $action)}} @endif " method="post">
    @csrf
    @if($action=="update")
        @method("PUT")
    @endif
    <div class="mb-3">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" value="{{$m->name ?? old("name")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("name")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Route</label>
            <input type="text" name="route" value="{{$m->route ?? old("route")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("route")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Parent Id</label>
            <input type="text" name="parent_id" value="{{$m->parent_id ?? old("parent_id")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("parent_id")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Order</label>
            <input type="text" name="order" value="{{$m->order ?? old("order")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("order")<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>{{-- //i ovo? --}}
</form>
