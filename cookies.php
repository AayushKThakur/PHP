<?php
// Set a cookie with the name "user" and value "Aayush", which expires in 1 day
setcookie("user", "Aayush", time() + 86400, "/"); // 86400 seconds = 1 day

// Check if the cookie "user" exists and display its value
if (isset($_COOKIE["user"])) {
    echo "User cookie value: " . $_COOKIE["user"]; // Output: User cookie value: Aayush
} else {
    echo "User cookie is not set.";
}
?>
<!-- Explanation: The cookie is set to store the value "Aayush" for one day.
 If the cookie exists, its value is displayed; 
 otherwise, a message says it is not set. -->