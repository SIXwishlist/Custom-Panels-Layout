<?php
/**
 * @file
 * Template for B2B Premium content
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="node node-premium-content node-full clearfix">

<div class="hero-panel">
  <div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-brand row">
      <div class="large-12 columns">
        <?php print $content['hero-info']; ?>
        <div class="download">
          <?php print $content['hero-download']; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="featured-info tttaa">
  <div class="row">
    <div class="medium-10 medium-centered large-8 large-uncentered columns">
      <?php print $content['resource-info']; ?>
    </div>
    <div class="medium-12 medium-centered large-4 large-uncentered columns">
      <?php print $content['sidebar']; ?>
      
      <?php
        // if($node->type == 'premium_content'){
      ctools_include('modal');
      ctools_include('ajax');
      ctools_modal_add_js();

      if(arg(0) == 'node' && is_numeric(arg(1))) {
          $nodeid = arg(1);
        }

        $node = node_load($nodeid);
        global $user, $language;

        $wrapper = entity_metadata_wrapper('node', $node);
        $product = $wrapper->field_downloadable_product->value();
        
        $url = url(file_create_url($product->commerce_file['und'][0]['uri']));
       // print $url;
if($node->type == 'premium_content'){
        if ($user->uid && $user->roles['5'] == 'member') {

          echo '<h4 class="file1-msg">For instant access to this report</h4>';
          echo "<a class='ctools-use-modal button radius buy-join ctools-use-modal-processed' href='$url' target='_blank'>Download this now</a>"; 

        }  /*else if($user->uid && $user->roles['5'] != 'member'){

          echo '<h4 class="file1-msg">Subscribe now, for instant  access  to this report</h4>';
          echo "<a class='ctools-use-modal button radius buy-join ctools-use-modal-processed' href='http://demosrvr.com/drupal/b2b/en-gb/join/87'>Yes, let's go</a>";

        } else {

          echo '<h4 class="file1-msg">Subscribe now, for instant  access  to this report</h4>
              <p>Plus:</p>
                <ul>
                  <li>Unlimited access to content worth over £7000 in total</li>
                  <li>50+ best practice guides and benchmark reports</li>
                  <li>A free annual subscription to B2B Marketing Magazine</li>
                  <li>15% discounts on our events and training</li> 
                </ul>'
                  . ctools_modal_text_button(t('Yes, let'."'".'s go'), "premium_modal/nojs/$nodeid", '', 'button radius buy-join');
            echo "<p class='file2-msg'>Already a subscriber?</p>";        
                  
            echo "<a class='ctools-use-modal button radius buy-join ctools-use-modal-processed' href='http://demosrvr.com/drupal/b2b/en-gb/user/login?destination=node/$nodeid' type='application/pdf'>Login to download the report</a>";  
        } */
 }
      
      ?>
      
    </div>
  </div>
</section>

<?php print $content['main']; ?>

<?php if ($content['cta']): ?>
  <div class="premium-content-cta">
    <div class="row">
      <div class="small-12 columns">
        <?php print $content['cta']; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
