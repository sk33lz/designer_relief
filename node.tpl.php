<?php
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> post">
<?php print $picture ?>
<?php if ($submitted): ?>
    <div class="post-date">
	<?php print format_date($node->created, 'custom', "M y");?>
	<div class="post-day"><?php print format_date($node->created, 'custom', "d");?></div>
	</div>
  <?php endif; ?>
<?php if ($page == 0): ?>
<div class="post-title">
  <h2 class="entry-title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php if ($submitted): ?>
    <span class="post-author meta-link-post"><?php print $name; ?></span>
  <?php endif; ?>
  </div>
  <?php endif; ?>
<div class="meta-link-post post-comments"><?php
  print $node->comment_count . ' comment';
  if ($node->comment_count != 1) { print 's'; }
?>
</div> 
  <div class="content inline-block">
    <?php print $content ?>
  </div>
  <div class="clear-block">
    <div class="meta meta-link-post meta-entry">
    <?php if ($taxonomy): ?>
      <div class="post-tags"><?php print $terms ?></div>
    <?php endif;?>
    <?php if ($links): ?>
      <div class="links controls"><?php print $links; ?></div>
    <?php endif; ?>
  </div>
	</div>
  <div class="divider2"></div>
</div>