

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, ['title' => 'All Transactions','showCreate' => 'true','link' => 'api/transactions/create']); ?>
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
<?php echo $__env->make('layouts.session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<table class="table table-index table-striped table-hover m-2">
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Title</th>
            <th>Budget</th>
            <th>Payment Via</th>
            <th>Category</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr class="href-row" data-link="<?php echo e(url('api/transactions/show', $transaction->id)); ?>">
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($transaction->title); ?></td>
            <td><?php echo e($transaction->budget->title); ?></td>
            <td><?php echo e($transaction->paymentOption->title); ?></td>
            <td><?php echo e($transaction->category->title); ?></td>
            <td class="format-amount" data-amount="<?php echo e($transaction->amount); ?>"></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="6" class="text-center">No record found</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<div class="ml-2 float-right">
    <?php echo e($transactions->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/accounting.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/transaction/index.blade.php ENDPATH**/ ?>