<?php $__env->startSection('title','Add New Schedule'); ?>

<?php $__env->startSection('body'); ?>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add New Schedule</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="<?php echo e(route('doctorSchedule.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Day<span class="text-danger">*</span></label>
                                    <select class="form-control" name="day" id="day" required >
                                        <option value="" disabled selected>Select Day</option>
                                        <option <?php if(old('day')=='Sun Day'): ?> selected <?php endif; ?> value="Sun Day"> Sun Day</option>
                                        <option <?php if(old('day')=='Mon Day'): ?> selected <?php endif; ?> value="Mon Day"> Mon day</option>
                                        <option <?php if(old('day')=='Tues Day'): ?> selected <?php endif; ?> value="Tues Day"> Tuesday</option>
                                        <option <?php if(old('day')=='Wednesday'): ?> selected <?php endif; ?> value="Wednesday"> Wednesday</option>
                                        <option <?php if(old('day')=='Thursday'): ?> selected <?php endif; ?> value="Thursday"> Thursday</option>
                                        <option <?php if(old('day')=='Friday'): ?> selected <?php endif; ?> value="Friday"> Friday</option>
                                        <option <?php if(old('day')=='Saturday'): ?> selected <?php endif; ?> value="Saturday"> Saturday</option>
                                    </select>
                                    
                                    <?php if ($errors->has('day')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('day'); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Start Time<span class="text-danger">*</span></label>
                                    <input name="time_from" value="<?php echo e(old('time_from')); ?>"  class="form-control" type="time">
                                    <?php if ($errors->has('time_from')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('time_from'); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>End time<span class="text-danger">*</span></label>
                                    <input name="time_to" value="<?php echo e(old('time_to')); ?>"  class="form-control" type="time">
                                    <?php if ($errors->has('time_to')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('time_to'); ?>
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

<?php echo $__env->make('doctor.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/doctor/schedule/new.blade.php ENDPATH**/ ?>