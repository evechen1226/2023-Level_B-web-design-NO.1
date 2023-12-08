<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">進站總人數管理</p>
	<!-- <form method="post" target="back" action="?do=tii"> -->
	<form method="post" action="/api/edit_total.php">
		<table style="width:50%;margin:auto">
			<tbody>
				<tr class="yel">
					<td width="50%">進站總人數管理</td>
					<td width="50%">
					
					<!-- <input type="number" name="total" id="" value="<?= //$Total->find(1)['total']; ?>"></td> -->
					
					<!-- 因為要共用，所以需要增加一input隱藏欄位存入當前網頁名稱 -->
					<input type="number" name="total" value="<?= $Total->find(1)['total']; ?>">
					<input type="hidden" name="table" value="total">

					<td></td>
				</tr>
			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;view.php?do=title&#39;)" value="新增網站標題圖片"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
					</td>
				</tr>
			</tbody>
		</table>

	</form>
</div>