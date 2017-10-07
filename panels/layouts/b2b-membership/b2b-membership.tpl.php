<?php
/**
 * @file
 * Template for Panopoly Sutro Double.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="panel-display b2b-membership clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="teal-box">
    <div class="row">
      <div class="large-12 columns">
        <div class="topic-title"><h1><?php print t('Premium membership options'); ?></h1></div>
      </div>
    </div>
  </div>

  <div class="spacing">
    <div class="row top">
      <div class="large-6 columns heading">
        <?php print $content['summary']; ?>
      </div>
      <?php print $content['prices']; ?>
    </div>

    <div class="hidden-for-medium-down">
      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('Content user licences'); ?></p></div>
        <div class="large-2 columns option"><?php print t('1'); ?></div>
        <div class="large-2 columns option"><?php print t('up to 15'); ?></div>
        <div class="large-2 columns option"><?php print t('16 and above'); ?></div>
      </div>
      <div class="row top">
        <div class="large-6 columns first"><p><a href="/premium-resources/best-practice-guide" target="_blank"><?php print t('50+ B2B marketing-specific Best Practice Guides'); ?></p></a></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
      </div>
      <div class="row top">
        <div class="large-6 columns first"><p><a href="/premium-resources/benchmarking-report" target="_blank"><?php print t('20+ B2B industry benchmarking reports'); ?></p></a></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
      </div>
      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('Fresh new research, analysis and guides published every month'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
      </div>
      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('Annual subscription to B2B Marketing Magazine'); ?></p></div>
        <div class="large-2 columns option"><?php print t('1 copy'); ?></div>
        <div class="large-2 columns option"><?php print t('up to 15 copies'); ?></div>
        <div class="large-2 columns option"><?php print t('16+ copies'); ?></div>
      </div>
    </div>

    <!--<div class="benefits row">
      &nbsp;
    </div>-->

    <div class="hidden-for-medium-down">
      <div class="row top divider-top">
        <div class="large-6 columns first"><p><?php print t('B2B Summit tickets*'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><?php print t('2'); ?></div>
        <div class="large-2 columns option"><?php print t('5'); ?></div>
      </div>
      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('B2B Conference tickets'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><?php print t('1'); ?></div>
        <div class="large-2 columns option"><?php print t('3'); ?></div>
      </div>
      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('Free access to on-demand training courses'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><?php print t('Free access'); ?></div>
        <div class="large-2 columns option"><?php print t('Free access'); ?></div>
      </div>
      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('Quarterly B2B networking event tickets*'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><?php print t('2'); ?></div>
        <div class="large-2 columns option"><?php print t('5'); ?></div>
      </div>
      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('B2B Awards entries (Team and Marketer of the Year)*'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
      </div>

      <!--<div class="benefits row">
      &nbsp;
    </div>-->

      <div class="row top divider-top">
        <div class="large-6 columns first"><p><?php print t('B2B Leaders programme membership (x2)*'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
      </div>

      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('Participation in the judging process for the B2B Awards*'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
      </div>

      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('10-seat table at B2B Awards night*'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
      </div>

      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('Inhouse trends briefing from industry expert*'); ?></p></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><i class="fa fa-times"></i></div>
        <div class="large-2 columns option"><i class="fa fa-check"></i></div>
      </div>

      <div class="row top divider-top">
        <div class="large-6 columns first"><p><?php print t('Discounts on B2B Marketing events*'); ?></p></div>
        <div class="large-2 columns option"><?php print t('15%'); ?></div>
        <div class="large-2 columns option"><?php print t('20%'); ?></div>
        <div class="large-2 columns option"><?php print t('30%'); ?></div>
      </div>
      <div class="row top">
        <div class="large-6 columns first"><p><?php print t('Discounts on B2B Training*'); ?></p></div>
        <div class="large-2 columns option"><?php print t('15%'); ?></div>
        <div class="large-2 columns option"><?php print t('15%');?></div>
        <div class="large-2 columns option"><?php print t('15%'); ?></div>
      </div>


      <div class="row">
        <div class="large-6 columns first"><p><?php print t('*UK members only'); ?></p></div>
        <div class="large-2 columns option">
          <div class="hidden" style="display:none;">
            <?php
            ctools_include('ajax');
            ctools_include('modal');
            print ctools_modal_text_button(t('Get access!'), 'membership_modal/nojs', t('Get access!')) ;?>
          </div>

          <?php print l(t('Get access!'), 'join/87', array('attributes' => array('class' => array('btn-orange')))); ?>

        </div>
        <div class="large-2 columns option"><a href="/contact-b2b-marketing" class="btn-orange"><?php print t('Contact us'); ?></a></div>
        <div class="large-2 columns option"><a href="/contact-b2b-marketing" class="btn-orange"><?php print t('Contact us'); ?></a></div>
      </div>
    </div>

    <div class="row more-cta">
      <p><?php print t('Need more convincing? Learn more about the benefits of membership:'); ?></p>
      <a href="/why-become-b2b-marketing-premium-member" class="btn-orange"><?php print t('Find out more'); ?></a>
    </div>

    <div class="row logos-area">
      <div class="large-12 columns">
        <?php print $content['logos']; ?>
      </div>
    </div>

    <div class="row quote-area">
      <?php print $content['quote']; ?>
    </div>
  </div>
</div>
