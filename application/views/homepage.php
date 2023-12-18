<!DOCTYPE html>
<html lang="en">
<?php
        $this->load->view($head);
?>
<body>
    <?php 
        $this->load->view($topbar);
        $this->load->view($header);
        $this->load->view($main);
        $this->load->view($footer);
        $this->load->view($script);
    ?>
</body>
</html>