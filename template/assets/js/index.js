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
    var siderbar= document.querySelector('.siderbar');
    var list_nav_size = list_nav.offsetTop;
    var siderbar_size = siderbar.offsetTop;
console.log(siderbar_size);
    window.onscroll = function(){
        if(list_nav_size <= window.pageYOffset){
            list_nav.style.position = "fixed";
            list_nav.style.zIndex = "9999";
            list_nav.style.top = "0px";
            

        }else{
            list_nav.style.position = "";
            list_nav.style.zIndex = "";
            list_nav.style.top = "";
            
            
        }
        // if(siderbar_size <= window.pageYOffset){
        //     siderbar.style.position= "fixed"
        //     siderbar.style.top= "0px"

        // }else{
        //     siderbar.style.position= "";
        //     siderbar.style.top= "";
            
        // }
    }

}, false)

