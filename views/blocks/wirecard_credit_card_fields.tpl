[{*
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*}]
[{$smarty.block.parent}]
[{assign var="payment" value=$oView->getPayment()}]
[{assign var="user" value=$oView->getUser()}]
[{if $payment->shouldRenderCreditCardForm()}]

  [{oxscript include="js/libs/jquery.min.js" priority=8}]
  [{oxscript include=$oView->getPaymentPageLoaderScriptUrl() priority=8}]
  [{oxscript include=$oViewConf->getPaymentGatewayUrl('out/js/wirecard_wdoxidee_credit_card_form.js') priority=9}]
  [{oxscript add="ModuleCreditCardForm.init()" priority=10}]
  [{oxstyle include=$oViewConf->getPaymentGatewayUrl("out/css/wirecard_wdoxidee_spinner.css")}]

  <input type="hidden" id="ccRequestDataAjaxUrl" value="[{$oView->getCCRequestDataAjaxLink()}]" />

  <div id="wirecard-cc-error"></div>

  <div class="loader"></div>

  <div>
    <form id="wirecard-cc-form" method="post" action="[{$oViewConf->getSslSelfLink()}]">
      [{* Fields from the actual submit form for execute function *}]
      [{$oViewConf->getHiddenSid()}]
      [{$oViewConf->getNavFormParams()}]
      <input type="hidden" name="cl" value="order">
      <input type="hidden" name="fnc" value="[{$oView->getExecuteFnc()}]">
      <input type="hidden" name="challenge" value="[{$challenge}]">
      <input type="hidden" name="sDeliveryAddressMD5" value="[{$oView->getDeliveryAddressMD5()}]">
      [{if $oView->isActive('PsLogin') || !$oView->isConfirmAGBActive()}]
        <input type="hidden" name="ord_agb" value="1">
      [{else}]
        <input type="hidden" name="ord_agb" value="0">
      [{/if}]
      <input type="hidden" name="oxdownloadableproductsagreement" value="0">
      <input type="hidden" name="oxserviceproductsagreement" value="0">
      <div id="creditcard-form-div"></div>

      [{if $user->hasAccount() && $payment->oxpayments__oneclick_enabled->value == 1}]
        <div style="margin-bottom: 10px">
          <label style="display: inline">
            <input type="checkbox" name="wdsavecheckbox" value="1"/>
            [{oxmultilang ident="wd_vault_save_text"}]
          </label>
        </div>
      [{/if}]

    </form>
  </div>

[{/if}]
