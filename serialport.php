<?php
    	 exec('powershell [System.IO.Ports.SerialPort]::getportnames()', $port_list);
	 print_r($port_list) //list of comport connection
	 
	 $port ='COM3' //specify some port to get read value from port
	 exec('powershell -ExecutionPolicy ByPass -File .\comport.ps1 -port '.$port,$res);
	 echo $res;
 ?>
