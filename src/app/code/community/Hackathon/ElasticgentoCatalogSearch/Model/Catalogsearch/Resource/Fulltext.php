<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * PHP Version 5.3
 *
 * @category  Hackathon
 * @package   Hackathon_ElasticgentoCatalogSearch
 * @author    Daniel Niedergesäß <daniel.niedergesaess ÄT gmail.com>
 * @author    Andreas Emer <emer ÄT mothership.de>
 * @author    Michael Ryvlin <ryvlin ÄT gmail.com>
 * @author    Johann Niklas <johann ÄT n1klas.de>
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      http://mage-hackathon.de/
 *
 * Elasticgento CatalogSearch fulltext resource model replacement
 *
 */
class Hackathon_ElasticgentoCatalogSearch_Model_Catalogsearch_Resource_Fulltext
    extends Mage_CatalogSearch_Model_Resource_Fulltext
{

    /**
     * override the method to prepare the result
     *
     * @param Mage_CatalogSearch_Model_Fulltext $object
     * @param string $queryText
     * @param Mage_CatalogSearch_Model_Query $query
     * @return Hackathon_ElasticgentoCatalogSearch_Model_Catalogsearch_Resource_Fulltext|Mage_CatalogSearch_Model_Resource_Fulltext
     */
    public function prepareResult(
        $object,
        $queryText,
        $query
    )
    {
        $helper = Mage::helper('elasticgento_catalogsearch');

        if (!$helper->isSearchActive()) {
            return parent::prepareResult($object, $queryText, $query);
        }

        $adapter = $helper->getAdapter();

    }
}