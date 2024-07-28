<div class="card no-bg rounded-0 border-0">
    <div class="pl-4"><small><?php echo e(Config('app.name', 'PFMS')); ?></small></div>
    <div class="card-body initial row">
        <h2 class="card-title col-md-8"><?php echo e($title); ?></h2>
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-quick-back shadow-sm h-100">
            <i class="fa fa-angle-left"> </i>
            <?php echo e(__(' Back')); ?>

        </a>
        
        <?php if($showCreate): ?>
        <a href="<?php echo e(url($link)); ?>" class="btn btn-add-new shadow-sm h-100 ml-2">
            <?php echo e(__('Add New ')); ?> <i class="fa fa-plus"> </i>
        </a>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/components/header.blade.php ENDPATH**/ ?>