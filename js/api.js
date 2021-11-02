
window.onload = getcomments()

async function getcomments() {
    await fetch('https://617e42292ff7e600174bd750.mockapi.io/coment/')
    .then(response => response.json())
    .then(comments => {
        let content = document.querySelector(".list-comments");
        content.innerHTML = "";
        for(let comment of comments) {
            content.innerHTML += createCommentHTML(comment);
            console.log(comment)
        }
    })
    .catch(error => console.log(error));
}

function createCommentHTML(comment) {
    let element = `<li>${comment.id_book}: ${comment.coment}</li>`;
    return element;  
}

