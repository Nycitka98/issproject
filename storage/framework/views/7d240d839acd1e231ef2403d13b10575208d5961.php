

<?php $__env->startSection('content'); ?>
    
      
      
      
      <h3> Príjem v sklade</h3>
      <br>
      <?php echo Form::open(['action' => 'App\Http\Controllers\SkladController@store', 'method' => 'POST']); ?>

              <div class="row">  
                <div class="form-group col-md-2">
                  
                    <?php echo e(Form::number('datle', '', ['class' => 'form-control', 'placeholder' => 'Ďatle'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('mandle', '', ['class' => 'form-control', 'placeholder' => 'Mandle'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('marcipan', '', ['class' => 'form-control', 'placeholder' => 'Marcipán'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('orechy', '', ['class' => 'form-control', 'placeholder' => 'Orechy'])); ?>

                </div>
                <div class="form-group col-md-2">
                <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

                
                
            </div>
        </div>
        <?php echo Form::close(); ?>

       
        <?php if(count($sklads) > 0): ?>
                <?php $__currentLoopData = $sklads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sklad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                <br>
                     <?php echo e($sklad->datle); ?> <?php echo e($sklad->mandle); ?> <?php echo e($sklad->marcipan); ?> <?php echo e($sklad->orechy); ?>

                     
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
                <?php else: ?>
                <p>nenasli sa zaznamy</p>
                <?php endif; ?>
       <br> 
      
       <br>
       <br>
       <br>
       <h3>Zo skladu do výroby</h3>
      <br>
      <?php echo Form::open(['action' => 'App\Http\Controllers\ZoskladudovyrobyController@store', 'method' => 'POST']); ?>

              <div class="row">  
                <div class="form-group col-md-2">
                  
                    <?php echo e(Form::number('zoskladudovyrobydatle', '', ['class' => 'form-control', 'placeholder' => 'Ďatle'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('zoskladudovyrobymandle', '', ['class' => 'form-control', 'placeholder' => 'Mandle'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('zoskladudovyrobymarcipan', '', ['class' => 'form-control', 'placeholder' => 'Marcipán'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('zoskladudovyrobyorechy', '', ['class' => 'form-control', 'placeholder' => 'Orechy'])); ?>

                </div>
                <div class="form-group col-md-2">
                <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

            </div>
        </div>
       <?php echo Form::close(); ?>

       
       
       
      
       <br>
       <br>
       <br>
       <br>
       <h3> Medzisklad</h3>
      <br>
      <?php echo Form::open(['action' => 'App\Http\Controllers\MedziskladController@store', 'method' => 'POST']); ?>

              <div class="row">  
                <div class="form-group col-md-2">
                  
                    <?php echo e(Form::number('medzidatle', '', ['class' => 'form-control', 'placeholder' => 'Ďatle'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('medzimandle', '', ['class' => 'form-control', 'placeholder' => 'Mandle'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('medzimarcipan', '', ['class' => 'form-control', 'placeholder' => 'Marcipán'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('medziorechy', '', ['class' => 'form-control', 'placeholder' => 'Orechy'])); ?>

                </div>
                <div class="form-group col-md-2">
                <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

            </div>
        </div>
       <?php echo Form::close(); ?>

 
        <?php $__currentLoopData = $medzisklads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medzisklad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
       <br>
            <?php echo e($medzisklad->datle); ?> <?php echo e($medzisklad->mandle); ?> <?php echo e($medzisklad->marcipan); ?> <?php echo e($medzisklad->orechy); ?>

           
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
      
      
       
       
       
       <br>
       <br>
       <br>
       <br>
       <h3> Výdaj zo skladu</h3>
      <br>
      <?php echo Form::open(['action' => 'App\Http\Controllers\VydajskladController@store', 'method' => 'POST']); ?>

              <div class="row">  
                <div class="form-group col-md-2">
                  
                    <?php echo e(Form::number('vydajdatle', '', ['class' => 'form-control', 'placeholder' => 'Ďatle'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('vydajmandle', '', ['class' => 'form-control', 'placeholder' => 'Mandle'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('vydajmarcipan', '', ['class' => 'form-control', 'placeholder' => 'Marcipán'])); ?>

                </div>
                    <div class="form-group col-md-2">
                    <?php echo e(Form::number('vydajorechy', '', ['class' => 'form-control', 'placeholder' => 'Orechy'])); ?>

                </div>
                <div class="form-group col-md-2">
                <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

            </div>
        </div>
       <?php echo Form::close(); ?>

      

       <br>
       <br>
       <br>
       <br>
     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\informationsystem\resources\views/sklads/index.blade.php ENDPATH**/ ?>