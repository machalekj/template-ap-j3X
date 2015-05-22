<?php
defined('_JEXEC') or die;
/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);
JHtml::_('jquery.framework');                                                                           
JHtml::_('jquery.ui');
/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();

//Anonymize joomla
$this->setGenerator('');

//Detect homepage
$menu = $app->getMenu();
if ($menu->getActive() == $menu->getDefault() || $menu->getActive()->alias == 'home' || $menu->getActive()->alias == 'uvod') {
    $page_class = 'main';
} else {
    $page_class = 'normal';
}
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
    <head>
        <link rel="stylesheet" 
              href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" 
              href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" 
              href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />

        <!--[if IE ]>
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/ap/css/ie.css" type="text/css" />
        <![endif]-->

        <jdoc:include type="head" />

        <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/ap.js"></script>

        <script type="text/javascript">
            window.addEvent('domready', function() {
                /*Header click*/
                $('site_name').addEvent('click', function() {
                    window.location = '<?php echo JURI::base(); ?>';
                });
            });
        </script>

    </head>

    <body class="<?php echo $page_class; ?>">
        <div id="wrap">
            <div id="main" class="<?php echo $page_class; ?>">
                <div id="content">

                    <div id="page_header">
                        <div id="inside_page_header">
                            <div id="site_name" 
                                 style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/<?php echo $this->language; ?>/brontosaurus_logo_vrch.png')">
                                <span><?php echo htmlspecialchars($app->getCfg('sitename')); ?></span>
                            </div>
                            <?php if ($this->countModules('ap-menu-v-hlavicce')) : ?>
                                <div id="header_navigation">
                                    <jdoc:include type="modules" name="ap-menu-v-hlavicce" style="xhtml" />
                                </div>
                            <?php endif; ?>
                            <?php if ($this->countModules('ap-vyhledavani')) : ?>
                                <div id="search">
                                    <jdoc:include type="modules" name="ap-vyhledavani" style="xhtml" />
                                </div>
                            <?php endif; ?>
                            <div id="header_bck"></div>
                        </div>
                    </div>

                    <?php if ($this->countModules('ap-panel-pod-hlavickou') || $this->countModules('ap-panel-s-obrazky')): ?>
                        <div id="homepage_top_panel">
                            <div id="inside_homepage_top_panel">
                                <jdoc:include type="modules" name="ap-panel-s-obrazky" style="xhtml" />
                                <jdoc:include type="modules" name="ap-panel-pod-hlavickou" style="xhtml" />
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->countModules('ap-drobeckova-navigace')) : ?>
                        <div id="breadcumbs">
                            <div id="inside_breadcumbs">
                                <jdoc:include type="modules" name="ap-drobeckova-navigace" style="xhtml" />
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="main-content">
                        <div class="round_decor_top"></div>
                        <div class="left-column">
                            <div id="inside_left_col">
                                <div id="left_panel_navigation">
                                    <?php if ($this->countModules('ap-navigace-vlevo')) : ?>
                                        <jdoc:include type="modules" name="ap-navigace-vlevo" style="xhtml" />
                                    <?php endif; ?>
                                </div>
                                <div id="left_panel_promo">
                                    <?php if ($this->countModules('ap-promo-vlevo')) : ?>
                                        <jdoc:include type="modules" name="ap-promo-vlevo" style="xhtml" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="right-column">
                            <div 
                            <?php if ($this->countModules('ap-pravy-panel')) : ?>
                                    class="right-column-left"
                                <?php else : ?>
                                    class="right-column-left-full"
                                <?php endif; ?>
                                >
                                <div id="inside_middle_col">
                                    <?php if ($this->countModules('ap-nad-hlavnim-obsahem')) : ?>
                                        <div>
                                            <jdoc:include type="modules" name="ap-nad-hlavnim-obsahem" style="xhtml" />
                                        </div>
                                    <?php endif; ?>
                                    <jdoc:include type="message" />
                                    <jdoc:include type="component" />
                                    <jdoc:include type="modules" name="debug" />
                                    <?php if ($this->countModules('ap-pod-hlavnim-obsahem')) : ?>
                                        <div>
                                            <jdoc:include type="modules" name="ap-pod-hlavnim-obsahem" style="xhtml" />
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if ($this->countModules('ap-pravy-panel')) : ?>
                                <div class="right-column-right">
                                    <div id="inside_right_col">
                                        <jdoc:include type="modules" name="ap-pravy-panel" style="xhtml" />
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="right-column-right-empty"> </div>
                            <?php endif; ?>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="round_decor_bottom"></div>
            <div id="inside_footer">
                <jdoc:include type="modules" name="ap-paticka-stranky" style="xhtml" />
            </div>
        </div>
    </body>
</html>
