<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('/') ?>">
                    <span data-feather="home"></span>
                    Home <span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Product</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('product/new') ?>">
                    <span data-feather="file-text"></span>
                    Add Product
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('product') ?>">
                    <span data-feather="file-text"></span>
                    All Products
                </a>
            </li>
        </ul>
    </div>
</nav>