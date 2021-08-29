$(document).ready(function() {
    $("#komentarisi").click(objaviKomentar);
    $(".editComentar").click(prikaziFormuZaIzmenuKomentara);
})

function objaviKomentar(){
    var text = $("#komentar").val().trim();
    var user_id = $("#idKorisnika").val();
    var post_id = $("#idPosta").val();
    console.log(text,post_id,user_id)
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': token
        },
        url: "/komentarisi",
        method: "POST",
        data: {
            text,user_id,post_id
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
            ispisiKomentare(response);
            $("#komentar").val(" ");
        },
        error: function (response){
            console.log(response)
            $("#greska").html("Fill in the field")
        }
    });

}
function ispisiKomentare(data){
    let ispis = ""
    let korisnikId = $("#idKorisnika").val();
    let kometari = data.length + " comments"
    data.length ?  $("#brojKomentara").html(kometari) : "No comments"
    for(d of data){
        ispis+=`
                <div class="row mb-3">
                    <div class="col-md-2 mb-sm-3 col-sm-12">
                        <i class="fa fa-user-circle-o" style="font-size:50px"></i>
                    </div>
                    <div class="col-md-10 col-sm-12" id>
                        <h6>${d.users.username}</h6>
                        `

        let date = new Date(d.created_at).toLocaleString();


        ispis += `<p>${date}</p>
                 <div class="d-flex justify-content-between">
                            <p>${d.text}</p>
            `


        if(d.users.id == korisnikId){
            ispis += `
                    <i class="fa fa-edit editComentar">edit</i>
                    <textarea class="form-control rounded-0 zaEditComentara" data-idkomentara="${d.id}" name="komentar" id="editKomentar"></textarea>
            </div>`
        }

        date = new Date(d.updated_at).toLocaleString();

        if(d.created_at!=d.updated_at)
            ispis+=`<small class="float-end">Changed at : ${date}</small>`

        ispis += `
                </div>
            </div>
        `
    }
    $("#komentari").html(ispis)
    $(".editComentar").click(prikaziFormuZaIzmenuKomentara);

}
function prikaziFormuZaIzmenuKomentara(){
    $(this).hide();
    $(this).prev().hide();
    $(this).next().show();
    $(this).next().select();
    var user_id = $("#idKorisnika").val();

    let stariKomentar = $(this).prev().html();
    $(this).next().html(stariKomentar);

    $(this).next().blur(function() {
        this.value = (this.defaultValue ? this.defaultValue : '');

        $(this).hide();
        $(this).prev().show();
        $(this).prev().prev().show();
    });

    $(this).next().keypress(function(event) {
        if (event.keyCode == '13') {//kada lupi enter
            if ($.trim(this.value) == ''){
                this.value = (this.defaultValue ? this.defaultValue : ''); //kao da se nista nije desilo
            }
            else
            {
                //FUNKCIJAAAA
                let text = this.value;
                var id = $(this).data("idkomentara");
                var post_id = $("#idPosta").val();
                console.log(text,post_id,id)
                //unesi u bazu izmene:
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    url: "/izmeni-komentar",
                    method: "PUT",
                    data: {
                        text, id, post_id, user_id
                    },
                    dataType: "json",
                    success: function (response) {
                        console.log(response)
                        ispisiKomentare(response);
                    },
                    error: function (response){
                        console.log(response)
                    }
                });

                $(this).prev().prev().html(this.value);
            }
            //u funkcijicu
            $(this).hide();
            $(this).prev().show();
            $(this).prev().prev().show();
        }
    });
}
