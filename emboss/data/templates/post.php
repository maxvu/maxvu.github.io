<article class="post">
    <a href="/" class="back">&larr; back</a>
    <header>
        <h1 class="title"><?= $title ?></h1>
        <?php if ( isset( $blurb ) && !empty( $blurb ) ) { ?>
            <h2 class="blurb"><?= $blurb ?></h2>
        <?php } ?>
    </header>
    <div class="content">
        <?php echo (new Parsedown())->text( $content ); ?>
    </div>
</article>