

<?php $__env->startSection('title','Kisah Sukses'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Kisah Sukses</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white p-4 rounded shadow">
                <?php if($s->image): ?>
                    <img src="<?php echo e(asset('storage/'.$s->image)); ?>" alt="" class="w-full h-40 object-cover rounded mb-3">
                <?php endif; ?>
                <h3 class="font-bold text-lg"><?php echo e($s->name); ?></h3>
                <p class="text-sm text-gray-600"><?php echo e(Str::limit($s->story, 120)); ?></p>
                <a href="#" class="inline-block mt-3 text-sm text-brand-pink font-semibold">Baca Selengkapnya</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="mt-6"><?php echo e($stories->links()); ?></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP\company-profile\resources\views/pages/success.blade.php ENDPATH**/ ?>