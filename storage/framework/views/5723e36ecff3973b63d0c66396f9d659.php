<?php $__env->startSection('title', 'Trang chủ - Fashion Shop'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Hero Banner -->
    <div class="row mb-5">
        <div class="col-12">
            <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 16px; padding: 4rem 2rem; text-align: center; color: white;">
                <h1 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">Chào mừng đến Fashion Shop</h1>
                <p style="font-size: 1.1rem; margin-bottom: 0; opacity: 0.95;">Khám phá bộ sưu tập thời trang mới nhất từ các thương hiệu hàng đầu</p>
            </div>
        </div>
    </div>

    <!-- Search Form Mobile -->
    <div class="row mb-4 d-lg-none">
        <div class="col-12">
            <form method="GET" action="<?php echo e(route('search')); ?>" class="mb-4">
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Tìm sản phẩm..." value="<?php echo e(request('keyword') ?? ''); ?>">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Categories Filter -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="section-title">Danh mục sản phẩm</h2>
            <div class="d-flex flex-wrap gap-2">
                <a href="<?php echo e(route('home')); ?>" class="btn <?php echo e(!request('category') ? 'btn-primary' : 'btn-outline-primary'); ?>" style="border-radius: 25px; padding: 10px 20px;">
                    <i class="fas fa-th-large"></i> Tất cả
                </a>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('category', $cat->slug)); ?>" class="btn btn-outline-primary" style="border-radius: 25px; padding: 10px 20px;">
                        <i class="fas fa-tag"></i> <?php echo e($cat->name); ?> (<?php echo e($cat->products_count); ?>)
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="section-title">Sản phẩm nổi bật</h2>
        </div>
    </div>

    <div class="row g-4">
        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card h-100">
                    <a href="<?php echo e(route('product', $product->slug)); ?>" style="text-decoration: none; color: inherit;">
                        <img src="<?php echo e(asset($product->image)); ?>" class="product-image w-100" alt="<?php echo e($product->name); ?>">
                    </a>
                    <div class="card-body">
                        <span class="category-badge"><?php echo e($product->category->name); ?></span>
                        <h5 class="card-title" style="min-height: 3rem;">
                            <a href="<?php echo e(route('product', $product->slug)); ?>" class="text-decoration-none text-dark">
                                <?php echo e($product->name); ?>

                            </a>
                        </h5>
                        <p class="product-price">
                            <?php echo e(number_format($product->price, 0, ',', '.')); ?>₫
                        </p>
                        <p class="text-muted" style="font-size: 0.9rem;">
                            <i class="fas fa-boxes"></i> Còn lại: <strong><?php echo e($product->quantity); ?></strong>
                        </p>
                        <?php if($product->quantity > 0): ?>
                            <form action="<?php echo e(route('cart.add', $product->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fas fa-cart-plus"></i> Thêm vào giỏ
                                </button>
                            </form>
                        <?php else: ?>
                            <button class="btn btn-secondary w-100" disabled>
                                <i class="fas fa-ban"></i> Hết hàng
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <div class="empty-state">
                    <i class="fas fa-shopping-bag"></i>
                    <h4 class="mt-3">Không có sản phẩm</h4>
                    <p class="text-muted">Vui lòng quay lại sau</p>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="row mt-5 mb-4">
        <div class="col-12 d-flex justify-content-center">
            <?php echo e($products->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Webbanhang\clothing-shop-master\clothing-shop\resources\views/home.blade.php ENDPATH**/ ?>