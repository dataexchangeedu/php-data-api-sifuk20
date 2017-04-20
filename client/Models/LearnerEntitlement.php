<?php
/**
 * LearnerEntitlement
 *
 * PHP version 5
 *
 * @category Class
 * @package  DataExchange\UK\20
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SIF (UK), v.2.0
 *
 * DataExchange for the SIF (UK), v.2.0 data model
 *
 * OpenAPI spec version: 1.0
 * Contact: support@zinethq.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DataExchange\UK\20\Models;

use \ArrayAccess;

/**
 * LearnerEntitlement Class Doc Comment
 *
 * @category    Class */
/**
 * @package     DataExchange\UK\20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnerEntitlement implements ArrayAccess
{
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
        'provider_id' => '\DataExchange\UK\20\Models\ProviderId',
        'next_review_date' => '\DateTime'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
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
     * @return bool True if all properteis are valid
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
        return $this->container['ref_id'];
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
        return $this->container['learner_personal_ref_id'];
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
        return $this->container['school_info_ref_id'];
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
        return $this->container['entitlement_type'];
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
        return $this->container['start_date'];
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
        return $this->container['end_date'];
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
        return $this->container['note'];
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
        return $this->container['value'];
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
     * @return \DataExchange\UK\20\Models\ProviderId
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     * @param \DataExchange\UK\20\Models\ProviderId $provider_id
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
        return $this->container['next_review_date'];
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
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DataExchange\UK\20\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DataExchange\UK\20\ObjectSerializer::sanitizeForSerialization($this));
    }
}
