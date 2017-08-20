<?php
error_reporting ( E_ALL );
ini_set ( 'display_errors', 1 );

//timeout limit
set_time_limit(0);

//Creating Socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
   // echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "<br />";
} else {
   // echo "OK.<br />";
}

//echo "Attempting to connect to the socket'...";
$result = socket_connect($socket, '192.168.43.50', 10001);
flush();
if ($result === false) {
   // echo "socket_connect() failed.<br />Reason: ($result) " . socket_strerror(socket_last_error($socket)) . "<br />";
} else {
  //  echo "OK.<br />";
}
$in = "GET / HTTP/1.1\r<br />";
$in .= "Host: 132.168.43.50\r<br />";
$in .= "Content-Type: application/xml; encoding=UTF-8\r\n";
$in .= "Accept: application/xml\n";
$in .= "Connection: Close\r<br />\r<br />";
$out= '';
while (socket_write($socket, $in, strlen($in))){
	
file_put_contents("intrusion.txt",socket_read($socket, 4096));
	$out = simplexml_load_string(file_get_contents("intrusion.txt",1,NULL,2))or die ("Error: Cannot create object");
	//print_r ($out)."</br></br>";
//$doc = new SimpleXMLElement ( $out );

if (isset ( $out->DeviceDetectionRecord )) {
	/*	$devname = "<strong>".$out->DeviceDetectionRecord->DeviceIdentification->
        DeviceName."</strong>" . PHP_EOL."</br></br>\n";
		//echo "Device:" . $devname;*/
   
    $identity= "<strong>". $out->DeviceDetectionRecord->Detection->
        ID ."</strong>". PHP_EOL."</br></br>";
		echo "ID:" .$identity;
    $detect = "<strong>".$out->DeviceDetectionRecord->Detection->
        DetectionEvent ."</strong>". PHP_EOL."</br></br>";
		echo "DetectionEvent:" . $detect;
    $date= "<strong>".$out->DeviceDetectionRecord->Detection->
        UpdateTime ."</strong>". PHP_EOL."</br></br>";
		echo "UpdateTime:" .$date;
		
		$deviceName = $out->DeviceDetectionRecord->DeviceIdentification->
DeviceName;
		$zone = explode('.', $deviceName)[2];
		
		$camIP = array(
									'Z1'	=>	'https://www.youtube.com/watch?v=r7FxORx05Ns', // :if port is needed
									'Z2'	=>	'https://www.youtube.com/watch?v=00A4vjZ7dkY',
									'Z3'	=>	'192.168.43.52',
									'Z4'	=>	'192.168.43.53',
									'Z5'	=>	'192.168.43.54',
									'Z6'	=>	'192.168.43.55',
									'Z7'	=>	'192.168.43.56',
									'Z8'	=>	'192.168.43.57',
									'Z9'	=>	'192.168.43.58',
									'Z10'	=>	'192.168.43.59',                                   
									'Z11'	=>	'192.168.43.60',
									'Z12'	=>	'192.168.43.61',
								);
		
		if ($zone == 'Z1'){
			
								/*BEGIN PLAYER webbot bot="HTMLMarkup" startspan */
					
				echo "<object ID='MediaPlayer' WIDTH='320' HEIGHT='270' CLASSID='CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95' STANDBY='Loading Windows Media Player components...' TYPE='application/x-oleobject' CODEBASE='http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112'>";
					
					echo "<param name='autoStart' value='True'>";
					
					echo "<param name='filename' value=".$camIP[$zone].">";
					
					echo "<param NAME='ShowControls' VALUE='False'>";
					
					echo "<param NAME='ShowStatusBar' VALUE='False'>";
					
					echo "<embed TYPE='application/x-mplayer2' SRC=".$camIP[$zone]." NAME='MediaPlayer' WIDTH='320' HEIGHT='270' autostart='1' showcontrols='0'>";
					echo "</embed>";
					echo "</object>";
					
					/*webbot bot="HTMLMarkup" endspan end PLAYER */
			
				/* echo '<script>window.open("http://$camIP[$zone], "_blank", "width=400,height=500")</script>';
				
			echo "<video '_blank' width='320' height='240' autoplay controls>";
											echo "<source '_blank' src=".$camIP[$zone].  "type='video/mp4'>";
										echo	"<object width='320' height='240' '_blank' type='application/x-shockwave-flash' data='http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf'>";
											echo	"<param name='movie' '_blank' value='http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf' /> ";
												echo "<param name='flashvars' '_blank value='config={'clip': {'url':".$camIP[$zone]."',' 'autoPlay':true, 'autoBuffering':true}} /> ";
											///<p><a href='%StreamURL%">view with external app</a></p> 
										echo"	</object>";
echo "</video>";
		*/
			
			}elseif ($zone == 'Z2'){
				
				echo "<video target='_blank' width='320' height='240' autoplay controls>";
											echo "<source target='_blank' src=".$camIP[$zone].  "type='video/mp4'>";
										echo	"<object width='320' height='240' target='_blank' type='application/x-shockwave-flash' data='http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf'>";
											echo	"<param name='movie' target='_blank' value='http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf' /> ";
												echo "<param name='flashvars' target='_blank value='config={'clip': {'url':".$camIP[$zone]."',' 'autoPlay':true, 'autoBuffering':true}} /> ";
											///<p><a href='%StreamURL%">view with external app</a></p> 
										echo"	</object>";
echo "</video>";
							
				/****** Camera code 
							function openCamFeed($zone)
							{
								$camIP = array(
									'Z1'	=>	'https://www.youtube.com/watch?v=r7FxORx05Ns', // :if port is needed
									'Z2'	=>	'https://www.youtube.com/watch?v=00A4vjZ7dkY',
									'Z3'	=>	'192.168.43.52',
									'Z4'	=>	'192.168.43.53',
									'Z5'	=>	'192.168.43.54',
									'Z6'	=>	'192.168.43.55',
									'Z7'	=>	'192.168.43.56',
									'Z8'	=>	'192.168.43.57',
									'Z9'	=>	'192.168.43.58',
									'Z10'	=>	'192.168.43.59',                                   
									'Z11'	=>	'192.168.43.60',
									'Z12'	=>	'192.168.43.61',
								);
							//echo $zone.'<br /><br />';
								if ($zone != '')
								{
									//header("Location: http://".$camIP[$zone]);
									echo "<video target='_blank' width='320' height='240' autoplay controls>";
											echo "<source src=".$camIP[$zone].  "type='video/mp4'>";
										echo	"<object width='320' height='240' type='application/x-shockwave-flash' data='http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf'>";
											echo	"<param name='movie' value='http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf' /> ";
												echo "<param name='flashvars' target='_blank value='config={'clip': {'url':".$camIP[$zone]."',' 'autoPlay':true, 'autoBuffering':true}} /> ";
											///<p><a href='%StreamURL%">view with external app</a></p> 
										echo"	</object>";
echo "</video>";/*
<!--- BEGIN PLAYER --->

<!-- webbot bot="HTMLMarkup" startspan ---->

<object ID="MediaPlayer" WIDTH="320" HEIGHT="270" CLASSID="CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95" STANDBY="Loading Windows Media Player components..." TYPE="application/x-oleobject" CODEBASE="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112">

<param name="autoStart" value="True">

<param name="filename" value="rtsp://xxx.xxx.xxx:xxxx">

<param NAME="ShowControls" VALUE="False">

<param NAME="ShowStatusBar" VALUE="False">

<embed TYPE="application/x-mplayer2" SRC="rtsp://xxx.xxx.xxx:xxxx" NAME="MediaPlayer" WIDTH="320" HEIGHT="270" autostart="1" showcontrols="0"></embed></object>

<!-- webbot bot="HTMLMarkup" endspan ---->

<!--- end PLAYER --->
								//echo "<iframe align='middle' height='450px' width='900px' target='_blank' src=".$camIP[$zone]."></iframe>";
								//
								}
							}
	
				
				openCamFeed($zone);
				**********/
			}
}
else {
    print_r ($out)."</br></br>\r\n";
	//echo "Nothing detected" . PHP_EOL;
} 

	flush();
	ob_flush();

	
	
	
}

socket_close($socket);


?>