<?php $__env->startSection('title','Mahasiswa'); ?>
<?php $__env->startSection('menu2','active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container text-center p-4">
    <p></p>
    <h1>Pilih Metode</h1>
    <p>Pilih dibawah untuk memilih metode.</p>
    <div class="row">
        <div class="m-auto">
            <a href="/mahasiswa/delete/deleteRawSQL" class="btn btn-primary">Raw Sql</a>
            <a href="/mahasiswa/delete/deleteQueryBuilder" class="btn btn-primary">Query Builder</a>
            <a href="/mahasiswa/delete/deleteEloquent" class="btn btn-primary">Eloquent</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas2\resources\views/menu/mahasiswaDelete.blade.php ENDPATH**/ ?>