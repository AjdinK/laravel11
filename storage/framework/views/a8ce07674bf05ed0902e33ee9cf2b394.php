<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials._hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        <?php if (! (count($listings) == 0)): ?>
            <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal31ec1dc5dadb4835ef50de3d88e519ce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal31ec1dc5dadb4835ef50de3d88e519ce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.listing-card','data' => ['listing' => $listing]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('listing-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['listing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal31ec1dc5dadb4835ef50de3d88e519ce)): ?>
<?php $attributes = $__attributesOriginal31ec1dc5dadb4835ef50de3d88e519ce; ?>
<?php unset($__attributesOriginal31ec1dc5dadb4835ef50de3d88e519ce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal31ec1dc5dadb4835ef50de3d88e519ce)): ?>
<?php $component = $__componentOriginal31ec1dc5dadb4835ef50de3d88e519ce; ?>
<?php unset($__componentOriginal31ec1dc5dadb4835ef50de3d88e519ce); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <p>Jobs is empty</p>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/loww/dev/laravel11/laravel11/resources/views/listings.blade.php ENDPATH**/ ?>