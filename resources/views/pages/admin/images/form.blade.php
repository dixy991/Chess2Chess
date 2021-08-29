<form action="@if($action=="update") {{route("images." . $action,$image->id)}} @else {{route("images." . $action)}} @endif " method="post" enctype="multipart/form-data" >
    @csrf
    @if($action=="update")
        @method("PUT")
    @endif
    <div class="mb-3">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Alt</label>
            <input type="text" name="img_alt" value="{{$image->img_alt ?? old("img_alt")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("img_alt")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group d-flex justify-content-center">
            @isset($image)
                <figure class="w-25">
                    <img src="{{asset("assets/img/". $image->img_src)}}" class="w-100" alt=""/>
                </figure>
            @endif
        </div>
        <div class="form-group text-center my-5">
            <label for="exampleInputEmail1" class="form-label ml-5 mr-3">Image:</label>
            <input type="file" name="image" class="form-control w-25 border-0 mx-auto"  id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("image")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group text-center">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <select class="form-control w-25 mx-auto" name="category_id" id="exampleFormControlSelect1">
                <option value="0">Select</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if(($category->id == old("category_id"))) selected="selected" @endif @isset($image) @if(($category->id == $image->category_id))) selected="selected" @endisset  @endif">{{$category->name}}</option>
                @endforeach
            </select>
            @error("category_id")<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>{{-- //i ovo? --}}
</form>
