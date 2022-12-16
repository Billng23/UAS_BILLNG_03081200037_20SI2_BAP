<!-- Dashboard -->
<li class="menu-item {{ (request()->is('admin')) ? 'active' : '' }}">
<a href="/admin" class="menu-link">
    <i class="menu-icon tf-icons bx bx-home-circle"></i>
    <div data-i18n="Analytics">Dashboard</div>
</a>
</li>

<!-- Category -->
<li class="menu-item {{ (request()->is('admin/category*')) ? 'active' : ''  }}">
    <a href="/admin/category" class="menu-link">
        <i class="menu-icon tf-icons bx bx-category"></i>
        <div data-i18n="Basic">Category</div>
    </a>
</li>

<!-- Product -->
<li class="menu-item {{ (request()->is('admin/product*')) ? 'active' : ''  }}">
<a href="/admin/product" class="menu-link">
    <i class="menu-icon tf-icons bx bx-collection"></i>
    <div data-i18n="Basic">Product</div>
</a>
</li>




<!-- Stock -->
<li class="menu-item {{ (request()->is('admin/stock*')) ? 'active' : ''  }}">
    <a href="/admin/stock" class="menu-link">
        <i class="menu-icon tf-icons bx bx-package"></i>
        <div data-i18n="Basic">Stock</div>
    </a>
</li>

<!-- Detail -->
<li class="menu-item {{ (request()->is('admin/detail*')) ? 'active' : ''  }}">
    <a href="/admin/detail" class="menu-link">
        <i class="menu-icon tf-icons bx bx-key"></i>
        <div data-i18n="Basic">Detail</div>
    </a>
</li>

<!-- Sold Product -->
<li class="menu-item {{ (request()->is('admin/ecommerce*')) ? 'active' : ''  }}">
    <a href="/admin/ecommerce" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cart"></i>
        <div data-i18n="Basic">ecommerce</div>
    </a>
</li>

<!-- Sold Product -->
<li class="menu-item {{ (request()->is('admin/SHOP*')) ? 'active' : ''  }}">
    <a href="/admin/SHOP" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cart"></i>
        <div data-i18n="Basic">SHOP</div>
    </a>
</li>