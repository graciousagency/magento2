<?php
/**
 * Copyright © 2018 Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mollie\Payment\Model\Methods;

use Mollie\Payment\Model\Mollie;

/**
 * Class Paypal
 *
 * @package Mollie\Payment\Model\Methods
 */
class Paypal extends Mollie
{

    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = 'mollie_methods_paypal';

    /**
     * Info instructions block path
     *
     * @var string
     */
    protected $_infoBlockType = 'Mollie\Payment\Block\Info\Base';
}
