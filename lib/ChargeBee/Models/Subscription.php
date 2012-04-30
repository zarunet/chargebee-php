<?php

class ChargeBee_Subscription extends ChargeBee_Model
{

  protected $allowed = array('id', 'planId', 'planQuantity', 'status', 'trialStart', 'trialEnd', 'currentTermStart',
'currentTermEnd', 'createdAt', 'activatedAt', 'cancelledAt', 'dueInvoicesCount', 'dueSince','totalDues', 'addons');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/subscriptions", $params, $env);
  }

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/subscriptions", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/subscriptions/$id", array(), $env);
  }

  public static function update($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/subscriptions/$id", $params, $env);
  }

  public static function cancel($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/subscriptions/$id/cancel", $params, $env);
  }

  public static function reactivate($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/subscriptions/$id/reactivate", array(), $env);
  }

 }

?>