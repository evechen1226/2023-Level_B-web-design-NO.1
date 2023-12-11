<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">校園映像圖片管理</p>

	<!-- <form method="post" target="back" action="?do=tii"> -->
	<form method="post" action="../api/edit.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="70%">映像圖片</td>
					<td width="10%">顯示</td>
					<td width="10%">刪除</td>
					<td></td>
				</tr>
				<?php
				// $DB = ${ucfirst($do)};
				// $rows = $DB->all();
				// foreach ($rows as $row) {

					$total = $DB->count();
					$div = 3 ;
					$pages = ceil($total/$div);

					$now = $_GET['p']??1;
					$strat=($now-1)*$div;
	
					$rows = $DB->all("limit $strat,$div");
					foreach ($rows as $row) {
					?>

					<tr>
						<td>
							<img src="./img/<?= $row['img']; ?>" alt="" style="width:100px;height:68px;">
						</td>
						<input type="hidden" name="id[]" value="<?= $row['id']; ?>">
						<td>
							<input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
						</td>

						<td> <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
						</td>

						<td>
							<input type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')" value="更新動畫圖片">
						</td>
					</tr>
				<?php
				} ?>
			</tbody>
	
		</table>

		<div class="cent">
			<?php
			if($now>=1){
				// echo "<a href='?do=image&p='".($now-1)."</a>";
				$prev=$now-1;
				echo "<a href='?do=image&p=$prev'> < </a>";
			}
			for ($i=1;$i<=$pages;$i++){
				
				$fontsize=($now==$i)?'24px':'16px';
				
				echo "<a href='?do=image&p=$i' style='font-size:$fontsize'>$i</a>";
			}

			if($now<$pages){

				$next=$now+1;
				echo "<a href='?do=image&p=$next'> > </a>";
			}

			?>
		</div>


		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<input type="hidden" name="table" value="<?= $do; ?>">
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增網站標題圖片">
					</td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>