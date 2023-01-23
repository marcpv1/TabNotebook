function startup() {

 var num_tab=location.search.split('tab=')[1];

 if (num_tab==null)
    document.getElementById("bt1").className = "tablinks active" ;

 document.getElementById("bt" + num_tab).className = "tablinks active" ;

}

function open_tab(ntab) {

 window.location.href = "./tabnotebook.php?tab=" + ntab;
 document.getElementById("num_tab").value=ntab;
 document.getElementById("bt" + ntab).addClass("active");

}
