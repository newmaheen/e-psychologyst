<?php $__env->startSection('title','Add New Schedule'); ?>

<?php $__env->startSection('body'); ?>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add New Blog Information</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="<?php echo e(route('blogInformation.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Title<span class="text-danger">*</span></label>
                                   
                                     <input name="blogTitle" class="form-control" type="text">
                                    <?php if ($errors->has('blogTitle')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('blogTitle'); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description<span class="text-danger">*</span></label>
                                   
                                    <textarea name="blogDescription" class="form-control" rows="4" cols="50"> </textarea>
                                    <?php if ($errors->has('blogDescription')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('blogDescription'); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Posting Date<span class="text-danger">*</span></label>
                                    <input name ="date" class="form-control" type="date">
                                    <?php if ($errors->has('date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('date'); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                          
                            <div class="col-sm-12 m-t-20 text-center">
                                <button type="submit" name="submit" class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('doctor.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/doctor/blogInformation/new.blade.php ENDPATH**/ ?>