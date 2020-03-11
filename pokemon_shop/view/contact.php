<?php require_once "./partials/view_top.php"; ?>
    <strong >
        Liên hệ qua số điện thoại: 01234567891011<br>
        Hoặc điền đầy đủ thông tin:<br>
    </strong>

<div style="margin:20px; font-size:large;">
    <span ><?=$error?? NULL?></span>
	<table width="100%" cellspacing="5" cellpadding="0" border="0">			
		<tbody><tr>
			<td width="10%" valign="top" align="left"> Họ tên:</td>
			<td width="82%" valign="top" align="left">
                <input name="" type="text" maxlength="250" style="width:200px;" />
                
            </td>
		</tr>
		<tr>
			<td width="10%" valign="top" align="left"> E-mail:</td>
			<td width="82%" valign="top" align="left">
				<input name="" type="text" maxlength="50"  style="width:200px;" />
				
				
		  </td>
		</tr>
		<tr>
			<td valign="top" align="left">Địa chỉ:</td>
			<td valign="top" align="left">
				<input name="" type="text" maxlength="250"  style="width:200px;" />
				
			</td>
		</tr>
		<tr>
			<td valign="top" align="left">Điện thoại <font color="#ff0000">(*)</font>:</td>
			<td valign="top" align="left">
			    <input name="" type="text" maxlength="50" style="width:200px;" />
			   
			</td>
		</tr>
		<tr>
			<td valign="top" align="left">Tiêu đề<font color="#ff0000">(*)</font>:</td>
			<td valign="top" align="left">
			    <input name="" type="text" maxlength="250"  style="width:400px;" />
			    
			</td>
		</tr>            
		<tr>
			<td valign="middle" align="left">Nội dung<font color="#ff0000">(*)</font>:</td>
			<td valign="top" align="left">
				<textarea name="" rows="10" cols="20"  style="width:400px;"></textarea>
				
			</td>
		</tr>
		<tr>
			<td valign="top" align="left">&nbsp;</td>
			<td valign="top" align="left">
                <input type="submit" name="ctl00$btnSend" value="Gửi liên hệ" id="ctl00_btnSend" />
                </td>
		</tr>
	</tbody></table>

</div>
<?php require_once "./partials/view_bot.php"; ?>