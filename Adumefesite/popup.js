//popup js
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        8000 
    )
});
document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
document.querySelector("#subs").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "block";
});
document.querySelector("#close2").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
//popup js end

//about-popup js
document.querySelector("#closed").addEventListener("click", function(){
    document.querySelector(".about-popup").style.display = "none";
});
document.querySelector("#about").addEventListener("click", function(){
    document.querySelector(".about-popup").style.display = "block";
});
document.querySelector("#about").addEventListener("click", function(){
    document.querySelector(".about-popup").style.display = "block";
});
//about-popup js end