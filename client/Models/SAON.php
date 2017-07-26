<?php
/**
 * SAON
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
 * Contact: support@dataexchange.education
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
 * SAON Class Doc Comment
 *
 * @category    Class */
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SAON implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SAON';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'start_number' => 'string',
        'start_number_suffix' => 'string',
        'end_number' => 'string',
        'end_number_suffix' => 'string'
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
        'description' => 'Description',
        'start_number' => 'StartNumber',
        'start_number_suffix' => 'StartNumberSuffix',
        'end_number' => 'EndNumber',
        'end_number_suffix' => 'EndNumberSuffix'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'start_number' => 'setStartNumber',
        'start_number_suffix' => 'setStartNumberSuffix',
        'end_number' => 'setEndNumber',
        'end_number_suffix' => 'setEndNumberSuffix'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'start_number' => 'getStartNumber',
        'start_number_suffix' => 'getStartNumberSuffix',
        'end_number' => 'getEndNumber',
        'end_number_suffix' => 'getEndNumberSuffix'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['start_number'] = isset($data['start_number']) ? $data['start_number'] : null;
        $this->container['start_number_suffix'] = isset($data['start_number_suffix']) ? $data['start_number_suffix'] : null;
        $this->container['end_number'] = isset($data['end_number']) ? $data['end_number'] : null;
        $this->container['end_number_suffix'] = isset($data['end_number_suffix']) ? $data['end_number_suffix'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
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
        return true;
    }


    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Sub-dwelling name, or other descriptive information in lieu of having any other information. This is required when no other SAON data is provided.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets start_number
     * @return string
     */
    public function getStartNumber()
    {
        return $this->container['start_number'];
    }

    /**
     * Sets start_number
     * @param string $start_number Start (single) dwelling number.
     * @return $this
     */
    public function setStartNumber($start_number)
    {
        $this->container['start_number'] = $start_number;

        return $this;
    }

    /**
     * Gets start_number_suffix
     * @return string
     */
    public function getStartNumberSuffix()
    {
        return $this->container['start_number_suffix'];
    }

    /**
     * Sets start_number_suffix
     * @param string $start_number_suffix Start (single) dwelling number suffix.
     * @return $this
     */
    public function setStartNumberSuffix($start_number_suffix)
    {
        $this->container['start_number_suffix'] = $start_number_suffix;

        return $this;
    }

    /**
     * Gets end_number
     * @return string
     */
    public function getEndNumber()
    {
        return $this->container['end_number'];
    }

    /**
     * Sets end_number
     * @param string $end_number End dwelling number.
     * @return $this
     */
    public function setEndNumber($end_number)
    {
        $this->container['end_number'] = $end_number;

        return $this;
    }

    /**
     * Gets end_number_suffix
     * @return string
     */
    public function getEndNumberSuffix()
    {
        return $this->container['end_number_suffix'];
    }

    /**
     * Sets end_number_suffix
     * @param string $end_number_suffix End dwelling number suffix.
     * @return $this
     */
    public function setEndNumberSuffix($end_number_suffix)
    {
        $this->container['end_number_suffix'] = $end_number_suffix;

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
