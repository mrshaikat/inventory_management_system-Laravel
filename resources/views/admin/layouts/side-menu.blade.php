
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <li class="menu-title">
                    <span>Main</span>
                </li>

                <li class="active">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                </li>

               <li class="">
                    <a href="index.html"><i class="fa fa-plus"></i> <span>Post</span></a>
                </li>

                <li class="">
                    <a href="index.html"><i class="fa fa-list-alt"></i> <span>Category</span></a>
                </li>

                <li class="">
                    <a href="index.html"><i class="fe fe-tag"></i> <span>Tag</span></a>
                </li>


                <li class="">
                    <a href="index.html"><i class="fe fe-users"></i> <span>Users</span></a>
                </li>




                <li class="submenu">
                    <a href="#"><i class="fa fa-plus"></i> <span>Employees</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('show.employee') }}">All Employees</a></li>
                        <li><a href="{{ route('add.employee') }}">Add Employee</a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-list-alt"></i> <span>Customer</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('customer.index') }}">All Customers</a></li>
                        <li><a href="{{ route('customer.create') }}">Add Customer</a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-list-alt"></i> <span>Supplier</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('supplier.index') }}">All Suppiers</a></li>
                        <li><a href="{{ route('supplier.create') }}">Add Supplier</a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-list-alt"></i> <span>Salary (EMP)</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('salary.index') }}">All Salary</a></li>
                        <li><a href="{{ route('salary.create') }}">Add Advance Salary</a></li>
                        <li><a href="{{ route('pay_salary.index') }}">Pay Salary</a></li>
                        <li><a href="">Last Month Salary</a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-list-alt"></i> <span>Category</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('category.index') }}">All Categories</a></li>
                        <li><a href="{{ route('category.create') }}">Add Category</a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-list-alt"></i> <span>Product</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('product.index') }}">All Product</a></li>
                        <li><a href="{{ route('product.create') }}">Add Product</a></li>

                    </ul>
                </li>


                <li>
                    <a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
