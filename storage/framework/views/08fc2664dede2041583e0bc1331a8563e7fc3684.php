<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'PFMS')); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon" />

    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600&display=swap" rel="stylesheet" />

    
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    
    <?php echo $__env->yieldContent('style'); ?>
    <link href="<?php echo e(asset('css/dev.min.css')); ?>" rel="stylesheet" />
</head>

<body>

    
    <div class="sidebar-close text-center" id="sidebar-close">
        <i class="fa fa-chevron-left"></i>
    </div>
    
    <?php echo $__env->make('layouts.sidebar-new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    
    <main class="page-content px-2 py-5" id="content">
        <button id="sidebarCollapse" type="button" class="btn btn-menu shadow-sm px-4 mb-2">
            <i class="fa fa-bars mr-2"></i>
            <small class="text-uppercase font-weight-bold">Menu</small>
        </button>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    

    <!-- Jquery, Popeprjs and Bootstrap CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <?php echo $__env->yieldContent('script'); ?>

    <!-- Custom Js -->
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\iamsa\Downloads\personal-finanace-system\resources\views/layouts/app.blade.php ENDPATH**/ ?>