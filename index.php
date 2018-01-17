<?php 
$navigation = ['index' => 'Home', 'about' => 'Over ons', 'portfolio' => 'Portfolio', 'contact' => 'Contacteer ons']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oefening-11</title>
</head>
<body>
    <?php
// print_r($navigation);
if ($navigation > 0){
    echo '<ul>';
foreach($navigation as $p){
    echo "<li> <a href='#'>$p</a> </li>";
}
    echo '</ul>';
}else
    echo 'No results found.';
?>
</body>
</html>