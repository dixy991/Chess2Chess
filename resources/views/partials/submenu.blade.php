@isset($childs)
    @if(count($childs)>0)
        @foreach($childs as $child)
            @if(session()->has("user"))
                @if(($child->route!="register")&&($child->route!="login")&&($child->route!="logout"))
                    <li class="onHoverPrikaziPodMeni nav-item dropdown"><a class="dropdown-item" href="{{route($child->route)}}">{{$child->name}}</a>
                        {{--                <li><a href="">{{$child->name}}</a></li>--}}
                        @foreach($menu as $m)
                            @if($m->id==$child->id)
                                <ul class="dropdown-menu dropend" aria-labelledby="{{$m->route}}MenuLink">
                                    @component("partials.submenu",["childs"=>$m->submenu,"menu"=>$menu])
                                    @endcomponent
                                </ul>
                            @endif
                        @endforeach
                    </li>
                @endif
                @if(($child->route=="logout"))
                    <form action="{{route($child->route)}}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">{{$child->name}}</button>
                    </form>
                @endif
            @else
                @if(($child->route!="logout"))
                    <li class="onHoverPrikaziPodMeni nav-item dropdown"><a class="dropdown-item" href="{{route($child->route)}}">{{$child->name}}</a>
                        {{--                <li><a href="">{{$child->name}}</a></li>--}}
                        @foreach($menu as $m)
                            @if($m->id==$child->id)
                                <ul class="dropdown-menu dropend" aria-labelledby="{{$m->route}}MenuLink">
                                    @component("partials.submenu",["childs"=>$m->submenu,"menu"=>$menu])
                                    @endcomponent
                                </ul>
                            @endif
                        @endforeach
                    </li>
                @endif
            @endif
        @endforeach
    @endif
@endisset

{{--<div class="dropdown-menu" aria-labelledby="{{$pm->route}}MenuLink">--}}
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
