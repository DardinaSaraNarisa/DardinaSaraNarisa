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

function addCart(strName,strPrice) {
  alert("Added to cart");

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("cartList").innerHTML = this.responseText;
      //getAll();
    }
  };
xmlhttp.open("GET","../controller/addCartDone.php?q="+strName+"&q2="+strPrice,true);
xmlhttp.send();



  
}



function getCartList() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("cartList").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../controller/getCartList.php?",true);
    xmlhttp.send();
    return;
}


function deleteCart(str) {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("cartList").innerHTML = this.responseText;
      getCartList();
    }
  };
xmlhttp.open("GET","../controller/deleteDone.php?q="+str,true);
xmlhttp.send();

  
}

