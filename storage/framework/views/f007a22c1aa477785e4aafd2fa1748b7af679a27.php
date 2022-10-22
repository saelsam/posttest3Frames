
<?php $__env->startSection('Toko Buku'); ?>
Ini Halaman Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Daftar Buku</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <?php $__currentLoopData = $tokobukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tokobuku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col" >
                    <div class="d-inline-flex align-items-center 
                    justify-content-center bg-gradient fs-2 mb-3">
                    <h1 class="fs-2" ><?php echo e($tokobuku['nama']); ?></h1>
                    </div>
                    <h3 class="fs-2"><?php echo e($tokobuku['jenis']); ?></h3>
                    <p><?php echo e($tokobuku['harga']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\myFile\Semester 5\Praktek\Framework\tokobuku\resources\views/home.blade.php ENDPATH**/ ?>