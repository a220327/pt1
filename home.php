<?php
ob_start();
?>

<!-- 1. Jumbotron / Hero Section (Mesej Selamat Datang & Penjenamaan EcoBamboo) -->
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border border-success-subtle">
    <div class="container-fluid py-2">
        <h1 class="display-6 fw-bold text-success">
            <i class="bi bi-tree-fill me-2"></i>EcoBamboo Shop Management System
        </h1>
        <p class="col-md-10 fs-5 text-muted mt-3">
            Welcome to the EcoBamboo Shop Management System. Efficiently monitor bamboo kitchenware inventory, manage registered customer and staff profiles, and handle sales orders and printable invoices all in one centralized platform.
        </p>
        <div class="d-flex gap-2 mt-4">
            <a href="orders.php" class="btn btn-success btn-lg px-4">
                <i class="bi bi-cart-check me-2"></i>Manage Orders
            </a>
            <a href="products.php" class="btn btn-outline-secondary btn-lg px-4">
                <i class="bi bi-box-seam me-2"></i>Browse Products
            </a>
        </div>
    </div>
</div>

<!-- 2. Kad Navigasi Pantas (Dashboard Cards) -->
<div class="row g-4 mb-4">
    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card h-100 shadow-sm border-0 border-top border-4 border-success">
            <div class="card-body p-4 text-center">
                <div class="fs-1 text-success mb-2"><i class="bi bi-box-seam"></i></div>
                <h5 class="card-title fw-bold">Products</h5>
                <p class="card-text text-muted small">Browse bamboo chopping boards, manage sizes, shapes, and track real-time stock levels.</p>
                <a href="products.php" class="btn btn-sm btn-outline-success stretched-link">Go to Products</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card h-100 shadow-sm border-0 border-top border-4 border-primary">
            <div class="card-body p-4 text-center">
                <div class="fs-1 text-primary mb-2"><i class="bi bi-people"></i></div>
                <h5 class="card-title fw-bold">Customers</h5>
                <p class="card-text text-muted small">Registered customer database, contact numbers, and delivery address records.</p>
                <a href="customers.php" class="btn btn-sm btn-outline-primary stretched-link">Go to Customers</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card h-100 shadow-sm border-0 border-top border-4 border-info">
            <div class="card-body p-4 text-center">
                <div class="fs-1 text-info mb-2"><i class="bi bi-person-badge"></i></div>
                <h5 class="card-title fw-bold">Staffs</h5>
                <p class="card-text text-muted small">Manage staff directory and access roles for store sales operations.</p>
                <a href="staffs.php" class="btn btn-sm btn-outline-info stretched-link">Go to Staffs</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
        <div class="card h-100 shadow-sm border-0 border-top border-4 border-warning">
            <div class="card-body p-4 text-center">
                <div class="fs-1 text-warning mb-2"><i class="bi bi-receipt"></i></div>
                <h5 class="card-title fw-bold">Orders</h5>
                <p class="card-text text-muted small">Track placed sales orders, manage ordered items, and generate official invoices.</p>
                <a href="orders.php" class="btn btn-sm btn-outline-warning stretched-link">Go to Orders</a>
            </div>
        </div>
    </div>
</div>

<!-- 3. Seksyen Info Ringkas Kedai -->
<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <h5 class="card-title text-secondary mb-3"><i class="bi bi-info-circle me-2"></i>About EcoBamboo Shop</h5>
        <p class="card-text text-muted mb-0">
            EcoBamboo Shop supplies durable, naturally antibacterial, and 100% eco-friendly handcrafted Malaysian bamboo kitchenware. This internal portal is designed to streamline inventory tracking, customer management, and daily sales order operations for staff.
        </p>
    </div>
</div>

<?php
// Mengambil keseluruhan kod HTML di atas dan memasukkannya ke dalam pemboleh ubah $content
$content = ob_get_clean();

// Memanggil fail template layout.php yang anda tunjukkan tadi
require_once 'layout.php';
?>