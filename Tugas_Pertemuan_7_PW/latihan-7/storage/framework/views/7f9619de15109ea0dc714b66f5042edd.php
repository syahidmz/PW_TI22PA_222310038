<?php $__env->startSection('main-content'); ?>
    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header fw-bold">
                    List of Users
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tgl Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">No. Telepon</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th><?php echo e($loop->index + 1); ?></th>
                                        <td><?php echo e($member->email); ?></td>
                                        <td><?php echo e($member->name); ?></td>
                                        <td><?php echo e($member->address); ?></td>
                                        <td><?php echo e($member->birthdate); ?></td>
                                        <td><?php echo e($member->gender); ?></td>
                                        <td><?php echo e($member->phone); ?></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="/details/<?php echo e($member->id); ?>">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </button>
                                                </a>
                                                <a href="/update/<?php echo e($member->id); ?>">
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                </a>
                                                <a href="/delete/<?php echo e($member->id); ?>">
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah data tersebut mau dihapus?')">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <?php echo e($data->links()); ?>

            </div>
        </div>
        <div class="col-lg-4">
            <?php echo $__env->make('member.modules.identity.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('member.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan-7\resources\views/member/modules/identity/index.blade.php ENDPATH**/ ?>