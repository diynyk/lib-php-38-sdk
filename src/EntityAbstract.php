<?php

namespace Diynik_38_sdk;

abstract class EntityAbstract {
  
  protected $log;

  protected $client;

  protected $entity = '';

  public function __construct($entity, $logger, $client)
  {
    $this->entity = $entity;
    $this->log=$logger;
    $this->client=$client;
  } 

}