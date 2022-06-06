
<?php $__env->startSection('content'); ?>
<div class="container pb-2">
 <a class="btn btnsuccess" href="<?php echo e(route('product/register')); ?>" role="button"> <?php echo e(__('New product')); ?>

</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 <?php echo e(__('product List')); ?>

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
<th>
 unit
 </th>
 <th>
 price
 </th>
 <th>
 quantity
 </th>
 <th></th>
 </tr>
 </thead>
 <tbody>
 <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($product->id); ?></td>
 <td> <?php echo e($product->name); ?></td>
 <td> <?php echo e($product->unit); ?></td>
 <td> <?php echo e($product->price); ?></td>
 <td> <?php echo e($product->quantity); ?></td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/product/search/<?php echo e($product->id); ?>">search</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/product/edit/<?php echo e($product->id); ?>">update</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/product/delete/<?php echo e($product->id); ?>">Delete</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\laravelproject\ecommerce\resources\views/product/list.blade.php ENDPATH**/ ?>