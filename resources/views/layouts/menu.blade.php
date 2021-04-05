<li class="nav-item">
    <a href="{{ route('admin.categories.index') }}"
       class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
        <p>Categories</p>
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
    <a href="{{ route('admin.posts.index') }}"
       class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}">
        <p>Posts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.settings.index') }}"
       class="nav-link {{ Request::is('admin/settings*') ? 'active' : '' }}">
        <p>Settings</p>
    </a>
</li>


