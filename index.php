<?php
$user = (object) [
    'name' => 'Rodrigo Siqueira',
    'email' => 'dev@rodrigosiqueira.com.br',
    'logged' => true
];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP React App</title>
    <link rel="stylesheet" href="./static/assets/css/style.css" type="text/css">
</head>
<script type="text/javascript">
    var STATIC_URL = 'http://localhost/php-react-app';
    var myApp = {
        user: <?php echo json_encode($user); ?>,
        logged: <?php echo $user->logged; ?>
    };
</script>

<body>

    <div id="app"></div>

    <script type="text/javascript" src="./static/assets/js/main.js"></script>

</body>

</html>
