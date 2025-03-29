<!-- sidebar.php -->
<div class="sidebar">
    <div class="sidebar-logo">
        <img src=../src/page-logo.png alt="Company Logo">
    </div>
    <a href="dashboard.php">Dashboard</a>
    <a href="view_racks.php">View Racks</a>
    <a href="../user/view_products.php">View Products</a>
    <a href="user_activitylogs.php">View Reports</a>
    <a href="../logout.php">Logout</a>
</div>

<!-- Sidebar CSS -->
<style>
    .sidebar {
        width: 200px;
        background-color: #362532; /* CozyRack sidebar */
        padding: 20px;
        height: 100vh;
        box-sizing: border-box;
        border-right: 2px solid #362532; /* Highlight border */
        position: fixed;
        top: 0;
        left: 0;
    }

    .sidebar-logo {
        text-align: center;
        margin-bottom: 20px;
        border-bottom: 2px solid #ED7117; /* Orange highlight */
    }

    .sidebar-logo img {
        width: 100%;
        max-width: 100px;
        display: block;
        margin: 0 auto;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        display: block;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        background: transparent;
        transition: 0.3s;
    }

    .sidebar a:hover, .sidebar a.active {
        background: #ED7117; /* Highlight */
    }
</style>
