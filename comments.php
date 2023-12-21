<?php
if (have_comments()) {
    echo '<div class="comments-area">';
    echo '<h5 class="comments-title">' . get_comments_number() . ' کامنت</h5>';

    echo '<div class="comment-list">';
    wp_list_comments(
        array(
            'style' => 'div',
            'avatar_size' => '70',
            'short_ping' => true,
            'callback' => 'custom_comments',
        )
    );

    echo '</div>'; // .comment-list
    echo '</div>'; // .comments-area
}

comment_form(
    array(
        'title_reply' => 'ارسال نظر',
        'comment_notes_before' => '<p class="comment-notes">آدرس ایمیل شما منتشر نخواهد شد. فیلدهای الزامی مشخص شده اند</p>',
        'class_submit' => 'btn primary-solid-btn',
    )
);

function custom_comments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    ?>
    <div class="comment">
        <div class="comment-author">
            <?php echo get_avatar($comment, $args['avatar_size']); ?>
        </div>
        <div class="comment-body">
            <div class="comment-meta">
                <div class="comment-meta-author">
                    <?php printf('<a href="%s">%s</a>', esc_url(get_comment_author_url()), get_comment_author()); ?>
                </div>
                <div class="comment-meta-date">
                    <?php printf('<a href="%1$s">%2$s</a>', esc_url(get_comment_link($comment->comment_ID)), get_comment_date()); ?>
                </div>
            </div>
            <div class="comment-content">
                <?php comment_text(); ?>
            </div>
            <div class="comment-reply">
                <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
            </div>
        </div>
    <?php
}
?>