<?php $__env->startSection('body'); ?>
    <div class="page-wrapper">
        <div class="content">
            <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white"><?php echo e(isset($url) ? ucwords($url) : ""); ?> <?php echo e(__('Update Personal Info')); ?></div>

                    <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('doctor.update')); ?>" aria-label="<?php echo e(__('Update Personal Info')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e($doctor->name); ?>" required autocomplete="name" autofocus>

                                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                                            <div class="col-md-6">
                                                <input id="address" type="text" class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="address" value="<?php echo e($doctor->address); ?>" required autocomplete="address" autofocus>

                                                <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?>
                                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone')); ?></label>

                                            <div class="col-md-6">
                                                <input id="phone" type="text" class="form-control <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="phone" value="<?php echo e($doctor->phone); ?>" required autocomplete="name" autofocus>

                                                <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?>
                                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="last_degree" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Last Medical Degree')); ?></label>

                                            <div class="col-md-6">
                                                <input id="last_degree" type="text" class="form-control <?php if ($errors->has('last_degree')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_degree'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="last_degree" value="<?php echo e($doctor->last_degree); ?>" required autocomplete="name" autofocus>

                                                <?php if ($errors->has('last_degree')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_degree'); ?>
                                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Image')); ?></label>

                                            <div class="col-md-6">
                                                <input id="image" type="file" class="form-control <?php if ($errors->has('image')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('image'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="image" >

                                                <?php if ($errors->has('image')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('image'); ?>
                                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    <?php echo e(__('Update')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('doctor.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/doctor/edit.blade.php ENDPATH**/ ?>