<div class="app-sidebar">
    <div class="app-sidebar__menu">
        <span class="app-sidebar__menu-label">Menu</span>
        <ul class="app-sidebar__menu-navigation">
            <li><a href="{{ route('admin.dashboard.index') }}"><i class="material-icons">dashboard</i>Dashboard</a></li>
            <li><a href="{{ route('admin.products.index') }}"><i class="material-icons">store_mall_directory</i>Products</a></li>
            <li><a href="{{ route('admin.orders.index') }}"><i class="material-icons">list</i>Orders</a></li>
        </ul>
    </div>
    <div class="app-sidebar__menu">
        <span class="app-sidebar__menu-label">Insights</span>
        <ul class="app-sidebar__menu-navigation">
            <li><a href="{{ route('admin.insights.index') }}"><i class="material-icons">show_chart</i>Analytics</a></li>
        </ul>
    </div>
</div>