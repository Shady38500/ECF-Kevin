let bloc = document.querySelectorAll('.section--bloc')

.forEach(bloc => {
    bloc.addEventListener('mouseover', () => {

        bloc.style.backgroundColor="black";
        bloc.style.color="white";
        bloc.style.transition="1s"
    });
    
    bloc.addEventListener('mouseout', () =>{

        bloc.style.backgroundColor="white";
        bloc.style.color="black";
    });

    
    
});














