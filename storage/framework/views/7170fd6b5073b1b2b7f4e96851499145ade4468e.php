

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, ['title' => 'Show Balance','showCreate' => 'false','link' => '']); ?>
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
        <div class="row">
            <strong>Payment Mode: </strong> <?php echo e($balance->title); ?>

        </div>
        <div class="row">
            <strong>Balance: </strong> <span class="format-amount" data-amount="<?php echo e($balance->balance); ?>"></span>
        </div>
    </div>
    <div class="card-footer bg-white row ml-4">
        <a href="<?php echo e(url('api/balances/add-balance',$balance->id)); ?>"
            class="btn btn-primary"><?php echo e(__('Deposit/Withdraw Amount')); ?>

        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('vendor/js/accounting.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/balance/show.blade.php ENDPATH**/ ?>