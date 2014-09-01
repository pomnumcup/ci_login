<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบจัดการ Vaccessory</title>
</head>
<body>
ยินดีต้อนรับ คุณ ................... | ออกจากระบบ<br /><br />
<a href="admin_index.html">กลับหน้าจัดการระบบ</a><br />
<table width="1095" border="0">
  <tr>
    <td width="216" rowspan="9" align="center" valign="top">
      <a href="news_promotion.html">
        <img src="img/icon/contact_us.png" alt="" width="150" height="150" />
      </a>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <table width="855" border="0">
        <?php
          foreach ($detailContact as $rowDetail) {
            $name = $rowDetail['contact_name'];
            $phone = $rowDetail['contact_phone'];
            $mail = $rowDetail['contact_mail'];
            $date = $rowDetail['contact_date'];
            $title = $rowDetail['contact_title'];
            $detail = $rowDetail['contact_detail'];
          }
          echo  '<tr>';
          echo    '<td align="right">ชื่อ - นามสกุลลูกค้า: </td>';
          echo    '<td align="left"><input name="name" type="text" id="name" size="100" maxlength="255" value="'.$name.'" readonly/></td>';
          echo  '</tr>';
          echo  '<tr>';
          echo    '<td align="right">เบอร์โทร : </td>';
          echo    '<td align="left"><input name="phone" type="text" id="phone" size="100" maxlength="255" value="'.$phone.'" readonly/></td>';
          echo  '</tr>';
          echo  '<tr>';
          echo    '<td align="right">Email : </td>';
          echo    '<td align="left"><input name="mail" type="text" id="mail" size="100" maxlength="255" value="'.$mail.'" readonly/></td>';
          echo  '</tr>';
          echo  '<tr>';
          echo    '<td align="right">วันที่ : </td>';
          echo    '<td align="left"><input name="date" type="text" id="date" size="100" maxlength="255" value="'.$date.'" readonly/></td>';
          echo  '</tr>';
          echo  '<tr>';
          echo    '<td align="right">หัวข้อ : </td>';
          echo    '<td align="left"><input name="title" type="text" id="title" size="100" maxlength="255" value="'.$title.'" readonly/></td>';
          echo  '</tr>';
          echo  '<tr>';
          echo    '<td align="right" valign="top">รายละเอียด : </td>'; 
          echo    '<td align="left"><textarea name="detail" cols="100" rows="10" id="detail" readonly>'.$detail.'</textarea></td>';
          echo  '</tr>';
          echo  '<tr>';
          echo    '<td colspan="2" align="center"><a href="'.site_url("backoffice/ControllerContactUs/").'">กลับหน้าหลัก</a></td>';
          echo  '</tr>';
       ?>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
