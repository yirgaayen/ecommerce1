
<?php $__env->startSection('content'); ?>
<div class="container pb-2">
 <a class="btn btnsuccess" href="<?php echo e(route('products/register')); ?>" role="button"> <?php echo e(__('New products')); ?>

</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 <?php echo e(__('products List')); ?>

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
 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td> <?php echo e($products->id); ?></td>
 <td> <?php echo e($products->name); ?></td>
 <td> <?php echo e($products->unit); ?></td>
 <td> <?php echo e($products->price); ?></td>
 <td> <?php echo e($products->quantity); ?></td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/products/search/<?php echo e($products->id); ?>">search</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/products/edit/<?php echo e($products->id); ?>">update</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/products/delete/<?php echo e($products->id); ?>">Delete</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\laravelproject\ecommerce\resources\views/products/list.blade.php ENDPATH**/ ?>