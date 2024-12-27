<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">Management Asset</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">{{ substr(config('app.name'), 0, 2) }}</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown{{ request()->is('dashboard') ? ' active' : '' }}">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="menu-header">Aset</li>
        @if (auth()->user()->role_id === 1)
            <li class="{{ request()->routeIs('admin.aset.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.aset.index') }}">
                    <i class="fas fa-boxes"></i>
                    <span>Daftar Aset</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.jenis-aset.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.jenis-aset.index') }}">
                    <i class="fas fa-th-large"></i>
                    <span>Kategori Aset</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.pengguna.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.pengguna.index') }}">
                    <i class="fas fa-cog"></i>
                    <span>Setting</span>
                </a>
            </li>
        @endif

        <li class="menu-header">Logout</li>
        <li>
            <a href="#" class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>

        <!-- Form Logout -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul>
</aside>

<!-- Modal Konfirmasi Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin keluar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" onclick="document.getElementById('logout-form').submit();">Keluar</button>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
