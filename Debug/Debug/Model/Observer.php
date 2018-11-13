<?php

class Debug_Debug_Model_Observer extends Varien_Event_Observer
{
    public function dispatchEvents(Varien_Event_Observer $observer){
        if ($observer->getEvent()->getControllerAction()->getFullActionName() == "adminhtml_sales_order_addressSave")
                Mage::dispatchEvent('my_custom_event_observer', []);
        return $this;
    }

    public function trackEvents(Varien_Event_Observer $observer){
        Mage::log("track event:" . $observer->getEvent()->getControllerAction()->getFullActionName());
        return $this;
    }

 }