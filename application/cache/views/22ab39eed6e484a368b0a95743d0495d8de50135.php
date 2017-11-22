<?php $__env->startSection('titulo_pagina', 'Menu Principal'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <img src="<?php echo e(base_url("assets/img/brasao.jpg")); ?>">
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>