<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

namespace Wirecard\Oxid\Core;

use OxidEsales\Eshop\Core\Exception\StandardException;

use Wirecard\Oxid\Model\CreditCardPaymentMethod;
use Wirecard\Oxid\Model\PaymentMethod;
use Wirecard\Oxid\Model\PaypalPaymentMethod;
use Wirecard\Oxid\Model\RatepayInvoicePaymentMethod;
use Wirecard\Oxid\Model\SepaCreditTransferPaymentMethod;
use Wirecard\Oxid\Model\SepaDirectDebitPaymentMethod;
use Wirecard\Oxid\Model\SofortPaymentMethod;

/**
 * Class PaymentMethodFactory
 *
 * @package Wirecard\Core
 *
 * @since 1.0.0
 */
class PaymentMethodFactory
{
    /**
     * Create a payment method
     *
     * @param string $sPaymentMethodType
     *
     * @return PaymentMethod
     * @throws StandardException if $sPaymentMethodType is not registered
     *
     * will grow as we add new payment methods
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @codingStandardsIgnoreStart Generic.Metrics.CyclomaticComplexity
     *
     * @since 1.0.0
     */
    public static function create($sPaymentMethodType)
    {
        switch ($sPaymentMethodType) {
            case PaypalPaymentMethod::getName(true):
                return new PaypalPaymentMethod();
            case CreditCardPaymentMethod::getName(true):
                return new CreditCardPaymentMethod();
            case SepaCreditTransferPaymentMethod::getName(true):
                return new SepaCreditTransferPaymentMethod();
            case SepaDirectDebitPaymentMethod::getName(true):
                return new SepaDirectDebitPaymentMethod();
            case SofortPaymentMethod::getName(true):
                return new SofortPaymentMethod();
            case RatepayInvoicePaymentMethod::getName(true);
                return new RatepayInvoicePaymentMethod();
            default:
                throw new StandardException("payment type not registered: $sPaymentMethodType");
        }
    }
    // @codingStandardsIgnoreEnd Generic.Metrics.CyclomaticComplexity
}
