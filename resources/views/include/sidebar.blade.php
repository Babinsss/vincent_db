<style>
    /* Global Styles */
    body {
        font-family: 'Segoe UI', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #fafafa;
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
        width: 250px;
        background-color: #207bd7;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        transition: width 0.3s ease;
    }

    #sidebar:hover {
        width: 300px;
    }

    .sidebar-logo {
        padding: 1rem 0;
        font-size: 1.5rem;
        font-weight: 700;
        color: #ecf0f1;
        text-align: center;
        border-bottom: 1px solid #eceef0;
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
        background-color: #edeef0;
    }

    .sidebar-link {
        display: block;
        padding: 12px;
        color: #080808;
        font-weight: 500;
    }

    .sidebar-link i {
        margin-right: 10px;
    }
</style>

<div class="wrapper">
    <aside id="sidebar">
        <div class="sidebar-logo">
            <span class="system">DEMO</span>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/user/create" class="sidebar-link">
                    <i class="fas fa-user"></i>
                    <span>Add User</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/user" class="sidebar-link">
                    <i class="fas fa-cog"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/genders" class="sidebar-link">
                    <i class="fas fa-cog"></i>
                    <span>Genders</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
