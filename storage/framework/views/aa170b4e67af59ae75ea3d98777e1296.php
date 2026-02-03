<?php $__env->startSection('title', 'Quản lý người dùng - Admin'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h1 class="section-title mb-5"><i class="fas fa-users-cog"></i> Quản lý người dùng</h1>

    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-success">
            <i class="fas fa-plus"></i> Thêm người dùng mới
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Vai trò</th>
                            <th>Ngày tham gia</th>
                            <th class="text-end">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                    <?php if($user->role == 1): ?>
                                        <span class="badge bg-primary">Admin</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">User</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($user->created_at->format('d/m/Y')); ?></td>
                                <td class="text-end">
                                    <form action="<?php echo e(route('admin.users.destroy', $user)); ?>" method="POST" class="d-inline">
                                        <a href="<?php echo e(route('admin.users.edit', $user)); ?>" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i> Sửa
                                        </a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <?php if(auth()->id() !== $user->id): ?>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?')">
                                                <i class="fas fa-trash"></i> Xóa
                                            </button>
                                        <?php endif; ?>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center">Không có người dùng nào.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <?php if($users->hasPages()): ?>
                <div class="mt-4">
                    <?php echo e($users->links()); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Webbanhang\clothing-shop-master\clothing-shop\resources\views/admin/users/index.blade.php ENDPATH**/ ?>