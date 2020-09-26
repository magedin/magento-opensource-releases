<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\Rest\Response\Type\Order\Attributes\Item\Product;

/**
 * Temando API Order Attributes Item Product ClassificationCodes Response Type
 *
 * @package  Temando\Shipping\Rest
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.temando.com/
 */
class ClassificationCodes
{
    /**
     * @var string
     */
    private $eccn;

    /**
     * @var string
     */
    private $scheduleBinfo;

    /**
     * @var string
     */
    private $hsCode;

    /**
     * @return string
     */
    public function getEccn()
    {
        return $this->eccn;
    }

    /**
     * @param string $eccn
     * @return void
     */
    public function setEccn($eccn)
    {
        $this->eccn = $eccn;
    }

    /**
     * @return string
     */
    public function getScheduleBinfo()
    {
        return $this->scheduleBinfo;
    }

    /**
     * @param string $scheduleBinfo
     * @return void
     */
    public function setScheduleBinfo($scheduleBinfo)
    {
        $this->scheduleBinfo = $scheduleBinfo;
    }

    /**
     * @return string
     */
    public function getHsCode()
    {
        return $this->hsCode;
    }

    /**
     * @param string $hsCode
     * @return void
     */
    public function setHsCode($hsCode)
    {
        $this->hsCode = $hsCode;
    }
}