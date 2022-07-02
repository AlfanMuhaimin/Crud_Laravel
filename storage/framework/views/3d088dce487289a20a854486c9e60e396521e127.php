

<?php $__env->startSection('content'); ?>
    <div class="container">
    <h1><p style="text-align:center">EDIT DATA</p></h1>

    <form action="/mahasiswa/<?php echo e($mahasiswa->id); ?>" method="POST">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <form action="/mahasiswa/store" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($mahasiswa->nama); ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nim</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($mahasiswa->nim); ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($mahasiswa->jurusan); ?>">
            </div>
           
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" <?php if($mahasiswa->jenis_kelamin == "L"): ?> selected <?php endif; ?>>Laki-Laki</option>
                <option value="P" <?php if($mahasiswa->jenis_kelamin == "P"): ?> selected <?php endif; ?>>Perempuan</option>
            </select><br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="10"><?php echo e($mahasiswa->alamat); ?></textarea><br>
            <input type="submit" name="submit" class="btn btn-info" value="Perbarui">
    </form>
    </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\alfan_crud\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>