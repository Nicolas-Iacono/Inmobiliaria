document.addEventListener('DOMContentLoaded', function(){


    eventListener();
});

function eventListener(){

const mobileMenu = document.querySelector('.hamburguesa');

mobileMenu.addEventListener('click', navegacionResponsive);

}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');

    }else{
        navegacion.classList.add('mostrar');
    }

    
}
