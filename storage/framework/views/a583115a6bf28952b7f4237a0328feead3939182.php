
<?php $__env->startSection('title','Mahasiswa'); ?>
<?php $__env->startSection('menu2','active'); ?>


<?php $__env->startSection('content'); ?>
<div class="container text-center p-4">
    <h1>Data Mahasiswa</h1>
    <div class="row">
        <div class="m-auto">
            <table class="table">
                <thead bgcolor="lightblue">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Photo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php $__empty_1 = true; $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <td><?php echo e($loop -> iteration); ?></th>
                    <td><?php echo e($mahasiswa -> npm); ?></th>
                    <td><?php echo e($mahasiswa -> nama); ?></td>
                    <td><?php echo e($mahasiswa -> jenis_kelamin); ?></td>
                    <td><?php echo e($mahasiswa -> alamat); ?></td>
                    <td><?php echo e($mahasiswa -> tempat_lahir); ?></td>
                    <td><?php echo e($mahasiswa -> tanggal_lahir); ?></td>
                    <td><?php echo e($mahasiswa -> photo); ?></td>
                </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </table>
            <a href="/mahasiswa/insert" class="btn btn-primary text-right">Insert</a>
            <a href="/mahasiswa/update" class="btn btn-primary text-right">Update</a>
            <a href="/mahasiswa/select" class="btn btn-primary text-right">Select</a>
            <a href="/mahasiswa/delete" class="btn btn-primary text-right">Delete</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas2\resources\views/layout/mahasiswa.blade.php ENDPATH**/ ?>