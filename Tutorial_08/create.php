<!-- 
    show create form and create post in db when submit
    make validation
 -->
 <?php
session_start();
require_once 'database.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $isPublished = isset($_POST['isPublished']) ? 1 : 0;

    // Prepare the INSERT statement
    // $stmt = $conn->prepare("INSERT INTO posts (title, content, is_published) VALUES (?, ?, ?)");
    $stmt = $conn->prepare("INSERT INTO posts (title, content, is_published) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $content, $isPublished);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['createSuccess'] = true;
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "Error creating post: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
