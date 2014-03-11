<?php include_once('_partials/header.php');?>

    <div class="row">
        <div class="large-12 columns">
            <dl class="accordion" data-accordion>
                <dd>
                    <a href="#panel7" class="common">Pasting content/text into the CMS Editor </a>
                    <?php include_once('_content/editor.php');?>
                </dd>
            </dl>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="large-12 columns">
            <dl class="accordion" data-accordion>
                <dd class="heading">
                    <a href="#panel5">Adding/Editing a Session</a>
                    <?php include_once('_content/session.php');?>
                </dd>

                <dd class="heading">
                    <a href="#panel6">Adding/Editing a Product</a>
                    <?php include_once('_content/products.php');?>
                </dd>

                <dd class="heading">
                    <a href="#panel8">Viewing Orders and Updating Postage Costs</a>
                    <?php include_once('_content/orders.php');?>
                </dd>

                <dd class="heading">
                    <a href="#panel1">Adding/Editing a Service</a>
                    <?php include_once('_content/services.php');?>
                </dd>
                <dd class="heading">
                    <a href="#panel2">Adding/Editing a Service Type</a>
                    <?php include_once('_content/servicetype.php');?>
                </dd>
                <dd class="heading">
                    <a href="#panel3">Pages and Navigation</a>
                    <?php include_once('_content/pages.php');?>
                </dd>
                <dd class="heading">
                    <a href="#panel4">Editing Images</a>
                    <?php include_once('_content/images.php');?>
                </dd>
                <dd class="heading">
                    <a href="#panel12">Closing Entries</a>
                    <?php include_once('_content/closing.php');?>
                </dd>
            </dl>
        </div>
    </div>

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
<?php include_once('_partials/footer.php');?>