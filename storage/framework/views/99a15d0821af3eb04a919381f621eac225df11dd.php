<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name-"viewport" content="width-device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible content="ie=edge">
    <title>Edição de usuário</title>
</head>
<body>
<form action="<?php echo e(route('users.edit',['user' => $user->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <lable for="">Nome do usuário: </label>
    <input type="text" name="name" value="<?php echo e($user->name); ?>">

    <lable for="">E-mail do usuário: </label>
    <input type="email" name="email" value="<?php echo e($user->email); ?>">

    <lable for="">Senha do usuário: </label>
    <input type="password" name="password">

    <input type="submit" value="Atualizar usuário">
</form>
</body>
</html> 

<?php /**PATH /var/www/html/ml5/resources/views/editUser.blade.php ENDPATH**/ ?>