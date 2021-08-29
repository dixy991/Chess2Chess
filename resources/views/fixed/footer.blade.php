<footer class="container-fluid text-center py-3 crno">
    <div class="container my-5" style="margin-bottom:5rem!important;">
        <div class="row">
            <div class="col-lg-4 col-sm-12 py-3 text-lg-left">
                <h2>Chess2Chess</h2>
            </div>
            <div class="col-lg-4 col-sm-12">
                <h3>Categories</h3>
                <ul class="ps-sm-0">
                    @foreach($categories as $category)
                        <li><a href="{{route($category->name)}}" class="text-capitalize">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-4 col-sm-12">
                <h3>Pages</h3>
                <ul class="ps-sm-0">
                    <li><a href="{{route("about")}}">About</a></li>
                    <li><a href="{{route("contact")}}">Contact</a></li>
                    <li><a href="{{route("author")}}">Author</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="border-top">
        <p class="mb-0 mt-3">&copy;DL</p>
    </div>
</footer>
