<?php
/**
 * Cycle
 *
 * PHP version 5
 *
 * @category Class
 * @package  DataExchange\SIFUK20
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

namespace DataExchange\SIFUK20\Models;

use \ArrayAccess;

/**
 * Cycle Class Doc Comment
 *
 * @category    Class */
 // @description The timetable cycle
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Cycle implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Cycle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'school_info_ref_id' => 'string',
        'cycle_name' => 'string',
        'cycle_days' => 'int',
        'periods_per_day' => 'int',
        'standard_period_list' => '\DataExchange\SIFUK20\Models\Period[]',
        'tt_day_list' => '\DataExchange\SIFUK20\Models\TTDay[]',
        'sif_extended_elements' => '\DataExchange\SIFUK20\Models\SIFExtendedElement[]'
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
        'school_info_ref_id' => '@SchoolInfoRefId',
        'cycle_name' => 'CycleName',
        'cycle_days' => 'CycleDays',
        'periods_per_day' => 'PeriodsPerDay',
        'standard_period_list' => 'StandardPeriodList',
        'tt_day_list' => 'TTDayList',
        'sif_extended_elements' => 'SIF_ExtendedElements'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'school_info_ref_id' => 'setSchoolInfoRefId',
        'cycle_name' => 'setCycleName',
        'cycle_days' => 'setCycleDays',
        'periods_per_day' => 'setPeriodsPerDay',
        'standard_period_list' => 'setStandardPeriodList',
        'tt_day_list' => 'setTtDayList',
        'sif_extended_elements' => 'setSifExtendedElements'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'school_info_ref_id' => 'getSchoolInfoRefId',
        'cycle_name' => 'getCycleName',
        'cycle_days' => 'getCycleDays',
        'periods_per_day' => 'getPeriodsPerDay',
        'standard_period_list' => 'getStandardPeriodList',
        'tt_day_list' => 'getTtDayList',
        'sif_extended_elements' => 'getSifExtendedElements'
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
        $this->container['school_info_ref_id'] = isset($data['school_info_ref_id']) ? $data['school_info_ref_id'] : null;
        $this->container['cycle_name'] = isset($data['cycle_name']) ? $data['cycle_name'] : null;
        $this->container['cycle_days'] = isset($data['cycle_days']) ? $data['cycle_days'] : null;
        $this->container['periods_per_day'] = isset($data['periods_per_day']) ? $data['periods_per_day'] : null;
        $this->container['standard_period_list'] = isset($data['standard_period_list']) ? $data['standard_period_list'] : null;
        $this->container['tt_day_list'] = isset($data['tt_day_list']) ? $data['tt_day_list'] : null;
        $this->container['sif_extended_elements'] = isset($data['sif_extended_elements']) ? $data['sif_extended_elements'] : null;
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
        if ($this->container['cycle_days'] === null) {
            $invalid_properties[] = "'cycle_days' can't be null";
        }
        if ($this->container['periods_per_day'] === null) {
            $invalid_properties[] = "'periods_per_day' can't be null";
        }
        if ($this->container['standard_period_list'] === null) {
            $invalid_properties[] = "'standard_period_list' can't be null";
        }
        if ($this->container['tt_day_list'] === null) {
            $invalid_properties[] = "'tt_day_list' can't be null";
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
        if ($this->container['cycle_days'] === null) {
            return false;
        }
        if ($this->container['periods_per_day'] === null) {
            return false;
        }
        if ($this->container['standard_period_list'] === null) {
            return false;
        }
        if ($this->container['tt_day_list'] === null) {
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
     * @param string $ref_id Unique GUID for this cycle
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

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
     * @param string $school_info_ref_id The RefId of the SchoolInfo to which this Cycle belongs. This is optional to preserve backwards compatibility but it is very strongly advised that it should be correctly populated and considered mandatory in this version of the specification.
     * @return $this
     */
    public function setSchoolInfoRefId($school_info_ref_id)
    {
        $this->container['school_info_ref_id'] = $school_info_ref_id;

        return $this;
    }

    /**
     * Gets cycle_name
     * @return string
     */
    public function getCycleName()
    {
        return $this->container['cycle_name'];
    }

    /**
     * Sets cycle_name
     * @param string $cycle_name
     * @return $this
     */
    public function setCycleName($cycle_name)
    {
        $this->container['cycle_name'] = $cycle_name;

        return $this;
    }

    /**
     * Gets cycle_days
     * @return int
     */
    public function getCycleDays()
    {
        return $this->container['cycle_days'];
    }

    /**
     * Sets cycle_days
     * @param int $cycle_days Number of days in cycle
     * @return $this
     */
    public function setCycleDays($cycle_days)
    {
        $this->container['cycle_days'] = $cycle_days;

        return $this;
    }

    /**
     * Gets periods_per_day
     * @return int
     */
    public function getPeriodsPerDay()
    {
        return $this->container['periods_per_day'];
    }

    /**
     * Sets periods_per_day
     * @param int $periods_per_day (Max) Number of periods per day (see Rectangular Grid Representation above)
     * @return $this
     */
    public function setPeriodsPerDay($periods_per_day)
    {
        $this->container['periods_per_day'] = $periods_per_day;

        return $this;
    }

    /**
     * Gets standard_period_list
     * @return \DataExchange\SIFUK20\Models\Period[]
     */
    public function getStandardPeriodList()
    {
        return $this->container['standard_period_list'];
    }

    /**
     * Sets standard_period_list
     * @param \DataExchange\SIFUK20\Models\Period[] $standard_period_list
     * @return $this
     */
    public function setStandardPeriodList($standard_period_list)
    {
        $this->container['standard_period_list'] = $standard_period_list;

        return $this;
    }

    /**
     * Gets tt_day_list
     * @return \DataExchange\SIFUK20\Models\TTDay[]
     */
    public function getTtDayList()
    {
        return $this->container['tt_day_list'];
    }

    /**
     * Sets tt_day_list
     * @param \DataExchange\SIFUK20\Models\TTDay[] $tt_day_list
     * @return $this
     */
    public function setTtDayList($tt_day_list)
    {
        $this->container['tt_day_list'] = $tt_day_list;

        return $this;
    }

    /**
     * Gets sif_extended_elements
     * @return \DataExchange\SIFUK20\Models\SIFExtendedElement[]
     */
    public function getSifExtendedElements()
    {
        return $this->container['sif_extended_elements'];
    }

    /**
     * Sets sif_extended_elements
     * @param \DataExchange\SIFUK20\Models\SIFExtendedElement[] $sif_extended_elements Allows an agent to include data not yet defined within a SIF data object as name/value pairs.
     * @return $this
     */
    public function setSifExtendedElements($sif_extended_elements)
    {
        $this->container['sif_extended_elements'] = $sif_extended_elements;

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
            return json_encode(\DataExchange\SIFUK20\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DataExchange\SIFUK20\ObjectSerializer::sanitizeForSerialization($this));
    }
}
