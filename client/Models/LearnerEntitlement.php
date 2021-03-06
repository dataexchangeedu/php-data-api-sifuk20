<?php
/**
 * LearnerEntitlement
 *
 * PHP version 5
 *
 * @category Class
 * @package  DataExchange\SIFUK20
 * @author   DataExchange team
 * @link     https://developer.dataexchange.education
 */

/**
 * SIF (UK), v.2.0
 *
 * OpenAPI specification for the SIF (UK), v.2.0 data model. Generated by DataExchange (dataexchange.educaton) at 2017-08-13 19:14:57
 *
 * OpenAPI spec version: 1.0.0.20170813191457
 * Contact: support@dataexchange.education
 * Generated by: https://developer.dataexchange.education
 *
 */

/**
 * NOTE: This class is auto generated.
 * https://developer.dataexchange.education
 * Do not edit the class manually.
 */

namespace DataExchange\SIFUK20\Models;

use \ArrayAccess;

/**
 * LearnerEntitlement Class Doc Comment
 *
 * @category    Class
 * @package     DataExchange\SIFUK20
 * @author      DataExchange team
 * @link        https://developer.dataexchange.education
 */
class LearnerEntitlement implements ArrayAccess
{
    const DISCRIMINATOR = null;

    const IS_ARRAY = false;
    const ITEMS = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnerEntitlement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'learner_personal_ref_id' => 'string',
        'school_info_ref_id' => 'string',
        'entitlement_type' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'note' => 'string',
        'value' => 'string',
        'provider_id' => '\DataExchange\SIFUK20\Models\ProviderId',
        'next_review_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ref_id' => null,
        'learner_personal_ref_id' => null,
        'school_info_ref_id' => null,
        'entitlement_type' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'note' => null,
        'value' => null,
        'provider_id' => null,
        'next_review_date' => 'date'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'ref_id' => '@RefId',
        'learner_personal_ref_id' => 'LearnerPersonalRefId',
        'school_info_ref_id' => 'SchoolInfoRefId',
        'entitlement_type' => 'EntitlementType',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'note' => 'Note',
        'value' => 'Value',
        'provider_id' => 'ProviderId',
        'next_review_date' => 'NextReviewDate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'learner_personal_ref_id' => 'setLearnerPersonalRefId',
        'school_info_ref_id' => 'setSchoolInfoRefId',
        'entitlement_type' => 'setEntitlementType',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'note' => 'setNote',
        'value' => 'setValue',
        'provider_id' => 'setProviderId',
        'next_review_date' => 'setNextReviewDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'learner_personal_ref_id' => 'getLearnerPersonalRefId',
        'school_info_ref_id' => 'getSchoolInfoRefId',
        'entitlement_type' => 'getEntitlementType',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'note' => 'getNote',
        'value' => 'getValue',
        'provider_id' => 'getProviderId',
        'next_review_date' => 'getNextReviewDate'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ref_id'] = isset($data['ref_id']) ? $data['ref_id'] : null;
        $this->container['learner_personal_ref_id'] = isset($data['learner_personal_ref_id']) ? $data['learner_personal_ref_id'] : null;
        $this->container['school_info_ref_id'] = isset($data['school_info_ref_id']) ? $data['school_info_ref_id'] : null;
        $this->container['entitlement_type'] = isset($data['entitlement_type']) ? $data['entitlement_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['next_review_date'] = isset($data['next_review_date']) ? $data['next_review_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['ref_id'] === null) {
            $invalid_properties[] = "'ref_id' can't be null";
        }
        if ($this->container['learner_personal_ref_id'] === null) {
            $invalid_properties[] = "'learner_personal_ref_id' can't be null";
        }
        if ($this->container['school_info_ref_id'] === null) {
            $invalid_properties[] = "'school_info_ref_id' can't be null";
        }
        if ($this->container['entitlement_type'] === null) {
            $invalid_properties[] = "'entitlement_type' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalid_properties[] = "'start_date' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['ref_id'] === null) {
            return false;
        }
        if ($this->container['learner_personal_ref_id'] === null) {
            return false;
        }
        if ($this->container['school_info_ref_id'] === null) {
            return false;
        }
        if ($this->container['entitlement_type'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets ref_id
     * @return string
     */
    public function getRefId()
    {
        return isset($this->container['ref_id']) ? $this->container['ref_id'] : null;
    }

    /**
     * Sets ref_id
     * @param string $ref_id The ID (GUID) that uniquely identifies a particular entitlement.
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets learner_personal_ref_id
     * @return string
     */
    public function getLearnerPersonalRefId()
    {
        return isset($this->container['learner_personal_ref_id']) ? $this->container['learner_personal_ref_id'] : null;
    }

    /**
     * Sets learner_personal_ref_id
     * @param string $learner_personal_ref_id The ID (GUID) of the learner to whom this entitlement is linked.
     * @return $this
     */
    public function setLearnerPersonalRefId($learner_personal_ref_id)
    {
        $this->container['learner_personal_ref_id'] = $learner_personal_ref_id;

        return $this;
    }

    /**
     * Gets school_info_ref_id
     * @return string
     */
    public function getSchoolInfoRefId()
    {
        return isset($this->container['school_info_ref_id']) ? $this->container['school_info_ref_id'] : null;
    }

    /**
     * Sets school_info_ref_id
     * @param string $school_info_ref_id The ID (GUID) of the school to which this entitlement applies.
     * @return $this
     */
    public function setSchoolInfoRefId($school_info_ref_id)
    {
        $this->container['school_info_ref_id'] = $school_info_ref_id;

        return $this;
    }

    /**
     * Gets entitlement_type
     * @return string
     */
    public function getEntitlementType()
    {
        return isset($this->container['entitlement_type']) ? $this->container['entitlement_type'] : null;
    }

    /**
     * Sets entitlement_type
     * @param string $entitlement_type The type of this Entitlement
     * @return $this
     */
    public function setEntitlementType($entitlement_type)
    {
        $this->container['entitlement_type'] = $entitlement_type;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return isset($this->container['start_date']) ? $this->container['start_date'] : null;
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date Date Specific Entitlement starts.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return isset($this->container['end_date']) ? $this->container['end_date'] : null;
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date Date Specific Entitlement Ends has to be on or after Start date.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return isset($this->container['note']) ? $this->container['note'] : null;
    }

    /**
     * Sets note
     * @param string $note A note relating to entitlement period.
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return isset($this->container['value']) ? $this->container['value'] : null;
    }

    /**
     * Sets value
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets provider_id
     * @return \DataExchange\SIFUK20\Models\ProviderId
     */
    public function getProviderId()
    {
        return isset($this->container['provider_id']) ? $this->container['provider_id'] : null;
    }

    /**
     * Sets provider_id
     * @param \DataExchange\SIFUK20\Models\ProviderId $provider_id
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets next_review_date
     * @return \DateTime
     */
    public function getNextReviewDate()
    {
        return isset($this->container['next_review_date']) ? $this->container['next_review_date'] : null;
    }

    /**
     * Sets next_review_date
     * @param \DateTime $next_review_date Advises the date for next review of the listed entitlement, this element is not expected to be provided for instances where the EndDate is in the past as it refers to the entitlement, not periods of entitlement. Note that a review date could be prior to the end date of a current entitlement, and so is recorded separately.
     * @return $this
     */
    public function setNextReviewDate($next_review_date)
    {
        $this->container['next_review_date'] = $next_review_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object in JSON format
     * @return string
     */
    public function toJson()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DataExchange\SIFUK20\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DataExchange\SIFUK20\ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets the string presentation of the object in XML format
     * @return string
     */
    public function toXml()
    {
        $dom = new \DOMDocument();

        $node = $dom->importNode($this->toXmlNode(), true);

        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $xml = $dom->saveXML($node);

        unset($node);
        unset($dom);

        return $xml;
    }

    /**
     * Gets the string presentation of the object in XML format
     * @return string
     */
    public function toXmlNode()
    {
        $dom = new \DOMDocument();
        $elem = $dom->createElement(self::$swaggerModelName);

        foreach (self::attributeMap() as $key => $property) {
            $value = $this->{$this->getters()[$key]}();

            if (is_null($value)) {
                // Do nothing
                continue;
            }

            if ($property[0] === '@') {
                $elem->setAttribute(substr($property, 1), $value);
            } else {
                if (is_scalar($value)) {
                    $elem->appendChild($dom->createElement($property, $value));
                } elseif ($value instanceof \DateTime) {
                    $format = $this->swaggerFormats()[$key];
                    $str = ($format === 'date') ? $value->format('Y-m-d') : $value->format(\DateTime::ATOM);
                    $elem->appendChild($dom->createElement($property, $str));
                } elseif (is_array($value)) {
                    if (is_scalar($value)) {
                        // TODO
                        /*
                        foreach ($value as $property => $value) {
                            $elem->appendChild($dom->createElement($property, (string) $value));
                        }
                        */
                    } else {
                        // TODO
                        /*
                        foreach ($value as $property => $value) {
                            $elem->appendChild($dom->importNode($value->toXmlNode(), true));
                            // $elem->appendChild($dom->createElement($property, (string) $value));
                        }
                        */
                    }
                } elseif (is_object($value)) {
                    $elem->appendChild($dom->importNode($value->toXmlNode(), true));
                } else {
                    $elem->appendChild($dom->createElement($property, (string) $value));
                }
            }
        }

        if (self::IS_ARRAY) {
            foreach ($this->container as $key => $item) {
                $elem->appendChild($dom->importNode($item->toXmlNode(), true));
            }
        }

        return $elem;
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        return $this->toXml();
    }
}


