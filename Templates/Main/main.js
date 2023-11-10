document.addEventListener("DOMContentLoaded", function () {
    var sidebar = document.querySelector(".sideBar");
    var content = document.querySelector(".content");
    console.log(sidebar)
    console.log(content)
    
    window.addEventListener("scroll", function () {
        var scrollPosition = window.scrollY;
        var sidebarPosition = content.offsetTop; // Obtém a posição superior do conteúdo
        
        if (scrollPosition >= sidebarPosition) {
            sidebar.style.position = "fixed";
            sidebar.style.top = "0";
        } else {
            sidebar.style.position = "relative";
        }
    });
});
