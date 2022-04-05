
let del_element = document.getElementsByClassName("del_element")


for(let i = 0; i < del_element.length; i++){
    del_element[i].addEventListener('click', provaFunction)
}


function provaFunction(){
    if(!confirm('Sei sicuro di voler cancellare irreversibilmente questo elemento?')){
        event.preventDefault()
    }


    
}


