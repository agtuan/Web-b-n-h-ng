<?php $__env->startSection('title', 'Đăng nhập - Fashion Shop'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Đăng nhập</h4>
                </div>

                <div class="card-body p-4">
                    <!-- Session Status -->
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Địa chỉ Email</label>
                            <input id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus autocomplete="username" />
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input id="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="password" required autocomplete="current-password" />
                             <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-3 form-check">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <label class="form-check-label" for="remember_me">Ghi nhớ tôi</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <?php if(Route::has('password.request')): ?>
                                <a class="text-decoration-none" href="<?php echo e(route('password.request')); ?>">
                                    Quên mật khẩu?
                                </a>
                            <?php endif; ?>

                            <button type="submit" class="btn btn-primary">
                                Đăng nhập
                            </button>
                        </div>

                        <hr>

                        <div class="text-center">
                            <p class="mb-0">Chưa có tài khoản? <a href="<?php echo e(route('register')); ?>" class="text-decoration-none">Đăng ký ngay</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Webbanhang\clothing-shop-master\clothing-shop\resources\views/auth/login.blade.php ENDPATH**/ ?>