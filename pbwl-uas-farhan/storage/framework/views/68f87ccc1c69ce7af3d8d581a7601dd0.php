
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA TRANSAKSI</h3>
                <?php if(session()->has('success')): ?>
                <div class="alert alert-info" role="alert">
                    <?php echo e(session ('success')); ?>

                </div>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="<?php echo e(url('transaksi/create')); ?>">Tambah Data</a>
                </div>
                <table class="table table-light table-striped-columns">
                    <tr>
                        <td>NO</td>
                        <td>NAMA PELANGGAN</td>
                        <td>TANGGAL</td>
                        <td>EDIT</td>
                        <td>HAPUS</td>
                    </tr>
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->transaksi_id); ?></td>
                        <td><?php echo e($row->pelanggan->pelanggan_nama); ?></td>
                        <td><?php echo e($row->transaksi_tanggal); ?></td>
                        <td><a class="btn btn-info btn-sm float" href="<?php echo e(url('transaksi/' .$row->transaksi_id. '/edit')); ?>">Edit</a></td>
                        <td>
                            <form action="<?php echo e(url('transaksi/' .$row->transaksi_id)); ?>" method="post">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-juar\resources\views/transaksi/index.blade.php ENDPATH**/ ?>