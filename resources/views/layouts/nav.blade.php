<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{route('usuarios.index')}}" class="nav-link @yield('usuario')">
          <i class="nav-icon fas fa-user"></i>
          <p>
            Registro
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link @yield('listar')">
          <i class="nav-icon fas fa-list"></i>
          <p>
            Estudiantes
          </p>
        </a>
      </li>
    </ul>
  </nav>