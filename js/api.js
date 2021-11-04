
window.onload = getcomments()


/* FORMATO MOCKAPI*/
/* {
    "id_book": "-----",
    "coment": "------",
    "rate": 1 a 5,
    "id": "1"
   } */

async function getcomments() {
    await fetch('https://617e42292ff7e600174bd750.mockapi.io/coment/')
    .then(response => response.json())
    .then(comments => {
        let content = document.querySelector(".list-comments");
        content.innerHTML = "";
        for(let comment of comments) {
            content.innerHTML += createCommentHTML(comment);
         }
    })
    .catch(error => console.log(error));
}

function createCommentHTML(comment) {
    let element = `<li class=""  ><a href=""><img class="icon-js" src="./img/boton-eliminar.png"></a>
                    ${comment.id_book} : ${comment.coment}: ${comment.rate} </li>`;
    return element;  
}

document.querySelector("#formAddComment").addEventListener('submit', addComment);

async function addComment(e) {
    e.preventDefault();
    
    let data = {
        coment:  document.querySelector(".comment").value,
        rate:  document.querySelector(".rate").value,
        id_book:  document.querySelector(".id_book").value,
    }

    await fetch('https://617e42292ff7e600174bd750.mockapi.io/coment/',{
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
         getcomments();
     })
     .catch(error => console.log(error));
}


   async function delComment(e) {
        let options = {
            method: "DELETE",
            headers: {
                "Content-type": "application/json; charset=utf-8"
            }
        }; 
        
    /* FALTA TRAER EL ID DEL JSON PARA ELIMINAR */
    } 
