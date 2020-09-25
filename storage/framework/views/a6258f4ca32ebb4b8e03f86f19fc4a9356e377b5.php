<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <title>Listagem de Usuários</title>
</head>
<body>
<table>
    <tr>
        <th>#ID</th>
        <th>Nome:</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($user->id); ?></td>
        <td><?php echo e($user->name); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td><a href="http://ml5-debian/ml5/public/usuarios/<?php echo e($user->id); ?>">Ver Usuário</a>
            <form action="<?php echo e(route('users.destroy',['user'=>$user->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
                <input type="hidden" name="user" value="<?php echo e($user->id); ?>">
                <input type="submit" value="Remover">
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>
<?php /**PATH /var/www/html/ml5/resources/views/listAllUsers.blade.php ENDPATH**/ ?>