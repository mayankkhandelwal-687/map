<script type="text/javascript">
console.log(sessionStorage.getItem("token"));
if(sessionStorage.getItem("token")=="cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP")
{}
else
{ window.location='login.php';
}

</script>
<html>
<head>
<style>
a{
	margin-top: 300px;
	margin-left: 10px;
	font-size: 30px;

}
a:hover{
	color: white;
}
a:visited {
  
  color: blue;
}
body{
	height: 500px;
	
	background-color: gray;
}
#kl{
	height: 100px;
	width: 1430px;
	margin-top: -0.9%;
	background-color: white;
	
	
}
h1{
	font-size: 52px;
	margin-left: 400px;
	margin-top: 2px;
	color: royalblue;
	
}
h2{
	font-size: 30px;
	margin-left: 580px;
	margin-top: 30px;
	color: yellow;
}
div{
	height: 100px;
}
p{
	margin-top: 10px;
	font-size: 22px;
	margin-left: 50px;
}
table{
	
	  text-align: center;
	margin-left: 460px;
	
}
td{
	   width: 280px;
	  text-align: center;
	  padding: 10px;
	border: 1px solid black;
}
tr{
	
	text-align: center;
}
#dvid{
	height: 50px;
	width: 300px;
	border: 1px solid black;
	margin-left: 465px;
	text-align: center;
	font-size: 22px;
	background-color: white;
}
#lstsn{
	height: 50px;
	width: 300px;
	border: 1px solid black;
	text-align: center;
	font-size: 22px;
	background-color: white;
	
}
h3{
	margin-top: -0.5px;
	color: royalblue;
}
#ab{
	display: flex;
	flex-direction: row;]
	
}
input{
	background-color: green;
	color: white;
}
</style>
</head>
<body>
<div id="kl"> <h1>Sehaj Synergy Technologies Pvt. Ltd.</h1>

</div>
<div ><h2>Down Gateway Device Address</h2></div>
<div id="ab">
<div id="dvid">
<h3>Device ID</h3>
</div>
<div id="lstsn">
<h3>LastSeen</h3></div>
</div>
<script>
    var myArray = sessionStorage.getItem('myArray');
	var myArray1 = sessionStorage.getItem('myArray1');
    console.log(myArray);
	
	    var abc=myArray.split(',');
		var abc1=myArray1.split(',');
		console.log(abc);
		for(i=0; i<abc.length; i++)
		{
			var loc = "next.php?q=" + abc[i];
		document.write('<table><tr><td><a  href='+loc+' onclick="abc()">'+abc[i]+'</a>'+'</td>');
		document.write('<td><p>'+abc1[i]+'</p>'+'</td></tr></table>');
		
		}
function back(){
	sessionStorage.setItem("token", "cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP");
	
      window.location='index.php';
}		
</script>

</body>	

</html>




