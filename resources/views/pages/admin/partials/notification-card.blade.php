<div class="col-xl-3 col-md-6">
    <div class="card bg-{{$color}} text-white mb-4">
        <div class="card-body">
            {{$textBefore}}
            @if($session)
                @if(session()->has($mainContent))
                    {{session()->get($mainContent)}}
                @endif
            @else
                {{$mainContent}}
            @endif
            {{$textAfter}}
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="{{route($route)}}">View Details</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
</div>
