function select(selector){
    return document.querySelector(selector)
}


//header dropdown management
var isHeaderDropDownOpened = false;  
select(".header .fa-solid").onclick = () => {


    if(!isDropDownOpened){
        select(".links").style.display = "flex";
        select(".header .fa-solid").classList.remove("fa-bars"); 
        select(".header .fa-solid").classList.add("fa-close"); 
        isDropDownOpened = true;
    }else{
        select(".links").style.display = "none";
        select(".header .fa-solid").classList.remove("fa-close"); 
        select(".header .fa-solid").classList.add("fa-bars");
        isDropDownOpened = false;
    }
}



//Navbar dropdown management 
var isDropDownOpened = false;  
select(".navbar .fa-solid").onclick = () => {


    if(!isDropDownOpened){
        select("nav").style.display = "flex";
        select(".navbar .fa-solid").classList.remove("fa-bars"); 
        select(".navbar .fa-solid").classList.add("fa-close"); 
        isDropDownOpened = true;
    }else{
        select("nav").style.display = "none";
        select(".navbar .fa-solid").classList.remove("fa-close"); 
        select(".navbar .fa-solid").classList.add("fa-bars");
        isDropDownOpened = false;
    }
}


window.onscroll = function(){
    if(window.scrollY > 80){
        document.querySelector(".float_social_media").style.display = "flex";
    }else{
        document.querySelector(".float_social_media").style.display = "none";

    }
}
