<div id="panel5" class="content">
    <dl class="tabs" data-tab>
        <dd class="active"><a href="#session-panel2-1">Introduction </a></dd>
        <dd><a href="#session-panel2-6">Publish/Edit</a></dd>
        <dd><a href="#session-panel2-2">Activity Type</a></dd>
        <dd><a href="#session-panel2-4">Date</a></dd>
        <dd><a href="#session-panel2-3">SEO</a></dd>
    </dl>

    <div class="tabs-content">

        <!-- Quick overview -->
        <div class="content active" id="session-panel2-1">
            <h3>Login to the <a href="http://regard.co.uk/admin.php" title="Admin panel" rel="nofollow" target="_blank">admin panel</a> using your username and password.
            </h3>
            Sessions display at <a href="http://regard.co.uk/book-a-session/" target="_blank" title="Regard Sessions">http://regard.co.uk/book-a-session/</a>
        </div>

        <!-- Publish -->
        <div class="content" id="session-panel2-6">
            <h3>Booking Details</h3>
            <p>Each Session is created by navigating to: Content (top left of the page) > Publish or Edit > Session. Here you will be presented with a list of entries (if editing) and a new session (if publishing). To edit a session just click the one you want to edit. To publish a session follow directions below.</p>

            <h3>Booking Title</h3>
            <p>Put the title and date of your session here  e.g. OWL Town Farm Workshop – Monday 10th March. This will automatically fill out the url field</p>

            <img src="/_content/images/bookasession_details.png" alt="book a session image"/>

            <h3>SKU Codes</h3>
            <ul>
                <li><strong>SKU</strong>, is your Stock Keeping Unit. Always refer to the below list and copy them exactly into the SKU field when submitting a new product or session. </li>
                <li><strong>Limit stock</strong>, i.e the number of sessions that can be purchased. <strong>You must</strong> tick the box next to the value you enter as shown in the screenshot above.</li>
            </ul>
            <?php include('_content/skucodes.php');?>

            <h3>Booking Excerpt</h3>
            <ul>
                <li>Enter an excerpt about the session that will appear in the listings/results.</li>
            </ul>

            <h3>Booking Description</h3>
            <ul>
                <li>Enter a description about the session that will appear in the main session detail.</li>
            </ul>

            <h3>Booking Image</h3>

            <div class="panel callout radius">
                <h5>Adding/Uploading Images</h5>
                <p>Note: There is no limit to the number of session images you can add.</p>
            </div>

            <ol>
                <li>Click 'Add some data'.</li>
                <li>Click 'Add File'.</li>
                <li>Select an image that exists already, or click 'Upload File'.</li>
                <li>Click Publish/Submit to save your changes.</li>
            </ol>


            <h3>Booking Region</h3>
            <ul>
                <li>Select a region you wish this session to be associated with.</li>
            </ul>

            <h3>Booking Service Name</h3>
            <ul>
                <li>This is the name that will appear to be searchable in the main session page, under the filters ' By Service Name '.</li>
            </ul>

            <div class="panel callout warn radius">
                <h5>Next...</h5>
                <p>Go to Activity Type</p>
            </div>

        </div>

        <!-- Activity Type -->
        <div class="content" id="session-panel2-2">
            <h3>Adding and editing Categories for a session</h3>

            <p>Displayed here are your list of categories, i.e all of your Activity Types. You can select the red link, 'Edit Categories' to add, or adjust the category names. Currently, only Administrators are able to do this.</p>
            <ul>
                <li>If you are adding an OWL stand alone course please tick OWL Session and Course as well as OWL stand alone course. For a normal OWL day session just tick OWL Session</li>
                <li>Click Submit to save your changes.</li>
            </ul>

            <div class="panel callout warn radius">
                <h5>Next...</h5>
                <p>Go to Date</p>
            </div>
        </div>

        <!-- Date -->
        <div class="content" id="session-panel2-4">
            <h3>Session Date</h3>
            <p>Click inside the Entry Date box to set the date that the session will be running. Set the Expiration date as the same day unless it is a session which runs over consecutive days. <br>Please ignore the “Options” and “Pages” tab.
            </p>

            <div class="panel callout warn radius">
                <h5>Next...</h5>
                <p>Go to SEO</p>
            </div>
        </div>

        <div class="content" id="session-panel2-3">
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
        </div>
    </div>
</div>