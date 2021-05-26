<?php $__env->startSection('title','Doctors List'); ?>

<?php $__env->startSection('body'); ?>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h4 class="page-title">Current Doctors</h4>
                </div>
                <div class="col-sm-4 col-6 text-right m-b-30">
                    <a href="<?php echo e(route('request-doctor')); ?>" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> View Doctor Requests</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive" >
                        <table class="table table-striped custom-table mb-0 datatable" id="tSearch">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Last Degree</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody id="searchData">
                            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <a href="#" class="avatar">R</a>
                                        <h2><a href="#"><?php echo e($doctor->naame); ?></a></h2>
                                    </td>
                                    <td><?php echo e($doctor->address); ?></td>
                                    <td><?php echo e($doctor->email); ?></td>
                                    <td><?php echo e($doctor->phone); ?></td>
                                    <td><?php echo e($doctor->last_degree); ?></td>
                                    <td class="text-right">
                                        <div class="btn btn-danger">
                                            <a href="<?php echo e(route('approve-doctor',$doctor->id)); ?>">Make Inactive</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="see-all">
                                <span class="see-all-links" ><?php echo e($doctors->links()); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/admin/doctors/index.blade.php ENDPATH**/ ?>