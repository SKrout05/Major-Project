

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, ['title' => 'Show Category','showCreate' => 'true','link' => 'api/categories/create']); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3)): ?>
<?php $component = $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3; ?>
<?php unset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3); ?>
<?php endif; ?>
<div class="card border-0 mt-2">
    <div class="card-body ml-4">
        <div>
            <strong>Title:</strong> <?php echo e($category->title); ?>

        </div>
        <div>
            <strong>Entry Principle:</strong>
            <?php if($category->entry == 'dr'): ?>
            <?php echo e(__('Debit')); ?>

            <?php elseif($category->entry == 'cr'): ?>
            <?php echo e(__('Credit')); ?>

            <?php else: ?>
            <span class="text-danger"><?php echo e(__('Contact for developer support immediately')); ?></span>
            <?php endif; ?>
        </div>
        <div>
            <strong>Description:</strong> <?php echo e($category->desc); ?>

        </div>
    </div>
    <div class="card-footer bg-white row ml-4">
        <a href="<?php echo e(url('api/categories/edit',$category->id)); ?>" class="btn btn-primary"><?php echo e(__('Edit')); ?></a>
        <?php if($category->is_deletable === 1): ?>
        <form action="<?php echo e(url('api/categories/delete', $category->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <input type="submit" value="Delete" class="btn btn-delete ml-2" />
        </form>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/category/show.blade.php ENDPATH**/ ?>