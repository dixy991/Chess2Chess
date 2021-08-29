$(document).ready(function(){
    $(".filterCategories").click(filtrirajPoKategorijama);
    $(".date").change(filtrirajPoDatumuAktivnostiZaAdmina);
})

function filtrirajPoKategorijama(){
    let categories = [];
    $.each($("input[name='chbxCategories']:checked"), function(){
        categories.push($(this).val());
    });
    if(!categories.length) {
        $.each($("input[name='chbxCategories']"), function(){
            categories.push($(this).val());
        });
    }
    var uneto = $("#pretraga").val();
    if(typeof uneto != "undefined"){
        uneto = uneto.trim();
        dohvatiObjaveAdminu(uneto,1,categories)
    }
    else{
        dohvatiSlikeAdminu(1,categories)
    }//cisti ovoo!!!!
    console.log(categories)
}
function dohvatiObjaveAdminu(uneto,page,categories){
    const caller = arguments.callee.caller.name;
    $.ajax({
        url: "/admin/search",
        method: "GET",
        data: {
            page, uneto, categories
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
            ispisiObjaveAdminu(response.data)
            if((caller == 'filtrirajPoKategorijama') || (caller == 'pretraziObjave'))
                ispisiPaginaciju(response.last_page,response.current_page)
            if(caller == 'prikaziJosObjava')
                promeniAktivanLink(response.current_page)
        },
        error: function (response){
            console.log(response)
        }
    });
}
function ispisiObjaveAdminu(data){
    let ispis = ""
    for(d of data){
        ispis +=`
                <tr>
                    <th scope="row" class="text-left">${d.id}</th>
                    <td>${d.title}</td>
                    <td>${d.text.substring(0,150)}...</td>
                    <td> <figure style="width: 100px">
                            <img src="../assets/img/${d.thumbnail}" class="w-100" alt=""/>
                        </figure></td>
                    <td>${d.categories.name}</td>
                    <td>${d.comments_count}</td>
                    <td><a href="posts/${d.id}"><i class="fa fa-eye"></i></a></td>
                    <td><a href="admin/posts/${d.id}/edit"><i class="fa fa-edit"></i></a></td>
                    <td><button type="button" data-id="${d.id}" class="btn brisiObjavuDugme"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
        `
    }
    $("#adminPostovi").html(ispis)
    $(".brisiObjavuDugme").click(brisiObjavuKaoAdmin)
}
function brisiObjavuKaoAdmin(){
    var id = $(this).data("id");
    var method = "delete";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });
    $.ajax({
        url: "../posts/" + id ,
        type : "delete",
        data: {
            id
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
            alert("success")
            location.reload()
        },
        error: function (response){
            console.log(response)
        }
    });
}
function dohvatiSlikeAdminu(page,categories){
    // alert(categories)
    const caller = arguments.callee.caller.name;
    let slike = true
    console.log(categories)
    $.ajax({
        url: "/admin/search",
        method: "GET",
        data: {
            page, categories, slike
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
            ispisiSlikeAdminu(response.data)
            if(caller == 'filtrirajPoKategorijama')
                ispisiPaginaciju(response.last_page,response.current_page)
            if(caller == 'prikaziJosObjava')
                promeniAktivanLink(response.current_page)
        },
        error: function (response){
            console.log(response)
        }
    });
}
function ispisiSlikeAdminu(data){
    let ispis = ""
    for(d of data){
        ispis +=`
                <tr>
                    <th scope="row" class="text-left">${d.id}</th>
                    <td> <figure class="mx-auto" style="width: 100px">
                        <img src="../assets/img/${d.img_src}" class="w-100" alt=""/>
                        </figure></td>
                    <td>${d.img_alt}</td>
                    <td>${d.categories.name}</td>
                    <td><a href="images/${d.id}/edit"><i class="fa fa-edit"></i></a></td>
                    <td><button type="button" data-id="${d.id}" class="btn brisiSlikuDugme"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
        `
    }

    $("#adminSlike").html(ispis)
    $(".brisiSlikuDugme").click(brisiSlikuKaoAdmin)
}
function brisiSlikuKaoAdmin(){
    // alert($(this).data("page"))
    var id = $(this).data("id");
    var method = "delete";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });
    $.ajax({
        url: "images/" + id ,
        type : "delete",
        data: {
            id
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
            alert("success")
            location.reload()
        },
        error: function (response){
            console.log(response)
        }
    });
}
function filtrirajPoDatumuAktivnostiZaAdmina(){
    var dateFrom = $("#dateFrom").val();
    var dateTo = $("#dateTo").val();
    let aktivnosti = $(this).data("type") ? false : true ;
    console.log(aktivnosti)
    dohvatiAktivnostiAdminu(1,dateFrom,dateTo,aktivnosti)
}
function dohvatiAktivnostiAdminu(page,dateFrom,dateTo,aktivnosti){
    const caller = arguments.callee.caller.name;
    $.ajax({
        url: "/admin/date-filter",
        method: "GET",
        data: {
            page, dateFrom, dateTo, aktivnosti
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
            if(aktivnosti)
                ispisiAktivnostiAdminu(response.data)
            else
                ispisiGreskeAdminu(response.data)
            if(caller == 'filtrirajPoDatumuAktivnostiZaAdmina')
                ispisiPaginaciju(response.last_page,response.current_page)
            if(caller == 'prikaziJosObjava')
                promeniAktivanLink(response.current_page)
        },
        error: function (response){
            console.log(response)
        }
    });
}
function ispisiAktivnostiAdminu(data){
    let ispis = ""
    for(d of data){
        ispis+=`
                <tr>
                    <th scope="row" class="text-left">${d.id}</th>
                    <td>${d.activity}</td>
                    <td>${d.ip_address}</td>
                    <td>${d.users.email}</td>
                    <td>${d.date}</td>
                </tr>
        `
    }
    $("#aktivnosti").html(ispis)
}
