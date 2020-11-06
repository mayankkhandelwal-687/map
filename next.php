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

 <link rel="stylesheet" href="next.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="bdy">
<?php

$conn = mysqli_connect('testing.siotel.in','test_user','Alyr!020','new_snms');

if(!$conn){
echo "database error";
} else{

//echo "connected";
}

?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

var favoritemovie = sessionStorage.getItem("favoriteMovie");
console.log(favoritemovie);
</script>
<div id="top">

<h1>Sehaj Synergy Technologies Pvt. Ltd.</h1>
<img id="img1" src="logo.png" alt="SSTPL-IMG">
</div>
<form action="logs123.php" method="GET" >
<input type="hidden" name="fun"  id="text12" value="<?php echo $_GET['q']?>">
<input type="submit" id="logout2" onclick="fun2()" name="functio2" value="All Logs"/>
</form>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
							
						
						
						
						<?php
							
							$gid= mysqli_escape_string($conn,$_GET['q']);						
							if ($gid=='' && strlen($gid)!=16) {
								die("Invalid Argument i.e. Gateway ID passed");
							}
							$qwery="select * from gateway_mgmt where gateway_id='$gid' order by time_stamp desc LIMIT 1;";
							
							$data= mysqli_query($conn,$qwery);
							$i=1;
							while ($fetch=mysqli_fetch_assoc($data)) {
							$time_stamp=json_decode($fetch['time_stamp']);
							$all_ip=json_decode($fetch['all_ip']);
							$all_ip_stat=json_decode($fetch['all_ip_stat']);
							$gateway_id=$fetch['gateway_id'];
							$gateway_ip=json_decode($fetch['gateway_ip']);
							$health=json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $fetch['health']), true );
							$concentrator=json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $fetch['concentrator']), true );
							$requested_time=$fetch['requested_time'];
						
						?>
						
						
						
						
						
						
							<?php
									$i++;	}
							?>
						
						  
						  
						  
							   <div id="abc1">
								<h2 id= "k1" >Gateway ID :   <?php echo $gateway_id; ?></h2>
							   </div>
							   <div id="abc2">
							   <i class="material-icons" style="font-size:36px">access_alarms</i>
							   <h2 id= "k2" >Time  :    <?php echo $time_stamp; ?></h2>
								</div>
								<div id="abc3">
								 <i class="material-icons" style="font-size:36px">access_alarms</i>
							    <h2 id="k3">up_time:   <?php echo $health['up_time']; ?></h2>
								</div>
								<div id="abc4">
								<?php 
								
								
								if( $all_ip_stat->main=="ppp0")
								{
								    echo "<i id='kj' class='fa fa-wifi' style='font-size:24px'></i>";
								}
								else if( $all_ip_stat->main=="wlan0")
								{
									echo "<i id='kj' class='fa fa-wifi' style='font-size:24px'></i>";
								}
			                    
								else{
								    echo "<i id='kj' class='fas fa-network-wired' style='font-size:24px'></i>";
								}
								?>
								
								<h2 id="k4">main:  <?php echo $all_ip_stat->main; ?></h2>
								</div>
								<div id="abc5">
								<i id="tmp" class='fas fa-temperature-high' style='font-size:24px'></i>
								<h2 id="k5">temperature:   <?php echo $health['temperature']; ?></h2>
								</div>
								
								
								
								<div id="abc6">
								<?php 
								
								
								if( $all_ip_stat->eth0=="up")
								{
								    echo "<i id='kj' class='fa fa-arrow-up' style='font-size:24px'></i>";
								}
			                    
								else{
								    echo "<i id='kj1' class='fa fa-arrow-down' style='font-size:24px'></i>";
								}
								?>
								<h2 id="k6">Ip Stat eth0:    <?php echo $all_ip_stat->eth0; ?></h2>
								</div>
								<div id="abc7">
								
								<?php 
								
								
								if( $concentrator['pkt_fwd']=="1")
								{
								    echo "<i id='kj' class='fa fa-arrow-up' style='font-size:24px'></i>";
								}
			                    
								else{
								    echo "<i id='kj1' class='fa fa-arrow-down' style='font-size:24px'></i>";
								}
								?>
								<h2 id="k7"> pkt_fwd:   <?php echo $concentrator['pkt_fwd']; ?></h2>
								</div>
								
								
								<div id="abc8">
								<?php 
								
								
								if( $all_ip_stat->wlan0=="up")
								{
								    echo "<i id='kj' class='fa fa-arrow-up' style='font-size:24px'></i>";
								}
			                    
								else{
								    echo "<i id='kj1' class='fa fa-arrow-down' style='font-size:24px'></i>";
								}
								?>
								<h2 id="k8">Ip Stat wlan0:    <?php echo $all_ip_stat->wlan0; ?></h2>
								</div>
								<div id="abc9">
								
								
								
							
								
								  <i id='kj' class='fas fa-network-wired' style='font-size:24px'></i>
								
								
								
                                <h2 id="k9"> tun0:   <?php echo $all_ip->tun0; ?></h2>
								</div>
								
								<div id="abc10">
								<?php 
								
								
								if( $all_ip_stat->ppp0=="up")
								{
								    echo "<i id='kj' class='fa fa-arrow-up' style='font-size:24px'></i>";
								}
			                    
								else{
								    echo "<i id='kj1' class='fa fa-arrow-down' style='font-size:24px'></i>";
								}
								?>
								<h2 id="k10">Ip Stat ppp0:    <?php echo $all_ip_stat->ppp0; ?></h2>
								</div>
								<div id="abc11">
									  <i id='kj' class='fas fa-network-wired' style='font-size:24px'></i>
								<h2 id="kl11">public_IP: <?php echo $all_ip->public_IP; ?></h2>
								</div>
								
								
							</tr>
						 </tbody>
						 
					</table>

</body>	
</html>			