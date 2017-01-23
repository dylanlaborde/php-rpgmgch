<?php 
$users = require __DIR__."/../Controllers/Users.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tableu utilisateur</title>
</head>
<body>
	<table>
		<?php foreach ($users as $user): ?>
			<tr>
				<td>Id :<?= $user["client"]->getId();?></td>
				<td>Email : <?= $user["client"]->getEmail();?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
