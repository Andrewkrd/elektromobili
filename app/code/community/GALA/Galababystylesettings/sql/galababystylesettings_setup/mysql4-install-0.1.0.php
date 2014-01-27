<?php

$installer = $this;

$installer->startSetup();

/* Add Product Label */

if(!$installer->getAttributeId('catalog_product', 'em_label_new')){
$installer->addAttribute('catalog_product', 'em_label_new', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'EM Label New Product',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    ));
}

if(!$installer->getAttributeId('catalog_product', 'em_label_saleoff')){
$installer->addAttribute('catalog_product', 'em_label_saleoff', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'EM Label Sale Product',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    ));
}

if(!$installer->getAttributeId('catalog_product', 'em_label_bestseller')){
$installer->addAttribute('catalog_product', 'em_label_bestseller', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'EM Label Bestseller Product',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    ));
}

####################################################################################################
# INSERT STATIC BLOCKS
####################################################################################################
$helper = Mage::helper('galababystylesettings');
$block = Mage::getModel('cms/block');
$stores = array(0);
$prefixBlock = 'galababystyle_';

// 1. Gala Babystyle Header Banner
$dataBlock = array(
	'title' => 'Gala Babystyle Header Banner',
	'identifier' => $prefixBlock.'header_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="header_banner">
<div class="containner" style="min-height: 65px;">
<h1 style="font-size: 22px; line-height: 1; margin: 0;">10% OFF</h1>
<p style="margin: 0; font-weight: bold; line-height: 1.25; border: none;">Nunc sed neque et mauris varius</p>
</div>
<p class="button_shop" style="margin: -10px 0 2px; float: none; border: none;"><a style="font-weight: bold; text-decoration: none; color: #bd9c03;"><span>shop now</span></a></p>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 2. Gala Babystyle Main Featured Products
$dataBlock = array(
	'title' => 'Gala Babystyle Main Featured Products',
	'identifier' => $prefixBlock.'main_featured_products',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" new_category="3" featured_choose="em_featured" limit_count="3" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" alt_img="thumbnail" show_description="false" show_price="true" show_reviews="true" show_addtocart="true" show_addto="false" show_label="true" choose_template="em_featured_products/featured_list.phtml" custom_theme="em_featured_products/featured_custom.phtml"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 3. Gala Babystyle Main Our Brands
$dataBlock = array(
	'title' => 'Gala Babystyle Main Our Brands',
	'identifier' => $prefixBlock.'main_our_brands',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="brands">
<p class="h1">Our Brands</p>
<ul class="none hoz">
<li class="item"><a href="#"><span class="brand-logo picca">Piccalily</span></a></li>
<li class="item"><a href="#"><span class="brand-logo johnson">Jonhson Baby</span></a></li>
<li class="item"><a href="#"><span class="brand-logo dunstan">Dunstan</span></a></li>
<li class="item"><a href="#"><span class="brand-logo soothe">SootheTime</span></a></li>
<li class="item"><a href="#"><span class="brand-logo nurse">Nurse-Family</span></a></li>
<li class="item"><a href="#"><span class="brand-logo baby">Baby</span></a></li>
<li class="item last"><a href="#"><span class="brand-logo diapers">Diapers</span></a></li>
</ul>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 4.Gala Babystyle Main Banner
$dataBlock = array(
	'title' => 'Gala Babystyle Main Banner',
	'identifier' => $prefixBlock.'main_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="main_banner"><img class="fluid" src="{{media url="wysiwyg/main_banner.png"}}" alt="" />
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 5.Gala Babystyle Main Information
$dataBlock = array(
	'title' => 'Gala Babystyle Main Information',
	'identifier' => $prefixBlock.'main_information',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="footer_before">
<div class="grid_12">
<p class="h3">Sample Static Block</p>
<div class="content_blog"><a href="#"><img class="fluid" src="{{media url="wysiwyg/footer_banner.jpg"}}" alt="" /></a>
<p class="h5">Lorem ipsum dolor sit amet</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
<p><a href="#"><span>read more</span></a></p>
</div>
</div>
<div class="grid_6">
<p class="h5">Delivery &amp; Return</p>
<ul>
<li><a href="#">Lorem ipsum</a></li>
<li><a href="#">Consectetur adipscing</a></li>
<li><a href="#">Torquent conubia</a></li>
<li><a href="#">Phasellus imperdiet</a></li>
<li><a href="#">Adipiscing vestibulum</a></li>
</ul>
</div>
<div class="grid_6">
<p class="h5">Reward Program</p>
<p><span class="custom-logo reward">Rewards</span></p>
<p>About Rewards Program</p>
<p>Rewards / Points Dashboard</p>
<p>Cras dapibus eros eget dui ultricies vehicula porta mi congue</p>
</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 6.Gala Babystyle Footer Copyright
$dataBlock = array(
	'title' => 'Gala Babystyle Footer Copyright',
	'identifier' => $prefixBlock.'footer_copyright',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p class="footer-logo">
<span>We Accept</span>
<span class="custom-logo paymentmethods">Visa - MasterCard - American Express - Paypal</span>
</p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 7.Gala Babystyle Category Banner
$dataBlock = array(
	'title' => 'Gala Babystyle Category Banner',
	'identifier' => $prefixBlock.'category_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p class="category_banner"><a href="#"><img class="fluid" src="{{media url="wysiwyg/category_banner.png"}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 8.Gala Babystyle Sidebar Banner
$dataBlock = array(
	'title' => 'Gala Babystyle Sidebar Banner',
	'identifier' => $prefixBlock.'sidebar_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<ul class="banner">
<li><a href="#"><img class="fluid" src="{{media url="wysiwyg/sidebar_banner_01.jpg"}}" alt="" /></a>
<div class="icon_top"><a class="icons" href="#"><img class="fluid" src="{{media url="wysiwyg/icon_banner_1.png"}}" alt="" /></a></div>
<div class="banner-content">
<p class="text_1" style="color: #969696; font-size: 14px; font-weight: bold;">only</p>
<p class="text_2" style="color: #1d94c4; font-size: 20px; font-weight: bold;">$34.00</p>
<p class="text_3" style="color: #7a3321; font-size: 12px; font-weight: bold; text-transform: uppercase;">Shop now</p>
</div>
</li>
<li><a href="#"><img class="fluid" src="{{media url="wysiwyg/sidebar_banner_02.jpg"}}" alt="" /></a>
<div class="icon_top_1"><a class="icons" href="#"><img class="fluid" src="{{media url="wysiwyg/icon_banner_2.png"}}" alt="" /></a></div>
</li>
</ul>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 9.Gala Babystyle Category Sidebar Latest Review
$dataBlock = array(
	'title' => 'Gala Babystyle Category Sidebar Latest Review',
	'identifier' => $prefixBlock.'category_sidebar_latest_review',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{widget type="recentreviewproducts/list" new_category="3" limit_count="3" order_by="name asc" frontend_title="Latest Review" thumbnail_width="80" thumbnail_height="90" show_product_name="true" show_thumbnail="true" show_price="true" show_addtocart="true" show_addto="false" show_label="true" choose_template="em_recentviewproducts/list_products_simple.phtml"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 10. Gala Babystyle Checkout Account Sidebar Ad
$dataBlock = array(
	'title' => 'Gala Babystyle Checkout Account Sidebar Ad',
	'identifier' => $prefixBlock.'checkout_account_sidebar_ad',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="block block-checkout-ad">
<div class="block-title"><strong><span>Secure Shopping</span></strong></div>
<div class="block-content">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
<p><a href="#"><img class="fluid" src="{{media url="wysiwyg/checkout_account_banner_1.png"}}" alt="" /></a> <a href="#"><img class="fluid" src="{{media url="wysiwyg/checkout_account_banner.png"}}" alt="" /></a></p>
</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

####################################################################################################
# INSERT PAGE
####################################################################################################
 
$prefixPage = 'galababystyle_';
$page = Mage::getModel('cms/page');

// Home
$dataPage = array(
	'title'				=> 'Gala Babystyle Magento Theme - Homepage',
	'identifier' 		=> $prefixPage.'home',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<p>&nbsp;&nbsp;</p>
EOB
);
$helper->insertPage($dataPage);

// Typography
$dataPage = array(
	'title'				=> 'Gala Babystyle Typography',
	'identifier' 		=> $prefixPage.'typography',
	'stores'			=> $stores,
	'content_heading'	=> 'Typography',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<h2>General Elements</h2>
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<ul>
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<ol>
<li>Number List 1</li>
<ol>
<li>Number List 1.1</li>
<li>Number List 1.2</li>
<li>Number List 1.3</li>
<li>Number List 1.4</li>
</ol>
<li>Number List 2</li>
<li>Number List 3</li>
<li>Number List 4</li>
</ol><dl><dt>Definition title dt</dt><dd>Defination description dd</dd><dt>Definition title dt</dt><dd>Defination description dd</dd></dl>
<p><code>Code tag:&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code></p>
<blockquote>
<p>block quote&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</blockquote>
<div class="box f-left">element with class <strong>.f-left</strong></div>
<div class="box f-right">element with class <strong>.f-right</strong></div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h2>Tables</h2>
<p>Table with class <strong>.data-table</strong></p>
<table class="data-table" style="width: 100%;" border="0">
<thead>
<tr><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th></tr>
</thead>
<tbody>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
</tbody>
</table>
<h2>Custom CSS Classes</h2>
<p class="small">tag <strong>small</strong> and class <strong>.small</strong></p>
<p class="underline">element with class <strong>.underline</strong></p>
<p><strong>ul.none</strong> and <strong>ol.none</strong>:</p>
<ul class="none">
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<p><strong>ul.hoz</strong> and <strong>ol.hoz</strong>:</p>
<ul class="hoz">
<li>Bullet List 1</li>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<div class="box">
<p>paragraph with class <strong>.box</strong>:</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<p class="bottom">Paragraph with class <strong>.bottom</strong> always has margin-bottom = 0.</p>
<p>Add class <strong>.hide-lte2</strong> to hide element when screen's width less than 1280px.</p>
<p class="box hide-lte2">This block will disappear when resize window less than 1280px</p>
<p>Add class <strong>.hide-lte1</strong> to hide element when screen's width less than 980px.</p>
<p class="box hide-lte1">This block will disappear when resize window less than 980px</p>
<p>Add class <strong>.hide-lte0</strong> to hide element when screen's width less than 760px.</p>
<p class="box hide-lte0">This block will disappear when resize window less than 760px</p>
<h2>Icons</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.icon.success-msg</p>
<p><span class="success-msg">span.icon.text</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h2>Logo</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.custom-logo.paymentmethods</p>
<p><span class="custom-logo paymentmethods">span.custom-logo.paymentmethods</span></p>
</td>
<td align="center" valign="top">
<p>.custom-logo.reward</p>
<p><span class="custom-logo reward">span.custom-logo.reward</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h2>Brands</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.brand-logo.picca</p>
<p><span class="brand-logo picca">span.brand-logo picca</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.johnson</p>
<p><span class="brand-logo johnson">span.brand-logo.johnson</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.dunstan</p>
<p><span class="brand-logo dunstan">span.brand-logo.dunstan</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.soothe</p>
<p><span class="brand-logo soothe">span.brand-logo.soothe</span></p>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p>.brand-logo.nurse</p>
<p><span class="brand-logo nurse">span.brand-logo.nurse</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.baby</p>
<p><span class="brand-logo baby">span.brand-logo.baby</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.diapers</p>
<p><span class="brand-logo diapers">span.brand-logo.diapers</span></p>
</td>
<td align="center" valign="top">&nbsp;</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h2>Label</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.label.new</p>
<p class="productlabels_icons" style="position: relative;"><span class="label new">&nbsp</span></p>
</td>
<td align="center" valign="top">
<p>.label.sale</p>
<p class="productlabels_icons" style="position: relative;"><span class="label sale">&nbsp</span></p>
</td>
<td align="center" valign="top">
<p>.label.bestseller</p>
<p class="productlabels_icons" style="position: relative;"><span class="label bestseller">&nbsp</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>image with class <strong>.fluid</strong>:</p>
<p><img class="fluid" title="image with class .fluid" src="{{media url="wysiwyg/main_banner.png"}}" alt="image with class .fluid" /></p>
EOB
);
$helper->insertPage($dataPage);

####################################################################################################
# INSERT WIDGET INSTANCE
####################################################################################################

function galababystyle_install_fix_widget_block_id(&$widget, $block_id) {
	$params = unserialize($widget['widget_parameters']);
	$params['block_id'] = $block_id;
	$widget['widget_parameters'] = serialize($params);
}

####################################################################################################
# ADD MAIN SLIDESHOW
####################################################################################################
# Gala Babystyle Main Slideshow
if(!$installer->tableExists($installer->getTable('slideshow2/slider'))){
$table = $installer->getConnection()
    ->newTable($installer->getTable('slideshow2/slider'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'Slideshow ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 100, array(
        ), 'Slideshow name')
	->addColumn('images', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'images')
	->addColumn('slider_type', Varien_Db_Ddl_Table::TYPE_VARCHAR, 20, array(
        ), 'Slideshow type')
	->addColumn('slider_params', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'Slideshow params')
	->addColumn('delay', Varien_Db_Ddl_Table::TYPE_VARCHAR, 10, array(
        ), 'Slideshow delay')
	->addColumn('touch', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow touch')
	->addColumn('stop_hover', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop hover')
	->addColumn('shuffle_mode', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow shuffle mode')
	->addColumn('stop_slider', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop slider')
	->addColumn('stop_after_loop', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop after loop')
	->addColumn('stop_at_slide', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop at slide')
	->addColumn('position', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'position')
	->addColumn('appearance', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'appearance')
	->addColumn('navigation', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'navigation')
	->addColumn('thumbnail', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'thumbnail')
	->addColumn('visibility', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'visibility')
	->addColumn('trouble', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'trouble')
    ->addColumn('creation_time', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Slideshow Creation Time')
    ->addColumn('update_time', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Slideshow Modification Time')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'nullable'  => false,
        'default'   => '0',
        ), 'Is Slideshow Active')
    ->setComment('EM Slideshow2 Slider Table');
$installer->getConnection()->createTable($table);
}

$model = Mage::getModel('galababystylesettings/slider');
$model->setData(array(
	'name' => "Gala Babystyle Main Slideshow",
	'images' => <<<EOB
YToyOntpOjA7YTo2OntzOjM6InVybCI7czoyODoiMTM2OTEzMTU5OV8wX3NsaWRlc2hvd18xLmpwZyI7czo1OiJ0cmFucyI7czo0OiJkZW1vIjtzOjEwOiJzbG90YW1vdW50IjtzOjE6IjciO3M6NDoibGluayI7czoxNDoiZnVybml0dXJlLmh0bWwiO3M6ODoicG9zaXRpb24iO3M6MToiMCI7czo0OiJpbmZvIjthOjQ6e2k6MDthOjk6e3M6NDoidGV4dCI7czoxNDoiPHA+IHNkc2RzIDwvcD4iO3M6NToiY2xhc3MiO3M6NzoiY2xzX2JnayI7czo1OiJzdGFydCI7czozOiI1MDAiO3M6MzoiZW5kIjtzOjA6IiI7czo2OiJkYXRhX3giO3M6MToiMCI7czo2OiJkYXRhX3kiO3M6MzoiMzcwIjtzOjk6ImFuaW1hdGlvbiI7czozOiJsZmIiO3M6NjoiZWFzaW5nIjtzOjEwOiJlYXNlSW5DaXJjIjtzOjU6InNwZWVkIjtzOjM6IjMwMCI7fWk6MTthOjk6e3M6NDoidGV4dCI7czoxMzE6IjxwIHN0eWxlPSJsaW5lLWhlaWdodDoxOyBmb250LXNpemU6MTgwJTt3aGl0ZS1zcGFjZTpub3JtYWw7Ij5QaGFzZWwgc2FoaXR0aXMgYWNjdW0gbWFzc2EgbnVuYyBwZWxsZW50ZXNxdWUgbWF1cmlzIG9kaW8gc2VkPC9wPjwvYnI+IjtzOjU6ImNsYXNzIjtzOjk6ImNsc19kZXNjMSI7czo1OiJzdGFydCI7czo0OiIxMDAwIjtzOjM6ImVuZCI7czowOiIiO3M6NjoiZGF0YV94IjtzOjI6IjIwIjtzOjY6ImRhdGFfeSI7czozOiIzODUiO3M6OToiYW5pbWF0aW9uIjtzOjM6InNmbCI7czo2OiJlYXNpbmciO3M6MTI6ImVhc2VPdXRRdWFydCI7czo1OiJzcGVlZCI7czozOiIzMDAiO31pOjI7YTo5OntzOjQ6InRleHQiO3M6NDEzOiI8cCBzdHlsZT0iZm9udC1zaXplOjEwMCU7bGluZS1oZWlnaHQ6MS4yNTt3aGl0ZS1zcGFjZTpub3JtYWw7b3BhY2l0eTowLjk7Ij5QZWxsZW50ZXNxdWUgbWFsZXN1YWRhIHVybmEgaW4gZXJhdCBhbGlxdWFtIGNvbnZhbGxpcy4gUGhhc2VsbHVzIGNvbnNlY3RldHVyIGFjY3Vtc2FuIG9kaW8sIHF1aXMgcGhhcmV0cmEgbmliaCB2b2x1dHBhdCBuZWMgRnVzY2UgYXQgdHVycGlzIG5pc2ksIGFjIHZ1bHB1dGF0ZSBhbnRlLiBBZW5lYW4gY29udmFsbGlzIG9ybmFyZSBydXRydW0uIFBoYXNlbGx1cyBpbnRlcmR1bSBuaXNpIGEgbmVxdWUgYXVjdG9yIHByZXRpdW0uIEN1cmFiaXR1ciBpZCBkb2xvciBzYXBpZW4uIEludGVnZXIgbGFjdXMgZXN0LCBzYWdpdHRpcyB1bGxhbWNvcnBlciBibGFuZGl0IHNpdCBhbWV0IDwvcD48L2JyPiI7czo1OiJjbGFzcyI7czo5OiJjbHNfZGVzYzEiO3M6NToic3RhcnQiO3M6NDoiMjAwMCI7czozOiJlbmQiO3M6MDoiIjtzOjY6ImRhdGFfeCI7czoyOiIyMCI7czo2OiJkYXRhX3kiO3M6MzoiNDEwIjtzOjk6ImFuaW1hdGlvbiI7czozOiJsZnQiO3M6NjoiZWFzaW5nIjtzOjEwOiJlYXNlSW5TaW5lIjtzOjU6InNwZWVkIjtzOjM6IjMwMCI7fWk6MzthOjk6e3M6NDoidGV4dCI7czo2NzoiPHA+PGEgY2xhc3M9ImJ0bl9zaG9wIiAgaHJlZj0iIyI+PHNwYW4+c2hvcCBub3c8L3NwYW4+PC9hPjwvcD48L2JyPiI7czo1OiJjbGFzcyI7czozOiJidG4iO3M6NToic3RhcnQiO3M6NDoiMzAwMCI7czozOiJlbmQiO3M6MDoiIjtzOjY6ImRhdGFfeCI7czo0OiIxMDAwIjtzOjY6ImRhdGFfeSI7czozOiIzOTUiO3M6OToiYW5pbWF0aW9uIjtzOjM6ImxmciI7czo2OiJlYXNpbmciO3M6MTE6ImVhc2VPdXRCYWNrIjtzOjU6InNwZWVkIjtzOjM6IjMwMCI7fX19aToxO2E6Njp7czozOiJ1cmwiO3M6Mjg6IjEzNjkxMzQ5MThfMF9zbGlkZXNob3dfMi5qcGciO3M6NToidHJhbnMiO3M6NDoiZGVtbyI7czoxMDoic2xvdGFtb3VudCI7czoxOiI3IjtzOjQ6ImxpbmsiO3M6MTY6ImVsZWN0cm9uaWNzLmh0bWwiO3M6ODoicG9zaXRpb24iO3M6MToiMCI7czo0OiJpbmZvIjthOjQ6e2k6MDthOjk6e3M6NDoidGV4dCI7czoxMjQ6IjxwIHN0eWxlPSJsaW5lLWhlaWdodDoxOyBmb250LXNpemU6MzAwJTt3aGl0ZS1zcGFjZTpub3JtYWw7Ij5QaGFzZWwgc2FoaXR0aXMgYWNjdW0gbWFzc2EgbnVuYyANCnBlbGxlbnRlc3F1ZSBtYXVyaXM8L3A+PC9icj4iO3M6NToiY2xhc3MiO3M6ODoiY2xzX2Rlc2MiO3M6NToic3RhcnQiO3M6MzoiMTAwIjtzOjM6ImVuZCI7czowOiIiO3M6NjoiZGF0YV94IjtzOjM6IjYwMCI7czo2OiJkYXRhX3kiO3M6MToiNSI7czo5OiJhbmltYXRpb24iO3M6MzoibGZ0IjtzOjY6ImVhc2luZyI7czoxMToiZWFzZU91dEJhY2siO3M6NToic3BlZWQiO3M6MzoiMzAwIjt9aToxO2E6OTp7czo0OiJ0ZXh0IjtzOjE3MToiPHAgc3R5bGU9ImZvbnQtc2l6ZToyMDAlO2xpbmUtaGVpZ2h0OjEuMjU7d2hpdGUtc3BhY2U6bm9ybWFsO29wYWNpdHk6MC45OyI+Vml2YW11cyBncmF2aWRhIGx1Y3R1cyBuZXF1ZSBlZ2V0IHZlc3RpYnVsdW0gYW50ZSBpcHN1bSBwcmltaXMgaW4gZmF1Y2lidXMgb3JjaSBsdWN0dXMgPC9wPjwvYnI+IjtzOjU6ImNsYXNzIjtzOjg6ImNsc19kZXNjIjtzOjU6InN0YXJ0IjtzOjQ6IjIwMDAiO3M6MzoiZW5kIjtzOjA6IiI7czo2OiJkYXRhX3giO3M6MzoiNjAwIjtzOjY6ImRhdGFfeSI7czozOiIxMDAiO3M6OToiYW5pbWF0aW9uIjtzOjM6ImxmbCI7czo2OiJlYXNpbmciO3M6MTA6ImVhc2VJblNpbmUiO3M6NToic3BlZWQiO3M6MzoiMzAwIjt9aToyO2E6OTp7czo0OiJ0ZXh0IjtzOjE0NDoiPHAgc3R5bGU9Im92ZXJmbG93OmhpZGRlbjsgIj48YSBjbGFzcz0iYnRuX3JlYWQiIGhyZWY9IiMiPjxzcGFuPnJlYWQgbW9yZTwvc3Bhbj48L2E+IDxhIGNsYXNzPSJidG5fc2hvcCIgIGhyZWY9IiMiPjxzcGFuPnNob3Agbm93PC9zcGFuPjwvYT48L3A+IjtzOjU6ImNsYXNzIjtzOjg6ImNsc19kZXNjIjtzOjU6InN0YXJ0IjtzOjQ6IjMwMDAiO3M6MzoiZW5kIjtzOjA6IiI7czo2OiJkYXRhX3giO3M6MzoiNjAwIjtzOjY6ImRhdGFfeSI7czozOiIxODAiO3M6OToiYW5pbWF0aW9uIjtzOjM6ImxmciI7czo2OiJlYXNpbmciO3M6MTI6ImVhc2VJbkJvdW5jZSI7czo1OiJzcGVlZCI7czozOiIzMDAiO31pOjM7YTo5OntzOjQ6InRleHQiO3M6Mjk2OiI8cCBzdHlsZT0iZm9udC1zaXplOjEyMCU7bGluZS1oZWlnaHQ6MS4yNTt3aGl0ZS1zcGFjZTpub3JtYWw7b3BhY2l0eTowLjc7IGNsZWFyOmxlZnQiPk51bGxhbSBhdWN0b3IgZW5pbSB2aXRhZSB0b3J0b3IgdmVoaWN1bGEgc2NlbGVyaXNxdWUgaXBzdW0gQ3JhcyB2ZW5lbmF0aXMgaW50ZXJkdW0gdXJuYSwgc2VkIGVnZXN0YXMgY29tbW9kbyAgbGlndWxhdCBvcmNpIG51bmMgIGV1aXNtb2QgbmlzbCBkdWlzIGltcGVyZGlldCBuZXF1ZSBldSByaXN1cyBkYXBpYnVzIHNlZCBzYWdpdHRpcyBkdWkgdmVoaWN1bGEuPC9wPiI7czo1OiJjbGFzcyI7czo4OiJjbHNfZGVzYyI7czo1OiJzdGFydCI7czo0OiI0MDAwIjtzOjM6ImVuZCI7czowOiIiO3M6NjoiZGF0YV94IjtzOjM6IjYwMCI7czo2OiJkYXRhX3kiO3M6MzoiMjU1IjtzOjk6ImFuaW1hdGlvbiI7czoxMjoicmFuZG9tcm90YXRlIjtzOjY6ImVhc2luZyI7czoxNDoiZWFzZUluT3V0UXVpbnQiO3M6NToic3BlZWQiO3M6MzoiMzAwIjt9fX19
EOB
	,
	'slider_type' => 'responsitive',
	'slider_params' => <<<EOB
a:14:{s:10:"size_width";s:4:"1160";s:11:"size_height";s:3:"460";s:14:"screen_width_1";s:4:"1200";s:14:"slider_width_1";s:3:"920";s:14:"screen_width_2";s:3:"980";s:14:"slider_width_2";s:3:"680";s:14:"screen_width_3";s:3:"760";s:14:"slider_width_3";s:3:"510";s:14:"screen_width_4";s:3:"560";s:14:"slider_width_4";s:3:"420";s:14:"screen_width_5";s:3:"480";s:14:"slider_width_5";s:3:"260";s:14:"screen_width_6";s:3:"320";s:14:"slider_width_6";s:3:"260";}
EOB
	,
	'delay' =>'6000',
	'touch' =>'on',
	'stop_hover' =>'on',
	'shuffle_mode' =>'off',
	'stop_slider' =>'off',
	'stop_after_loop' =>'0',
	'stop_at_slide' =>'1',
	'position' => <<<EOB
a:5:{s:4:"type";s:6:"center";s:6:"mg_top";s:1:"0";s:9:"mg_bottom";s:1:"0";s:7:"mg_left";s:1:"0";s:8:"mg_right";s:1:"0";}
EOB
	,
	'appearance' => <<<EOB
a:7:{s:11:"shadow_type";s:1:"0";s:9:"show_time";s:5:"false";s:13:"time_position";s:3:"top";s:8:"bg_color";s:0:"";s:7:"padding";s:1:"0";s:11:"show_bg_img";s:5:"false";s:6:"bg_img";s:0:"";}
EOB
	,
	'navigation' => <<<EOB
a:7:{s:8:"nav_type";s:4:"none";s:10:"nav_arrows";s:13:"nexttobullets";s:9:"nav_style";s:5:"round";s:14:"nav_offset_hor";s:1:"0";s:15:"nav_offset_vert";s:2:"20";s:13:"nav_always_on";s:5:"false";s:11:"hide_thumbs";s:3:"200";}
EOB
	,
	'thumbnail' => <<<EOB
a:3:{s:11:"thumb_width";s:3:"100";s:12:"thumb_height";s:2:"50";s:12:"thumb_amount";s:1:"5";}
EOB
	,
	'visibility' => <<<EOB
a:3:{s:17:"hide_slider_under";s:1:"0";s:25:"hide_defined_layers_under";s:1:"0";s:21:"hide_all_layers_under";s:1:"0";}
EOB
	,
	'trouble' => <<<EOB
a:2:{s:17:"jquery_noconflict";s:2:"on";s:10:"js_to_body";s:5:"false";}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$slideshow_id = $model->getId();

$dataBlock = array(
	'title' => 'Gala Babystyle Main Slideshow',
	'identifier' => $prefixBlock.'main_slideshow',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{widget type="slideshow2/slideshow2" slideshow="$slideshow_id"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

####################################################################################################
# ADD MEGAMENU PRO
####################################################################################################

$installer->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('megamenupro')} (
  `megamenupro_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `type` smallint(6) NOT NULL default '0',
  `content` text NOT NULL default '', 
  `status` smallint(6) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`megamenupro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

# create menu of theme Gala Babystyle Horizontal Menu
$model = Mage::getModel('galababystylesettings/megamenupro');
$model->setData(array(
	'name' => "Gala Babystyle Horizontal Menu",
	'type' => "0",
	'content' => <<<EOB
a:66:{i:0;a:8:{s:4:"type";s:4:"link";s:5:"label";s:3:"Boy";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:1;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:2;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:3;a:5:{s:4:"type";s:4:"text";s:4:"text";s:272:"PGg1PkNhbWVyYXM8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxMiJ9fQo8aDU+Q29tcHV0ZXJzPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:4;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:5;a:5:{s:4:"type";s:4:"text";s:4:"text";s:280:"PGg1PkZ1cm5pdHVyZTwvaDU+Cnt7YmxvY2sgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIG5hbWU9Im1haW5tZWdhbWVudSIgY2F0ZWdvcnlfaWQ9IjEwIn19CjxoNT5QZWxsZW50ZXNxdWU8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxNSJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:6;a:8:{s:4:"type";s:4:"link";s:5:"label";s:4:"Girl";s:8:"sublabel";s:0:"";s:3:"url";s:0:"";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:7;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"container_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:8;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:9;a:5:{s:4:"type";s:4:"text";s:4:"text";s:96:"PHAgY2xhc3M9ImRlc2MiPlRoZXJlIGlzIGFuIGV4YW1wbGUgb2YgYSBsYXJnZSBjb250YWluZXIgd2l0aCA2IGNvbHVtbnM=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:10;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:11;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PkNvbXB1dGVyPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:12;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:13;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PkNvbXB1dGVyPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:14;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:15;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PkNvbXB1dGVyPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:16;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:17;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PkNvbXB1dGVyPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:18;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:19;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PkNvbXB1dGVyPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:20;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:21;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PkNvbXB1dGVyPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:22;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"container_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:23;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:13:"grid_12 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:24;a:5:{s:4:"type";s:4:"text";s:4:"text";s:80:"PHAgY2xhc3M9ImRlc2MiPkhlcmUgaXMgc29tZSBjb250ZW50cyB3aXRoIHNpZGUgaW1hZ2VzPC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:25;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:26;a:5:{s:4:"type";s:4:"text";s:4:"text";s:116:"PGEgaHJlZj0iIyI+PGltZyBjbGFzcz0iZmx1aWQiIHNyYz0ie3ttZWRpYSB1cmw9Ind5c2l3eWcvaW1nbWVudS5wbmcifX0iIGFsdD0iIiAvPjwvYT4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:27;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:28;a:5:{s:4:"type";s:4:"text";s:4:"text";s:556:"PHAgPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCAgaXJ1cmUgZG9sb3IgaW4gcmVwcmVoZW5kZXJpdCBpbiB2b2x1cHRhdGUgdmVsaXQgZXNzZSBjaWxsdW0gZG9sb3JlIGV1IGZ1Z2lhdCBudWxsYSBwYXJpYXR1ci4gRXhjZXB0ZXVyIHNpbnQgb2NjYWVjYXQgY3VwaWRhdGF0IG5vbiBwcm9pZGVudCwgc3VudCBpbiBjdWxwYSBxdWkgb2ZmaWNpYSBkZXNlcnVudCBtb2xsaXQgYW5pbSBpZCBlc3QgbGFib3J1bS48L3A+Cgo8cCA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldCBhbGlxdWEuIFV0IGVuaW0gYWQgbWluaW0gdmVuaWFtLCBxdWlzIG5vc3RydWQgZXhlcmNpdGF0aW9uIHVsbGFtY28gbGFib3JpcyBuaXNpIHV0IGFsaXF1aXAgZXggZWEgY29tbW9kbyBjb25zZXF1YXQuIER1aXMgYXV0ZSBpcnVyZSAuPC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:29;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:13:"grid_12 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:30;a:5:{s:4:"type";s:4:"text";s:4:"text";s:108:"PHAgY2xhc3M9ImRlc2MiPlRoaXMgaXMgYSBibGFja2JveCwgeW91IGNhbiB1c2UgaXQgdG8gaGlnaGxpZ2h0IHNvbWUgY29udGVuczwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:31;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:13:"grid_12 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:32;a:5:{s:4:"type";s:4:"text";s:4:"text";s:760:"PHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0ICBpcnVyZSBkb2xvciBpbiByZXByZWhlbmRlcml0IGluIHZvbHVwdGF0ZSB2ZWxpdCBlc3NlIGNpbGx1bSBkb2xvcmUgZXUgZnVnaWF0IG51bGxhIHBhcmlhdHVyLiBFeGNlcHRldXIgc2ludCBvY2NhZWNhdCBjdXBpZGF0YXQgbm9uIHByb2lkZW50LCBzdW50IGluIGN1bHBhIHF1aSBvZmZpY2lhIGRlc2VydW50IG1vbGxpdCBhbmltIGlkIGVzdCBsYWJvcnVtLjwvcD4KCjxwID5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0IGFsaXF1YS4gVXQgZW5pbSBhZCBtaW5pbSB2ZW5pYW0sIHF1aXMgbm9zdHJ1ZCBleGVyY2l0YXRpb24gdWxsYW1jbyBsYWJvcmlzIG5pc2kgdXQgYWxpcXVpcCBleCBlYSBjb21tb2RvIGNvbnNlcXVhdC4gRHVpcyBhdXRlIGlydXJlIC4gTG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldCBhbGlxdWEuIFV0IGVuaW0gYWQgbWluaW0gdmVuaWFtLCBxdWlzIG5vc3RydWQgZXhlcmNpdGF0aW9uIHVsbGFtY28gbGFib3JpcyBuaXNpIHV0IGFsaXF1aXAgZXggZWEgY29tbW9kbyBjb25zZXF1YXQuPC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:33;a:8:{s:4:"type";s:4:"link";s:5:"label";s:7:"T-Shirt";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:34;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:35;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PlQtU2hpcnQ8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxNSJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:36;a:8:{s:4:"type";s:4:"link";s:5:"label";s:4:"Jean";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:37;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"container_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:38;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:39;a:5:{s:4:"type";s:4:"text";s:4:"text";s:876:"PHA+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL21lbnUxLnBuZyJ9fSIgYWx0PSIiIC8+PC9hPjwvcD4KPHA+TmFtIHZlaGljdWxhLCBkdWkgaW4gdWx0cmljaWVzIHBvcnR0aXRvcnVlIG5vbiBkdWllZ2V0IGFlbmVhbiBsYW9yZWV0IHNhcGllbiBpZCB1cm5hIHBsYWNlcmF0IHNvbGxpY2l0dWRpbnMgZXJhdCB2b2x1dHBhdC48L3A+CjxkaXYgY2xhc3M9Im5vX3F1aWNrc2hvcCI+e3t3aWRnZXQgdHlwZT0iZHluYW1pY3Byb2R1Y3RzL2R5bmFtaWNwcm9kdWN0cyIgb3JkZXJfYnk9Im5hbWUgYXNjIiBmZWF0dXJlZF9jaG9vc2U9ImVtX2ZlYXR1cmVkIiBsaW1pdF9jb3VudD0iMSIgZnJvbnRlbmRfdGl0bGU9IlRvcCBGYXZvcml0ZSIgdGh1bWJuYWlsX3dpZHRoPSIxMzUiIHRodW1ibmFpbF9oZWlnaHQ9IjEzNSIgc2hvd19wcm9kdWN0X25hbWU9InRydWUiIHNob3dfdGh1bWJuYWlsPSJ0cnVlIiBzaG93X2Rlc2NyaXB0aW9uPSJ0cnVlIiBzaG93X3ByaWNlPSJ0cnVlIiBzaG93X3Jldmlld3M9InRydWUiIHNob3dfYWRkdG9jYXJ0PSJ0cnVlIiBzaG93X2FkZHRvPSJmYWxzZSIgc2hvd19sYWJlbD0idHJ1ZSIgY2hvb3NlX3RlbXBsYXRlPSJlbV9mZWF0dXJlZF9wcm9kdWN0cy9mZWF0dXJlZF9saXN0LnBodG1sIn19PC9kaXY+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:40;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:41;a:5:{s:4:"type";s:4:"text";s:4:"text";s:616:"PGg1PkltcGVyZGlldCBkaWN0dW08L2g1Pgo8dWw+CjxsaT48YSBocmVmPSIjIj5jb25zZWN0ZXR1ciBhZGlwaXNpY2luZzwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+ZWl1c21vZCB0ZW1wb3I8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmxhYm9yZSBldCBkb2xvcmU8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmxhYm9yaXMgbmlzaSB1dDwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+RHVpcyBhdXRlIGlydXJlPC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5jb25zZWN0ZXR1ciBhZGlwaXNpY2luZzwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+ZWl1c21vZCB0ZW1wb3I8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmxhYm9yZSBldCBkb2xvcmU8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmxhYm9yaXMgbmlzaSB1dDwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+RHVpcyBhdXRlIGlydXJlPC9hPjwvbGk+CjwvdWw+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:42;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:43;a:5:{s:4:"type";s:4:"text";s:4:"text";s:616:"PGg1PiBDdXJhYml0dXIgdG9ydG88L2g1Pgo8dWw+CjxsaT48YSBocmVmPSIjIj5jb25zZWN0ZXR1ciBhZGlwaXNpY2luZzwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+ZWl1c21vZCB0ZW1wb3I8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmxhYm9yZSBldCBkb2xvcmU8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmxhYm9yaXMgbmlzaSB1dDwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+RHVpcyBhdXRlIGlydXJlPC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5jb25zZWN0ZXR1ciBhZGlwaXNpY2luZzwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+ZWl1c21vZCB0ZW1wb3I8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmxhYm9yZSBldCBkb2xvcmU8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmxhYm9yaXMgbmlzaSB1dDwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+RHVpcyBhdXRlIGlydXJlPC9hPjwvbGk+CjwvdWw+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:44;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:45;a:5:{s:4:"type";s:4:"text";s:4:"text";s:732:"PGg1PlBoYXNlbGx1cyBwbGFjZXJhdCBudWxsYSB0ZW1wdXMgPC9oNT4KPGRpdiBjbGFzcz0ianMtdmlkZW8gd2lkZXNjcmVlbiI+CjxhIGhyZWY9Imh0dHA6Ly93d3cueW91dHViZS5jb20vZW1iZWQvRkVxWFd3UEZ1c0kiIG9uY2xpY2s9InRhcmdldD0nX2JsYW5rJyI+CjxpbWcgY2xhc3M9ImZsdWlkIiBzcmM9Int7c2tpbiB1cmw9J2ltYWdlcy9tZWRpYS9kZW1vL21lbnVfdmlkZW8ucG5nJ319IiBhbHQ9IiIgLz4KPC9hPgo8L2Rpdj4KPHA+UGhhc2VsbHVzIGFjIG1pIHZpdGFlIG5pc2kgcGhhcmV0cmEgc2NlbGVyaXNxdWUgZGFwaWJ1c20gZWdldCBsYW9yZWV0IHB1cnVzLiBDcmFzIGVsZW1lbnR1bSwgYXVndWUgcHJldGl1bSBjb25ndWUgbmF0b2UgY29udmFsbGlzIG1hdXJpcyBkYXBzb2xsaWNpdHVkaW51byBkdWkgaXBzdW0gY29uc2VjdGV0dXIgdGVsbHVzIGF0IGx1Y3R1cyBsZWN0dXMgb2RpbyBhdCBuaWJoIG5hbSB0ZWxsdXMgYXJjdSwgcGxhY2VyYXQgbm9uIGVsaXQgZGljdHVtIGNvbnNlY3RldHVyIHB1bHZpbmFyIHNlZGVnZXN0YXMgc2VkLjwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:46;a:8:{s:4:"type";s:4:"link";s:5:"label";s:4:"Join";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:47;a:8:{s:4:"type";s:4:"link";s:5:"label";s:4:"Gift";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:48;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"container_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:49;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:50;a:5:{s:4:"type";s:4:"text";s:4:"text";s:1260:"PHA+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL21lbnUyLnBuZyJ9fSIgYWx0PSIiIC8+PC9hPjwvcD4KPHA+TmFtIHZlaGljdWxhLCBkdWkgaW4gdWx0cmljaWVzIHBvcnR0aXRvcnVlIG5vbiBkdWllZ2V0IGFlbmVhbiBsYW9yZWV0IHNhcGllbiBpZCB1cm5hIHBsYWNlcmF0IHNvbGxpY2l0dWRpbnMgZXJhdCB2b2x1dHBhdC4gTmFtIHZlaGljdWxhLCBkdWkgaW4gdWx0cmljaWVzIHBvcnR0aXRvcnVlIG5vbiBkdWllZ2V0IGFlbmVhbiBsYW9yZWV0IHNhcGllbiBpZCB1cm5hIHBsYWNlcmF0IHNvbGxpY2l0dWRpbnMgZXJhdCB2b2x1dHBhdC4gTmFtIHZlaGljdWxhLCBkdWkgaW4gdWx0cmljaWVzIHBvcnR0aXRvcnVlIG5vbiBkdWllZ2V0IGFlbmVhbiBsYW9yZWV0IHNhcGllbiBpZCB1cm5hIHBsYWNlcmF0IHNvbGxpY2l0dWRpbnMgZXJhdCB2b2x1dHBhdC4gPC9wPgo8cD5GdXNjZSBkaWduaXNzaW0sIGp1c3RvIHF1aXMgYWxpcXVhbSBpbXBlcmRpZXQsIGVsaXQgdXJuYSBwb3J0dGl0b3Igb2Rpbywgdml0YWUgaW1wZXJkaWV0IGp1c3RvIHB1cnVzIGlkIHRlbGx1cy4gTnVsbGEgZmFjaWxpc2kuIEFsaXF1YW0gYXVjdG9yIG1vbGVzdGllIG1hZGljdHVtIGNpZHVudCByaG9uY3VzLiBRdWlzcXVlIGRpYW0gc2FwaWVuLCB2aXZlcnJhIHV0IHRpbmNpZHVudCB2aXRhZSwgdGVtcG9yIGFjIGxlby4gRG9uZWMgYXQgcGhhcmV0cmEgdmVsaXQuIEN1cmFiaXR1ciBwb3J0dGl0b3IgdmVuZW5hdGlzIG5pc2ksIHNpdCBhbWV0IGFjY3Vtc2FuIHRlbGx1cyB1cm5hIGxhb3JlZXQgbm9uLiBWZXN0aWJ1bHVtIGFjIHRpbmNpZHVudCBlbmltLiBOdWxsYW0gbGVvIG1ldHVzLCBkaWN0dW0gY29uc2VjdGV0dXIgcHVsdmluYXIgc2VkLCB0aW5jaWR1bnQgdXQgdXJuYS4gQ3JhcyB2ZWwgZHVpIHZlbGl0LCBwcmV0aXVtIGxhY2luaWEuIDwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:51;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:52;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PkNvbXB1dGVyPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:53;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:54;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PkNvbXB1dGVyPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:55;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:56;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PGg1PkNvbXB1dGVyPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:57;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:58;a:5:{s:4:"type";s:4:"text";s:4:"text";s:552:"e3t3aWRnZXQgdHlwZT0iZHluYW1pY3Byb2R1Y3RzL2R5bmFtaWNwcm9kdWN0cyIgb3JkZXJfYnk9Im5hbWUgYXNjIiBmZWF0dXJlZF9jaG9vc2U9ImVtX2hvdCIgbGltaXRfY291bnQ9IjEiIGZyb250ZW5kX3RpdGxlPSJUb3AgRmF2b3JpdGUiIHRodW1ibmFpbF93aWR0aD0iMTA1IiB0aHVtYm5haWxfaGVpZ2h0PSIxMzUiIHNob3dfcHJvZHVjdF9uYW1lPSJ0cnVlIiBzaG93X3RodW1ibmFpbD0idHJ1ZSIgc2hvd19kZXNjcmlwdGlvbj0idHJ1ZSIgc2hvd19wcmljZT0idHJ1ZSIgc2hvd19yZXZpZXdzPSJ0cnVlIiBzaG93X2FkZHRvY2FydD0idHJ1ZSIgc2hvd19hZGR0bz0iZmFsc2UiIHNob3dfbGFiZWw9InRydWUiIGNob29zZV90ZW1wbGF0ZT0iZW1fZmVhdHVyZWRfcHJvZHVjdHMvZmVhdHVyZWRfZ3JpZC5waHRtbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:59;a:8:{s:4:"type";s:4:"link";s:5:"label";s:12:"Kids Fashion";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:60;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"container_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:61;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:62;a:5:{s:4:"type";s:4:"text";s:4:"text";s:688:"PHA+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nbzEucG5nIn19IiBhbHQ9IiIgLz48L2E+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nbzIucG5nIn19IiBhbHQ9IiIgLz48L2E+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nbzMucG5nIn19IiBhbHQ9IiIgLz48L2E+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nbzQucG5nIn19IiBhbHQ9IiIgLz48L2E+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nbzUucG5nIn19IiBhbHQ9IiIgLz48L2E+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nbzYucG5nIn19IiBhbHQ9IiIgLz48L2E+PC9hPjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJ7e21lZGlhIHVybD0id3lzaXd5Zy9pX2xvZ283LnBuZyJ9fSIgYWx0PSIiIC8+PC9hPjwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:63;a:8:{s:4:"type";s:4:"link";s:5:"label";s:10:"Categories";s:8:"sublabel";s:0:"";s:3:"url";s:0:"";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:64;a:5:{s:4:"type";s:4:"text";s:4:"text";s:112:"e3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMyJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:65;a:5:{s:4:"type";s:4:"text";s:4:"text";s:140:"e3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMyIgY3NzX2NsYXNzPSJob3Jpem9udGFsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$menu_id = $model->getId();

$dataBlock = array(
	'title' => 'Gala Babystyle Megamenu',
	'identifier' => $prefixBlock.'megamenu',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
{{widget type="megamenupro/megamenupro" menu="$menu_id"}}
EOB
);
$block = $helper->insertStaticBlock($dataBlock);


$installer->endSetup();