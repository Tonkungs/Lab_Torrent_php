<?php
require __DIR__.'/vendor/autoload.php';
$linfo = new \Linfo\Linfo;
$parser = $linfo->getParser();

//var_dump($parser->getCPU()); // and a whole lot more
/*echo json_encode($parser->getHostName());
echo json_encode($parser->getOS());
echo json_encode($parser->getCPU());
echo json_encode($parser->getRam());
echo json_encode($parser->getUpTime());*/
echo json_encode($parser->getHD());
/*
window
getCPU()
getOS()
getContains()
getKernel()
getHostName() // "TONKUNG"
getRam()
getUpTime()
getHD()
getTemps()
getMounts()  ไดร์ที่มี
getDevs()  ไดรเวอร
getRAID()
getLoad()  //
getNet()
getBattery()
getWifi()
getSoundCards()
getProcessStats()
getServices()
getDistro()
getCPUArchitecture()
*/
/*
ต้องนำส่วนนี้ไปใส่ที่ php.ini ด้วย
[COM_DOT_NET]
extension=php_com_dotnet.dll
*/
?>