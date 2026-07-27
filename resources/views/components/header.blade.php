<header class="header" id="header">
    <div class="header-container">
        <!-- Logo -->
        <a href="/" class="logo" aria-label="Home">
            <img src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="Kaduna State Planning & Budget Commission Logo" class="logo-img">
        </a>

        <!-- Navigation -->
        <nav class="nav" id="nav" aria-label="Main Navigation">
            <ul class="nav-list">
                <li class="nav-item"><a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li class="nav-item dropdown">
                      <a href="{{ url('departments') }}" class="nav-link dropdown-toggle {{ request()->is('departments*') || request()->is('planning') || request()->is('budget') || request()->is('monitoring') || request()->is('devaid') || request()->is('administration') ? 'active' : '' }}" aria-expanded="false">Departments 
<svg class="dropdown-icon" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a href="#" class="dropdown-link dropdown-submenu-toggle {{ request()->is('planning') || request()->is('budget') || request()->is('monitoring') || request()->is('devaid') || request()->is('administration') ? 'active' : '' }}">Departments <svg class="submenu-icon" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                              <ul class="dropdown-menu sub-menu">
                                  <li><a href="{{ url('planning') }}" class="dropdown-link {{ request()->is('planning') ? 'active' : '' }}">Planning Department</a></li>
                                  <li><a href="{{ url('budget') }}" class="dropdown-link {{ request()->is('budget') ? 'active' : '' }}">Budget Department</a></li>
                                  <li><a href="{{ url('monitoring') }}" class="dropdown-link {{ request()->is('monitoring') ? 'active' : '' }}">Monitoring & Evaluation Dept.</a></li>
                                  <li><a href="{{ url('devaid') }}" class="dropdown-link {{ request()->is('devaid') ? 'active' : '' }}">Dev. Aid & Coordination Dept.</a></li>
                                  <li><a href="{{ url('administration') }}" class="dropdown-link {{ request()->is('administration') ? 'active' : '' }}">Admin & HR Department</a></li>
                              </ul>
                          </li>
                          <li class="dropdown-submenu">
                              <a href="#" class="dropdown-link dropdown-submenu-toggle {{ request()->is('sdgs') || request()->is('socu') || request()->is('eiu') ? 'active' : '' }}">Units <svg class="submenu-icon" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                              <ul class="dropdown-menu sub-menu">
                                  <li><a href="{{ url('sdgs') }}" class="dropdown-link {{ request()->is('sdgs') ? 'active' : '' }}">Kaduna State SDGs Unit</a></li>
                                  <li><a href="{{ url('socu') }}" class="dropdown-link {{ request()->is('socu') ? 'active' : '' }}">SOC Unit</a></li>
                                  <li><a href="{{ url('eiu') }}" class="dropdown-link {{ request()->is('eiu') ? 'active' : '' }}">Economic Intelligence Unit</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a href="{{ url('departments') }}#parastatals" class="nav-link dropdown-toggle {{ request()->is('bureau') || request()->is('agency') ? 'active' : '' }}" aria-expanded="false">Parastatals 
<svg class="dropdown-icon" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                      <ul class="dropdown-menu">
                          <li><a href="{{ url('bureau') }}" class="dropdown-link {{ request()->is('bureau') ? 'active' : '' }}">Bureau of Statistics</a></li>
                          <li><a href="{{ url('agency') }}" class="dropdown-link {{ request()->is('agency') ? 'active' : '' }}">Residents Registration Agency</a></li>
                      </ul>
                  </li>
                  <li class="nav-item"><a href="{{ url('downloads') }}" class="nav-link {{ request()->is('downloads*') ? 'active' : '' }}">Downloads</a></li>
                  <li class="nav-item"><a href="{{ url('news') }}" class="nav-link {{ request()->is('news*') ? 'active' : '' }}">News</a></li>
                  <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact Us</a></li>
              </ul>
        </nav>

        <!-- Header Actions -->
        <div class="header-actions">
            <a href="https://www.opengovpartnership.org/members/kaduna-state-nigeria/" target="_blank" rel="noopener noreferrer" class="btn btn-blue">OpenGov Partnership</a>
            <a href="https://nscfn.nationalplanning.gov.ng/fn-dashboard" target="_blank" rel="noopener noreferrer" class="btn btn-green" style="background-color: #FF5A1F;">Nutrition Dashboard</a>
        </div>

        <!-- Hamburger Menu -->
        <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
    </div>
</header>
