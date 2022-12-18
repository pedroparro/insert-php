let side_menu_icon = document.querySelector(".side_menu_icon");
let logo = document.querySelector(".logo");
let caption = document.querySelector(".caption");
let header = document.querySelector("header");
let link_text = document.querySelectorAll(".link_text");
let top_angle = document.querySelector(".top_angle");
let bottom_angle = document.querySelector(".bottom_angle");
let menu_status = 0;

side_menu_icon.addEventListener("click", ()=>{
    if (menu_status === 0) {
        header.style.width="75px";
        logo.style.width="60px";
        caption.style.fontSize="65%";
        top_angle.classList.add("top_angle_collapse");
        bottom_angle.classList.add("bottom_angle_collapse");

        link_text.forEach(link_text => {
            link_text.style.display="none"
        });
        menu_status = 1;
    }else{
        header.style.width="180px";
        logo.style.width="120px";
        caption.style.fontSize="28px";
        top_angle.classList.remove("top_angle_collapse");
        bottom_angle.classList.remove("bottom_angle_collapse");

        link_text.forEach(link_text => {
            link_text.style.display="inline-block"
        });
        menu_status = 0;
    }
});
