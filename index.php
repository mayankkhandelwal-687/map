
<!DOCTYPE html>
<html>
<head><title>Forest-man-tracker</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="image-div">
<img src="logo.png" alt="SSTPL-IMAGE" height="100" width="100">
</div>

<div class="main-div">
<form action="index.php" method="post">
<input type="text" id="input1" placeholder="Enter User Name" name="first"></br>
<input type="password" id="input2" placeholder="Enter Password" name="second" ></br>
<input type="submit" id="input3" onclick="check(this.form)" name="submitbutton" value="Login"/>

</form>
</div>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
  if(form.first.value == "sstpl" && form.second.value == "sstpl@123")
  {
	  if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
    
  }
  else if(form.first.value == "test" && form.second.value == "test@123")
  {
	   if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  } 
  else if(form.first.value == "evio_pvt_ltd" && form.second.value == "evio_pvt_ltd@123")
  {
      if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  } 
  else if(form.first.value == "jochbedtech" && form.second.value == "jochbedtech@123")
  {
   if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  } 
  else if(form.first.value == "ripple" && form.second.value == "ripple@123")
  {
       if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  } 
  else if(form.first.value == "amnex" && form.second.value == "amnex@123")
  {
     if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  } 
  else if(form.first.value == "belanto" && form.second.value == "belanto@123")
  {
        if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  } 
  else if(form.first.value == "dashmesh" && form.second.value == "dashmesh@123")
  {
            if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  }
  else if(form.first.value == "idealprepaid" && form.second.value == "idealprepaid@123")
  {
   if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  }
  else if(form.first.value == "peltek" && form.second.value == "peltek@123")
  {
   if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  } 
   else if(form.first.value == "silikon" && form.second.value == "silikon@123")
  {
    if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
  window.location='index.php';
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
  }    
   else
   {
   alert("Error Password or Username")/*displays error message*/
    }
}
</script>



</body>
</html>