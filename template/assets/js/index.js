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
}, false)
