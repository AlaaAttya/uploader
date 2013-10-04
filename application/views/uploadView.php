<html>
    <head>
        <link rel='stylesheet' href='<?php echo base_url(); ?>js/css/dropzone.css' type='text/css' />
        <script src='<?php echo base_url(); ?>js/dropzone.js'></script>
    </head>
    <body>
        <?php
        echo form_open_multipart('uploadcontroller/uploadAction', array('class' => 'dropzone'));
        ?>
        <div class="fallback">

            <?php
            echo form_upload('file');
            ?>
        </div>
        <?php
        echo form_close();
        ?>
    </body>
</html>


