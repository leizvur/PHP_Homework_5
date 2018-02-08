<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$contacts=file_get_contents(__DIR__ . "/contacts.json");
var_dump($contacts);

$list=json_decode($contacts, true);
echo "<pre>";
print_r($list);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Мои друзья</title>
</head>
<body>
	<h1>Телефонная книга друзей</h1>
	<table border="1px solid black">
		<tr>
			<td><strong>Имя</strong></td>
			<td><strong>Фамилия</strong></td>
			<td><strong>Адрес</strong></td>
			<td><strong>Телефон</strong></td>
		</tr>
		<?php foreach ($list as $key => $value) { ?>
			<tr>
				<td><?php echo $value["firstName"] ?></td>
				<td><?php echo $value["lastName"] ?></td>
				<td><?php echo $value["address"] ?></td>
				<td><?php echo $value["phoneNumber"] ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
