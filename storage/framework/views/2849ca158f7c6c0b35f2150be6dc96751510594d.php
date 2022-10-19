<?php $__env->startSection('title','Insert Dosen'); ?>
<?php $__env->startSection('menu1','active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container text-center p-4">
    <p></p>
    <h1>Pilih Metode</h1>
    <p>Pilih Button untuk menentukan metode yang digunakan.</p>
    <div class="row">
        <div class="m-auto">
            <a href="/dosen/insert/insertRawSQL" class="btn btn-primary">Raw Sql</a>
            <a href="/dosen/insert/insertQueryBuilder" class="btn btn-primary">Query Builder</a>
            <a href="/dosen/insert/insertEloquent" class="btn btn-primary">Eloquent</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas2\resources\views/menu/dosenInsert.blade.php ENDPATH**/ ?>