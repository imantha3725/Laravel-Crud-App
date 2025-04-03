<div class="col-auto p-0 sidebar">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-4 text-white min-vh-100">
        <a href="#" class="d-flex align-items-center pb-3 mb-md-0 text-decoration-none">
            <span class="fs-5 d-none d-sm-inline menu-title fw-bold text-dark">
                <i class="fas fa-hexagon text-primary"></i> Dashboard
            </span>
            <span class="fs-5 d-sm-none menu-title fw-bold text-dark">
                <i class="fas fa-hexagon text-primary"></i>
            </span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100" id="menu">
            <li class="nav-item w-100">
                <a href="{{ url('/') }}" class="nav-link d-flex align-items-center">
                    <div class="nav-icon bg-light rounded">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span class="ms-1 d-none d-sm-inline nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{ url('/products') }}" class="nav-link d-flex align-items-center">
                    <div class="nav-icon bg-light rounded">
                        <i class="fas fa-box"></i>
                    </div>
                    <span class="ms-1 d-none d-sm-inline nav-text">Products</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{ url('/customers') }}" class="nav-link  d-flex align-items-center">
                    <div class="nav-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <span class="ms-1 d-none d-sm-inline nav-text">Customers</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{ '/employees' }}" class="nav-link d-flex align-items-center">
                    <div class="nav-icon bg-light rounded">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <span class="ms-1 d-none d-sm-inline nav-text">Employees</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link d-flex align-items-center">
                    <div class="nav-icon bg-light rounded">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="ms-1 d-none d-sm-inline nav-text">Users</span>
                </a>
            </li>
        </ul>
        <div class=" pb-4 mt-auto  ">

            <button type="button" class="btn btn-danger " style="width: 180px;">Log out</button>
        </div>
    </div>
</div>
