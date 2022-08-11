<?php

require 'zklibrary.php';
$enableGetDeviceInfo = true;
$zk = new ZKLibrary('197.27.125.186', 4370);
$zk->connect();
$zk->disableDevice();
$zk->setTime(date('Y-m-d H:i:s')); 

$users = $zk->getUser();
$attendace = $zk->getAttendance();

?>


<table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
<thead>
  <tr>
    <td width="25">No</td>
    <td>UID</td>
    <td>ID</td>
    <td>Name</td>
    <td>Role</td>
    <td>Password</td>
  </tr>
</thead>
<tbody>
<?php
$no = 0;
foreach($users as $key => $user)
{
  $no++;
  ?>
  <tr>
    <td align="right"><?php echo $no; ?></td>
    <td><?php echo $key; ?></td>
    <td><?php echo $user[0]; ?></td>
    <td><?php echo $user[1]; ?></td>
    <td><?php echo $user[2]; ?></td>
    <td><?php echo $user[3]; ?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
<br /><br />
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
<thead>
  <tr>
    <td width="25">No</td>
    <td>UID</td>
    <td>ID</td>
    <td>State</td>
    <td>Date/Time</td>
  </tr>
</thead>

<tbody>
<?php
$no = 0;
foreach($attendace as $key=>$at)
{
  $no++;
?>

  <tr>
    <td align="right"><?php echo $no;?></td>
    <td><?php echo $at[0];?></td>
    <td><?php echo $at[1];?></td>
    <td><?php echo $at[2];?></td>
    <td><?php echo $at[3];?></td>
  </tr>

<?php
}
?>

</tbody>
</table>


<table border="1" cellpadding="5" cellspacing="2">
            <tr>
                <td><b>Status</b></td>
                <td>Connected</td>
                <td><b>Version</b></td>
                <td><?php echo($zk->getVersion()); ?></td>
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
                <td><?php echo($zk-> getDeviceName()); ?></td>
                <td><b>Get Time</b></td>
                <td><?php echo($zk->getTime()); ?></td>
            </tr>
        </table>




<?php
$zk->setTime(date('Y-m-d H:i:s')); 
$zk->enableDevice();
$zk->disconnect();

?>

