$(document).ready(function() {
    $(".ucitajObjavePoDatumu").click(ucitajStarijeObjave);
})
function ucitajStarijeObjave(e){
    e.preventDefault()
    // console.log("ooovo")
    // console.log(this)
    let date = this.getAttribute("data-date");
    let skip = parseInt(this.getAttribute("data-page"));
    // console.log(parseInt(skip))
    //let offset = date == "oldest" ?  (skip += 3 ) && ($(this).data("page",skip + 3)) :  (skip -= 3) && (this.nextElementSibling.setAttribute("data-page",skip - 3))
    //console.log(offset)
    // $(this).data("page",offset)
    // console.log(this.nextElementSibling)
    if(date == "oldest"){
        if(skip == 0) this.nextElementSibling.style.visibility = "visible"
        skip += 3  // 3 + 3 = 6
        this.setAttribute("data-page",skip) // 6
        let newestSkip = skip - 3
        console.log("levo-" + skip,"desno-" + newestSkip)
        this.nextElementSibling.setAttribute("data-page",newestSkip)
        dohvatiNoveUcitaneObjave(skip,date,newestSkip)
        // console.log("levo:")
        // console.log(this)
        // console.log("desno:")
        // console.log(this.nextElementSibling)
    }
    else{
        let oldestSkip = skip
        console.log("za novije:")
        console.log(oldestSkip,skip)
        if(this.previousElementSibling.style.visibility=="hidden"){
            // this.previousElementSibling.setAttribute("data-page",oldestSkip)
            dohvatiNoveUcitaneObjave(skip,date,oldestSkip)
        }
        else{
            if(skip == 0){
                this.style.visibility = "hidden"
                skip = 3
                oldestSkip = 0
            }
            else{
                skip -= 3
            }
            this.setAttribute("data-page",skip) // 6
            this.previousElementSibling.setAttribute("data-page",oldestSkip)
            console.log("levo-" + oldestSkip,"desno-" + skip)

            dohvatiNoveUcitaneObjave(skip,date,oldestSkip)
        }
        // console.log("levo:")
        // console.log(this.previousElementSibling)
        // console.log("desno:")
        // console.log(this)
    }
//iskreno profesore, ja zaista ne znam kako ovo radi, al cim je odradilo svoj posao, nisam se usudila da diram tj cackam vise kod
    //bilo kakve sugestije i kratke i lakse ,,solucije" ovoga bi mi dobrodosle i ustedele san (izuzev dormeu)
    //hvala unapred
}
function dohvatiNoveUcitaneObjave(skip,date,siblingskip){
    console.log(skip,date,siblingskip)
    let dontshow = true;
    $.ajax({
        url: "/home",
        method: "GET",
        data: {
            skip
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
            let link = document.getElementsByClassName("ucitajObjavePoDatumu")
            if((!response.length) || (response.length<3)){
                date == "oldest" ? link[0].style.visibility = "hidden" : link[1].style.visibility = "hidden"
                //preko boolean?
                dontshow = false
            }
            else{
                //?? lepse ispisati
                link[0].style.visibility = "visible"
                let page = parseInt(link[1].getAttribute("data-page"));
                //promeni ovo?!
                let izgled
                if(page==0) izgled = "visible"
                // if(page==3) izgled = "hidden"
                link[1].style.visibility = izgled
            }
            ispisiObjaveNaPocetnoj(response,skip,siblingskip,date,dontshow)
        },
        error: function (response){
            console.log(response)
        }
    });
}
function ispisiObjaveNaPocetnoj(data,skip,siblingskip,date,dontshow){
    console.log(skip,date,siblingskip)
    let ispis = ""
    for(d of data){
        ispis += `
            <div class="col-10 mx-auto">
                <div class="row mx-auto my-3">
                    <div class="col-lg-6 d-lg-block d-sm-flex justify-content-sm-center col-sm-12">
                      <a href="posts/${d.id}">
                        <figure class="d-flex">
                            <img
                                src="assets/img/${d.thumbnail}"
                                alt="${d.title}"
                                class="zaokrugli"
                            />
                        </figure>
                        </a>
                    </div>
                    <div class="col-lg-5 col-sm-12 text-md-end text-sm-center">
                        <h3 class="mt-3">${d.title}</h3>
                        <small>${d.date}</small>
                        <p class="pt-3">${d.text.substring(0,150)}...</p>
                        <a href="posts/${d.id}" class="btn btn-outline-dark rounded-0">Read more</a>
                    </div>
                    <div class="col-lg-1 col-sm-12 py-5 uspravnaSlova">
                        <p class="border rounded-pill ml-0 px-1 py-3">${d.categories.name}</p>
                    </div>
                </div>
            </div>
        `
    }
    // let link = document.getElementsByClassName("ucitajObjavePoDatumu")

    if(date=="oldest"){
        // link[0].setAttribute("data-page",skip)
        // link[1].setAttribute("data-page",siblingskip)
        // if(siblingskip==0) link[1].style.visibility = "hidden"
        ispis+=`
            <div class="col-12 mt-5 d-flex justify-content-between">
                <a href="#" class="ucitajObjavePoDatumu" data-page="${skip}" `

        if(!dontshow) ispis+=`style="visibility:hidden"`

        ispis+= `data-date="oldest"><i class="fa fa-long-arrow-left"></i> Older posts</a>
                <a href="#" class="ucitajObjavePoDatumu" data-page="${siblingskip}" data-date="newest">Newer posts <i class="fa fa-long-arrow-right"></i> </a>
            </div>
        `
    }
    else{
        // link[0].setAttribute("data-page",siblingskip)
        // link[1].setAttribute("data-page",skip)
        ispis+=`
            <div class="col-12 mt-5 d-flex justify-content-between">
                <a href="#" class="ucitajObjavePoDatumu" data-page="${siblingskip}" data-date="oldest"><i class="fa fa-long-arrow-left"></i> Older posts</a>
                <a href="#" class="ucitajObjavePoDatumu" data-page="${skip}" `

        if(skip==0) ispis+=`style="visibility:hidden"`

        ispis+=`data-date="newest">Newer posts <i class="fa fa-long-arrow-right"></i> </a> </div>`
    }

    console.log("gle ovo")
    // console.log(link[0])
    // console.log(link[1])

    $("#najnovijaTriPocetnaClanka").html(ispis)
    //moraaa nakon ispisaa!!!
    $(".ucitajObjavePoDatumu").click(ucitajStarijeObjave);

}
