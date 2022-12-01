

<?php $__env->startSection('title', 'Listagem dos Usuarios'); ?>

<?php $__env->startSection('content'); ?>
<h1> 
  listagem dos usuarios 
  (<a href="<?php echo e(route('users.create')); ?>">+</a>)
</h1>

<ul>
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
      <?php echo e($user->name); ?> -
      <?php echo e($user->email); ?>

      |  <a href="<?php echo e(route('users.show', $user->id)); ?>">Detahes</a>
    </li>  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/users/index.blade.php ENDPATH**/ ?>