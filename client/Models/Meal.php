<?php
/**
 * Meal
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
 * Meal Class Doc Comment
 *
 * @category    Class */
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Meal implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Meal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'day' => 'string',
        'meal_time' => 'string',
        'meal_type' => 'string'
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
        'day' => 'Day',
        'meal_time' => 'MealTime',
        'meal_type' => 'MealType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'day' => 'setDay',
        'meal_time' => 'setMealTime',
        'meal_type' => 'setMealType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'day' => 'getDay',
        'meal_time' => 'getMealTime',
        'meal_type' => 'getMealType'
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
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['meal_time'] = isset($data['meal_time']) ? $data['meal_time'] : null;
        $this->container['meal_type'] = isset($data['meal_type']) ? $data['meal_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['day'] === null) {
            $invalid_properties[] = "'day' can't be null";
        }
        if ($this->container['meal_time'] === null) {
            $invalid_properties[] = "'meal_time' can't be null";
        }
        if ($this->container['meal_type'] === null) {
            $invalid_properties[] = "'meal_type' can't be null";
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
        if ($this->container['day'] === null) {
            return false;
        }
        if ($this->container['meal_time'] === null) {
            return false;
        }
        if ($this->container['meal_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets day
     * @return string
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     * @param string $day The Day of week that Meal is required
     * @return $this
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets meal_time
     * @return string
     */
    public function getMealTime()
    {
        return $this->container['meal_time'];
    }

    /**
     * Sets meal_time
     * @param string $meal_time Which meal of the day is required
     * @return $this
     */
    public function setMealTime($meal_time)
    {
        $this->container['meal_time'] = $meal_time;

        return $this;
    }

    /**
     * Gets meal_type
     * @return string
     */
    public function getMealType()
    {
        return $this->container['meal_type'];
    }

    /**
     * Sets meal_type
     * @param string $meal_type What type of meal is required
     * @return $this
     */
    public function setMealType($meal_type)
    {
        $this->container['meal_type'] = $meal_type;

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
