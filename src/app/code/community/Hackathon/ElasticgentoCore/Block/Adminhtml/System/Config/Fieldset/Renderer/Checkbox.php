<?php
/**
 * NicheCommerce
 *
 * @category    NicheCommerce
 * @package     NicheCommerce
 * @copyright   Copyright (c) 2012 NicheCommerce. (http://nichecommerce.nl)
 * @author      Tim Vroom (tim@nichecommerce.nl)
 */
class Hackathon_ElasticgentoCore_Block_Adminhtml_System_Config_Fieldset_Renderer_Checkbox extends Mage_Adminhtml_Block_Abstract
{
    protected function _toHtml(){
        return $this->_getCheckboxHtml('1');
    }

    protected function _getCheckboxHtml($value = '') {
        $html = '<input type="checkbox" ';
        $html .= 'name="' . $this->getInputName() . '" ';
        $html .= 'value="' . $this->escapeHtml($value) . '" ';
        $html .= 'class="'. ($this->getInlineCss() ? $this->getInlineCss() : 'checkbox') .'"';
        $html .= '#{' . $this->getColumnName() . '}'. $this->getDisabled() . '/>';
        return $html;
    }
}