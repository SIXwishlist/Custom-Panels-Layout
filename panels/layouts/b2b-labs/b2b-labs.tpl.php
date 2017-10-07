<?php
/**
 * @file
 * Template for Labs page
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display b2b-labs clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="hero-panel">
    <?php print $content['header']; ?>
  </div>

  <div class="labs-intro">
    <div class="row">
      <div class="small-12 medium-12 large-12 columns centered">
        <?php print $content['intro']; ?>
      </div>
    </div>
  </div>

  <div class="labs-tabs-section row">
    <div class="sub-title small-12 medium-12 large-12 columns">
      <h2 class="text-centered"><?php print t('B2B Reach services'); ?></h2>
    </div>
    <div class="small-12 medium-12 large-12 columns">
      <div class="labs-tabs">
        <ul class="large-centered medium-centered columns medium-10 large-10 large-block-grid-4 small-block-grid-1 medium-block-grid-4">
          <li data-tab="tabs-1" class="first tab active"><a href="#"><?php print t('Research and insight'); ?></a></li>
          <li data-tab="tabs-2" class="tab"><a href="#"><?php print t('Content creation'); ?></a></li>
          <li data-tab="tabs-3" class="tab"><a href="#"><?php print t('Promotion & lead generation'); ?></a></li>
          <li data-tab="tabs-4" class="last tab"><a href="#"><?php print t('Long term value driving'); ?></a></li>
        </ul>
      </div>
      <div class="content">
        <div id="tabs-1" class="tab-content active">
          <p><?php print t('Strong and credible research-based content makes for audience-grabbing headlines, extensive social sharing and outstanding conversion rates. Our research team will deliver exactly that, using our targetable member database to research fresh and exciting insight-lead stories, endorsed by the authority and credibility of the B2B Marketing brand.'); ?></p>
        </div>
        <div id="tabs-2" class="tab-content">
          <p><?php print t('B2B Marketing Reach brings over ten years of journalistic experience to transform the engagement and results you get from your content marketing, by delivering:'); ?></p>
          <ul>
          <li><?php print t('Compelling, research-led stories.'); ?></li>
          <li><?php print t('Insights, ideas and fresh thinking.'); ?></li>
          <li><?php print t("Tools that add practical value to your customers’ lives."); ?></li>
          <li><?php print t('Multiple content formats - from reports and guides to infographics and videos.'); ?></li>
          </ul>
        </div>
        <div id="tabs-3" class="tab-content">
          <p><?php print t("Once published, we’ll deliver a tailored content distribution and re-purposing package across our multiple user touchpoints and channels to deliver maximum reach, engagement and lead generation for your campaign."); ?></p>
        </div>
        <div id="tabs-4" class="tab-content">
          <p><?php print t("When your B2B Reach campaign is complete, you’ll have a powerful and compelling content piece to build into your wider marketing programme and promote to your own customer base and prospects."); ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="labs-contact">
    <div class="row">
      <div class="small-12 medium-12 large-12 columns">
        <p><?php print t('For more information email <a href="mailto:media@b2bmarketing.net">media@b2bmarketing.net</a> or call +44 (0)207 014 4920.'); ?></p>
      </div>
    </div>
  </div>

  <div class="labs-whats-different row">
    <div class="small-12 medium-12 large-12 columns">
      <div class="sub-title">
        <h2 class="text-centered"><?php print t("What’s different about B2B Marketing Reach?"); ?></h2>
      </div>
      <p class="centered key"><?php print t('No-one delivers authority, credibility, relevance and reach in the B2B arena like we do.<br>B2B Marketing Reach lets you tap into that, positioning your brand as thought leader and a voice of authority within your market.'); ?></p>
      <div class="labs-differences row">
        <div class="large-3 columns">
          <img src="<?= drupal_get_path('theme',$GLOBALS['theme']) ?>/images/labs/1-engagement.png" alt=""/>
          <h4><?php print t('Fresh insights'); ?></h4>
          <p><?php print t('We understand the B2B space like no one else. This knowledge, combined with our in depth research, delivers compelling insights for your content marketing.'); ?></p>
        </div>
        <div class="large-3 columns">
          <img src="<?= drupal_get_path('theme',$GLOBALS['theme']) ?>/images/labs/2-insight.png" alt=""/>
          <h4><?php print t('Ready-made engagement'); ?></h4>
          <p><?php print t("We’ve spent the last decade building the trust of B2B marketing decision makers. Our Reach programme places your brand and messaging into the heart of their online engagement."); ?></p>
        </div>
        <div class="large-3 columns">
          <img src="<?= drupal_get_path('theme',$GLOBALS['theme']) ?>/images/labs/3-onepackage.png" alt=""/>
          <h4><?php print t('Everything in one package'); ?></h4>
          <p><?php print t('B2B Marketing Reach delivers a complete service, encompassing editorial consultation, research, copywriting, design, engagement and reporting.'); ?></p>
        </div>
        <div class="large-3 columns">
          <img src="<?= drupal_get_path('theme',$GLOBALS['theme']) ?>/images/labs/4-results.png" alt=""/>
          <h4><?php print t('Results'); ?></h4>
          <p><?php print t("By combining killer content with built-in distribution, we’ll give you a content marketing programme that will drive your pipeline, MQLs and ROI like never before."); ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="labs-logos">
    <div class="row">
      <div class="small-12 medium-12 large-12 columns clearfix centered">
        <?php print $content['logos']; ?>
      </div>
    </div>
  </div>

  <div class="labs-how">
    <div class="row">
      <div class="small-12 medium-12 large-12 columns">
        <div class="sub-title centered">
          <h2 class="text-centered text-uppercase"><?php print t('Our methodology'); ?></h2>
        </div>
        <ol class="features row">
          <li class="large-6 columns">
            <h4><?php print t('Exploration'); ?></h4>
            <p><?php print t('Every project starts with a workshop. This enables us to develop a perspective and thesis on your topic which will deliver against your objectives and resonate with your target audience.'); ?></p>
          </li>
          <li class="large-6 columns">
            <h4><?php print t('Verification'); ?></h4>
            <p><?php print t('The thesis is then researched and tested across our unique, targetable member database of B2B marketers and leaders.'); ?></p>
            <p><?php print t('This enables us to deepen our understanding and unearth distinctive and compelling insights.'); ?></p>
          </li>
          <li class="large-6 columns">
            <h4><?php print t('Creation'); ?></h4>
            <p><?php print t('Our team of content creators then set about writing and producing content that brings these ideas and insights to life.'); ?></p>
          </li>
          <li class="large-6 columns">
            <h4><?php print t('Distribution'); ?></h4>
            <p><?php print t('Using our extensive member network we make sure your content is seen and engaged with by the people you need to reach.'); ?></p>
          </li>
          <li class="large-6 columns">
            <h4><?php print t('Conversation'); ?></h4>
            <p><?php print t("We’re keen to keep the conversation going post-publication. That’s why our dedicated content strategists are on-hand to lead the online conversation. And for those looking for face-to-face dialogue, our roundtable events provide the perfect environment."); ?></p>
          </li>
          <li class="large-6 columns">
            <h4><?php print t('Measurement'); ?></h4>
            <p><?php print t('Throughout the distribution and promotion stage we track and measure everything, to identify ways to drive even greater results for your campaign.'); ?></p>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div><!-- /.b2b-labs -->
