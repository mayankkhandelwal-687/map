<script type="text/javascript">
console.log(sessionStorage.getItem("token"));
if(sessionStorage.getItem("token")=="cM=xK2v=yB7?35Z3V2+Be$-?=$P@!3nEkT9_whgmp=rw5tKU7$Wp42Gjna%gMAxKrUXkmMHzzn_N7&g-WF@wxG$*xGAZY=jr&*=&c9?qf?W%Y23#=3JGWxF8g^%jMZSP")
{}
else
{ window.location='login.php';
}
$('#store').on('click', function(){
    sessionStorage.setItem('myArray', gwon);
});

</script>

<!DOCTYPE html>

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<?php
  $url = 'https://las.siotel.in:8080/api/internal/login';
                      $jsonString = json_encode(array( "password" => "Alyr!020","username" => "admin"  ));
                      $ch = curl_init();
                      $Timeout = 0; // Set 0 for no Timeout.
                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                      curl_setopt($ch, CURLOPT_URL, $url);
                      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                      'Content-Type: application/json',
                      'Accept: application/json',)
                      );
                      //curl_setopt($ch, CURLOPT_CONNECTTimeOUT, $Timeout);
                      $jwtk = curl_exec($ch);
                      $ch_error = curl_error($ch);
                      if ($ch_error) { 
                          echo "cURL Error: $ch_error"; 
                      } else {
						  //echo $jwtk;
                      }
                      $token = json_decode($jwtk);
                      curl_close($ch);

?>


<body>
<div id="heading-div">

<h1 > Sehaj Synergy Technologies Pvt. Ltd.</h1>
<h4 > Gateway Management Tool </h4>
<img src="logo.png" alt="SSTPL-IMG">
<form action="next.php" method="get">
<input type="text" name="q" id="logout3" value="506f980000000000" placeholder="Enter Mac Address">
<input type="submit" name="logout1" Value="Search" id="logout2">
</form>
<form action="login.php" method="post">
<input type="submit" name="logout" Value="Logout" id="logout1">
</form>
  <?php 
     if(isset($_POST['logout']))
	 {
		 header("Location: login.php");
	 }
?>		 
</div>


<?php
 
    $servername = "172.0.40.12";
	$username ="api";
	$password ="Alyr!020";
	$databasename ="siotel_panel";
	
	$gwon=array();
	$gwoff=array();
	$onlatarr=array();
	$onlongarr=array();
	$offlatarr=array();
	$offlongarr=array();
	$onlastseen=array();
	$offlastseen=array();
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
	 if(isset($_POST['submitbutton']))
  {
	 $uname=$_POST['first'];
	 $pname=$_POST['second'];
     $sql="select * from gateway_register where client_name='$uname'";
	 $result = mysqli_query($connection,$sql);
	
	 $rowcount = mysqli_num_rows($result);
	
	 $totalgateway=0;
	 $upgateway=0;
	 while($row= $result->fetch_assoc()):
	 $totalgateway++;
	 $clientname=$row['client_name'];
	 $gatewayid1=$row['gateway_id'];

	 $url = 'https://las.siotel.in:8080/api/gateways/'.$gatewayid1.'';
       $jsonString = json_encode(array($gatewayid1));
       $gateway_mac=$gatewayid1;
        $ch = curl_init();  
 
                      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                      curl_setopt($ch, CURLOPT_URL, $url);
                      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                       curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Accept: application/json',
				"Grpc-Metadata-Authorization:$token->jwt",)
				);
$output=curl_exec($ch);
//var_dump($output);
//print_r($output);
//echo $output;
 $opt=json_decode($output);

    curl_close($ch);
$inputDate = gmdate("Y-m-d H:i:s");
$lat=$opt->gateway->location->latitude;
$long=$opt->gateway->location->longitude;
$alt=$opt->gateway->location->altitude;
$lst='';

//echo "LAST SEEN: ". $gatewayid1.$opt->lastSeenAt."<br>";
if($opt->lastSeenAt){$date = new DateTime( $opt->lastSeenAt);
$vari=json_encode($date);
//echo $vari;
$lst=substr($vari,9,19);
}else{$lst='never';}


//echo "LAST SEEN: ". $gatewayid1."$lst<br>";
$nowtime=strtotime($inputDate);
$lastseen=strtotime($lst);
$timediff=abs($nowtime-$lastseen);
if($timediff > 60 ){
$time = date("Y-m-d H:i:s",$lastseen);
$gwoff[]=$gateway_mac;
$offlatarr[]=$lat;
$offlongarr[]=$long;
$offlastseen[]=$lst;
}
else{
	$upgateway++;
$time = date("Y-m-d H:i:s",$lastseen);
$gwon[]=$gateway_mac;
$onlatarr[]=$lat;
$onlongarr[]=$long;
$onlastseen[]=$lst;
}
  endwhile ;
	

	
  }
