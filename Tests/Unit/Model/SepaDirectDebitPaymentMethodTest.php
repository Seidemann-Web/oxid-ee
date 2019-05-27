<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

use OxidEsales\Eshop\Core\Field;

use Wirecard\Oxid\Model\SepaCreditTransferPaymentMethod;
use Wirecard\Oxid\Model\SepaDirectDebitPaymentMethod;
use Wirecard\Oxid\Model\Transaction;
use Wirecard\PaymentSdk\Transaction\SepaDirectDebitTransaction;

class SepaDirectDebitPaymentMethodTest extends OxidEsales\TestingLibrary\UnitTestCase
{
    /**
     * @var SepaDirectDebitPaymentMethod
     */
    private $_oPaymentMethod;

    protected function setUp()
    {
        parent::setUp();

        $this->_oPaymentMethod = new SepaDirectDebitPaymentMethod();
    }

    public function testGetConfig()
    {
        $oConfig = $this->_oPaymentMethod->getConfig();
        $this->assertNotNull($oConfig);
    }

    public function testGetConfigFields()
    {
        $aFieldKeys = array_keys($this->_oPaymentMethod->getConfigFields());

        $this->assertEquals([
            'apiUrl',
            'httpUser',
            'httpPassword',
            'testCredentials',
            'maid',
            'secret',
            'descriptor',
            'additionalInfo',
            'deleteCanceledOrder',
            'deleteFailedOrder',
            'bic',
            'paymentAction',
            'creditorId',
            'sepaMandateCustom',
        ], $aFieldKeys);
    }

    /**
     * @dataProvider getCheckoutFieldsProvider
     */
    public function testGetCheckoutFields($sContainsKey)
    {
        $oPayment = $this->_oPaymentMethod->getPayment();
        $oPayment->oxpayments__wdoxidee_bic->value = new Field(1);
        $oPayment->save();
        $aCheckoutFields = $this->_oPaymentMethod->getCheckoutFields();
        $this->assertArrayHasKey($sContainsKey, $aCheckoutFields);
    }

    public function getCheckoutFieldsProvider()
    {
        return [
            'contains accountHolder' => ['accountHolder'],
            'contains iban' => ['iban'],
            'contains bic' => ['bic'],
        ];
    }

    public function testGetTransaction()
    {
        $oTransaction = $this->_oPaymentMethod->getTransaction();
        $this->assertInstanceOf(SepaDirectDebitTransaction::class, $oTransaction);
    }

    public function testAddMandatoryTransactionData()
    {
        $oTransaction = $this->_oPaymentMethod->getTransaction();
        $this->_oPaymentMethod->addMandatoryTransactionData($oTransaction);

        $this->assertAttributeEquals('', 'iban', $oTransaction);
        $this->assertAttributeNotEmpty('mandate', $oTransaction);
        $this->assertAttributeNotEmpty('accountHolder', $oTransaction);
    }

    public function testGetPublicFieldNames()
    {
        $this->assertEquals([
            'apiUrl',
            'maid',
            'descriptor',
            'additionalInfo',
            'paymentAction',
            'deleteCanceledOrder',
            'deleteFailedOrder',
        ], $this->_oPaymentMethod->getPublicFieldNames());
    }

    public function testGetCheckoutFieldsWithoutBic()
    {
        $aFieldKeys = array_keys($this->_oPaymentMethod->getCheckoutFields());

        $this->assertEquals([
            'accountHolder',
            'iban',
        ], $aFieldKeys);
    }

    public function testGetCheckoutFieldsWithBic()
    {
        $oPayment = $this->_oPaymentMethod->getPayment();
        $oPayment->oxpayments__wdoxidee_bic->value = '1';
        $aFieldKeys = array_keys($this->_oPaymentMethod->getCheckoutFields());

        $this->assertEquals([
            'accountHolder',
            'iban',
            'bic',
        ], $aFieldKeys);
    }

    /**
     * @dataProvider getPostProcessingPaymentMethodProvider
     */
    public function testGetPostProcessingPaymentMethod($sAction, $sClassName)
    {
        $sResult = $this->_oPaymentMethod->getPostProcessingPaymentMethod($sAction);

        $this->assertInstanceOf($sClassName, $sResult);
    }

    public function getPostProcessingPaymentMethodProvider()
    {
        return [
            'refund action' => [
                Transaction::ACTION_CREDIT,
                SepaCreditTransferPaymentMethod::class,
            ],
            'non-refund action' => [
                Transaction::ACTION_RESERVE,
                SepaDirectDebitPaymentMethod::class,
            ],
        ];
    }

    public function testOnBeforeTransactionCreationWithRequestParameter()
    {
        $_POST['wdsepadd_checkbox'] = true;

        $this->assertNull($this->_oPaymentMethod->onBeforeTransactionCreation());
    }
    /**
     * @expectedException OxidEsales\Eshop\Core\Exception\InputException
     */
    public function testOnBeforeTransactionCreationWithoutRequestParameter()
    {
        $this->_oPaymentMethod->onBeforeTransactionCreation();
    }

}