<?php

class ChargeBee_Invoice extends ChargeBee_Model
{

  protected $allowed = array('id', 'subscriptionId', 'status', 'startDate', 'endDate', 'amount', 'paidOn',
'nextRetry', 'subTotal', 'lineItems', 'discounts');



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/invoices", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/invoices/$id", array(), $env);
  }

  public static function invoicesForSubscription($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/subscriptions/$id/invoices", $params, $env);
  }

 }

?>