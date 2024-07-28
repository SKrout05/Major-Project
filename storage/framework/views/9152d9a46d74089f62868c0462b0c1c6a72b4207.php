

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, ['title' => 'Currently Active Budget','showCreate' => 'false','link' => '']); ?>
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
<div class="row">
    <div class="col-md-6">
        <canvas id="current-budget"></canvas>
    </div>
    <div class="col-md-6">
        <h4><strong id="budget-title"><?php echo e($budget->title); ?></strong></h4>
        <hr />
        <div>
            <strong>Alloted Amount:</strong> <span class="format-amount"
                data-amount="<?php echo e($budget->alloted_amount); ?>"></span>
        </div>
        <div>
            <strong>Spendings:</strong> <span id="spendings" class="format-amount"
                data-amount="<?php echo e($budget->alloted_amount - $budget->balance_amount); ?>"></span>
        </div>
        <div>
            <strong>Savings:</strong> <span id="savings" class="format-amount"
                data-amount="<?php echo e($budget->balance_amount); ?>"></span>
        </div>
        <div>
            <strong>Status:</strong>
            <span class="badge badge-primary border-0">Active</span>
        </div>
        <div>
            <strong>Out of commision at:</strong> <?php echo e($budget->expiry_date->format('Y F d, l')); ?>

        </div>
        <div>
            <strong>Created At:</strong> <?php echo e($budget->created_at->format('Y F d, l')); ?>

        </div>
        <span hidden
            id="total-days"><?php echo e(\Carbon\Carbon::parse($budget->created_at)->diffInDays($budget->expiry_date) + 2); ?>

        </span>
        <span id="remaining-days" hidden><?php echo e($remainingDays); ?></span>
        <div class="m-2">
            <canvas id="line-chart"></canvas>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card card-border-bottom custom-rounded mb-3">
                    <div class="card-body flex-column">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title"><?php echo e($totalTransactions); ?></h5>
                            </div>
                        </div>
                        <div><i class="fa fa-list text-size text-1"></i></div>
                        <?php if($totalTransactions === 1): ?>
                        Transaction
                        <?php elseif($totalTransactions === 0): ?>
                        No transaction
                        <?php else: ?>
                        Total Transactions
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-border-bottom custom-rounded mb-3">
                    <div class="card-body flex-column">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title"><?php echo e($noOfIncomeTransactions); ?></h5>
                            </div>
                        </div>
                        <div><i class="fa fa-cart-arrow-down text-size text-success"></i></div>
                        <?php if($totalTransactions === 1): ?>
                        Profitable Transaction
                        <?php elseif($totalTransactions === 0): ?>
                        No transaction
                        <?php else: ?>
                        Profitable Transactions
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-border-bottom custom-rounded mb-3">
                    <div class="card-body flex-column">
                        <div class="row">
                            <div class="col">
                                <h4 class="card-title"><?php echo e($totalTransactions - $noOfIncomeTransactions); ?></h4>
                            </div>
                        </div>
                        <div><i class="fa fa-cart-plus text-size text-danger"></i></div>
                        <?php if($totalTransactions === 1): ?>
                        Unprofitable Transaction
                        <?php elseif($totalTransactions === 0): ?>
                        No transaction
                        <?php else: ?>
                        Unprofitable Transactions
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/accounting.min.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?php echo e(asset('js/budget.current.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/budget/current.blade.php ENDPATH**/ ?>