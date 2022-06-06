
<?php $__env->startSection('content'); ?>
<div class="container pb-2">
 <a class="btn btnsuccess" href="<?php echo e(route('catagory/register')); ?>" role="button"> <?php echo e(__('catagory')); ?>

</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 <?php echo e(__('catagory List')); ?>

 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 id
 </th>
<th>
name
 </th>

 </tr>
 </thead>
 <tbody>
 <?php $__currentLoopData = $catagory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($catagory->id); ?></td>
 <td> <?php echo e($catagory->name); ?></td>

 
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/catagory/search/<?php echo e($catagory->id); ?>">Search</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/catagory/edit/<?php echo e($catagory->id); ?>">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/catagory/delete/<?php echo e($catagory->id); ?>">Delete</a>
 </td>
 </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\laravelproject\ecommerce\resources\views/catagory/list.blade.php ENDPATH**/ ?>