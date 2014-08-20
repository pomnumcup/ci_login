
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>รายละเอียดการขายสินค้า</title>
</head>
	<?php 
		echo css_asset('style.css'); 
	?>

<body>
	<table border="1" align="center">
		<tr align="center">
			<td>ID</td>
			<td>User</td>
			<td>Password</td>
			<td>ชื่อ-นามสกุล</td>
			<td>ตำแหน่ง</td>
			<td>สาขา</td>
			<td>บริษัท</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
<?php 
echo form_open('detailSale/con_detailSale/index');
	if(count($resultMemberDetail)==0){
		echo "<tr align='center'><td colspan='9'>ไม่พบข้อมูล</td></tr>";
	}
	else{
		$i=1;
		foreach ($resultMemberDetail as $rowAll) {
			$member_id = $rowAll['member_id'];
			echo "<tr ";
			if($i%2){
			  echo "class='detailTable'>";
			}else{
			  echo "class='detailTable2'>"; 
			}
			  echo "<td align='center'>".$rowAll['member_id']."</td>";
			  echo "<td align='center'>".$rowAll['member_user']."</td>";
			  echo "<td align='center'>".$rowAll['member_password']."</td>";
			  echo "<td>".$rowAll['member_first_name']." ".$rowAll['member_last_name']."</td>";//
			  echo "<td align='center'>".$rowAll['position']."</td>";//form position_id 
			  echo "<td>".$rowAll['branch_name']." ".$rowAll['branch_code']."</td>";
			  echo "<td align='center'>".$rowAll['company_name']."</td>";
			  echo "<td align='center'><button name='editBT' value='$member_id'>Edit</button></td>";
			  echo "<td align='center'><button name='deleteBT' value='$member_id'>Delete</button></td>";
			echo "</tr>";
			$i++;
		}
	}
	echo form_close();
?>	
	</table>

</body>
</html>


		