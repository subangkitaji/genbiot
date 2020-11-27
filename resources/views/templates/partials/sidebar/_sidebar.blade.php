 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
            <div class="profile-image">
                @hasrole('super-admin')
                 <img src="{{ asset('assets/images/' .Auth()->user()->username. '.png') }}" alt="image"/>                
                @else
                    <img src="{{ asset('assets/images/user.png') }}" alt="admin">
                @endhasrole
                <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
            </div>
            <div class="profile-name">
                <p class="name">
                    {{ Str::limit(Auth()->user()->name, 30) }}
                </p>
                <p class="designation">
                    {{ Auth()->user()->roles->pluck('name') }}
                </p>
            </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#drop" aria-expanded="false" aria-controls="dashboard">
                <i class="icon-screen-desktop menu-icon"></i>
                <span class="menu-title" id="dashboard">Genbiots</span>
                <span class="badge badge-info">3</span>
            </a>
            <div class="collapse" id="drop" style="">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link active" href="index.html">Genbiot 1<span class="badge badge-success">on</span></a></li>
                  <li class="nav-item"> <a class="nav-link" href="genbiot2.html">Genbiot 2</a></li>
                  <li class="nav-item"> <a class="nav-link" href="genbiot3.html">Genbiot 3</a></li>
                </ul>
            </div>
        </li>
        
        </ul>
    </nav>
    <!-- partial -->