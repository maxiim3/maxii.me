//select menu btn
const menuBtn = document.getElementById("btn-menu")
//Set txt btn onload
document.onload = () => menuBtn.innerText = "MENU";
//initial menu value is hidden => not dropped
let isDropped = false

//listen to btn click
menuBtn.addEventListener("click", () =>{
    const navDrop = document.querySelector("nav.navDrop")
    // change visibility and text
    const dropMenu = () => {
        navDrop.style.visibility = 'visible';
        navDrop.style.opacity = 1;
        navDrop.style.transform = "translate(0)";
        menuBtn.innerText = "FERMER";
    }
    // change visibility and text
    const hideMenu = () => {
        navDrop.style.visibility = 'hidden';
        navDrop.style.opacity = 0;
        navDrop.style.transform = "translateY(-100vh)"
        menuBtn.innerText = "MENU";
    }

    if (!isDropped){
        dropMenu()
        //change menu status
        isDropped = !isDropped;
    }
    else {
        hideMenu()
        //change menu status
        isDropped = !isDropped;
    }
})


// Select Message action status from contact form
const msgForm = document.getElementById("msgForm")
if (msgForm.innerText === ""){
    msgForm.style.display = 'none';
    msgForm.style.animation = 'none';

}
