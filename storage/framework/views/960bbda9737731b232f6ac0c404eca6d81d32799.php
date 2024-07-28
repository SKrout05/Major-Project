

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, ['title' => 'View Transaction','showCreate' => 'true','link' => 'api/transactions/create']); ?>
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
    <div class="card-body">
        <div class="col-12">
            <h2 class="text-right">
                <strong><?php echo e($transaction->budget->title); ?></strong>
            </h2>
        </div>
        <div class="col-12 text-right">
            <small><?php echo e($transaction->created_at->format('Y-M-d, l')); ?></small>
        </div>
        <div class="mt-4 mb-4">
            <hr />
        </div>

        <div class="col-12 text-center">
            <h4><strong><?php echo e($transaction->title); ?></strong></h4>
        </div>
        <div class="<?php if (! (empty($transaction->desc))): ?> row <?php else: ?> <?php endif; ?>">
            <?php if (! (empty($transaction->desc))): ?>
            <div class="col-sm-6 text-right">
                <?php echo e($transaction->desc); ?>

            </div>
            <?php endif; ?>
            <div class="<?php if (! (empty($transaction->desc))): ?> col-sm-6 <?php else: ?> col-12 <?php endif; ?>">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Type</th>
                            <th>Paid Via</td>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td><?php echo e($transaction->category->title); ?></td>
                            <td><?php echo e($transaction->paymentOption->title); ?></td>
                            <td>
                                <span class="format-amount" data-amount="<?php echo e($transaction->amount); ?>"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 text-right">
            <div><strong>Total Amount: </strong>
                <span class="format-amount" data-amount="<?php echo e($transaction->amount); ?>"></span>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="col-2 text-center">
                <?php echo e(auth()->user()->name); ?>

                <hr />
                <h4>Thank You</h4>
            </div>
        </div>

    </div>
    <?php if (! ($percent === null)): ?>
    <div class="card-footer bg-white">
        <div class="col-12">
            <h4>Summary:</h4>
            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="<?php echo e(__("width: $percent%")); ?>"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <?php echo e(__("You have spent $percent% of total budget amount in this transaction.")); ?>

        </div>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/accounting.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/transaction/show.blade.php ENDPATH**/ ?>