<div class="sidebar bg-success" id="sidebar">
    <div class="sidebar-inner ">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main</span>
                </li>
                <li class="{{ route_is('dashboard') ? 'active' : '' }}"> 
                    <a href="{{route('dashboard')}}"><i class="far fa-lightbulb"></i> <span>Dashboard</span></a>
                </li>
                @can('view-category')
                <li class="{{ route_is('categories.*') ? 'active' : '' }}"> 
                    <a href="{{route('categories.index')}}"><i class="far fa-lightbulb"></i> <span>Categories</span></a>
                </li>
                @endcan
                @can('view-purchase')
                <li class="submenu">
                    <a href="#"><i class="far fa-lightbulb"></i> <span> Purchase</span> <span class="fas fa-chevron-down"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ route_is('purchases.*') ? 'active' : '' }}" href="{{route('purchases.index')}}">Purchase</a></li>
                        @can('create-purchase')
                        <li><a class="{{ route_is('purchases.create') ? 'active' : '' }}" href="{{route('purchases.create')}}">Add Purchase</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('view-products')
				<li class="submenu">
					<a href="#"><i class="far fa-lightbulb"></i> <span> Products</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is(('products.*')) ? 'active' : '' }}" href="{{route('products.index')}}">Products</a></li>
						@can('create-product')<li><a class="{{ route_is('products.create') ? 'active' : '' }}" href="{{route('products.create')}}">Add Product</a></li>@endcan
						@can('view-outstock-products')<li><a class="{{ route_is('outstock') ? 'active' : '' }}" href="{{route('outstock')}}">Out-Stock</a></li>@endcan
						@can('view-expired-products')<li><a class="{{ route_is('expired') ? 'active' : '' }}" href="{{route('expired')}}">Expired</a></li>@endcan
					</ul>
				</li>
				@endcan
                @can('view-sales')
				<li class="submenu">
					<a href="#"><i class="far fa-lightbulb"></i> <span> Consumption</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('sales.*') ? 'active' : '' }}" href="{{route('sales.index')}}">Consumption History</a></li>
					</ul>
				</li>
				@endcan
				@can('view-supplier')
				<li class="submenu">
					<a href="#"><i class="far fa-lightbulb"></i> <span> Supplier</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('suppliers.*') ? 'active' : '' }}" href="{{route('suppliers.index')}}">Supplier</a></li>
						@can('create-supplier')<li><a class="{{ route_is('suppliers.create') ? 'active' : '' }}" href="{{route('suppliers.create')}}">Add Supplier</a></li>@endcan
					</ul>
				</li>
				@endcan
                @can('view-access-control')
				<li class="submenu">
					<a href="#"><i class="far fa-lightbulb"></i> <span> Access Control</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						@can('view-permission')
						<li><a class="{{ route_is('permissions.index') ? 'active' : '' }}" href="{{route('permissions.index')}}">Permissions</a></li>
						@endcan
						@can('view-role')
						<li><a class="{{ route_is('roles.*') ? 'active' : '' }}" href="{{route('roles.index')}}">Roles</a></li>
						@endcan
					</ul>
				</li>					
				@endcan
                @can('view-reports')
                <li class="submenu">
                    <a href="#"><i class="far fa-lightbulb"></i> <span> Reports</span> <span class="fas fa-chevron-down"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ route_is('sales.report') ? 'active' : '' }}" href="{{route('sales.report')}}">Consumption History</a></li>
                        <li><a class="{{ route_is('purchases.report') ? 'active' : '' }}" href="{{route('purchases.report')}}">Purchase Report</a></li>
                    </ul>
                </li>
                @endcan
                <li class="{{ route_is('profile') ? 'active' : '' }}"> 
                    <a href="{{route('profile')}}"><i class="far fa-lightbulb"></i> <span>Profile</span></a>
                </li>
                <li class="{{ route_is('backup.index') ? 'active' : '' }}"> 
                    <a href="{{route('backup.index')}}"><i class="far fa-lightbulb"></i> <span>Backups</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
