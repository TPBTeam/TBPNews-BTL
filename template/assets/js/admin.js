document.addEventListener("DOMContentLoaded",function(){
	sidebarCollapse = document.getElementById("sidebarCollapse");
	sidebar = document.getElementById("sidebar");
	inhopdong = document.querySelector('.inhopdong');
	addcontract = document.querySelector('.addcontract');
	head = document.querySelector('head').innerHTML;
    // Phần siderbar
    sidebarCollapse.onclick = function(){
    	sidebar.classList.toggle("active");
    }
    //Phần in ấn
    console.log(screen.height);
    console.log(screen.width);
    if(typeof addcontract !== 'undefined'){
    	addcontract = addcontract.innerHTML;
    	inhopdong.onclick = function(){
    		var printWindow = window.open('','','fullscreen=yes,top=0,left=0,width='+screen.width+',height='+screen.height+'');
    		printWindow.document.write("<head>"+head+"<style>input{border:none !important;}</style>"+"</head>"+"<body>"+"<div class=\"addcontract\">"+addcontract+"</div>"+"</body>");
    		printWindow.print();
    		printWindow.document.close();
    	}
    }

},false)