<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="manager/img/mockup6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Rashad Alshiekh</h1>
            <p>Library Manager</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('home')}}"> <i class="icon-home"></i>Home</a></li>
                <li><a href="{{url('category_page')}}"> <i class="icon-grid"></i>Categories</a></li>

                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Books </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('show_books')}}">Show All Books</a></li>  
                  <li><a href="{{url('add_book')}}">Add Book</a></li>
                  </ul>
                </li>
                <li><a href="{{url('borrow_request')}}"> <i class="icon-logout"></i>Requests </a></li>
      </nav>