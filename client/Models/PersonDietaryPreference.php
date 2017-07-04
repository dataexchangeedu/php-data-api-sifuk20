<?php
/**
 * PersonDietaryPreference
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
 * PersonDietaryPreference Class Doc Comment
 *
 * @category    Class */
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PersonDietaryPreference implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PersonDietaryPreference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'person_ref_id' => 'string',
        'weekly_meal_pattern_list' => '\DataExchange\SIFUK20\Models\WeeklyMealPattern[]',
        'dietary_preference_list' => '\DataExchange\SIFUK20\Models\DietaryPreference[]'
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
        'person_ref_id' => 'PersonRefId',
        'weekly_meal_pattern_list' => 'WeeklyMealPatternList',
        'dietary_preference_list' => 'DietaryPreferenceList'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'person_ref_id' => 'setPersonRefId',
        'weekly_meal_pattern_list' => 'setWeeklyMealPatternList',
        'dietary_preference_list' => 'setDietaryPreferenceList'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'person_ref_id' => 'getPersonRefId',
        'weekly_meal_pattern_list' => 'getWeeklyMealPatternList',
        'dietary_preference_list' => 'getDietaryPreferenceList'
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
        $this->container['person_ref_id'] = isset($data['person_ref_id']) ? $data['person_ref_id'] : null;
        $this->container['weekly_meal_pattern_list'] = isset($data['weekly_meal_pattern_list']) ? $data['weekly_meal_pattern_list'] : null;
        $this->container['dietary_preference_list'] = isset($data['dietary_preference_list']) ? $data['dietary_preference_list'] : null;
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
        if ($this->container['person_ref_id'] === null) {
            $invalid_properties[] = "'person_ref_id' can't be null";
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
        if ($this->container['person_ref_id'] === null) {
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
     * @param string $ref_id
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets person_ref_id
     * @return string
     */
    public function getPersonRefId()
    {
        return $this->container['person_ref_id'];
    }

    /**
     * Sets person_ref_id
     * @param string $person_ref_id The ID (GUID) of the person to whom the Dietary preference is linked.
     * @return $this
     */
    public function setPersonRefId($person_ref_id)
    {
        $this->container['person_ref_id'] = $person_ref_id;

        return $this;
    }

    /**
     * Gets weekly_meal_pattern_list
     * @return \DataExchange\SIFUK20\Models\WeeklyMealPattern[]
     */
    public function getWeeklyMealPatternList()
    {
        return $this->container['weekly_meal_pattern_list'];
    }

    /**
     * Sets weekly_meal_pattern_list
     * @param \DataExchange\SIFUK20\Models\WeeklyMealPattern[] $weekly_meal_pattern_list
     * @return $this
     */
    public function setWeeklyMealPatternList($weekly_meal_pattern_list)
    {
        $this->container['weekly_meal_pattern_list'] = $weekly_meal_pattern_list;

        return $this;
    }

    /**
     * Gets dietary_preference_list
     * @return \DataExchange\SIFUK20\Models\DietaryPreference[]
     */
    public function getDietaryPreferenceList()
    {
        return $this->container['dietary_preference_list'];
    }

    /**
     * Sets dietary_preference_list
     * @param \DataExchange\SIFUK20\Models\DietaryPreference[] $dietary_preference_list
     * @return $this
     */
    public function setDietaryPreferenceList($dietary_preference_list)
    {
        $this->container['dietary_preference_list'] = $dietary_preference_list;

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
