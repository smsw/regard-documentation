<?php include_once('_partials/header.php');?>

    <div class="row">
        <div class="large-12 columns">
            <dl class="accordion" data-accordion>
                <dd>
                    <a href="#panel1">Services</a>
                    <?php include_once('_content/services.php');?>
                </dd>
                <dd>
                    <a href="#panel2">Service Type</a>
                    <?php include_once('_content/servicetype.php');?>
                </dd>
            </dl>
        </div>
    </div>


<?php include_once('_partials/footer.php');?>