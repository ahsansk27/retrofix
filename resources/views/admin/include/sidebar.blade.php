<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="info">
            <a href="#" class="d-block">Admin</a>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                     Service
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{route('service.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('service.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Show</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="{{ route('users') }}" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                     Users
                  </p>
               </a>
            </li>
            <li class="nav-item has-treeview">
               <a href="{{ route('freelancers') }}" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                     Freelancers
                  </p>
               </a>
            </li>
          
         </ul>
         </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>