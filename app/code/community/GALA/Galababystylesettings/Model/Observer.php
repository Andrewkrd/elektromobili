<?php
class GALA_Galababystylesettings_Model_Observer {
	
	public function beforeGenerateBlocks(Varien_Event_Observer $observer) {
	
		# Disable default magento navigation
		if (Mage::helper('galababystylesettings')->getGeneral_DisableDefaultNav()) {
			$blocks = $observer->getLayout()->getXpath('//block[@name="galababystyle.catalog.topnav"]');
			if (!empty($blocks))
				$blocks[0]->addAttribute('ignore', true);
		}
		
		$package = Mage::getSingleton('core/design_package')->getPackageName();
        $theme = Mage::getSingleton('core/design_package')->getTheme('frontend');
        
		# Disable default Magento footer links
        if($package == 'default' && $theme == 'galababystyle'){
    		if (Mage::helper('galababystylesettings')->getGeneral_DisableFooterLinks()) {
    			$blocks = $observer->getLayout()->getXpath('//block[@name="footer_links"]');
    			if (!empty($blocks))
    				$blocks[0]->addAttribute('ignore', true);
    		}
        }
	}
	
	public function beforeCatalogProductCollectionLoad(Varien_Event_Observer $observer) {
		$alt_img = Mage::helper('galababystylesettings')->getProductsGrid_AltImg();
		if ($alt_img == 'image')
			$observer->getEvent()->getCollection()->addAttributeToSelect('image');
	}
}
