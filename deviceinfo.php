<?php

require 'zklibrary.php';
//$enableGetDeviceInfo = true;
$zk = new ZKLibrary('197.27.125.186', 4370);
$zk->connect();
$zk->disableDevice();
$zk->setTime(date('Y-m-d H:i:s')); 

//$users = $zk->getUser();
//$attendace = $zk->getAttendance();

?>




    <center>
    <table border="1" cellpadding="5" cellspacing="2">
            <tr>
                <td><b>Status</b></td>
                <td>Connected</td>
                <td><b>Version</b></td>
                <td> <?php echo($zk->getversion());  ?></td>
                <td><b>OS Version</b></td>
                <td><?php echo($zk->getOSVersion()); ?></td>
                <td><b>Platform</b></td>
                <td><?php echo($zk->getPlatform()); ?></td>
            </tr>
            <tr>
                <td><b>Firmware Version</b></td>
                <td><?php echo($zk->getFirmwareVersion()); ?></td>
                <td><b>WorkCode</b></td>
                <td><?php echo($zk->getWorkCode()); ?></td>
                <td><b>SSR</b></td>
                <td><?php echo($zk->getSSR()); ?></td>
                <td><b>Pin Width</b></td>
                <td><?php echo($zk->getPinWidth()); ?></td>
            </tr>
            <tr>
                <td><b>Face Function On</b></td>
                <td><?php echo($zk->getFaceFunctionOn()); ?></td>
                <td><b>Serial Number</b></td>
                <td><?php echo($zk->getSerialNumber()); ?></td>
                <td><b>Device Name</b></td>
                <td><?php echo($zk->getDeviceName()); ?></td>
                <td><b>Get Time</b></td>
                <td><?php echo($zk->getTime()); ?></td>
            </tr>
        </table>
    </center>




<?php
$zk->setTime(date('Y-m-d H:i:s')); 
$zk->enableDevice();
$zk->disconnect();

?>

