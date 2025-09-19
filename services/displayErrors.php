<?php
function displayErrors($errors) {
    echo "<div style='color:red; background:#ffe6e6; padding:10px; border:1px solid red; margin:10px 0;'>";
    echo "<h3>Form errors:</h3>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul>";
    echo "<a href='add.php' style='color:blue;'>← Return to form</a>";
    echo "</div>";
}
?>