<html>
<head>
        <meta charset="utf-8" />
</head>
<body>
<?php

if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != "index.php") {
            echo("<a href='" . $entry . "'>" . $entry . "<br /><br />");
        }
    }

    closedir($handle);
}
?>
</body>
</html>
