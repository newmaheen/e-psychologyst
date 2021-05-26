    <div class="col-sm-12">
        <div class="form-group">
            <label>Degree Name<span class="text-danger">*</span></label>
            <input name="degree" value="<?php echo e(old('degree',isset($education->degree)?$education->degree:null)); ?>"  class="form-control" type="text">
            <?php if ($errors->has('degree')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('degree'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Result<span class="text-danger">*</span></label>
            <input name="result" value="<?php echo e(old('result',isset($education->result)?$education->result:null)); ?>"  class="form-control" type="text">
            <?php if ($errors->has('result')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('result'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Institute<span class="text-danger">*</span></label>
            <input name="institute" value="<?php echo e(old('institute',isset($education->institute)?$education->institute:null)); ?>"  class="form-control" type="text">
            <?php if ($errors->has('institute')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('institute'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Passing Year<span class="text-danger">*</span></label>
            <input name="passing_year" value="<?php echo e(old('passing_year',isset($education->passing_year)?$education->passing_year:null)); ?>"  class="form-control" type="text">
            <?php if ($errors->has('passing_year')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('passing_year'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Details<span class="text-danger"></span></label>

            <textarea  class="form-control" name="details" id="details" cols="30" rows="5"><?php echo e(old('details',isset($education->details)?$education->details:null)); ?></textarea>
            <?php if ($errors->has('details')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('details'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>



<?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/doctor/education/_form.blade.php ENDPATH**/ ?>