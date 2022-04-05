
let prova = document.getElementsByClassName("del_element")


for(let i = 0; i < prova.length; i++){
    prova[i].addEventListener('click', provaFunction)
}


function provaFunction(){
    if(!confirm('Sei sicuro di voler cancellare irreversibilmente questo elemento?')){
        event.preventDefault()
    }


    
}


