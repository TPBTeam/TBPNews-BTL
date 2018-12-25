document.addEventListener("DOMContentLoaded", function() {
    conmat = document.querySelector('.conmat');
    conmatnham = document.querySelector('.conmatnham');
    nhapmatkhau = document.querySelector('.nhapmatkhau');

    conmat.onclick = function() {
        nhapmatkhau.setAttribute("type", "password");
        conmatnham.style.display = "block";
        conmat.style.display = "nome";
    }
    conmatnham.onclick = function() {
        nhapmatkhau.setAttribute("type", "text");
        conmatnham.style.display = "none";
        conmat.style.display = "block";
    }
    nhapmatkhau.onkeyup = function() {
        if (nhapmatkhau.value == "") {
            conmat.style.display = "none";
            conmatnham.style.display = "none";
        } else {
            conmat.style.display = "block";
        }
    }

    var list_nav = document.querySelector('.list-nav');
    var list_nav_size = list_nav.offsetTop;
    window.onscroll = function(){
        console.log(window.pageYOffset);
        if(list_nav_size <= window.pageYOffset){
            list_nav.style.position = "fixed";
            list_nav.style.zIndex = "9999";
            list_nav.style.top = "0px";
            

        }else{
            list_nav.style.position = "";
            list_nav.style.zIndex = "";
            list_nav.style.top = "";
            
        }
    }

}, false)

