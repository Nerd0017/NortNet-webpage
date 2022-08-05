<!-- BEGIN PAGE FOOTER -->
    <center>
        <?php
        if (isset($_SERVER['HTTPS'])) { echo '<a href="https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '">Switch to HTTPS</a>'; }
        else { echo '<a href="http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '">Switch to HTTP</a>'; } 
        ?>

        <address>&copy; <?=date('Y')?> <a href="http://ndfnet.com/">NDFNet</a></address>
    </center>
    <!-- END PAGE FOOTER -->
