$stmt->bind_param("s",$email);
$stmt->execute();
    $stmt_result=$stmt->get_result();
    if($num_rows>0){
        $data = $stmt_result->fetch_assoc();
        else{
        echo"<h2>invalid email or password</h2>";

        }
           }       $res=$conn->query($sql);
        <h2>Admin Dashboard</h2>
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <p>This is the admin dashboard.</p>
        <a href="logout.php">Logout</a>
        <?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header('Location: index.html');
    exit();
}
?>
