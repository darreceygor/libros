
const API_URL= "api/comments";

let form = document.querySelector("#formComments");
form.addEventListener('submit', addComments);

let id = document.querySelector("#textComment");


async function getAll(){

    try {
        let response = await fetch (API_URL);
        let comments = await response.json();

        render(comments);

    } catch (e) {
        console.log(e);
        
    }
}

function render (comments){
    let allComments = document.querySelector("#allComments");
    let valor = document.getElementById("allComments").getAttribute("value");  /*tomo el valor del libro actual*/
    allComments.innerHTML = "";
    for (comment of comments) {
        if (comment.id_book === valor){
            console.log(comment.id_comment);
            let html = `<li> <div class="alert alert-dark row">
                            <div class="col">${comment.comment}</div>
                            <div class="col d-flex flex-row-reverse">${comment.score}</div>
                            <div class="col d-flex flex-row-reverse bd-highlight">
                                <form id="delComment" method="POST" resource="api/delComment">
                                    <button type="submit" id="btn_del_comment" class="btn btn-sm" name=${comment.id_comment}>
                                    <img class="icon" src="img/boton-eliminar.png"></button>
                                </form>
                            </div>
                        </li>`;
            allComments.innerHTML +=html;
        }
    }
    
}

getAll();

async function addComments (e){

    e.preventDefault();

    let data = new FormData(form);

    let comment = {

        comment: data.get('textComment'),
        score:data.get('id_score'),
        id_book:data.get ('id_book'),
        id_user:data.get('id_user'),
    }

    try { 
        let response = await fetch(API_URL, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(comment),
        });
        
        if (response.ok) {
            let data = await response.json();
            let html = `<li> <div class="alert alert-dark row">
            <div class="col">${comment.comment}</div>
            <div class="col d-flex flex-row-reverse">${comment.score}</div>
            <div class="col d-flex flex-row-reverse bd-highlight">
                    <form id="delComment" method="GET" resource="api/delComment">
                        <button type="submit" id="btn_del_comment" class="btn btn-sm" name=${comment.id_comment}>
                        <img class="icon" src="img/boton-eliminar.png"></button>
                    </form>
                </div>
            </li>`;
            allComments.innerHTML +=html;
            form.reset();
        }

    } catch (e) {
        console.log(e)
    }
}


