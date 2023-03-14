$(document).ready(function(){
    load_data();
    function load_data(query) {
        $.ajax({
            url:"<?php echo base_url(); ?>ajaxsearch/fetch",
            method:"POST",
            data:{query:query},
            success:function(data){
                $('#result').html(data);
            }
        })
    }
});

// const search = () => {
//     const searchbox = document.getElementById("search-item").value.toUpperCase();
//     const courseitems = document.getElementById("course-items");
//     const course = document.querySelector(".masterclass");
//     const cname = document.getElementsByTagName("h3");

//     for(var i=0; i < cname.length; i++){
//         let match = product[i].getElementsByTagName('h3')[0];

//         if(match) {
//             let textvalue = match.textContent || match.innerHTML

//             if(textvalue.toUpperCase().indexof(searchbox) > -1){
//                 course[i].style.display = "";
//             }else {
//                 course[i].style.display = "none";
//             }
//         }
//     }
// }

// function showResult(str) {
//     if (str.length==0) {
//       document.getElementById("livesearch").innerHTML="";
//       document.getElementById("livesearch").style.border="0px";
//       return;
//     }
//     var xmlhttp=new XMLHttpRequest();
//     xmlhttp.onreadystatechange=function() {
//       if (this.readyState==4 && this.status==200) {
//         document.getElementById("livesearch").innerHTML=this.responseText;
//         document.getElementById("livesearch").style.border="1px solid #A5ACB2";
//       }
//     }
//     xmlhttp.open("GET","livesearch.php?q="+str,true);
//     xmlhttp.send();
// }