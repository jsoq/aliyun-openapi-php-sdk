<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteContactGroup
 *
 * @method string getContactGroupName()
 */
class DeleteContactGroupRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'DeleteContactGroup',
            'cms'
        );
    }

    /**
     * @param string $contactGroupName
     *
     * @return $this
     */
    public function setContactGroupName($contactGroupName)
    {
        $this->requestParameters['ContactGroupName'] = $contactGroupName;
        $this->queryParameters['ContactGroupName'] = $contactGroupName;

        return $this;
    }
}
