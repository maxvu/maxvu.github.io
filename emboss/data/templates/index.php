<section class="card-deck" id="writing">
    <header>
        <h2>Writing</h2>
    </header>
    
    <div>
    <?php foreach ( $posts as $post ) { ?>
        <a href="<?= $post['link'] ?>" class="card">
            <span class="title"><?= $post['title'] ?></span>
            <?php if ( isset( $post['blurb'] ) && !empty( $post['blurb'] ) ) { ?>
                <span class="blurb"><?= $post['blurb'] ?></span>
            <?php } ?>
        </a>
    <?php } ?>
    </div>
    
</section>

<?php foreach ( $sections as $section_name => $cards ) { ?>
    <section class="card-deck" id="<?php echo strtolower( $section_name ); ?>">
        <header>
            <h2><?= $section_name ?></h2>
        </header>
        
        <div>
        <?php foreach ( $cards as $card ) { ?>
            <?php if ( !isset( $card['href'] ) ) { $card['href'] = '#'; } ?>
            <a href="<?= $card['href'] ?>" class="card" target="_blank">
                <span class="title"><?= $card['title'] ?></span>
                <?php if ( isset( $card['blurb'] ) ) { ?>
                    <span class="blurb"><?= $card['blurb'] ?></span>
                <?php } ?>
                <?php if ( isset( $card['extra'] ) ) { ?>
                    <?php foreach ( $card['extra'] as $e ) { ?>
                        <span class="extra"><?= $e ?></span>
                    <?php } ?>
                <?php } ?>
            </a>
        <?php } ?>
        </div>
        
    </section>
<?php } ?>