?>
<div class ="heading">
<table id="example" class="table table-striped table-bordered" style="width:100%">
<tr>
<th>Customer Name</th>
<th>Number Of Count</th>
<th>Gateway Up</th>
<th>Gateway Down</th>
</tr>
<script>

<?php
$onlatarr = json_encode($onlatarr);
echo "var onlatarr = ". $onlatarr . ";\n";
$onlongarr = json_encode($onlongarr);
echo "var onlongarr = ". $onlongarr . ";\n";
$offlatarr = json_encode($offlatarr);
echo "var offlatarr = ". $offlatarr . ";\n";
$offlongarr = json_encode($offlongarr);
echo "var offlongarr = ". $offlongarr . ";\n";
$yash=$gwon;
$gwon = json_encode($gwon);
echo "var gwon = ". $gwon . ";\n";
$gwoff = json_encode($gwoff);
echo "var gwoff = ". $gwoff . ";\n";
$onlastseen = json_encode($onlastseen);
echo "var onlastseen = ". $onlastseen . ";\n";
$offlastseen = json_encode($offlastseen);
echo "var offlastseen = ". $offlastseen . ";\n";
?>
console.log(gwoff);
console.log(offlastseen);
console.log(gwon);
console.log(onlastseen);
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(26,75),
  zoom:5,
};



var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var i = '';
for(i=0;i < gwon.length; i++)
{  
  
  var id = "id: ";
  var abc = gwon[i];
  var lastseen = "\nlastseen: ";
  var title1= id.concat(gwon[i]);
  var title2= lastseen.concat(onlastseen[i]);
  var current= "\ncurentTime: ";
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
var title3 = current.concat(dateTime);
var title4 = title1.concat(title2);
var title5 = title4.concat(title3);
var mix = 'sstpl' + i;
mix  = {lat: onlatarr[i],lng: onlongarr[i]};
 	var marker = new google.maps.Marker({
			position: mix,
			map: map,
			title: title5		
			});
			marker.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
			marker.linkUrl = 'next.php?q='+abc;
            marker.addListener('click', function () {             
            sessionStorage.setItem("favoriteMovie", abc);
            window.location = this.linkUrl;
    });
}



 for(i=0;i < gwoff.length; i++)
{
  var id = "id: ";
  var abc = gwoff[i];
  var lastseen = "\nlastseen: ";
  var title1= id.concat(gwoff[i]);
  var title2= lastseen.concat(offlastseen[i]);
  var current= "\ncurentTime: ";
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
var title3 = current.concat(dateTime);
var title4 = title1.concat(title2);
var title5 = title4.concat(title3);
	  var mix = 'sstpl' + i;

mix  = {lat: offlatarr[i],lng: offlongarr[i]};
  
	        var marker = new google.maps.Marker({
			position: mix,
			map: map,
			title: title5,
			content: gwoff[i]
			});
			marker.setIcon('http://maps.google.com/mapfiles/ms/icons/red-dot.png');
			marker.linkUrl = 'next.php?q='+abc;
          marker.addListener('click', function () {             
            sessionStorage.setItem("favoriteMovie", abc);
             window.location = this.linkUrl;
    });
  
}


}			

</script>
    <tr>
	<td><a href="#" ><?php echo "$clientname" ;?></a></td>
	<td><a href="#" title='<?php echo "$gwon $gwoff" ?>' ><?php echo "$totalgateway";?></a></td>
	<td><a href="upgateway.php" title='<?php echo "$gwon" ?>' onclick='newwin()'><?php echo "$upgateway"; ?></a></td>
	<td><a href="downgateway.php" title='<?php echo "$gwoff" ?>' onclick='newwin1()' ><?php echo $totalgateway-$upgateway; ?></a></td>
	</tr>
</table>
</div>
<script>


function newwin(){
	
	
	
    sessionStorage.setItem('myArray', gwon);
	sessionStorage.setItem('myArray1', onlastseen);
}
function newwin1(){
	
	
	
    sessionStorage.setItem('myArray', gwoff);
	sessionStorage.setItem('myArray1', onlastseen);
}

</script>

<div id="googleMap" style="width:100%;height:400px;"></div>
<script>
for (var i=0; i<gwon.length; i++){
    gwon[i].addEventListener("mouseover",function(){
            /gets each id of the img
       console.log(gwon[i]); //gets your right sound, based off id
    });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZe6zfgKt1_ECwEnLXDcLGIEPeJ1uWKlI&callback=myMap"></script>

</body>
</html>