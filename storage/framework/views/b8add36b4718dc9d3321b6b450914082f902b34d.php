<?php $__env->startSection('title','Dosen'); ?>
<?php $__env->startSection('menu1','active'); ?>


<?php $__env->startSection('content'); ?>
<div class="container text-center p-4">
    <h1>Data Dosen</h1>
    <div class="row">
        <div class="m-auto">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIDN</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Foto</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php $__empty_1 = true; $__currentLoopData = $dosens2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <td><?php echo e($loop -> iteration); ?></th>
                    <td><?php echo e($dosen -> nidn); ?></th>
                    <td><?php echo e($dosen -> nama); ?></td>
                    <td><?php echo e($dosen -> jenis_kelamin); ?></td>
                    <td><?php echo e($dosen -> alamat); ?></td>
                    <td><?php echo e($dosen -> tempat_lahir); ?></td>
                    <td><?php echo e($dosen -> tanggal_lahir); ?></td>
                    <td><?php echo e($dosen -> photo); ?></td>
                </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </table>
            <a href="/dosen" class="btn btn-primary text-right">Kembali</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas2\resources\views/select/dosenQueryBuilder.blade.php ENDPATH**/ ?>