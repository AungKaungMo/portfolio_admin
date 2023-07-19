<x-app-layout>


    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            </div>
        </div>
    </div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      </nav>

<div class="wrapper">

    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <div class="sidebar" style="height: 81vh; background-color: gray">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="{{ route('blog.index') }}" class="nav-link">
                <i class="fas fa-user-circle"></i>
                <p>
                 Blog
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="category.html" class="nav-link">
                <i class="fas fa-list"></i>
                <p>
                  Category
                </p>
              </a>
            </li>


           <li class="nav-item">
              <a href="user.html" class="nav-link">
              <i class="fas fa-users"></i>
                <p>
                  User
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="order.html" class="nav-link">
                <i class="fas fa-book"></i>
                <p>
                  Order
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="carrier.html" class="nav-link">
                <i class="fas fa-biking"></i>
                <p>
                  Carrier
                </p>
              </a>
            </li>

          </ul>
        </nav>

      </div>

    </aside>


      </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>

    <div class="content-wrapper">
       <section class="content">
         @yield('content')
       </section>
    </div>

  </div>


</x-app-layout>
