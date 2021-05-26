<?php $__env->startSection('title','Experience List'); ?>

<?php $__env->startSection('body'); ?>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h4 class="page-title">Yor Experience History</h4>
                </div>
                <div class="col-sm-4 col-6 text-right m-b-30">
                    <a href="<?php echo e(route('doctorExperience.create')); ?>" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Experience</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive" >
                        <table class="table table-striped custom-table mb-0 datatable" id="tSearch">
                            <thead>
                            <tr>
                                <th>Position</th>
                                <th>Organization</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Details</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="searchData">
                            <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <a href="#" class="avatar">R</a>
                                        <h2><a href="#"><?php echo e($experience->position); ?></a></h2>
                                    </td>
                                    <td><?php echo e($experience->company); ?></td>
                                    <td><?php echo e($experience->from); ?></td>
                                    <td><?php if($experience-> to !=null): ?><?php echo e($experience->to); ?><?php else: ?><?php echo e("Working Here"); ?><?php endif; ?> </td>
                                    <td><?php echo e($experience->details); ?></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="<?php echo e(route('doctorExperience.edit',$experience->id)); ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <form method="post" action="<?php echo e(route('doctorExperience.destroy',$experience->id)); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button class="dropdown-item fa fa-trash-o m-r-5" onclick="return confirm('Are you confirm to delete?')"> Delete</button>
                                                </form>

                                            </div>
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('doctor.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/doctor/experience/index.blade.php ENDPATH**/ ?>