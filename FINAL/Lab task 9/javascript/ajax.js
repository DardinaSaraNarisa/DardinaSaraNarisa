function getAll() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("foodList").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../controller/getAllFood.php?",true);
    xmlhttp.send();
    return;
}





function showResult(str) {

    if (str.length==0) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("foodList").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","../controller/getAllFood.php?",true);
      xmlhttp.send();
      return;
    } else {

    document.getElementById("foodList").innerHTML=""; 
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("foodList").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../controller/getFood.php?q="+str,true);
    xmlhttp.send();
  }
}




