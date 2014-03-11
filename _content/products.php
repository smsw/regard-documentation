<div id="panel6" class="content">
    <dl class="tabs" data-tab>
        <dd class="active"><a href="#products-panel2-1">Introduction </a></dd>
        <dd><a href="#products-panel2-6">Publish/Edit</a></dd>
        <dd><a href="#products-panel2-2">Activity Type</a></dd>
        <dd><a href="#products-panel2-3">SEO</a></dd>
    </dl>

    <div class="tabs-content">

        <!-- Quick overview -->
        <div class="content active" id="products-panel2-1">
            <h3>Login to the <a href="http://regard.co.uk/admin.php" title="Admin panel" rel="nofollow" target="_blank">admin panel</a> using your username and password.
            </h3>
            Products display at <a href="http://regard.co.uk/products/" target="_blank" title="Regard Products">http://regard.co.uk/products/</a>
        </div>

        <!-- Publish -->
        <div class="content" id="products-panel2-6">
            <h3>Product Details</h3>
            <p>Each Product is created by navigating to: Content (top left of the page) > Publish or Edit > Products. Here you will be presented with a list of entries (if editing) and a new product (if publishing). To edit a product just click the one you want to edit. To publish a product follow directions below.</p>

            <h3>Product Title</h3>
            <p>Title – Put the title of your product here e.g. Cushions by Emma. This will automatically fill out the url field</p>
            <img src="/_content/images/bookasession_details.png" alt="product details image"/>
            <ul>
                <li>Enter a price for the product. For Products we need to enter product dimensions to determine postage costs.</li>
            </ul>
            <h3>Postage and Packaging</h3>
            <p>
            <ul>
                <li>Postage and packaging is divided into two types of postage. Large and Small.</li>
                <li><strong>If a product is going to be delivered as a large parcel, enter 3kg into the weight field.</strong></li>
                <li>Please leave <strong>Handling Surcharge</strong> empty</li>
            </ul>
            </p>
            <h3>SKU Codes</h3>
            <ul>
                <li><strong>SKU</strong>, is your Stock Keeping Unit. Always refer to the below list and copy them exactly into the SKU field when submitting a new product or session. </li>
                <li><strong>Limit stock</strong>, i.e the number of products that can be purchased. <strong>You must</strong> tick the box next to the value you enter as shown in the screenshot above.</li>
            </ul>
            <?php include('_content/skucodes.php');?>


            <br>
            <h3>Product Price Range</h3>
            <ul>
                <li>To filter this product in search results, select a Product Price Range that matches the price you have entered above in Product Details.</li>
            </ul>

            <h3>Product Excerpt</h3>
            <ul>
                <li>Enter an excerpt about the product that will appear in the listings/results.</li>
            </ul>

            <h3>Product Description</h3>
            <ul>
                <li>Enter a description about the session that will appear in the main product detail.</li>
            </ul>

            <h3>Product Image</h3>

            <div class="panel callout radius">
                <h5>Adding/Uploading Images</h5>
                <p>Note: There is no limit to the number of product images you can add.</p>
            </div>

            <ol>
                <li>Click 'Add some data'.</li>
                <li>Click 'Add File'.</li>
                <li>Select an image that exists already, or click 'Upload File'.</li>
                <li>Click Publish/Submit to save your changes.</li>
            </ol>

            <h3>Product Region</h3>
            <ul>
                <li>Select a region you wish this product to be associated with.</li>
            </ul>

            <h3>Product Service Name</h3>
            <ul>
                <li>This is the name that will appear to be searchable in the main product page, under the filters ' By Service Name '.</li>
            </ul>

            <div class="panel callout warn radius">
                <h5>Next...</h5>
                <p>Go to Activity Type</p>
            </div>
        </div>

        <!-- Activity Type -->
        <div class="content" id="products-panel2-2">
            <h3>Adding and editing Categories for a session</h3>
<!--            <p>Displayed here are your list of categories, i.e all of your Activity Types. You can select the red link, 'Edit Categories' to add, or adjust the category names. Currently, only Administrators are able to do this.</p>-->
            <p>Tick the relevant product type. Please ignore the “Date”, “Options” and “Pages” tabs.</p>
            <ul>
                <li>Tick a category you wish to associate with your session.</li>
                <li>Click Submit to save your changes.</li>
            </ul>
            <div class="panel callout warn radius">
                <h5>Next...</h5>
                <p>Go to SEO</p>
            </div>
        </div>

        <div class="content" id="products-panel2-3">
            <h3>Search Engine Optimisation</h3>
            <div class="panel callout radius">
                <h5>Choose your meta title, keywords and description.</h5>
            </div>
            <ol>
                <li>Click SEO.</li>
                <li>Enter SEO Title, Meta Keywords, or Description.</li>
                <li>Click Publish/Submit to save your changes.</li>
            </ol>
            <img src="/_content/images/servicesseo.png" alt="service seo"/>

            <div class="panel callout warn radius">
                <h5>Publish/Submit</h5>
                <p>Save your changes before viewing Orders.</p>
            </div>
        </div>
    </div>
</div>