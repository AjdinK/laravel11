<!-- Item 1 -->
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['listing']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['listing']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="<?php echo e(asset('images/no-image.png')); ?>" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/<?php echo e($listing->id); ?>"><?php echo e($listing->title); ?></a>
            </h3>
            <div class="text-xl font-bold mb-4"><?php echo e($listing->company); ?></div>
            <?php if (isset($component)) { $__componentOriginald08d2da7be5ae2acd5a2941b6ebc07e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald08d2da7be5ae2acd5a2941b6ebc07e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.listing-tag','data' => ['tagsCsv' => $listing->tags]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('listing-tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tagsCsv' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing->tags)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald08d2da7be5ae2acd5a2941b6ebc07e9)): ?>
<?php $attributes = $__attributesOriginald08d2da7be5ae2acd5a2941b6ebc07e9; ?>
<?php unset($__attributesOriginald08d2da7be5ae2acd5a2941b6ebc07e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald08d2da7be5ae2acd5a2941b6ebc07e9)): ?>
<?php $component = $__componentOriginald08d2da7be5ae2acd5a2941b6ebc07e9; ?>
<?php unset($__componentOriginald08d2da7be5ae2acd5a2941b6ebc07e9); ?>
<?php endif; ?>

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> <?php echo e($listing->location); ?>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php /**PATH /home/loww/dev/laravel11/laravel11/resources/views/components/listing-card.blade.php ENDPATH**/ ?>