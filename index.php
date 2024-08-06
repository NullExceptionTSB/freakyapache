<?php
	Header('HTTP/1.1 666 Freaky Content');
    Header('Server: FreakyApache/6.6.6 (FreakyLinux)'); //doesn't actually work on apache
    Header('X-Powered-By: EvilPHP');

$file_blacklist = [
    '.', '..', '.htaccess', 'justupload.php', 'upload', 'docs', 'index.php', 'style.css', 'motd.txt', '.git', 'favicon.ico'
];

$tools = [
    ['CyberChef', 'https://cyberchef.org/'],
    ['ldapsearch Cheatsheet', 'docs/ldapsearch.html']
];

$files = [];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FreakyApache</title>
        <link rel="stylesheet" href="style.css"> 
        <link rel="shortcut icon" href="favicon.ico">
        <meta name="darkreader-lock">
    </head>
    <body>
        <h1>😈 Freaky Apache2 😈</h1>
        <h2>Don't ask what webserver I'm using 😈</h2>
        <marquee style="background-color: #FFFF00; color: #FF0000">Message of the day: <?php echo(file_get_contents('motd.txt')); ?></marquee>
        <table>
            <tr style="width:50vw">
                <td>
                    <h1 style="text-align: left;">Now serving:</h1>
                </td>
                <td>
                    <h1 style="text-align: left;">Tools:</h1>
                </td>
            </tr>
            <?php
            $dir = scandir('/var/www/html/htb');
            
            foreach ($dir as $d) {
                if (!in_array($d, $file_blacklist)) 
                    array_push($files, $d);
            }

            $rows = max(count($files), count($tools));
            

            for ($i = 0; $i < $rows; $i++) {
            ?>
            <tr>
                <td><?php if (isset($files[$i])) { ?><a href=<?php echo($files[$i]); ?>><?php echo($files[$i]); } ?></td>
                <td><?php if (isset($tools[$i])) { ?><a href=<?php echo($tools[$i][1]); ?>><?php echo($tools[$i][0]); } ?></td>
            </tr>
            <?php
            }
            ?>
        </table>

        <footer>
            <p>© 2024 NullException. <a href="https://unlicense.org/">No Rights Reserved.</a></p>
        </footer>
    </body>

</html>
