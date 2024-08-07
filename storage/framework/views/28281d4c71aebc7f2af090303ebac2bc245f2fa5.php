

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, ['title' => 'Dashboard','showCreate' => 'false','link' => '']); ?>
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
<div class="row m-2">
    <div class="col-md-12 mb-2">
        <small class="float-right" id="budget-title">Current Budget <code>i.e.</code></small>
    </div>
    <div class="col-md-3">
        <div class="card dashboard card-border-bottom rounded-sm bg-white mb-3">
            <div class="card-body flex-column">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title" id="total-income">0</h4>
                    </div>
                </div>
                <i class="fa fa-long-arrow-up text-success"></i>
                Total Income
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card dashboard card-border-bottom bg-white mb-3">
            <div class="card-body flex-column">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title for" id="total-expense">0</h4>
                    </div>
                </div>
                <i class="fa fa-long-arrow-down text-danger"></i>
                Total Expense
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card dashboard card-border-bottom bg-white mb-3">
            <div class="card-body flex-column">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title" id="total-balance">0</h4>
                    </div>
                </div>
                <i class="fa fa-bank text-primary"></i>
                Total Balance
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card dashboard card-border-bottom bg-white mb-3">
            <div class="card-body flex-column">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title" id="cash-on-hand">0</h4>
                    </div>
                </div>
                <i class="fa fa-money text-secondary"></i>
                Cash on Hand
            </div>
        </div>
    </div>
</div>

<div class="row m-2">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-white">
                <i class="fa fa-adjust text-primary mr-2"></i>
                <strong>Current Balances</strong>
            </div>
            <div class="card-body">
                <canvas id="current-balances"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header bg-white">
                <i class="fa fa-rupee text-success mr-2"></i>
                <strong>% of Budgets Income</strong>
            </div>
            <div class="card-body">
                <canvas id="percent-of-income"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header bg-white">
                <i class="fa fa-rupee text-danger mr-2"></i>
                <strong>% of Budgets Expense</strong>
            </div>
            <div class="card-body">
                <canvas id="percent-of-expense"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row m-2">
    <div class="col-lg-6">
        <div class="card border-0">
            <div class="card-header bg-white">
                <i class="fa fa-chevron-circle-left text-primary mr-2"></i>
                <strong>Previous Budgets</strong>
            </div>
            <div class="card-body p-0">
                <canvas id="previus-budgets"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row m-2">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-white">
                <i class="fa fa-table text-success mr-2"></i>
                <strong>Latest Income Transactions</strong>
            </div>
            <div class="card-body p-0">
                <table id="income" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Title</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-white">
                <i class="fa fa-table text-danger mr-2"></i>
                <strong>Latest Expense Transactions</strong>
            </div>
            <div class="card-body p-0">
                <table id="expense" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Title</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script src="<?php echo e(asset('js/accounting.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/home.blade.php ENDPATH**/ ?>