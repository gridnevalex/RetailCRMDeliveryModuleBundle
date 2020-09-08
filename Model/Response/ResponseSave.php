<?php

namespace RetailCrm\DeliveryModuleBundle\Model\Response;

use JMS\Serializer\Annotation as Serializer;

class ResponseSave
{
    /**
     * Идентификатор доставки в службе доставки
     * @var string
     *
     * @Serializer\Groups({"response"})
     * @Serializer\SerializedName("deliveryId")
     * @Serializer\Type("string")
     */
    public $deliveryId;

     /**
     * Трек номер
     * @var string
     *
     * @Serializer\Groups({"response"})
     * @Serializer\SerializedName("trackNumber")
     * @Serializer\Type("string")
     */
    public $trackNumber;

    /**
     * Стоимость доставки
     * @var float
     *
     * @Serializer\Groups({"response"})
     * @Serializer\SerializedName("cost")
     * @Serializer\Type("float")
     */
    public $cost;

    /**
     * Код статуса доставки
     * @var string
     *
     * @Serializer\Groups({"response"})
     * @Serializer\SerializedName("status")
     * @Serializer\Type("string")
     */
    public $status;

    /**
     * Дополнительные данные доставки
     * @var string
     *
     * @Serializer\Groups({"response"})
     * @Serializer\SerializedName("extraData")
     * @Serializer\Type("array")
     */
    public $extraData;

    public $additionalData;

    public function __construct()
    {
        $this->extraData = [];
        $this->additionalData = [];
    }
}
