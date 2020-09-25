<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name-"viewport" content="width-device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible content="ie=edge">
    <title>Cadastro de usuário</title>
</head>
<body>
<form action="<?php echo e(route('users.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <lable for="">Nome do usuário: </label>
    <input type="text" name="name">

    <lable for="">E-mail do usuário: </label>
    <input type="email" name="email">

    <lable for="">Senha do usuário: </label>
    <input type="password" name="password">

    <input type="submit" value="Cadastrar usuário">
</form>
</body>
</html> 
<?php /**PATH /var/www/html/ml5/resources/views/addUser.blade.php ENDPATH**/ ?>