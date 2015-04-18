var createXMLHttp = function() {

  if(window.XMLHttpRequest) {
    xHttp = new XMLHttpRequest();
  }else{
    xHttp = new ActiveXObject("Microsoft/XMLHttp");
  }
  return xHttp;
}

var $ = function(x) {
  return document.getElementById(x);
}

var callProducts = function() {
  var url = "filterProducts.php";
  var xmlHttp = createXMLHttp();
  xmlHttp.open("GET",url);
  xmlHttp.send();
  var results = "";
  xmlHttp.onreadystatechange = function() {
    if(xmlHttp.readyState == 4) {
      var rows = JSON.parse(xmlHttp.responseText); 
      var products = document.createElement("div");
      products.setAttribute("id","products");
      for(i=0; i<rows.length; i++) {
        var temp = createDiv(rows[i]["pId"],rows[i]["name"],rows[i]["description"],rows[i]["price"],rows[i]["picture"]);
        products.appendChild(temp);
      }
      $("productList").appendChild(products);
    }

  }
}

var createDiv = function(pId,name,description,price,picture) {
  var div = document.createElement("div");
  div.setAttribute("id","product"+pId);
  div.setAttribute("class","product");

  var image = document.createElement("label");
  image.setAttribute("for",name);
  image.innerHTML = "<img src='images/"+picture+"' height='50' width='40'>";
  div.appendChild(image);

  var text = document.createElement("p");
  text.setAttribute("id","pname");
  text.innerHTML = name;
  div.appendChild(text);

  text = document.createElement("p");
  text.innerHTML = description;
  div.appendChild(text);

  text = document.createElement("p");
  text.innerHTML = "$"+price;
  div.appendChild(text);

  var buy = document.createElement("div");
  buy.setAttribute("class","buy");
  buy.innerHTML = "Buy This";
  div.appendChild(buy);

  return div;
}

var callUser = function() {
  var user = $("user").value;
  var url = "nameCheck.php?user="+user;
  var xmlHttp = createXMLHttp();
  xmlHttp.open("GET",url);
  xmlHttp.send();
  var results="";

  xmlHttp.onreadystatechange = function() {
    console.log(xmlHttp.responseText);
    if(xmlHttp.responseText>0) {
      $("exist").innerHTML = "Username already taken.  Please choose another.";
    }else{
      $("exist").innerHTML = "";
    }
  }
}

var checkPassword = function() {
  var pw1 = $("password1").value;
  var pw2 = $("password2").value;

  if(pw1 != pw2) {
    $("passwordStatus2").innerHTML = "Passwords do not match.";
  }else{
    $("passwordStatus1").innerHTML = "*";
    $("passwordStatus2").innerHTML = "*";
  }
}

var validateHandle = function() {
  var submitForm = true;
  var pw1 = $("password1").value;
  var pw2 = $("password2").value;

  if(pw1 != pw2) {
    $("passwordStatus2").innerHTML = "Passwords do not match.";
    submitForm = false;
  }

  if($("user").value.length < 3) {
    $("exist").innerHTML = "Username is too short.  Please use a longer name.";
    submitForm = false;
  }

  if(submitForm) {
    $("productForm").submit();
  }
}