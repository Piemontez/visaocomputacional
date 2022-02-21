<div class="vc-courses-tag-list">
    <h2><?php echo __('Tags', 'visao-computacional') ?></h2>
    <div class="vc-ctl-cat">
        <?php
        $tags = get_tags(array(
            'hide_empty' => true
        ));

        foreach ($tags as $tag) {
            $tag = get_terms($tag);

            foreach ($tag as $post_tag) {
            ?>
                <a class="btn btn-list-tag" href="<?php echo esc_url( get_tag_link($post_tag->term_id) ) ?>"><?php echo $post_tag->name ?></a>
        <?php
            }
        }
        ?>
    </div>
</div>