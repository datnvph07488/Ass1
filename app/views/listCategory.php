<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hiển thị danh sách danh mục</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>cate_name</th>
		</tr>

	<?php foreach ($Category as $cat) {
		?>
		<tr>
			<td><?=$cat['id']?></td>
			<td><?=$cat['cate_name']?></td>
		</tr>
		<?php
	}
?>
	</table>

</body>
</html>