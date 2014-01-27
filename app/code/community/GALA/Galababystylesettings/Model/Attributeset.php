<?php
class GALA_Galababystylesettings_Model_Attributeset extends Mage_Core_Model_Abstract
{
    /**
     * Provides a value-label array of available options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->getAttributeSetList();
        
    }
    public function getAttributeSetList()
    {
		
    	$rs1 = Mage::getModel('catalog/product_attribute_set_api')->items();
    	
    	$categories = array();$tmp[] = array('value' => '','label' => 'None Attribute Set');
        foreach($rs1 as $r)
        {
            $tmp[] = array('value' => $r['name'],'label' =>  $r['name']);
        }
        return $tmp;
        
    }
}
