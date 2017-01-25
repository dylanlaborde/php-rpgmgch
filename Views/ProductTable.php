<?php 
require __DIR__."/../Controllers/Products.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>liste de produit</title>
</head>
<body>
	<h2>Liste des produit</h2>


	<?php foreach($Products as $Product): ?>
		<table>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>price</th>
			</tr>
			<tr>
				<td><?= $Product['legume']->getId() ?></td>
				<td><?= $Product['legume']->getName()?></td>
				<td><?=$Product['legume']->getPrice() ?></td>
			</tr>
		</table>
	<?php endforeach ?>
	<?php foreach ($Vetements as $vetement):?>
		<table>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>price</th>
				<th>brand</th>
			</tr>
			<tr>

				<td><?= $vetement['vetement']->getId() ?></td>
				<td><?= $vetement['vetement']->getName()?></td>
				<td><?=$vetement['vetement']->getPrice() ?></td>
				<td><?=$vetement['vetement']->getBrand() ?></td>
			</tr>
		</table>
	<?php endforeach ?>






</body>
</html>