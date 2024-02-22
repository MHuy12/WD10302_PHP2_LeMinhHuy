<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
          <img src="src/Public/img/z5176823932556_b96189e492fd553cfc130c40aa5551fe.jpg" style="width: 3000 px;">
        </div>
        <div class="sidebar-brand-text mx-3">Quản lí sự kiện</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Bảng điều khiển</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Bảng
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Người dùng</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Người dùng</h6>
            <a class="collapse-item" href="?url=UsersController">Người dùng</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Sự kiện</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Events</h6>
            <a class="collapse-item" href="?url=EventsController">Sự kiện</a>
            <a class="collapse-item" href="?url=ParticipantsController">Người tham gia</a>
          </div>
        </div>
      </li>
      <!-- Additional buttons for authentication -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Xác thực
      </div>
      <li class="nav-item">
        <a class="nav-link" href="?url=LoginController/loadViewLogin">
          <i class="fas fa-fw fa-sign-in-alt"></i>
          <span>Đăng nhập</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?url=RegisterController">
          <i class="fas fa-fw fa-user-plus"></i>
          <span>Đăng ký</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?url=LoginController/logout">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Đăng xuất</span>
        </a>
      </li>
    </ul>

    
    
    
    
  