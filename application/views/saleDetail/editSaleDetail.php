<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 	
<?php
	foreach ($rowEdit as $rowAll) {
		$user = $rowAll['member_user'];
		$password = $rowAll['member_password'];
		$fullName = $rowAll['member_first_name']." ".$rowAll['member_last_name'];
		$positionId = $rowAll['position'];
		$companyID = $rowAll['company_name'];
		$fullBranch_id = $rowAll['branch_name']."(".$rowAll['branch_code'].")";
	}
?>

<table width="450" border="0">
	<form method="post" action="">
	  	<tr>
		    <td width="150px;" align="right">User :</td>
		    <td width="200px;" scope="col">
		    <input type="hidden" neme="user" value="<?php echo $user; ?>" />
		    	<?php echo $user; ?>
		    </td>
	  	</tr>
	  	<tr>
		    <td align="right">Password :</td>
		    <td><input type="text" name = "password" value="<?php echo $password; ?>" /></td>
		</tr>
		<tr>
		    <td align="right">ชื่อ - นามสกุล :</td>
		    <td><input type="text" value="<?php echo $fullName; ?>" /></td>
		</tr>
		<tr>
		    <td align="right">ตำแหน่ง :</td>
		    <td>
		    	<select id="positionSelect">
		    	  <option value="0">Select</option>
			      <option value="1">Sale</option>
			      <option value="2">Manager</option>
			      <option value="3">ระงับไอดี</option>
				</select>
				<script type="text/javascript">
			    	var positionSelect = "<?php echo $positionSelect; ?>";
			    	positionSelectID=$('#positionSelect option:selected').value(2);
			    	//var positionId = "<?php echo $memberPositionID; ?>";
					document.getElementById('positionSelect').select(positionSelectID);
				</script>

			</td>
		</tr>
		<tr>
		    <td align="right">บริษัท :</td>
		    <td>
		    	<select name="companyID" >
			    	<?php
				    	$companyCount =1;
				    	foreach ($rowCompany as $rowAllCompany) {
				    	  $company = $rowAllCompany['company_name'];
						  echo "<option value='$companyCount'>$company</option>";
						  $companyCount++;
						}
					 ?>
					 <script type="text/javascript">
						var companyID = "<?php echo $companyID; ?>";
						$("#companyID").val(companyID);
					</script>
				</select>
			</td>
		</tr>
		<tr>
		    <td align="right">สาขา :</td>
		    <td>
		    	<select>
			    	<?php
				    	$branchCount =1;
				    	foreach ($rowBranch as $rowAllBranch) {
				    	  $branch = $rowAllBranch['branch_name']." (".$rowAllBranch['branch_code'].")";
						  echo "<option value='$branchCount'>$branch</option>";
						  $branchCount++;
						}
					 ?>
				</select>
			</td>
		</tr>
  <tr>
	<td colspan="2" align="center">
	<input type="submit" name="Edit" id="edit" value="แก้ไข" style="width: 80px"/>
</form>
	<?php 
		echo anchor('detailSale/con_detailSale/index',"<button style= 'width: 80px'>ยกเลิก</button>");
	?>		 
	</td>
  </tr>
</table>