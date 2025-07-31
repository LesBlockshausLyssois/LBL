<?php
$correct_code = "CODE"; // <-- Ton code ici

if (isset($_GET['code']) && $_GET['code'] === $correct_code) {
    // Redirection vers la vraie page admin
    header("Location: ADMIN.html");
    exit();
} else {
    echo "<script>alert('Code incorrect.'); window.location.href = 'index.html';</script>";
    exit();
}
?>
