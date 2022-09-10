<?php
/**
 * Show a dual login and register section on the Log In page. 
 *
 * title: Dual Log In and Register callout on Log In page.
 * layout: snippet
 * collection: misc
 * category: login, register
 *
 * You can add this recipe directly to the Log In page > Code View in the WordPress Block Editor.
 */

<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"backgroundColor":"site-background"} -->
<div class="wp-block-group has-site-background-background-color has-background"><!-- wp:heading -->
<h2 id="h-log-in">Log In</h2>
<!-- /wp:heading -->

<!-- wp:pmpro/login-form /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:pmpro/membership {"levels":["0"],"uid":"0.290967777233093"} -->
<div class="wp-block-pmpro-membership"><!-- wp:group {"style":{"color":{"background":"#f1f1f1"}}} -->
<div class="wp-block-group has-background" style="background-color:#f1f1f1"><!-- wp:heading -->
<h2 id="h-register-for-free">Register for Free</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Must Love Dogs is world's most barkworthy community for people that love their pooch.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Start with a <a href="/membership-account/membership-checkout/?level=5" data-type="URL" data-id="/membership-account/membership-checkout/?level=5">Free Account</a> to get started with the community.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Or, <a href="/membership-account/membership-levels/" data-type="URL" data-id="/membership-account/membership-levels/">choose a paid plan</a> to access all our best stuff.</p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
[memberlite_btn href="/membership-account/membership-levels/" text="Choose a Plan" style="primary"]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:pmpro/membership --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->