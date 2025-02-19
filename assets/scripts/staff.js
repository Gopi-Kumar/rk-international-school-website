function show_teacher(ele){
    let hideItems = document.querySelectorAll(".about > section")
    hideItems.forEach(element => {
        element.style.display = "none"
    });

    document.querySelectorAll(".sidebar button").forEach(btn => {
        btn.style.backgroundColor = "#45070e"
        btn.style.color = "white"
    })


    ele.style.backgroundColor = "transparent";
    ele.style.color = "#45070e"
    let displayItem = ele.classList[0]
    document.querySelector(`.about .${displayItem}`).style.display = "flex"


    document.querySelector(".about").scroll(0,-300);


}