

<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1><p style="text-align:center">ISI DATA</p></h1>
        <form action="/mahasiswa/store" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nim</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select><br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="10"></textarea><br>
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Simpan">

        </form>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\alfan_crud\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>