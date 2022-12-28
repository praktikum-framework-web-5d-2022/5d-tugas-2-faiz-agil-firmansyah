
<?php $__env->startSection('title','Mata Kuliah'); ?>
<?php $__env->startSection('menu3','active'); ?>


<?php $__env->startSection('content'); ?>
<div class="container text-center p-4">
    <h1>Data Mata Kuliah</h1>
    <div class="row">
        <div class="m-auto">
            <table class="table">
                <thead bgcolor="lightblue">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Mata Kuliah</th>
                    <th scope="col">Nama Mata Kuliah</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php $__empty_1 = true; $__currentLoopData = $matakuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <td><?php echo e($loop -> iteration); ?></th>
                    <td><?php echo e($matakuliah -> kode_mk); ?></th>
                    <td><?php echo e($matakuliah -> nama_mk); ?></td>
                </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </table>
            <a href="/matakuliah/insert" class="btn btn-primary text-right">Insert</a>
            <a href="/matakuliah/update" class="btn btn-primary text-right">Update</a>
            <a href="/matakuliah/select" class="btn btn-primary text-right">Select</a>
            <a href="/matakuliah/delete" class="btn btn-primary text-right">Delete</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas2\resources\views/layout/matakuliah.blade.php ENDPATH**/ ?>