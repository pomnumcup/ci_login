<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src='/assets/js/jquery.min.js'> </script>
<script src='/assets/js/contact.js'> </script>
<title>ระบบจัดการ Vaccessory</title>
</head>

<body>
<a href="admin_index.html">กลับหน้าจัดการระบบ</a><br />
<?php echo form_open('contact/ControllerContact/getValueInput')?>
<div align="center">
<table width="855" border="0" >
    <tr>
      <td align="right">ชื่อ - นามสกุลลูกค้า: </td>
      <td align="left"><input name="name" type="text" id="name" size="100" maxlength="255" /></td>
    </tr>
    <tr>
      <td align="right">เบอร์โทร : </td>
      <td align="left"><input name="phone" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="phone" size="100" maxlength="10" /></td>
    </tr>
    <tr>
      <td align="right">Email : </td>
      <td align="left"><input name="mail" type="text" id="mail" size="100" maxlength="255" /></td>
    </tr>
    <tr>
      <td align="right">หัวข้อ : </td>
      <td align="left"><input name="title" type="text" id="title" size="100" maxlength="255" /></td>
    </tr>
    <tr>
      <td align="right" valign="top">รายละเอียด :</td>
      <td align="left"><textarea name="detail" cols="100" rows="10" id="detail"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="ADD" id="add"></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>