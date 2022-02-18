

<?php $__env->startSection('content'); ?>
    
      <h1>medzisklad</h1>
      <?php if(count($medzisklads) > 0): ?>
       <?php $__currentLoopData = $medzisklads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medzisklad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
       <br>
            <?php echo e($medzisklad->datle); ?> <?php echo e($medzisklad->mandle); ?> <?php echo e($medzisklad->marcipan); ?> <?php echo e($medzisklad->orechy); ?>

           
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
       <?php else: ?>
       <p>nenasli sa zaznamy</p>
       <?php endif; ?>
      
          
           
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\informationsystem\resources\views/medzisklad/medzindex.blade.php ENDPATH**/ ?>