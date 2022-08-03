let menuToggle = document.querySelector(".menu__toggle");
let iconButton = document.querySelector(".button__action");
let nav = document.querySelector(".nav-container");
let cont=0;
menuToggle.addEventListener("click",()=>{
    if(nav.classList.contains("show")){
        iconButton.classList.remove("bi-x");
        iconButton.classList.add("bi-list")
        nav.classList.remove("show");
    }else{
        iconButton.classList.add("bi-x");
        iconButton.classList.remove("bi-list")
        nav.classList.add("show");
    }
    
})
