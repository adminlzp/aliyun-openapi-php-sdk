<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteRuleAction
 *
 * @method string getIotInstanceId()
 * @method string getActionId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class DeleteRuleActionRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Iot',
            '2018-01-20',
            'DeleteRuleAction',
            'iot'
        );
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $actionId
     *
     * @return $this
     */
    public function setActionId($actionId)
    {
        $this->requestParameters['ActionId'] = $actionId;
        $this->queryParameters['ActionId'] = $actionId;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }
}
