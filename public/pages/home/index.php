<?php
$path_home = './';
$path_search = '../search/';
$path_allergyinfo = '../allergyinfo/';
require_once '../templates/base_template_top.php'
?>
<!-- Beginning of Body -->
<div class="row">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-12 hide-for-small">
        <div id="featured" data-orbit>
          <img src="http://placehold.it/1200x500&text=Slide Image 1" alt="slide image">
          <img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
          <img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns show-for-small">
        <img src="http://placehold.it/1200x700&text=Mobile Header">
      </div>
    </div><br>
    <div class="row">
      <div class="large-12 columns">
        <div class="row">
          <div class="large-4 small-6 columns">
            <h4>Featured Restaurants</h4><hr>
            <div class="row">
              <div class="large-1 column">
                <img src="http://placehold.it/50x50&amp;text=[img]">
              </div>
              <div class="large-9 columns">
                <h5><a href="#">Restaurant Name</a></h5>
              </div>
            </div><hr>
            <div class="hide-for-small">
              <div class="row">
                <div class="large-1 column">
                  <img src="http://placehold.it/50x50&amp;text=[img]">
                </div>
                <div class="large-9 columns">
                  <h5 class="subheader"><a href="#">Restaurant Name</a></h5>
                </div>
              </div><hr>
              <div class="row">
                <div class="large-1 column">
                  <img src="http://placehold.it/50x50&amp;text=[img]">
                </div>
                <div class="large-9 columns">
                  <h5 class="subheader"><a href="#">Restaurant Name</a></h5>
                </div>
              </div><hr>
              <div class="row">
                <div class="large-1 column">
                  <img src="http://placehold.it/50x50&amp;text=[img]">
                </div>
                <div class="large-9 columns">
                  <h5 class="subheader"><a href="#">Restaurant Name</a></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="large-4 small-6 columns">
            <img src="http://placehold.it/300x465&amp;text=Image">
          </div>
          <div class="large-4 small-12 columns">
            <h4>Recent Info</h4><hr>
            <div class="panel">
              <h5><a href="#">Post Title 1</a></h5>
              <h6 class="subheader">
                Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
              </h6>
              <h6><a href="#">Read More »</a></h6>
            </div>
            <div class="panel hide-for-small">
              <h5><a href="#">Post Title 2 »</a></h5>
            </div>
            <div class="panel hide-for-small">
              <h5><a href="#">Post Title 3 »</a></h5>
            </div>
            <a href="#" class="right">Go To Info Page »</a>
          </div>
        </div>
      </div>
    </div>

<!-- End of Body -->
<?php require_once '../templates/base_template_bottom.php' ?>