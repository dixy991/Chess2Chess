<nav class="navbar navbar-expand-lg navbar-dark crno">
    <div class="container">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-uppercase mx-auto" role="menu">
                @foreach($menu as $m)
                    @if($m->parent_id == null)
{{--                        <li><a href="">{{$m->name}}</a></li>--}}
                        <li class="nav-item mx-2 @if(count($m->submenu)) dropdown  @endif">
                            <a class="nav-link text-start @if(request()->routeIs($m->route)) active @endif @if(count($m->submenu)) btn crno dropdown-toggle @endif"
                               href="@if($m->route!="#") {{route($m->route)}} @endif"
                               @if(count($m->submenu))
                               role="button"
                               id="{{$m->route}}MenuLink"
                               data-bs-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false" @endif >
                                @if($m->name=="User")
                                    <i class="fa fa-user-circle"></i>
                                @else
                                    {{$m->name}}
                                @endif
                            </a>
                            <ul class="dropend dropdown-menu" aria-labelledby="{{$m->route}}MenuLink">
                                @component("partials.submenu",["childs"=>$m->submenu,"menu"=>$menu])
                                @endcomponent
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>



{{--@foreach($parentsMenu as $pm)--}}
{{--    <li class="nav-item mx-2 @if(count($pm->childs)) dropdown @endif">--}}
{{--        <a class="nav-link text-start--}}
{{--                           @if(request()->routeIs($pm->route)) active @endif--}}
{{--        @if(count($pm->childs)) btn crno dropdown-toggle @endif"--}}
{{--           href="@if($pm->route!="#") {{route($pm->route)}} @endif"--}}
{{--           @if(count($pm->childs))--}}
{{--           role="button"--}}
{{--           id="{{$pm->route}}MenuLink"--}}
{{--           data-bs-toggle="dropdown"--}}
{{--           aria-haspopup="true"--}}
{{--           aria-expanded="false" @endif--}}
{{--        >--}}
{{--            @if($pm->name=="User")--}}
{{--                <i class="fa fa-user-circle"></i>--}}
{{--            @else--}}
{{--                {{$pm->name}}--}}
{{--            @endif--}}
{{--        </a>--}}
{{--        @if(count($pm->childs))--}}
{{--            --}}{{--                            @dd($pm->childs)--}}
{{--            <div class="dropdown-menu" aria-labelledby="{{$pm->route}}MenuLink">--}}
{{--                @foreach($pm->childs as $child)--}}
{{--                    --}}{{--                                    //ISPRAVI OVO SAD LEPOO--}}
{{--                    @if(session()->has("user"))--}}
{{--                        @if($child->route=="logout")--}}
{{--                            <form action="{{route($child->route)}}" method="post">--}}
{{--                                @csrf--}}
{{--                                <button type="submit" class="dropdown-item">{{$child->name}}</button>--}}
{{--                            </form>--}}
{{--                        @else--}}
{{--                            @continue--}}
{{--                        @endif--}}
{{--                    @elseif($child->route!="logout")--}}
{{--                        <a class="dropdown-item" href="{{route($child->route)}}">{{$child->name}}</a>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </li>--}}
{{--@endforeach--}}
