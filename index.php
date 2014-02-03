<?php include_once('_partials/header.php');?>
    <div class="row">
        <div class="large-12 columns">
            <dl class="accordion" data-accordion>
                <dd>
                    <a href="#support1" class="help">Help, my site isn't working</a>
                    <?php include_once('_content/critical.php');?>
                </dd>
            </dl>
        </div>
    </div>
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
                <dd>
                    <a href="#panel3">Pages and Navigation</a>
                    <?php include_once('_content/pages.php');?>
                </dd>
                <dd>
                    <a href="#panel4">Editing Images</a>
                    <?php include_once('_content/images.php');?>
                </dd>
            </dl>
        </div>
    </div>
<?php include_once('_partials/footer.php');?>