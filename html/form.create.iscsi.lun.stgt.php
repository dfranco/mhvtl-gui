<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>STGT Targets</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Create TGT Logical Unit :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php
$filename = '../ENABLE_TGTD_SCSI_TARGET';
if (!file_exists($filename))
{
echo "<FORM ACTION=stgt.php><INPUT TYPE=SUBMIT VALUE=Return></FORM>";
exit("<FONT COLOR='#000000'>STGT Disabled($filename)</FONT>");
}
?>
<?php $target = $_REQUEST['tid']; ?>
<?php $cmd = `sudo -u root -S ../scripts/build_html_opts.sh devices`; ?>
<?php $tid = `echo $target| cut -d ":" -f1`; ?>
<?php $nextlun = `sudo -u root -S ../scripts/build_html_opts.sh nlun $tid`; ?>

<form method="post" action="create.iscsi.lun.stgt.php" >
<input name="tid" value="<?php echo $target;?>" hidden readonly>
LUN <?php echo $nextlun;?>
Select Device : <?php echo $cmd;?>
<INPUT TYPE=SUBMIT VALUE="Create">
</FORM>
<br>
<hr width="100%" size=1 color="blue">
<FORM ACTION="stgt.php"><INPUT TYPE=SUBMIT VALUE="Return"><INPUT TYPE=SUBMIT VALUE="Cancel"> </FORM>
</table>

</body>
</html>
