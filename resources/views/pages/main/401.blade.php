<!DOCTYPE html>
<html lang="en">
@include("pages.admin.fixed.head")
<body>
<div id="layoutError">
    <div id="layoutError_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mt-4">
                            <h1 class="display-1">401</h1>
                            <p class="lead">Unauthorized</p>
                            <p>Access to this resource is denied.</p>
                            <a href="{{route("home")}}">
                                <i class="fas fa-arrow-left mr-1"></i>
                                Return to Home page
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutError_footer">
        @include("pages.admin.fixed.footer")
    </div>
</div>
@include("pages.admin.fixed.scripts")
</body>
</html>
