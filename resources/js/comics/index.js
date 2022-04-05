
let prova = document.getElementsByClassName("prova")


for(let i = 0; i < prova.length; i++){
    prova[i].addEventListener('click', provaFunction)
}


function provaFunction(){
    if(!confirm('sei bla bla bla')){
        event.preventDefault()
    }


    
}


