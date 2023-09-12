console.log("working");
let modal = document.getElementById("modal");
let login = document.getElementById("login");
login.addEventListener("click",function(){
    modal.style.display = "block";
})
window.onclick = function(ev){
    if(ev.target == modal){
        modal.style.display = "none";
    }else{
        console.log(ev.target);
    }
}