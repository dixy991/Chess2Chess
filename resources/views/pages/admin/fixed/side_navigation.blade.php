<nav class="position-fixed sb-sidenav accordion crno sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            @include("pages.admin.partials.side-menu-item",["title"=>"Core","name"=>"Home","route"=>"admin-panel"])
            @include("pages.admin.partials.side-menu-item",["name"=>"Activities","route"=>"admin-activities"])
            @include("pages.admin.partials.side-menu-item",["title"=>"Interface","toggle"=>true,"target"=>"collapseLayouts",
            "name"=>"Content management","route"=>"admin-activities","childName"=>["Posts","Gallery"],"childRoute"=>["admin-posts","images.index"]])

            @include("pages.admin.partials.side-menu-item",["toggle"=>true,"target"=>"collapsePages","name"=>"Users management",
            "route"=>"admin-activities","childName"=>["Users","Roles"],"childRoute"=>["users.index","roles.index"]])

            @include("pages.admin.partials.side-menu-item",["title"=>"Addons","name"=>"Categories","route"=>"categories.index"])
            @include("pages.admin.partials.side-menu-item",["name"=>"Menu","route"=>"menu.index"])
        </div>
    </div>
    <div class="sb-sidenav-footer border-top crno">
        <div class="small">Logged in as:</div>
        {{session()->get("user")->username}}
    </div>
</nav>
