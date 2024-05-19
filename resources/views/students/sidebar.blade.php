<div class="sidebar bg-light">
    <h3>Menu</h3>
    <ul class="list-unstyled">
        <li>
            <a href="{{ route('users.index') }}" class="text-dark">
                <i class="fas fa-home"></i> Home
            </a>
        </li>
        <li>
            <a href="{{ route('users.create') }}" class="text-dark">
                <i class="fas fa-user-plus"></i> Create New User
            </a>
        </li>
    </ul>
</div>

<style>
    .sidebar {
        height: 100vh;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 60px; /* Adjust based on your navbar height if you have one */
        background-color: blue;
    }

    .sidebar h3 {
        text-align: center;
    }

    .sidebar ul {
        padding: 0;
        list-style: none;
    }

    .sidebar ul li {
        padding: 10px 20px;
    }

    .sidebar ul li a {
        text-decoration: none;
        color: #343a40;
        font-size: 16px;
    }

    .sidebar ul li a:hover {
        color: #007bff;
    }

    .sidebar ul li a i {
        margin-right: 10px;
    }

    .content {
        margin-left: 270px; /* Adjust based on your sidebar width */
        padding: 20px;
    }
</style>
