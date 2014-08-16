<?php
header('Content-type: text/css');

// get template params
$basefontsize = $this->params->get('basefontsize');
$textindent = $this->params->get('textindent');

?>

<style type="text/css">

    html {
        font-size: <?php echo $basefontsize;?>%;
    }

    <?php if ($textindent == 1): ?>
        article p + p {
            text-indent: 1.5em;
            margin-top: -.75em;
        }

        article p.bild + p,
        article p.lead + p,
        article p.bildlegende + p,
        article p.autor + p {
            text-indent: 0 !important;
        }

        article p.readmore {
            text-indent: 0 !important;
            display: block;
            padding: 1em 0 2em 0;
        }

        article p.readmore a {
            margin: 0 !important;
        }
    <?php endif; ?>

</style>