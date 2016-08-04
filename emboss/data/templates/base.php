<!doctype html>
<html lang="<?= $lang ?>">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300' rel='stylesheet' type='text/css'>
        <?php if ( isset( $description ) ) { ?>
            <meta name="description" content="<?= $description ?>">
        <?php } ?>
        
        <?php if ( isset( $favicon ) ) { ?>
            <link rel="apple-touch-icon" href="<?= $favicon ?>">
        <?php } ?>
        
        <?php if ( isset( $css ) && !empty( $css ) ) { ?>
            <?php foreach ( $css as $file ) { ?>
                <link rel="stylesheet" href="<?= $file ?>">
            <?php } ?>
        <?php } ?>
        
        <?php if ( isset( $js ) && !empty( $js ) ) { ?>
            <?php foreach ( $js as $file ) { ?>
                <script src="<?= $file ?>"></script>
            <?php } ?>
        <?php } ?>
    </head>
    <body>
        <header>
            <h1><?= $header ?></h1>
            <?php if ( isset( $subheader ) && !empty( $subheader ) ) { ?>
                <h2><?= $subheader ?></h2>
            <?php } ?>
        </header>
        <?= $content ?>
    </body>
</html>