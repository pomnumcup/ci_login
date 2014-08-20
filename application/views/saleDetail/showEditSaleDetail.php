<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 	
<?php 

	foreach ($rowEdit as $rowAll) {
		$user = $rowAll['member_user'];
		$password = $rowAll['member_password'];
		$fullName = $rowAll['member_first_name']." ".$rowAll['member_last_name'];
		$position = $rowAll['position'];
		$company = $rowAll['company_name'];
		$fullBranch = $rowAll['branch_name']."(".$rowAll['branch_code'].")";
	}
?>
<table width="550" border="0" align="center">
<form method="post" action="">
	  	<tr>
		    <td width="150px;" align="right">User :</td>
		    <td width="400px;" scope="col">
		    	<?php echo $user; ?>
		    </td>
	  	</tr>
	  	<tr>
		    <td align="right">Password :</td>
		    <td><?php echo $password; ?></td>
		</tr>
		<tr>
		    <td align="right">ชื่อ - นามสกุล :</td>
		    <td><?php echo $fullName; ?></td>
		</tr>
		<tr>
		    <td align="right">ตำแหน่ง :</td>
		    <td><?php echo $position; ?></td>
		</tr>
		<tr>
		    <td align="right">บริษัท :</td>
		    <td><?php echo $company; ?></td>
		</tr>
		<tr>
		    <td align="right">สาขา :</td>
		    <td><?php echo $fullBranch; ?></td>
		</tr>
  <tr>
	<td colspan="2" align="center">
			    <input type="submit" name="buttomEdit" id="edit" value="อัพเดท" style="width: 80px"/>
</form>
		<?php echo anchor('detailSale/con_detailSale/edit',"<button style= 'width: 80px'>แก้ไข</button>"); ?>
	</td>
  </tr>
</table>