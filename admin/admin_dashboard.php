<!DOCTYPE html>
<html lang="en">

<!-- Secure route for only admin -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["logged_in"])) {
    echo '<script> location.href = "./index.php" </script>';
}
if (!isset($_SESSION["is_admin"])) {
    echo '<script> location.href = "../user_dashboard.php" </script>';
}
?>

<?php include("./components/_head.php");
include_once("../app/_dbConnection.php");
$usersInstance = new Users();
$users = $usersInstance->getAllUsers(5);
$usersCount = $usersInstance->getUsersCount();
$packages = new Packages();
$packagesCount = $packages->getPackagesCount();
?>

<body>
    <div class="side-menu">
        <ul>
            <li class="active"><a href="./admin_dashboard.php"><i class="fa-solid fa-chart-line"></i><span>Dashboard</span></a></li>
            <li><a href="./users.php"><i class="fa-solid fa-users"></i><span>Users</span></a></li>
            <li><a href="./packages.php"><i class="fa-solid fa-cube"></i><span>Packages</span></a> </li>
            <li><a href=""><i class="fa-solid fa-money-bill-trend-up"></i><span>Saes</span></a> </li>
        </ul>
    </div>
    <div class="container">
        <?php include("./components/_header.php") ?>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo $usersCount ?></h1>
                        <h3>User(s)</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fa-solid fa-users"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $packagesCount ?></h1>
                        <h3>Package(s)</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fa-solid fa-cube"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>15000 tk</h1>
                        <h3>Sales</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fa-solid fa-money-bill-trend-up"></i>
                    </div>
                </div>
            </div>
            <div class="content-2 dashboard">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Package</th>
                            <th>Amount</th>
                            <th>Details</th>
                        </tr>
                        <tr>
                            <td>Sara</td>
                            <td>Cox's Day</td>
                            <td>6500 Taka</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-users">
                    <div class="title">
                        <h2>New Users</h2>
                        <a href="./users.php" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        <?php
                        while ($user = mysqli_fetch_assoc($users)) {
                            echo "
                                <tr>
                                    <td>" . $user['username'] . "</td>
                                    <td>" . $user['email'] . "</td>
                                </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>