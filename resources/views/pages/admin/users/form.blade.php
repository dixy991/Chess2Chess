<form action="@if($action=="update") {{route("users." . $action,$user->id)}} @else {{route("users." . $action)}} @endif " method="post">
    @csrf
    @if($action=="update")
        @method("PUT")
    @endif
    <div class="mb-3">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" value="{{$user->username ?? old("username")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("username")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" value="{{$user->email ?? old("email")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("email")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
{{--            dihipak izmeni>?!--}}
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" name="password" value="{{old("password")}}" class="form-control" @if($action=="update")  disabled @endif  id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("password")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Confirm password</label>
            <input type="password" name="confirm_password" value="{{old("confirm_password")}}"  @if($action=="update") disabled @endif  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error("confirm_password")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Active:</label>
            <div class="form-check form-check-inline ml-2">
                <input class="form-check-input" type="radio" @isset($user) @if($user->active==1) checked="checked" @endif @endisset  name="active" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="active" @isset($user) @if($user->active==0) checked="checked" @endif @endisset  id="inlineRadio2" value="0">
                <label class="form-check-label" for="inlineRadio2">no</label>
            </div>
            @error("active")<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group text-center">
            <label for="exampleInputEmail1" class="form-label">Role:</label>
            <select class="form-control w-25 mx-auto" name="role_id" id="exampleFormControlSelect1">
                @foreach($roles as $role)
                    <option value="{{$role->id}}" @isset($user) @if(($role->id == $user->role_id))) selected="selected" @endif @else @if($role->name=="user") selected="selected" @endif @endisset ">{{$role->name}}</option>
                @endforeach
            </select>
            @error("category_id")<span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>{{-- //i ovo? --}}
</form>
