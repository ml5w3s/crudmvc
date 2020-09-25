<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width-device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Usuáio</title>
</head>
<body>
<h1><?php echo e($user->name); ?></h1>
<p><?php echo e($user->email); ?> </p>
<p><?php echo e(date('d/m/Y H:i',strtotime($user->created_at))); ?></p>
</body>
</html>
<?php /**PATH /var/www/html/ml5/resources/views/listUsers.blade.php ENDPATH**/ ?>