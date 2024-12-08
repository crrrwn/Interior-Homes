<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between p-2">
    <i class="bi bi-list toggle-sidebar-btn"></i>
    </a>
  </div>

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle" href="#">
          <i class="bi bi-search"></i>
        </a>
      </li>

      <li class="nav-item dropdown pe-3">
        <button class="nav-link nav-profile d-flex align-items-center pe-0 btn btn-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="profile-icon-wrapper">
            <i class="bi bi-person-circle fs-4"></i>
          </div>
        </button>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li>
            <a class="dropdown-item d-flex align-items-center" href="<?= site_url('logout') ?>">
              <i class="bi bi-box-arrow-right me-2"></i>
              <span>Sign Out</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>

<style>
:root {
  --primary-color: #007bff;
  --secondary-color: #6c757d;
  --accent-color: #17a2b8;
  --background-color: #f8f9fa;
  --text-color: #343a40;
}

.header {
  background: linear-gradient(135deg, var(--background-color), #ffffff);
  box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.logo span {
  color: var(--primary-color);
  font-weight: 700;
  font-size: 1.2rem;
  transition: all 0.3s ease;
}

.logo:hover span {
  color: var(--accent-color);
}

.toggle-sidebar-btn {
  color: var(--text-color);
  font-size: 1.5rem;
  cursor: pointer;
  transition: all 0.3s ease;
}

.toggle-sidebar-btn:hover {
  color: var(--primary-color);
  transform: scale(1.1);
}

.nav-profile {
  position: relative;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.nav-profile .bi-person-circle {
  color: var(--text-color);
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.nav-profile:hover .bi-person-circle {
  color: var(--primary-color);
  transform: scale(1.2) rotate(15deg);
  filter: drop-shadow(0 0 8px rgba(0, 123, 255, 0.7));
}

.dropdown-menu {
  min-width: 200px;
  padding: 0.5rem 0;
  margin: 0;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  border: none;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1), 0 1px 8px rgba(0, 0, 0, 0.06);
  overflow: hidden;
  display: none; /* Added from update */
  transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.dropdown-menu.show {
  display: block; /* Added from update */
  opacity: 1;
  visibility: visible;
  transform: translateY(0) scale(1);
}

.dropdown-item {
  padding: 0.75rem 1.5rem;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  position: relative;
  overflow: hidden;
}

.dropdown-item:hover {
  background: linear-gradient(45deg, rgba(0, 123, 255, 0.1), rgba(23, 162, 184, 0.1));
  padding-left: 2.25rem;
}

.dropdown-item::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: all 0.5s;
}

.dropdown-item:hover::before {
  left: 100%;
}

.dropdown-item i {
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  margin-right: 10px;
}

.dropdown-item:hover i {
  transform: translateX(5px) rotate(360deg);
  color: var(--primary-color);
}

.dropdown-item span {
  position: relative;
}

.dropdown-item span::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
  height: 2px;
  background: linear-gradient(to right, var(--primary-color), var(--accent-color));
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.3s ease;
}

.dropdown-item:hover span::after {
  transform: scaleX(1);
  transform-origin: left;
}

@keyframes smoothPulse {
  0% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.4); }
  50% { box-shadow: 0 0 0 15px rgba(0, 123, 255, 0); }
  100% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0); }
}

.nav-profile::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  animation: smoothPulse 2s infinite cubic-bezier(0.25, 0.8, 0.25, 1);
  opacity: 0;
  transition: opacity 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.nav-profile:hover::after {
  opacity: 1;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var dropdownElementList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'))
  var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl)
  })

  const logoutLink = document.querySelector('a[href*="logout"]');
  logoutLink.addEventListener('click', function(e) {
    e.preventDefault();
    if (confirm('Are you sure you want to sign out?')) {
      window.location.href = this.href;
    }
  });
});
</script>

