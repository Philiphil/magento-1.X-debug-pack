<?php

class Debug_Debug_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
       $this->loadLayout();
       $this->renderLayout();
       echo "test";
    }

    public function displayProductAttributes()
    {
        $attributes = Mage::getModel('catalog/product')->getAttributes();
        $attributeArray = array();
        foreach($attributes as $a){
            foreach ($a->getEntityType()->getAttributeCodes() as $attributeName) {
                $attributeArray[] = array(
                    'label' => $attributeName,
                    'value' => $attributeName
                );
            }
            break;
        }
        return $attributeArray; 
    }
}