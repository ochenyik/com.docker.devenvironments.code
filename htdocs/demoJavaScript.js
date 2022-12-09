function retrieve() {

  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
      document.getElementById("dataReturn").innerHTML=this.responseText;
    
  }
  xmlhttp.open("GET","retrieveData.php",true);
  xmlhttp.send();

}
