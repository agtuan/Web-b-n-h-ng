<?php $__env->startSection('title', 'Đăng ký tài khoản - Fashion Shop'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Đăng ký tài khoản</h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input id="name" class="form-control" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus autocomplete="name" />
                        </div>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Địa chỉ Email</label>
                            <input id="email" class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="username" />
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Đăng ký
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Webbanhang\clothing-shop-master\clothing-shop\resources\views/auth/register.blade.php ENDPATH**/ ?>