<?php
//not timing out
set_time_limit(0);
//creating socket
$socket= socket_create(AF_INET, SOCK_STREAM,SOL_TCP);

if ((!$socket= socket_create(AF_INET,SOCK_STREAM,SOL_TCP))){
		$errorcode= socket_last_error();
		$errormsg= socket_strerror ($errorcode);
		
		die("Could not create socket: [$errorcode] $errormsg \n");
							 
	}
	echo "I'm the Socket creator \n <br>";
//Creating a socket connections
if (!socket_connect($socket, '172.162.25.80', 10000)){
	$errrcode = socket_last_error();
	$errormsg = socket_strerror ($errorcode);
	
	die ("Could not estabish port connection: [$errorcode] $errormsg \n");
	
	}
	echo "Port 1000 Connection Established \n <br>";

$message = "GET / HTTP/1.1\r\n\r\n";
 
//Send the message to the server
if( ! socket_send ( $socket , $message , strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);
     
    die("Could not send data: [$errorcode] $errormsg \n");
}
 
echo "Message send successfully \n";
 
//Now receive reply from server
if(socket_recv ( $socket , $buf , 2045 , MSG_WAITALL ) === FALSE)
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);
     
    die("Could not receive data: [$errorcode] $errormsg \n");
}
 
//print the received message
echo $buf;
/**
//reading alone
$in = "GET / HTTP/1.1\r\n";
$in .= "Host: 192.168.43.16:80\r\n";
$in .= "Connection: Close\r\n\r\n";
$out = '';

echo "Sending HTTP HEAD request...";
socket_write($socket, $in, strlen($in));
echo "OK.\n";

echo "Reading response:\n\n";
while ($out = socket_read($socket, 2048)) {
    echo $out;
}**/

socket_close($socket);
//Listening to a port
/*if(!socket_listen($socket, 3)){
	$errorcode= socket_last_error();
	$errormsg= socket_strerror($errorcode);
	
	die("Could not listen to the port \n ");
	
	}
echo "Socket listening confirmed <br>";
//Binding a connection \\2 Socket can not be binded to a port except in some cases
if (!socket_bind ($socket, '192.168.43.16', 80)){
	$errorcode = socket_last_error();
	$errormsg = socket_strerror ($errorcode);
	
	die ("Could not estabish port connection: [$errorcode] $errormsg \n");
	}
	echo "Binding is very cool now \n <br>";*/

//client connection
/*$client= socket_accept($socket);

if (socket_getpeername($client, $address, $port)){
	echo "Client $address: $port is now connected";
	}
socket_close($client);*/
?>
