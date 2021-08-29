$(document).ready(function(){
    $(".page-link").click(prikaziJosObjava);
})
function prikaziJosObjava(e){
    e.preventDefault()
    let page = $(this).data("page");
    var uneto = $("#pretraga").val();
    var dateFrom = $("#dateFrom").val();
    var dateTo = $("#dateTo").val();
    if(typeof uneto != "undefined")
        uneto = uneto.trim();
    var category_id = $("#idKategorije").val();
    if((typeof dateTo == "undefined")&&(typeof dateFrom == "undefined")){
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
            if(typeof uneto == "undefined")
                dohvatiSlikeAdminu(page,categories)
            else
                dohvatiObjaveAdminu(uneto,page,categories)

        }
        else{
            dohvatiObjave(uneto,page,category_id)
        }
    }
    else{
        let aktivnosti = $(".date").data("type") ? false : true ;
        dohvatiAktivnostiAdminu(page,dateFrom,dateTo,aktivnosti)
    }
}
function ispisiPaginaciju(total,current){
    let html = "";
    for(let i = 1; i <= total; i++){
        if(i != current){
            html += `<li class="page-item"><a class="page-link" id="link${i}" data-page="${i}" href="#">${i}</a></li>`;
        }else{
            html += `<li class="page-item active"><a class="page-link" id = "link${i}" data-page="${i}" href="#">${i}</a></li>`;
        }
    }
    // alert(html)
    $("#paginacija").html(html);
    $(".page-link").click(prikaziJosObjava);
}
function promeniAktivanLink(current){
    $('.page-item').removeClass('active');
    $('#link' + current).parent().addClass('active');
}
