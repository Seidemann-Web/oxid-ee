[{$smarty.block.parent}]

[{if $order->isCustomPaymentMethod() }]
  <p>
    <strong>
      [{if $order->isPaymentPending() }]
        [{oxmultilang ident="wd_payment_awaiting"}]<br>
        [{oxmultilang ident="wd_wait_for_final_status"}]
      [{elseif $order->isPaymentSuccess() }]
        [{oxmultilang ident="wd_payment_success_text"}]
      [{else}]
        [{oxmultilang ident="wd_order_error_info"}]
      [{/if}]
    </strong>
  </p>
[{/if}]
