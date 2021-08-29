$(document).ready(function(){
    $("#pretraga").keyup(pretraziObjave);
})
function pretraziObjave(){
    var uneto = $("#pretraga").val().trim();
    var category_id = $("#idKategorije").val();
    // console.log(category_id)
    // const caller = arguments.callee.caller.name;
    if(typeof category_id == "undefined"){
        let categories = [];
        $.each($("input[name='chbxCategories']:checked"), function(){
            categories.push($(this).val());
        });
        if(!categories.length) {
            $.each($("input[name='chbxCategories']"), function(){
                categories.push($(this).val());
            });
        }
        console.log(categories)
        dohvatiObjaveAdminu(uneto,1,categories)
    }
    else{
        dohvatiObjave(uneto,1,category_id)
    }
}
function dohvatiObjave(uneto,page,category_id){
    const caller = arguments.callee.caller.name;
    $.ajax({
        url: "/search",
        method: "GET",
        data: {
            page, uneto, category_id
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
            ispisiObjave(response.data)
            if((caller == 'pretraziObjave')&&(response.data.length))
                    ispisiPaginaciju(response.last_page,response.current_page)
            if(caller == 'prikaziJosObjava')
                promeniAktivanLink(response.current_page)
        },
        error: function (response){
            console.log(response)
        }
    });
}
function ispisiObjave(data){
    let ispis = "";
    if(data.length){
        for(d of data){
            ispis+=`
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                <figure>
                    <a href="posts/${d.id}">
                        <img
                            src="assets/img/${d.thumbnail}"
                            class="w-100"
                            alt=""
                        />
                    </a>
                </figure>
                <h3><a href="posts/${d.id}">${d.title}</a></h3>
                <small>${d.date}</small>
                <p class="mt-3">${d.text.substring(0,150)}</p>
                <button class="btn btn-outline-dark rounded-0">View post</button>
            </div>
        `
        }
    }
    else{
        ispis += "<h2>No matching posts. Try again!</h2>"
        $("#paginacija").html("");
    }
    // console.log(data.length)
    $("#objave").html(ispis);
}
