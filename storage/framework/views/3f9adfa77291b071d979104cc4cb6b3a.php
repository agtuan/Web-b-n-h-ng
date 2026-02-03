<?php $__env->startSection('title', 'Sửa người dùng - Admin'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h1 class="section-title mb-5"><i class="fas fa-user-edit"></i> Sửa thông tin người dùng</h1>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('admin.users.update', $user)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                            <label for="name" class="form-label">Họ tên</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $user->name)); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email', $user->email)); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Vai trò</label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="user" <?php if(old('role', $user->role == 1 ? 'admin' : 'user') == 'user'): echo 'selected'; endif; ?>>User</option>
                                <option value="admin" <?php if(old('role', $user->role == 1 ? 'admin' : 'user') == 'admin'): echo 'selected'; endif; ?>>Admin</option>
                            </select>
                        </div>

                        <hr class="my-4">

                        <p class="text-muted">Để trống phần mật khẩu nếu bạn không muốn thay đổi.</p>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu mới</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Xác nhận mật khẩu mới</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Quay lại
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Lưu thay đổi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Webbanhang\clothing-shop-master\clothing-shop\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>