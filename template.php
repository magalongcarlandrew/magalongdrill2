<?php
include("header.php"); // Includes header for common elements

echo "<h2>Welcome to the Template Page!</h2>";
echo "<p>The header template has been successfully included on this page.</p>";

$name = "Guest";

include("name_func.php"); // Includes function for name calls

echo "<p>A warm greeting from your PHP app, " . callName($name) . "!</p>";

echo "<p>This is your main template where you can start coding your projects.</p>";

?>
    </main>
</body>
</html>
