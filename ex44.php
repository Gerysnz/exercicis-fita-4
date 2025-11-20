<?php
session_start();
if (!isset($_SESSION['notes'])) {
	$_SESSION['notes'] = '';
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$novaNota = trim($_POST['nota'] ?? '');
	if ($novaNota !== '') {
		$_SESSION['notes'] .= htmlspecialchars($novaNota) . "<br><br>";
	}
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<title>Prendre notes</title>
	<style>
		textarea { width: 300px; height: 100px; }
		.notes { margin-top: 20px; border: 1px solid #ccc; padding: 10px; background: #f9f9f9; }
	</style>
</head>
<body>
	<h1>Prendre notes</h1>
	<form method="post">
		<textarea name="nota" placeholder="Escriu la teva nota..."></textarea><br>
		<button type="submit">Afegir nota</button>
	</form>
	<div class="notes">
		<strong>Notes acumulades:</strong><br>
		<?php echo $_SESSION['notes']; ?>
	</div>
</body>
</html>
<!--Prendre notes de text. Consta d’una sola pàgina PHP.

ex44pagina1.php :

Disposa d’un formulari amb un camp de text (textarea) i un botó de submit. Quan s’envia el text, aquest s’afegeix al contingut d’una variable de sessió i es mostrarà a l’usuari.
Al final del text emmagatzemat s’afegiran 2 salts de línia per visualitzar i distingir cadascun dels enviaments.
El text s’acumularà cada cop que s’envii la pàgina. -->

