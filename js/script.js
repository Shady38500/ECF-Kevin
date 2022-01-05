let article = document.querySelectorAll('.section--bloc')

.forEach(article => {
    article.addEventListener('mouseover', () => {

    article.style.backgroundColor="black";
    article.style.color="white";
    article.style.transition="1s"
    });
    
    article.addEventListener('mouseout', () =>{

        article.style.backgroundColor="white";
        article.style.color="black";
    });

    
    
});














