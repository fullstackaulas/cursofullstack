// document.getElementById("criarFilme").addEventListener('submit', function(event){
//     event.preventDefault();

//     criarFilme();
// });



function criarFilme() {



    body = {};
    body.titulo = document.getElementById('titulo').value;
    body.genero = document.getElementById('genero').value;
    body.dataDeLancamento = document.getElementById('dataDeLancamento').value;
    body.diretor = document.getElementById('diretor').value;
    body.classificacao = document.getElementById('classificacao').value;
    body.descricao = document.getElementById('descricao').value;




    fetch("http://127.0.0.1:8000/api/filmes/inserir", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(body)
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });



}



function lerFilmes() {


    fetch("http://127.0.0.1:8000/api/filmes/lerTodos", {
        method: "GET",
        headers: {
            "Content-Type": "application/json"
        }
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });



}


lerFilmes();




