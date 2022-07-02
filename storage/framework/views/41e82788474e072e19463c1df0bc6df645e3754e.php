

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><p style="text-align:center">TABEL MAHASISWA</p></h1>
        <a class="btn btn-primary" href="/mahasiswa/create">+ Tambah List</a>
        <table class="table table-success table-striped">
            <tr>
                <th>NOMOR</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>JURUSAN</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>OPSI</th>
            </tr>
            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($m->id); ?></td>
                    <td><?php echo e($m->nama); ?></td>
                    <td><?php echo e($m->nim); ?></td>
                    <td><?php echo e($m->jurusan); ?></td>
                    <td><?php echo e($m->jenis_kelamin); ?></td>
                    <td><?php echo e($m->alamat); ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/mahasiswa/<?php echo e($m->id); ?>/edit">Edit</a>
                            <form action="/mahasiswa/<?php echo e($m->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input type="submit" class="btn btn-danger" value="Hapus">
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\alfan_crud\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>