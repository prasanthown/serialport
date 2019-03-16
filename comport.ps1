Param(
[Parameter(Mandatory=$true)]
[string]$port
)

$ports= new-Object System.IO.Ports.SerialPort $port,9600,None,8,one
$ports.open()
echo $ports.ReadLine()
$ports.close()
