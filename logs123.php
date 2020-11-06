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

 <link rel="stylesheet" href="logs123.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
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
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
							<tr>
								<th>S.no.</th>
								<th>Gateway ID</th>
								<th>Time</th>
								<th>core_clock</th>
								<th>io_voltage</th>
								<th>core_voltage</th>
								<th>cpu_freq</th>
								<th>temperature</th>
								<th>cpu_percent</th>
								<th>physical_voltage</th>
								<th>controller_voltage</th>
								<th>up_time</th>
								<th>ram_status</th>
								<th>tx-pwr</th>
								<th>pkt_fwd</th>
								<th>All Ip lo</th>
								<th>eth0</th>
								<th>wlan0</th>
								<th>public_IP</th>
								<th>ppp0</th>
								<th>tun0</th>
								<th>Ip Stat lo</th>
								<th>Ip Stat eth0</th>
								<th>main</th>
								<th>Ip Stat ppp0</th>
								<th>Ip Stat wlan0</th>
								<th>Gateway lo</th>
								<th>Gateway eth0</th>
								<th>Gateway wlan0</th>
							</tr>
						</thead>
						
						
						<?php
						
							$gid= mysqli_escape_string($conn,$_GET['fun']);						
							if ($gid=='' && strlen($gid)!=16) {
								die("Invalid Argument i.e. Gateway ID passed");
							}
							$qwery="select * from gateway_mgmt where gateway_id='$gid' order by id desc limit 1000";
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
						
						
						
						
						
						<tbody>
						
				              <tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $gateway_id; ?></td>
								<td><?php echo $time_stamp; ?></td>
								<td><?php echo $health['core_clock'] ?></td>
								<td><?php echo $health['io_voltage']; ?></td>
								<td><?php echo $health['core_voltage']; ?></td>
								<td><?php echo $health['cpu_freq']; ?></td>
								<td><?php echo $health['temperature']; ?></td>
								<td><?php echo $health['cpu_percent']; ?></td>
								<td><?php echo $health['physical_voltage']; ?></td>
								<td><?php echo $health['controller_voltage']; ?></td>
								<td><?php echo $health['up_time']; ?></td>
								<td><?php echo  $health['ram_status']; ?></td>
								<td><?php echo $concentrator['tx-pwr']; ?></td>
								<td><?php echo $concentrator['pkt_fwd']; ?></td>
                                <td><?php echo $all_ip->lo; ?></td>
								<td><?php echo $all_ip->eth0; ?></td>
								<td><?php echo $all_ip->wlan0; ?></td>
								<td><?php echo $all_ip->public_IP; ?></td>
								<td><?php echo $all_ip->ppp0; ?></td>
								<td><?php echo $all_ip->tun0; ?></td>				
								<td><?php echo $all_ip_stat->lo; ?></td>
								<td><?php echo $all_ip_stat->eth0; ?></td>
								<td><?php echo $all_ip_stat->main; ?></td>
								<td><?php echo $all_ip_stat->ppp0; ?></td>
								<td><?php echo $all_ip_stat->wlan0; ?></td>
								<td><?php echo $gateway_ip->lo; ?></td>
								<td><?php echo $gateway_ip->eth0; ?></td>
								<td><?php echo $gateway_ip->wlan0; ?></td>
							</tr>
							<?php
									$i++;	}
							?>
						</tbody>
						 <tfoot>
						  <tr>
								<th>S.no.</th>
								<th>Gateway ID</th>
								<th>Time</th>
								<th>core_clock</th>
								<th>io_voltage</th>
								<th>core_voltage</th>
								<th>cpu_freq</th>
								<th>temperature</th>
								<th>cpu_percent</th>
								<th>physical_voltage</th>
								<th>controller_voltage</th>
								<th>up_time</th>
								<th>ram_status</th>
								<th>tx-pwr</th>
								<th>pkt_fwd</th>
								<th>All Ip lo</th>
								<th>eth0</th>
								<th>wlan0</th>
								<th>public_IP</th>
								<th>ppp0</th>
								<th>tun0</th>
								<th>Ip Stat lo</th>
								<th>Ip Stat eth0</th>
								<th>main</th>
								<th>Ip Stat ppp0</th>
								<th>Ip Stat wlan0</th>
								<th>Gateway lo</th>
								<th>Gateway eth0</th>
								<th>Gateway wlan0</th>
							</tr>
						  </tfoot>
					</table>

</body>	
</html>			