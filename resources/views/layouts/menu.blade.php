
<li class="nav-item">
    <a href="{{ route('index.homePage') }}"
       class="nav-link">
        <p>Website</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin-dashboard') }}"
       class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.categories.index') }}"
       class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.categoryGroups.index') }}"
       class="nav-link {{ Request::is('admin/categoryGroups*') ? 'active' : '' }}">
        <p>Category Groups</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.products.index') }}"
       class="nav-link {{ Request::is('admin/products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.posts.index') }}"
       class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}">
        <p>Posts</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.pages.index') }}"
       class="nav-link {{ Request::is('admin/pages*') ? 'active' : '' }}">
        <p>Pages</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.settings.index') }}"
       class="nav-link {{ Request::is('admin/settings*') ? 'active' : '' }}">
        <p>Settings</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.images.index') }}"
       class="nav-link {{ Request::is('admin/images*') ? 'active' : '' }}">
        <p>Images</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.users.index') }}"
       class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.admins.index') }}"
       class="nav-link {{ Request::is('admin/admins*') ? 'active' : '' }}">
        <p>Admins</p>
    </a>
</li>


