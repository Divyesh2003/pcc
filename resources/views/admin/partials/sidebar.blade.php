<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->
        @if(auth()->guard('admin')->user()->is_admin == 1)
        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.inquiry.index') }}">
              <i class="bi bi-mailbox2"></i>
                <span>Inquiry</span>
            </a>
        </li>
        @endif
        <!-- End Inquiry-->
        {{-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{ route('admin.inquiry.index')}}"> 
       <i class="bi bi-menu-button-wide"></i><span> Inquiry </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('admin.inquiry.index')}}">
            <i class="bi bi-circle"></i><span> Inquiry</span>
          </a>
        </li>
      </ul>
    </li>
    <!-- End Components Nav --> --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-blog" data-bs-toggle="collapse" href="#">
              <i class="bi bi-chat-square-dots"></i><span> Blogs </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-blog" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.blog.category.index') }}">
                        <i class="bi bi-circle"></i><span> Categories </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blog.index') }}">
                        <i class="bi bi-circle"></i><span> Add Blogs </span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-faq" data-bs-toggle="collapse"
                href="{{ route('admin.faq.index') }}">
                <i class="bi bi-chat"></i><span> Faqs </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-faq" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.faq.index') }}">
                        <i class="bi bi-circle"></i><span>Add Faqs </span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-aposittle" data-bs-toggle="collapse"
                href="{{ route('admin.blog.index') }}">
                <i class="bi bi-briefcase"></i><span> Apostille City </span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-aposittle" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.apositlle.index') }}">
                        <i class="bi bi-circle"></i><span> Add City (Apostille)</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-attension" data-bs-toggle="collapse"
                href="{{ route('admin.attension.index') }}">
                <i class="bi bi-geo"></i><span> Attestation Country </span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-attension" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.attension.index') }}">
                        <i class="bi bi-circle"></i><span> Add Country (Attestation) </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-redirect  " data-bs-toggle="collapse"
                href="">
                <i class="bi bi-arrow-return-right"></i><span> Redirection </span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-redirect" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.redirect.index') }}">
                        <i class="bi bi-circle"></i><span> Redirection </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-product" data-bs-toggle="collapse"
                href="{{ route('admin.attension.index') }}">
                <i class="bi bi-translate"></i><span> Translation </span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-product" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.product.index') }}">
                        <i class="bi bi-circle"></i><span> Translation Pages </span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="{{ route('admin.youtube.index') }}">
              <i class="bi bi-youtube"></i> Youtube Video Embed
            </a>
        </li>
        @if(auth()->guard('admin')->user()->is_admin == 1)
        <li>
            <a class="nav-link" href="{{ route('admin.users.index') }}">
              <i class="bx bxs-user"></i> User
            </a>
        </li>
        @endif
        <li>
            <a class="nav-link" href="{{ route('admin.page.index') }}">
              <i class="bi bi-menu-button-wide"></i><span> All Other Pages
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-setting" data-bs-toggle="collapse"
                href="{{ route('admin.attension.index') }}">
                <i class="bi bi-gear"></i>  <span> Other Settings </span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-setting" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.head') }}">
                        <i class="bi bi-circle"></i><span> Head </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.profile') }}">
                        <i class="bi bi-circle"></i><span> Profile </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.robotos') }}">
                        <i class="bi bi-circle"></i><span> Robotos </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside><!-- End Sidebar-->
