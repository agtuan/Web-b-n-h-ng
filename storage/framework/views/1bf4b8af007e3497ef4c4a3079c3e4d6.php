<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Panel'); ?> - Fashion Shop</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .sidebar {
            min-height: 100vh;
            background: #343a40;
        }
        .sidebar .nav-link {
            color: #fff;
            padding: 10px 20px;
        }
        .sidebar .nav-link:hover {
            background: #495057;
        }
        .sidebar .nav-link.active {
            background: #007bff;
        }
        .main-content {
            padding: 20px;
        }
    </style>
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="text-white text-center py-4 border-bottom border-secondary">
                <h4><i class="fas fa-store"></i> Admin Panel</h4>
            </div>
            <nav class="nav flex-column mt-3">
                <a class="nav-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a class="nav-link <?php echo e(request()->routeIs('admin.categories.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.categories.index')); ?>">
                    <i class="fas fa-list"></i> Danh mục
                </a>
                <a class="nav-link <?php echo e(request()->routeIs('admin.products.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.products.index')); ?>">
                    <i class="fas fa-box"></i> Sản phẩm
                </a>
                <a class="nav-link <?php echo e(request()->routeIs('admin.orders.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.orders.index')); ?>">
                    <i class="fas fa-shopping-cart"></i> Đơn hàng
                </a>
                <a class="nav-link <?php echo e(request()->routeIs('admin.users.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.users.index')); ?>">
                    <i class="fas fa-users"></i> Người dùng
                </a>
                <hr class="text-white">
                <a class="nav-link" href="<?php echo e(route('home')); ?>" target="_blank">
                    <i class="fas fa-globe"></i> Xem website
                </a>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="nav-link text-start w-100 border-0 bg-transparent">
                        <i class="fas fa-sign-out-alt"></i> Đăng xuất
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1">
            <!-- Top Bar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container-fluid">
                    <span class="navbar-text">
                        <i class="fas fa-user"></i> Xin chào, <strong><?php echo e(Auth::user()->name); ?></strong>
                    </span>
                </div>
            </nav>

            <!-- Content -->
            <div class="main-content">
                <!-- Alert Messages -->
                <?php if(session('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>
                
                <?php if(session('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo e(session('error')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>

                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Webbanhang\clothing-shop-master\clothing-shop\resources\views/layouts/admin.blade.php ENDPATH**/ ?>