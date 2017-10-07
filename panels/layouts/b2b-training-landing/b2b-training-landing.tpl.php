<?php
/**
 * @file
 * Template for b2b-directory. Used for SUppliers & Agencies and Member Profiles
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>


<div class="event-holder keynote training-landing">


  <div class="head">


    <div class="row title">
      <div class="large-10 medium-12 large-centered medium-centered small-12 columns">
         <?php print $content['header-title']; ?>
      </div>
    </div>

    <div class="strapline row">
      <div class="large-11 medium-12 large-centered medium-centered small-12 columns">
        <?php print $content['header']; ?>
      </div>
    </div>


    <!-- Tabs -->
    <div class="row menu" id="tabs">
      <div class="large-10 large-centered medium-12 small-12 columns">
        <ul class="small-block-grid-1 medium-block-grid-4 large-block-grid-4">
          <li class="first active"><a class="about-training" title="Why choose us" href="#about-training"><?php print t('Why choose us'); ?></a></li>
          <li><a class="training-courses" title="Training Courses" href="#training-courses"><?php print t('Training courses'); ?></a></li>
          <li><a class="certificates" title="Client Successes" href="#client-successes"><?php print t('Client successes'); ?></a></li>
          <li><a class="team-solutions" title="Team Solutions" href="#team-solutions"><?php print t('Team solutions'); ?></a></li>
        </ul>
      </div>
    </div>


  </div> <!-- End head-->


  <div class="about-training row tab">
    <div class="large-12 small-12 medium-12 columns">
      <div class="row what_why_summary">
        <div class="large-centered medium-centered large-10 medium-10 small-12 columns">
          <?php print $content['skills-audits']; ?>
        </div>
      </div>
    </div>
  </div>


  <div class="training-courses row tab">
    <div class="large-12 small-12 medium-12 columns">
      <div class="row summary what_why_summary">
        <div class="large-centered medium-centered large-10 medium-10 small-12 columns">
          <?php print $content['training-modules']; ?>
        </div>
      </div>
    </div>
  </div>


  <div class="certificates row tab">
    <div class="large-12 small-12 medium-12 columns">
      <div class="row what_why_summary">
        <div class="large-centered medium-centered large-10 medium-10 small-12 columns">
          <?php print $content['certificates']; ?>

          <div class="courses-open-wrapper" id="introductory">
            <?php print $content['certificates-courses']; ?>
          </div>

          <?php print $content['certificates2']; ?>

          <div class="courses-open-wrapper2" id="scrollhere">
            <div id="compulsory"></div>
            <?php print $content['certificates-courses2']; ?>
          </div>

          <?php print $content['bottom-paragraphs']; ?>

        </div>
      </div>
    </div>
  </div>


  <div class="team-solutions row tab" >
    <div class="large-12 small-12 medium-12 columns">
      <div class="row what_why_summary">

        <div class="large-centered medium-centered large-10 medium-10 small-12 columns">
          <?php print $content['team-solutions']; ?>
        </div>
      </div>
    </div>
  </div>



  <div class="row testimonials">
    <div class="panel-panel small-12 medium-12 large-12 columns">
      <?php print $content['testimonials']; ?>
    </div>
  </div>

  <div class="row logos">
    <div class="panel-panel small-12 medium-12 large-12 columns">

      <h2>You're in a good company</h2>

      <?php print $content['logos']; ?>
    </div>
  </div>


</div><!-- End container-->
