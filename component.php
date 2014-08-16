<?php defined( '_JEXEC' ) or die; 

// variables
$doc = JFactory::getDocument();
$app = JFactory::getApplication();
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// load sheets and scripts
$doc->addStyleSheet($tpath.'/css/j-template.css');

?>

<!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
    <!-- typekit fonts -->
    <script type="text/javascript" src="//use.typekit.net/gbu8wbh.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/print.css" type="text/css" media="print"/>
    <jdoc:include type="head" />
</head>

<body id="print">

<header>
    <div class="logo-text">
        <h1><?php echo htmlspecialchars($app->getCfg('sitename')); ?></h1>
    </div>
</header>
<div class="main">
    <jdoc:include type="message" />
    <jdoc:include type="component" />
</div>
<footer>
    <p style="color:white"><?php echo htmlspecialchars($app->getCfg('sitename')); ?> | 2014 | &copy; | alle Rechte vorbehalten</p>
</footer>

</body>

</html>