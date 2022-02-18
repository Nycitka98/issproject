<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand"><?php echo e(config('app.name', 'Systém')); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link"  href="/sklad">Sklad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/zamestnanci">Zamestnanci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ekonomika">Ekonomika</a>
        </li>
      </ul>
      
      <div class="dropdown text-end">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['align' => 'right','width' => '20']]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['align' => 'right','width' => '20']); ?>
             <?php $__env->slot('trigger', null, []); ?> 
                <button type="button" class="btn btn-dark" >
                    <div><?php echo e(Auth::user()->name); ?></div> 
                </button>
             <?php $__env->endSlot(); ?>
        
             <?php $__env->slot('content', null, []); ?> 
                <!-- Authentication -->
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                         <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                        this.closest(\'form\').submit();','class' => 'btn btn-white']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                        this.closest(\'form\').submit();','class' => 'btn btn-white']); ?>
                        <?php echo e(__('Log Out')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </form>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>  
</div>
 </div>  
</nav>

<?php /**PATH C:\xampp\htdocs\informationsystem\resources\views/inc/navbar.blade.php ENDPATH**/ ?>