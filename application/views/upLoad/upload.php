<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<table width="650px">
<?php echo form_open_multipart('upload/conUpload/getInputValue')?>
	<tr>
		<td align="right" width="100px">
			หัวข้อ :
		</td>
		<td align="left">
			<input type="text" style="width: 250px" name="newsTitle">
		</td>
	</tr>
	<tr>
		<td align="right">รายละเอียดข่าว :</td>
		<td align="left">
			<textarea rows="6" cols="60" name="newsDescription"></textarea>
		</td>
	</tr>
	<tr>
		<td align="right">
			อัพโหลดรูปภาพ :
		</td>
		<td align="left">
			<input type="file" name="upload" />
		</td>
	</tr>
	<tr>
		<td align="right">
			ลิ้ง Youtube :
		</td>
		<td align="left">
			<input type="text" style="width: 250px" name="newsLinkYoutube">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" style="width: 100px" value="Upload" name"uploadNews" />
</form>
			<button type="button" onclick="<?php echo site_url('upload/conUpload/index') ?>" style="width: 100px">Cancel</button>
		</td>
	</tr>
</table>