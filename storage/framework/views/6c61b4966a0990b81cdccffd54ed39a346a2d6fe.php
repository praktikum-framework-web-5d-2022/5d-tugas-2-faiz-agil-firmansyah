<?php $__env->startSection('title','Dosen'); ?>
<?php $__env->startSection('menu1','active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container text-center p-4">
    <p></p>
    <h1>Pilih Metode</h1>
    <p>Pilih dibawah untuk memilih metode.</p>
    <div class="row">
        <div class="m-auto">
            <a href="/dosen/delete/deleteRawSQL" class="btn btn-primary">Raw Sql</a>
            <a href="/dosen/delete/deleteQueryBuilder" class="btn btn-primary">Query Builder</a>
            <a href="/dosen/delete/deleteEloquent" class="btn btn-primary">Eloquent</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas2\resources\views/menu/dosenDelete.blade.php ENDPATH**/ ?>