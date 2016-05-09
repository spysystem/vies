<?php

namespace VIES;

class CheckVatService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'checkVat' => 'VIES\\checkVat',
      'checkVatResponse' => 'VIES\\checkVatResponse',
      'checkVatApprox' => 'VIES\\checkVatApprox',
      'checkVatApproxResponse' => 'VIES\\checkVatApproxResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'checkVatService.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param checkVat $parameters
     * @return checkVatResponse
     */
    public function checkVat(checkVat $parameters)
    {
      return $this->__soapCall('checkVat', array($parameters));
    }

    /**
     * @param checkVatApprox $parameters
     * @return checkVatApproxResponse
     */
    public function checkVatApprox(checkVatApprox $parameters)
    {
      return $this->__soapCall('checkVatApprox', array($parameters));
    }

}
