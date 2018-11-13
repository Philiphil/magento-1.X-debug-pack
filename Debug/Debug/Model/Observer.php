<?php

function dispatchEvents($observer)
{
   if ($observer->getEvent()->getControllerAction()->getFullActionName() == "adminhtml_sales_order_addressSave")
       Mage::dispatchEvent('my_custom_event_observer', []);

       return $this;
}

function trackEvents($observer)
{
   Mage::log("track event:" . $observer->getEvent()->getControllerAction()->getFullActionName());

   return $this;
}