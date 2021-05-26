    <div class="col-sm-12">
        <div class="form-group">
            <label>Position / Job Title<span class="text-danger">*</span></label>
            <input name="position" value="<?php echo e(old('position',isset($experience->position)?$experience->position:null)); ?>"  class="form-control" type="text">
            <?php if ($errors->has('position')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('position'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Organization<span class="text-danger">*</span></label>
            <input name="company" value="<?php echo e(old('company',isset($experience->company)?$experience->company:null)); ?>"  class="form-control" type="text">
            <?php if ($errors->has('company')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('company'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>From<span class="text-danger">*</span></label>
            <input name="from" value="<?php echo e(old('from',isset($experience->from)?$experience->from:null)); ?>"  class="form-control" type="date">
            <?php if ($errors->has('from')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('from'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>To<span class="text-danger"></span></label>
            <input name="to" value="<?php echo e(old('to',isset($experience->to)?$experience->to:null)); ?>"  class="form-control" type="date">
            <?php if ($errors->has('to')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('to'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label>Details<span class="text-danger"></span></label>

            <textarea  class="form-control" name="details" id="details" cols="30" rows="5"><?php echo e(old('details',isset($experience->details)?$experience->details:null)); ?></textarea>
            <?php if ($errors->has('details')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('details'); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
    </div>



<?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/doctor/experience/_form.blade.php ENDPATH**/ ?>