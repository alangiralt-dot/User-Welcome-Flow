<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    echo '<img src="//itacademy.barcelonactiva.cat/pluginfile.php/1/theme_remui/logo/1774246862/logo.png" style="height: 60px">';
    echo "<h1>Success!</h1>";
    echo "Welcome to the It Academy, " . $name . '<br>';
	echo '<a href="http://localhost/20260325_project/index.html">Go back</a>';
}
?>
