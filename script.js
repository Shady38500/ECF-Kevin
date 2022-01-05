let bloc = document.querySelectorAll('.section--bloc')

.forEach(bloc => {
    bloc.addEventListener('mouseover', () => {

        bloc.style.backgroundColor="black";
        bloc.style.color="white";
    });
    
    bloc.addEventListener('mouseout', () =>{

        bloc.style.backgroundColor="white";
        bloc.style.color="black";
    });
});

let ancre = document.querySelectorAll('a')

.forEach(ancre => {
    ancre.addEventListener('click', () => {
        
        window.scroll(1000,2000)
    });
});


