<?php
defined('_JEXEC') or die;

// Get language and direction
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></title>

        <link rel="stylesheet" 
              href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" 
              href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <style type="text/css">
            <!--
            #errorboxbody
            {margin:30px}
            #errorboxbody h2
            {font-weight:normal;
             font-size:1.5em}
            #searchbox
            {background:#eee;
             padding:10px;
             margin-top:20px;
             border:solid 1px #ddd
            }
            -->
        </style>
    </head>
    <body>
        <h2>
            <?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?>
        </h2>
        <h3><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></h3>
        <p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
        <ul>
            <li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
            <li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
            <li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
            <li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
        </ul>

        <div><!-- start gotohomepage -->
            <h1>
                <a href="<?php echo $this->baseurl; ?>/index.php" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a>
            </h1>
        </div><!-- end gotohomepage -->
        
    </body>
</html>
