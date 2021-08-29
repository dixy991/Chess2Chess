<!DOCTYPE html>
<html lang="en">

    @include("pages.admin.fixed.head")

    <body>

    @include("pages.admin.fixed.navigation")

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include("pages.admin.fixed.side_navigation")
        </div>
        <div id="layoutSidenav_content">
            @yield("content")
            @include("pages.admin.fixed.footer")
        </div>
    </div>

    @include("pages.admin.fixed.scripts")

    </body>

</html>
