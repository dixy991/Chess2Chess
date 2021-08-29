<form action="@if($action=="update") {{route("categories." . $action,$category->id)}} @else {{route("categories." . $action)}} @endif " method="post" enctype="multipart/form-data">
    @csrf
    @if($action=="update")
    @method("PUT")
    @endif
    <div class="mb-3">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" value="{{$category->name ?? old("name")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("name")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Related table</label>
            <input type="text" name="related_table" value="{{$category->related_table ?? old("related_table")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("related_table")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group d-flex justify-content-center">
            @isset($category)
                <figure class="w-25">
                    <img src="{{asset("assets/img/". $category->thumbnail)}}" class="w-100" alt=""/>
                </figure>
            @endif
        </div>
        <div class="form-group text-center my-5">
            <label for="exampleInputEmail1" class="form-label ml-5 mr-3">Image:</label>
            <input type="file" name="image" class="form-control w-25 border-0 mx-auto"  id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("image")<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>{{-- //i ovo? --}}
</form>
