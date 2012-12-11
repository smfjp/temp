<?php if ( have_comments() ) : ?>
<h4 id="comments"><?php comments_number('コメントなし','１件のコメント','%件のコメント'); ?></h4>
<ul class="commentlist">
	<?php wp_list_comments(); ?></ul>
<div class="navigation">
<div class="alighleft"><?php previous_comments_link() ?></div>
<div class="alighright"><?php next_comments_link() ?></div>
</div>
<?php else :
	if ('open' == $post->comment_status) : ?>
		<p>コメントはありません。</p>
<?php　 else : ?> <p>コメントを表示できません。</p>
	<?php endif;
endif; ?>

<div id="comment_form">
<?php
$new_defaults = array(
	'comment_notes_after' => '',
	'label_submit'=>'送信',
	'logged_in_as'=>'',
	'comment_field'=>'<p class="comment-form-comment"><label for="comment">' . _x( '', '' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
);
?>
	<?php comment_form($new_defaults); ?>
</div>
