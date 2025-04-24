<!-- Main Navigation Bar -->
<nav class="navbar navbar-main navbar-expand-lg border-radius-xl mx-3 px-0 shadow-none" id="navbarBlur"
    data-scroll="true" style="direction:rtl;">
    <div class="container-fluid px-3 py-1">

        <!-- Navbar Content -->
        <div class="navbar-collapse mt-sm-0 me-md-0 me-sm-4 collapse mt-2" id="navbar">

            <!-- Search Bar -->
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">
                    <label class="form-label">بحث...</label>
                    <i class="material-symbols-rounded position-absolute top-50 translate-middle-y start-2 opacity-5">search</i>
                    <input type="text" class="form-control" id="searchInput" onkeyup="filterResults()">
                </div>
            </div>

            <!-- Navbar Icons and Dropdowns -->
            <ul class="navbar-nav d-flex align-items-center justify-content-end">

                <!-- Sidebar Toggle (For Mobile) -->
                <li class="nav-item d-xl-none d-flex align-items-center ps-3">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>

                <!-- Settings Icon -->
                <li class="nav-item d-flex align-items-center px-3">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
                    </a>
                </li>

                <!-- User Account -->
                <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                        <i class="material-symbols-rounded">account_circle</i>
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>
<!-- Sitting -->
<div class="fixed-plugin">
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
            <div class="float-start">
                <h5 class="mb-0 mt-3">Material UI Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark fixed-plugin-close-button p-0">
                    <i class="material-symbols-rounded">clear</i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge bg-gradient-primary filter" data-color="primary"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge bg-gradient-dark active filter" data-color="dark"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge bg-gradient-info filter" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge bg-gradient-success filter" data-color="success"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge bg-gradient-warning filter" data-color="warning"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge bg-gradient-danger filter" data-color="danger"
                        onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-dark mb-2 px-3" data-class="bg-gradient-dark"
                    onclick="sidebarType(this)">Dark</button>
                <button class="btn bg-gradient-dark mb-2 ms-2 px-3" data-class="bg-transparent"
                    onclick="sidebarType(this)">Transparent</button>
                <button class="btn bg-gradient-dark active mb-2 ms-2 px-3" data-class="bg-white"
                    onclick="sidebarType(this)">White</button>
            </div>
            <p class="d-xl-none d-block mt-2 text-sm">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="d-flex mt-3">
                <h6 class="mb-0">Navbar Fixed</h6>
                <div class="form-check form-switch my-auto ms-auto ps-0">
                    <input class="form-check-input ms-auto mt-1" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
            </div>
            <hr class="horizontal dark my-3">
            <div class="d-flex mt-2">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch my-auto ms-auto ps-0">
                    <input class="form-check-input ms-auto mt-1" type="checkbox" id="dark-version"
                        onclick="darkMode(this)">
                </div>
            </div>
            <hr class="horizontal my-sm-4 dark">
        </div>
    </div>
</div>
