

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, ['title' => 'View Budget','showCreate' => 'true','link' => 'api/budegts/create']); ?>
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
<div class="row">
    <div class="col-md-6">
        <canvas id="budget"></canvas>
    </div>
    <div class="col-md-6 bg-white">
        <h4 class="mt-2"><strong id="budget-title"><?php echo e($budget->title); ?></strong></h4>
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
            <strong>Out of commision at:</strong> <?php echo e($budget->expiry_date->format('Y F d, l')); ?>

        </div>
        <div>
            <strong>Created At:</strong> <?php echo e($budget->created_at->format('Y F d, l')); ?>

        </div>
        <div class="row mt-4">
            <div class="col-sm-4">
                <div class="card rounded-0 text-white bg-primary mb-3">
                    <div class="card-header">Total Transactions</div>
                    <div class="card-body flex-column">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title"><?php echo e($totalTransactions); ?></h5>
                            </div>
                            <div class="col-auto ps-0">
                                <img src="<?php echo e(asset('icons/transaction.svg')); ?>" alt="transaction" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card rounded-0 text-white bg-success mb-3">
                    <div class="card-header">Profitable Transactions</div>
                    <div class="card-body flex-column">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title"><?php echo e($noOfIncomeTransactions); ?></h5>
                            </div>
                            <div class="col-auto ps-0">
                                <img src="<?php echo e(asset('icons/credit-card.svg')); ?>" alt="proftable transaction" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card rounded-0 text-white bg-danger mb-3">
                    <div class="card-header">Unprofitable Transactions</div>
                    <div class="card-body flex-column">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title"><?php echo e($totalTransactions - $noOfIncomeTransactions); ?></h5>
                            </div>
                            <div class="col-auto ps-0">
                                <img src="<?php echo e(asset('icons/credit-card.svg')); ?>" alt="unprofitable transaction"
                                    style="fill: red" />
                            </div>
                        </div>
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
<script src="<?php echo e(asset('js/budget.show.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/budget/show.blade.php ENDPATH**/ ?>