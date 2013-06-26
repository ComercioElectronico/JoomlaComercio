<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Email: info@asdesigning.com
/*
/*******************************************************************************************/

defined( '_JEXEC' ) or die( 'Restricted access' );

/* The following line loads the MooTools JavaScript Library */
JHTML::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/joomla.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/slideshow.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/colorstyles.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bloglayout.css" type="text/css" />

	<script type="text/javascript" src="templates/<?php echo $this->template ?>/scripts/general.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/scripts/jquery.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/scripts/fading.js"></script>
    

<?php 

include 'ie6warning.php';
include 'params.php';

?>
</head>

<body >

<div id="general">

    <!-- HEADER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
    <div id="header">
        <div id="headercontent">
            <div id="submenu">
            	<div id="contactlink">
                	<a href="mailto:email@yourcompnyname.com" title="Contact Us">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo  $this->template ?>/images/spacer.png" 
                        border="0" width="1" height="1" style="border: 0;" /></a>
                </div>
				<div id="searchlink">
                	<a href="index.php?option=com_search&amp;view=search&amp;searchword=search" title="Search">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo  $this->template ?>/images/spacer.png" 
                    	border="0" width="1" height="1" style="border: 0;" /></a>
                </div>
				<div id="homelink">
                	<a href="http://www.astemplates.com" title="Home">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo  $this->template ?>/images/spacer.png" 
                    	border="0" width="1" height="1" style="border: 0;" /></a>
                </div>
            </div>
            <div class="clear"></div>
            <div id="topmenu">
                <jdoc:include type="modules" name="position-1"/>
            </div> 
            <div class="clear"></div>

			<div class="left">
                <div id="companyname">
                    <a href="<?php echo $this->baseurl ?>"> 
                        <img src="<?php echo $logoimg; ?>" alt="AS Templates"/>            
                    </a>
                </div>
                <div id="search">
                    <jdoc:include type="modules" name="position-0" />
                </div>
            </div>

    		
            <div class="right">
                <div id="slideshow">
                    <div id="fading">
                        <ul class="sliding">
							<li><img src="templates/<?php echo $this->template ?>/images/slide1.jpg" height="300" width="700" alt="AS Templates" /></li>
							<li><img src="templates/<?php echo $this->template ?>/images/slide2.jpg" height="300" width="700" alt="AS Templates" /></li>
							<li><img src="templates/<?php echo $this->template ?>/images/slide3.jpg" height="300" width="700" alt="AS Templates" /></li>                        
                        </ul>                
                        <script type="text/javascript">
                             var $j = jQuery.noConflict(); 
                                 $j(function(){
                                 $j("#fading").faded({
                                        speed:<?php echo $speed ?>,
                                        crossfade: true,
                                        autopagination: false,
                                        autoplay: <?php echo $autoplay ?>,
                                        autorestart: true
                                 });
                             });
                        </script>
                    </div>
                </div> 
            </div>
            <div class="clear"></div>
    
            <?php if($this->countModules('breadcrumbsload')): ?>
            <div id="breadcrumb"> 
                <jdoc:include type="modules" name="breadcrumbsload" />	
            </div>
            <div class="clear"></div>
            <?php endif; ?>
            
        </div>
    </div>
    <!-- END OF HEADER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    
    <!-- CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="clear"></div>
    <div id="content">    
        <!-- COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div id="colmain" <?php echo $colMainWidth; ?> >
        
            <jdoc:include type="message" />
    
            <div id="component" <?php echo $componentWidth; ?> >
                <jdoc:include type="component"  />
            </div>
    
			<?php if($this->countModules('position-5')): ?>
            <div id="adsense" class="banner">
                <jdoc:include type="modules" name="position-5" style="xhtml"/>
            </div>
            <?php else: ?>
            <div id="adsense" class="banner">
                <script type="text/javascript"><!--
                google_ad_client = "ca-pub-1063867985951059";
                /* AS Image 468x60 */
                google_ad_slot = "1732959233";
                google_ad_width = 468;
                google_ad_height = 60;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            </div>
            <div class="clear"></div>
            <?php endif; ?>

        </div>
        <!-- END OF COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    
        <!-- COLUMN RIGHT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php if($showRightCol) : ?> 
        <div id="colright">
            <?php if($this->countModules('position-46')): ?>
            <div class="row2">
                <jdoc:include type="modules" name="position-46" style="xhtml"/>
            </div>
            <?php endif; ?>
            <?php if($this->countModules('position-7')): ?>
            <div id="colrightmenu">
                <jdoc:include type="modules" name="position-7" style="xhtml" />
            </div>
            <?php endif; ?>
            <?php if($this->countModules('position-47')): ?>
            <div class="row3">
                <jdoc:include type="modules" name="position-47" style="xhtml"/>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <!-- END OF COLUMN RIGHT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>
    <div class="clear"></div>

    <!-- FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<div id="footer">
    	<div class="bg">
            <div id="footercontent">
                <div class="row2">
                    <div class="row2col1">
                        <jdoc:include type="modules" name="position-51" style="xhtml"/>
                    </div>
                    <div class="row2col2">
                    <div id="trade">Copyright &copy; <?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?></div>
                    
                    <!-- DO NOT REMOVE OR CHANGE THE CONTENT BELOW, THIS TEMPLATE MAY NOT WORK PROPERLY -->
                    <!-- FOR MORE INFO SEE OUR COPYRIGHT NOTICE FOR FREE WEBSITE TEMPLATES: http://astemplates.com/terms.php -->
                    
                    <div id="ascopy">
                    &nbsp;|&nbsp;
                    <a href="http://www.astemplates.com/" target="_blank">
                        DESIGNED BY:&nbsp;&nbsp;AS TEMPLATES
                    </a>
                    &nbsp;|&nbsp; 

                    | 

                    </div>
                    
                    <!-- DO NOT REMOVE OR CHANGE THE CONTENT ABOVE, THIS TEMPLATE MAY NOT WORK PROPERLY -->
                    <!-- FOR MORE INFO SEE OUR COPYRIGHT NOTICE FOR FREE WEBSITE TEMPLATES: http://astemplates.com/terms.php -->
                    </div>
                </div>
            </div>
        </div>
        <div class="item-separator"></div>
	</div>
    <!-- END OF FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    
</div>
</body>
</html>



