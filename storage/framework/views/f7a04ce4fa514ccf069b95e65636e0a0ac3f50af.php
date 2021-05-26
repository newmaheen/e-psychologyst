<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/admin')); ?>/assets/img/favicon.ico">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/admin')); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/admin')); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/admin')); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/admin')); ?>/assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/admin')); ?>/assets/css/bootstrap-datetimepicker.min.css">
    <script src="<?php echo e(asset('/admin')); ?>/assets/js/html5shiv.min.js"></script>
    <script src="<?php echo e(asset('/admin')); ?>/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
<?php echo $__env->make('admin.includes.navber', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.includes.slidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('body'); ?>
</div>
<div class="sidebar-overlay" data-reff=""></div>
<script src="<?php echo e(asset('/admin')); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo e(asset('/admin')); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo e(asset('/admin')); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/admin')); ?>/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo e(asset('/admin')); ?>/assets/js/Chart.bundle.js"></script>
<script src="<?php echo e(asset('/admin')); ?>/assets/js/chart.js"></script>
<script src="<?php echo e(asset('/admin')); ?>/assets/js/app.js"></script>
<script src="<?php echo e(asset('/admin')); ?>/assets/js/bootstrap-datetimepicker.min.js"></script>

</body>



</html>
<?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/admin/master.blade.php ENDPATH**/ ?>