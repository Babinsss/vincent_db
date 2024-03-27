<style>
    /* Global Styles */
    body {
        font-family: 'Segoe UI', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    /* Sidebar Styles */
    .wrapper {
        display: flex;
        min-height: 100vh;
    }

    #sidebar {
        width: 280px;
        background-color: #2c4b5f;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        transition: width 0.3s ease;
    }

    #sidebar:hover {
        width: 320px;
    }

    .sidebar-logo {
        padding: 1rem 0;
        font-size: 1.5rem;
        font-weight: 700;
        color: #e4e4e4;
        text-align: center;
        border-bottom: 1px solid #446c7c;
    }

    .sidebar-nav {
        padding: 0;
        margin: 0;
    }

    .sidebar-item {
        margin-bottom: 8px;
        transition: background-color 0.3s ease;
    }

    .sidebar-item:hover {
        background-color: #446c7c;
    }

    .sidebar-link {
        display: block;
        padding: 12px;
        color: #fff;
        font-weight: 500;
    }

    .sidebar-link i {
        margin-right: 10px;
    }
</style>

<div class="wrapper">
    <aside id="sidebar">
        <div class="sidebar-logo">
            <span class="system">CHARLES PUGE</span>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/user" class="sidebar-link">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/genders" class="sidebar-link"> <!-- Updated href -->
                    <i class="fas fa-venus-mars"></i>
                    <span>Genders</span>
                </a>
            </li>
        </ul>
    </aside>
</div>