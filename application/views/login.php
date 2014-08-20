<table width="1210">
<form>
	<tr>
		<td width="830">
		<?php
			require_once("checkID.php");
		?>
		</td>
		<td>
			<select name= "target"  id= "target" onChange = "changeTarget(this.value)">
				<option value="0" 
				<?php 	if(!empty($_GET["target"])){
							if($_GET["target"]==0)
								echo "selected";
						}?>>เลือกการค้นหา</option>
				<option value="1" <?php if(!empty($_GET["target"])){
					if($_GET["target"]==1)
						echo " selected";}?>>เลขตัวถัง</option>
				<option value="2" <?php if(!empty($_GET["target"])){
					if($_GET["target"]==2)
						echo "selected";}?>>ชื่อ-นามสกุล</option>
			</select>
		</td>
		<td>
			<span id="hidden_div1" 
			<?php if(!empty($_GET["target"])){
						if($_GET["target"]!=0&&$_GET["target"]!=3){
							echo " style='display: block;'";
						}else{
							echo " style='display: none;'";
						}
					}else{
						echo " style='display: none;'";
					}
			?>
			>ค้นหา<input type="text" id="search" name="search" autocomplete="off" value="<?php if(!empty($_GET['search']))echo $_GET['search'];?>" /><button onclick="dochange(0)">ค้นหา</button></span>
			<span id="hidden_div" 
			<?php if(!empty($_GET["target"])){
						if($_GET["target"]==3){
							echo " style='display: block;'";
						}else{
							echo " style='display: none;'";
						}
					}else{
						echo " style='display: none;'";
					}
					if(!empty($_GET['firstDate'])){
						$firstDate=explode("-", $_GET['firstDate']);
						$firstDate=$firstDate[2]."/".$firstDate[1]."/".$firstDate[0];
					}
					if(!empty($_GET['lastDate'])){
						$lastDate=explode("-", $_GET['lastDate']);
						$lastDate=$lastDate[2]."/".$lastDate[1]."/".$lastDate[0];
					}
			?>>ตั้งแต่<input type="text" id="firstDate" class="calendar" readonly="readonly" autocomplete="off" value="<?php if(!empty($_GET['firstDate']))echo $firstDate;?>" />จนถึง<input type="text" id="lastDate" class="calendar" readonly="readonly" autocomplete="off" value="<?php if(!empty($_GET['lastDate']))echo $lastDate;?>"/><input type="button" onclick="searchDate(0)" value="ค้นหา" ></span>
		</td>
	</tr>
	</form>
</table>

<script src="js/switch.js"></script>
<font id="resultTable"></font>

<?php
 if(empty($_GET["Page"])){
	$_GET["Page"]=0;
}
$page=$_GET["Page"];
if(empty($_GET["search"])){
	$_GET["search"]="";
	}
$search = $_GET["search"];

if(empty($_GET["target"])){
	$_GET["target"]="0";
}
if($_GET["target"]!=3){		
	?>
<SCRIPT LANGUAGE="JavaScript">
	dochange('<?php echo $page?>');
</script>
		<?php
	}else{
	?>
<SCRIPT LANGUAGE="JavaScript">
	searchDate( '<?php echo $page;?>' ); 
</script>
<?php
	}
?>

