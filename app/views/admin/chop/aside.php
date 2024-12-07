<aside id="sidebar" class="sidebar">
  <div class="sidebar-header">
    <div class="logo-container">
      <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAgMCA1MCA1MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTI1IDJMNDggMjBWNDhIMlYyMEwyNSAyWiIgc3Ryb2tlPSIjMDAyMjY2IiBzdHJva2Utd2lkdGg9IjMiLz4KPHBhdGggZD0iTTIwIDMwSDMwVjQ4SDIwVjMwWiIgc3Ryb2tlPSIjMDAyMjY2IiBzdHJva2Utd2lkdGg9IjIiLz4KPHBhdGggZD0iTTEwIDI1SDQwTTI1IDJMMjUgMTUiIHN0cm9rZT0iIzAwMjI2NiIgc3Ryb2tlLXdpZHRoPSIyIi8+Cjwvc3ZnPg==" alt="Interior Homes Logo" class="logo-img">
      <span class="logo-text">Interior Homes</span>
    </div>
  </div>
  
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/products">
        <i class="bi bi-box-seam-fill"></i>
        <span>Inventory</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/items">
        <i class="bi bi-plus-circle-fill"></i>
        <span>Add Products</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/categories">
        <i class="bi bi-tags-fill"></i>
        <span>Add Categories</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/modify">
        <i class="bi bi-pencil-square"></i>
        <span>Modify Items</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/tracking">
        <i class="bi bi-truck"></i>
        <span>Track Orders</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/reports">
        <i class="bi bi-file-earmark-text-fill"></i>
        <span>Reports</span>
      </a>
    </li>
  </ul>
</aside>

<style>
:root {
  --primary-navy: #002266;
  --hover-bg: #f6f8fe;
  --text-color: #333;
  --transition-speed: 0.3s;
}

.sidebar {
  position: fixed;
  top: 60px;
  left: 0;
  bottom: 0;
  width: 280px;
  background: #fff;
  padding: 20px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  transition: all var(--transition-speed) ease;
  z-index: 996;
  overflow-y: auto;
}

.sidebar-header {
  padding: 20px 0;
  margin-bottom: 20px;
}

.logo-container {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
}

.logo-img {
  width: 40px;
  height: 40px;
  object-fit: contain;
}

.logo-text {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--primary-navy);
}

.sidebar-nav {
  list-style: none;
  padding: 0;
  margin: 0;
}

.nav-item {
  margin-bottom: 8px;
}

.nav-link {
  display: flex;
  align-items: center;
  padding: 12px 16px;
  color: var(--text-color);
  text-decoration: none;
  border-radius: 8px;
  transition: all var(--transition-speed);
  position: relative;
  overflow: hidden;
}

.nav-link i {
  font-size: 1.2rem;
  margin-right: 12px;
  transition: all var(--transition-speed);
}

.nav-link span {
  font-weight: 500;
}

.nav-link:hover {
  background: var(--hover-bg);
  transform: translateX(5px);
}

.nav-link::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 3px;
  background: var(--primary-navy);
  transform: scaleY(0);
  transition: transform var(--transition-speed);
}

.nav-link:hover::before {
  transform: scaleY(1);
}

.nav-link.active {
  background: var(--hover-bg);
  color: var(--primary-navy);
  font-weight: 600;
}

.nav-link.active::before {
  transform: scaleY(1);
}

/* Animations */
@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.nav-item {
  animation: slideIn 0.3s ease-out forwards;
  opacity: 0;
}

.nav-item:nth-child(1) { animation-delay: 0.1s; }
.nav-item:nth-child(2) { animation-delay: 0.2s; }
.nav-item:nth-child(3) { animation-delay: 0.3s; }
.nav-item:nth-child(4) { animation-delay: 0.4s; }
.nav-item:nth-child(5) { animation-delay: 0.5s; }
.nav-item:nth-child(6) { animation-delay: 0.6s; }
.nav-item:nth-child(7) { animation-delay: 0.7s; }

/* Scrollbar Styling */
.sidebar::-webkit-scrollbar {
  width: 5px;
}

.sidebar::-webkit-scrollbar-track {
  background: #f1f1f1;
}

.sidebar::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 4px;
}

.sidebar::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.nav-link');
  const currentPath = window.location.pathname;

  // Remove all active classes first
  function removeAllActive() {
    navLinks.forEach(link => {
      link.classList.remove('active');
    });
  }

  // Add active class to current page
  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    }

    link.addEventListener('click', function(e) {
      removeAllActive();
      this.classList.add('active');
    });
  });

  // Hover effects
  navLinks.forEach(link => {
    link.addEventListener('mouseenter', function() {
      const icon = this.querySelector('i');
      icon.style.transform = 'scale(1.2)';
    });

    link.addEventListener('mouseleave', function() {
      const icon = this.querySelector('i');
      icon.style.transform = 'scale(1)';
    });
  });
});
</script>

