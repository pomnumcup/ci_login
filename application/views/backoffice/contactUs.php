<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us Vaccessory</title>
</head>
<body>
ยินดีต้อนรับ คุณ ................... | ออกจากระบบ<br />
  <br /><a href="admin_index.html">หน้าหลัก</a><br /><br />
<table width="1042" border="0">
  <tr>
    <td width="157" rowspan="3" align="center" valign="top"><img src="img/icon/contact_us.png" alt="" width="150" height="150" /></td>
  </tr>
  <tr>
    <td width="416" align="center">
     	<?php echo form_open('backoffice/ControllerContactUs/checkTextSearch') ?>
       		ค้นหา ชื่อ - นามสกุล 
       		<input type="text" name="searchName" id="searchName" />
          	<input type="submit" name="Search" id="Search" value="ค้นหา" />
        </form>
    </td>
  </tr>
  <tr>
    <td colspan="2">
    <table width="1168" border="1">
      <tr>
        <td width="140" align="center">ชื่อ - นามสกุลลูกค้า</td>
        <td width="110" align="center">เบอร์โทร</td>
        <td width="132" align="center">Email</td>
        <td width="104" align="center">วันที่</td>
        <td width="321" align="center">หัวข้อ</td>
        <td width="321" align="center">รายละเอียด</td>
      </tr>
<?php
	foreach ($detailContactAll as $rowAll) {
		echo '<tr>';
		  echo '<td align="center"><a href="'.site_url("backoffice/ControllerContactUs/sendIDToModel/".$rowAll['contact_id']).'">'.$rowAll['contact_name'].'</a></td>';
		  echo '<td align="center">'.$rowAll["contact_phone"].'</td>';
		  echo '<td align="center">'.$rowAll["contact_mail"].'</td>';
		  echo '<td align="center">'.$rowAll["contact_date"].'</td>';
		  echo '<td align="center">'.$rowAll["contact_title"].'</td>';
		  echo '<td align="center">'.$rowAll["contact_detail"].'</td>';
		echo '</tr>';
	}
?>
    </table>
    </td>
  </tr>
</table>
</body>
</html>