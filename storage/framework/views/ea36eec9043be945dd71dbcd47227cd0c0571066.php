<?php $__env->startSection('title','Insert Berhasil'); ?>
<?php $__env->startSection('menu1','active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container fluid text-center mt-3 p-4 bg-white">
    <h1 class="alert alert-success">Data berhasil ditambahkan</h1>
    <P>Tekan tombol Home untuk melihat data.</p>
    <a href="/dosen" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Home</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas2\resources\views/notification/insertDosen.blade.php ENDPATH**/ ?>