<link rel="stylesheet" href="../../includes/Header/header.css">
<header class="container-fluid shadow-sm p-3  bg-body-tertiary bg-primary text-white">
    <div class="d-flex justify-content-between ">
        <div>
            Nome empresa
        </div>
        <div class="d-flex gap-4 ">
            <img src="../../Assets/icons/person-circle.svg" alt="" class="linksHeader" id="profile" width="30px">
        </div>
    </div>
</header>
<!-- <button id="btnFullscreen" class="" style="
    float:right;
    position: relative;
    border: none; 
    border-radius: 5px; 
    background-color: #eeeeee26;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    margin: 5px ;
    overflow-y: 10;
">
    <img src="../../Assets/icons/fullscreen.svg" alt="">
</button> -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
    var fullscreenButton = document.getElementById("btnFullscreen");
    var content = document.getElementById("body");
    

    fullscreenButton.addEventListener("click", function () {
        if (content.requestFullscreen) {
            content.requestFullscreen();
        } else if (content.mozRequestFullScreen) {
            content.mozRequestFullScreen();
        } else if (content.webkitRequestFullscreen) {
            content.webkitRequestFullscreen();
        } else if (content.msRequestFullscreen) {
            content.msRequestFullscreen();
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var sidebar = document.querySelector("#btnFullscreen");
    var content = document.querySelector(".content");
    console.log(sidebar)
    console.log(content)
    
    window.addEventListener("scroll", function () {
        var scrollPosition = window.scrollY;
        var sidebarPosition = content.offsetTop; // Obtém a posição superior do conteúdo
        
        if (scrollPosition >= sidebarPosition) {
            sidebar.style.position = "fixed";
            sidebar.style.top = "0";
            sidebar.style.right= '0';
        } else {
            sidebar.style.position = "relative";
        }
    });
});
</script>