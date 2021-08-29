@isset($title)<div class="sb-sidenav-menu-heading">{{$title}}</div>@endisset
<a class="nav-link" href="@isset($toggle) # @else {{route($route)}} @endisset"
   @isset($toggle) data-toggle="collapse" data-target="#{{$target}}" aria-expanded="false"
   aria-controls="{{$target}}" @endisset>
    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
    {{$name}}
    @isset($toggle)
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    @endisset
</a>

@isset($toggle)
    <div class="collapse" id="{{$target}}" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            @foreach($childName as $key=>$ch)
                <a class="nav-link" href="{{route($childRoute[$key])}}">{{$ch}}</a>
            @endforeach
        </nav>
    </div>
@endisset
