


<?php require APProot .'/views/partials/header.php';?>
<h3>  <?php echo "welkom to: " . $data['title']?> Homepage </h3>

<?php
	$host = Localhost;
	$user = User;
	$password = Passwort;
	$dbname = Database;

	$dsn = 'mysql:host' . $host . ';dbname=' . $dbname;
	$pdo = new PDO($dsn, $user, $password);


?>

<?php require APProot .'/views/partials/footer.php';?>

