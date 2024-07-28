

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, ['title' => 'All Budgets','showCreate' => 'true','link' => 'api/budgets/create']); ?>
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
<table class="table table-index table-striped table-hover bg-white m-2">
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Title</th>
            <th>Alloted Amount</th>
            <th>Spending</th>
            <th>Savings</th>
            <th>Out of Comission at</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $budgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $budget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr data-link="<?php echo e(url('api/budgets/show', $budget->id)); ?>" class="href-row">
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($budget->title); ?></td>
            <td class="format-amount" data-amount="<?php echo e($budget->alloted_amount); ?>"></td>
            <td class="format-amount" data-amount="<?php echo e($budget->alloted_amount - $budget->balance_amount); ?>"></td>
            <td class="format-amount" data-amount="<?php echo e($budget->balance_amount); ?>"></td>
            <td><?php echo e($budget->expiry_date->format('Y-M-d l')); ?></td>
            <td>
                <?php if($budget->is_active == 1): ?> <span class="badge badge-primary badge-pills">Active</span>
                <?php elseif($budget->is_active == 0): ?> <span class="badge badge-danger badge-pills">Depleted</span>
                <?php else: ?> ERROR: Contact for support
                <?php endif; ?>
            </td>
            <td><?php echo e($budget->created_at->format('Y-M-d')); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="8" class="text-center">No record found</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<div class="ml-2 float-right">
    <?php echo e($budgets->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/accounting.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/budget/index.blade.php ENDPATH**/ ?>