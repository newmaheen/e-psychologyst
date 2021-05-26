<?php $__env->startSection('title','Add New Schedule'); ?>

<?php $__env->startSection('body'); ?>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Write Prescription</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="<?php echo e(route('prescription.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div>
                        <input type = "hidden" name="patient_id" value = <?php echo e($appointment_id); ?> />
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Disorder History<span class="text-danger">*</span></label>
                                   
                                    <textarea name="disorder_history" class="form-control" rows="4" cols="50"> </textarea>
                                    <?php if ($errors->has('disorder_history')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('disorder_history'); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Prescription<span class="text-danger">*</span></label>
                                   
                                    <textarea name="prescription" class="form-control" rows="4" cols="50"> </textarea>
                                    <?php if ($errors->has('prescription')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('prescription'); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Test<span class="text-danger">*</span></label>
                                    <textarea name="test" class="form-control" rows="4" cols="50"> </textarea>
                                    <?php if ($errors->has('test')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('test'); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                          
                            <div class="col-sm-12 m-t-20 text-center">
                                <button type="submit" name="submit" class="btn btn-primary submit-btn">Save and send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('doctor.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/doctor/prescription/prescription.blade.php ENDPATH**/ ?>