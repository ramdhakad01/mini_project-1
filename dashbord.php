<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Delivery Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Water Delivery</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <div class="header-left">
                <h1>Dashboard</h1>
            </div>
            <div class="header-right">
                <button class="logout-btn">Logout</button>
            </div>
        </header>

        <section class="statistics">
            <div class="stat-box">
                <h3>Orders Today</h3>
                <p><?php echo getOrderCount(); ?> Orders</p>
            </div>
            <div class="stat-box">
                <h3>Customers</h3>
                <p><?php echo getCustomerCount(); ?> Customers</p>
            </div>
            <div class="stat-box">
                <h3>Pending Deliveries</h3>
                <p><?php echo getPendingDeliveries(); ?> Deliveries</p>
            </div>
        </section>

        <!-- Orders Table -->
        <section class="order-table">
            <h2>Recent Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Quantity</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $orders = getRecentOrders(); // Fetch recent orders from the database
                    foreach ($orders as $order) {
                        echo "<tr>
                                <td>{$order['id']}</td>
                                <td>{$order['customer_name']}</td>
                                <td>{$order['quantity']}</td>
                                <td>{$order['status']}</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>

    <script src="scripts.js"></script>
</body>
</html>

<?php
// PHP functions to get data for dashboard (you would connect to a database in real use)

function getOrderCount() {
    // Mock data
    return 120;
}

function getCustomerCount() {
    // Mock data
    return 80;
}

function getPendingDeliveries() {
    // Mock data
    return 25;
}

function getRecentOrders() {
    // Mock data (you would query a database in a real application)
    return [
        ['id' => 1, 'customer_name' => 'John Doe', 'quantity' => 3, 'status' => 'Delivered'],
        ['id' => 2, 'customer_name' => 'Jane Smith', 'quantity' => 5, 'status' => 'Pending'],
        ['id' => 3, 'customer_name' => 'Sam Green', 'quantity' => 2, 'status' => 'Delivered']
    ];
}
?>
