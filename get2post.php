<!--
+----------------------------------------------------------------------+
| Upinel/Get2Post                                                      |
| https://github.com/Upinel/get2post                                   |
+----------------------------------------------------------------------+
| This source file is subject to version 2.0 of the Apache license,    |
| that is bundled with this package in the file LICENSE, and is        |
| available through the world-wide-web at the following url:           |
| http://www.apache.org/licenses/LICENSE-2.0.html                      |
| If you did not receive a copy of the Apache2.0 license and are unable|
| to obtain it through the world-wide-web, please send a note to       |
| license@swoole.com so we can mail you a copy immediately.            |
+----------------------------------------------------------------------+
| Author: Nova Upinel Chow  <dev@upinel.com>                           |
| Date:   24/Feb/2024                                                  |
+----------------------------------------------------------------------+
-->

<?php
// Ensure errors are off
ini_set('display_errors', 0);

// Get the destination URL from the query string and filter it
$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

// Remove 'url' from the query parameters to avoid including it in the POST fields
$post_data = $_GET;
unset($post_data['url']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upinel/Get2Post Redirecting...</title>
</head>
<body onload="document.getElementById('redirectForm').submit();">

    <form id="redirectForm" action="<?php echo htmlspecialchars($url); ?>" method="POST">
        <?php
        // Create hidden form inputs for each GET parameter
        foreach ($post_data as $key => $value) {
            echo '<input type="hidden" name="'.htmlspecialchars($key).'" value="'.htmlspecialchars($value).'">';
        }
        ?>
    </form>

    <script>
        // Ensure the form is submitted even if the body onload event doesn't work
        document.getElementById('redirectForm').submit();
    </script>

</body>
</html>
