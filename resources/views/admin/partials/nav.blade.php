<ul class="nav flex-column">
    <li id="nav-dashboard" class="nav-item">
        <a class="nav-link active" href="{{ route('dashboard') }}">
            <i class="material-icons type">
                home
            </i>
            Dashboard
        </a>
    </li>

    <li id="nav-orders" class="nav-item">
        <a class="nav-link" href="{{ route('orders') }}">
            <i class="material-icons type">
                send
            </i>
            Orders
        </a>
    </li>

    <li id="nav-wares" class="nav-item nav-toggle">
        <span class="nav-link">
            <i class="material-icons type">
                store
            </i>
            Wares
            <i class="material-icons add">add</i></span>
        <ul class="hidden">
            <li><a class="nav-link" href="{{ route('categories') }}">Categories</a></li>
            <li><a class="nav-link" href="{{ route('products') }}">Products</a></li>
        </ul>
    </li>

    <li id="nav-customers" class="nav-item">
        <a class="nav-link" href="#">
            <i class="material-icons type">
                people
            </i>
            Customers
        </a>
    </li>

    <li id="nav-design" class="nav-item nav-toggle">
        <span class="nav-link">
            <i class="material-icons type">
                color_lens
            </i>
            Design
            <i class="material-icons add">add</i></span>
        <ul class="hidden">
            <li><a class="nav-link" href="{{ route('slider') }}">Slider</a></li>
        </ul>
    </li>

    <li id="nav-settings" class="nav-item">
        <a class="nav-link" href="{{ route('settings') }}">
            <i class="material-icons type">
                settings
            </i>
            Settings
        </a>
    </li>
</ul>