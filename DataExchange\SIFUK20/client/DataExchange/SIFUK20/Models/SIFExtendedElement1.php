<?php
/**
 * SIFExtendedElement1
 *
 * PHP version 5
 *
 * @category Class
 * @package  
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
 * SIFExtendedElement1 Class Doc Comment
 *
 * @category    Class */
 // @description Data not yet defined within a SIF data object as name/value pairs.
/**
 * @package     
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SIFExtendedElement1 implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SIF_ExtendedElement_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'type' => 'string',
        'sif_action' => 'string'
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
        'name' => '@Name',
        'type' => '@type',
        'sif_action' => '@SIF_Action'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'sif_action' => 'setSifAction'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'sif_action' => 'getSifAction'
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

    const NAME_YEAR_GROUP = 'YearGroup';
    const NAME_REGISTRATION_GROUP = 'RegistrationGroup';
    const NAME_HOUSE = 'House';
    const NAME_ACHIEVEMENT_POINTS = 'AchievementPoints';
    const NAME_BEHAVIOUR_POINTS = 'BehaviourPoints';
    const NAME_FSM = 'FSM';
    const NAME_FSM6 = 'FSM6';
    const NAME_PUPIL_PREMIUM = 'PupilPremium';
    const NAME_EAL = 'EAL';
    const NAME_SEN = 'SEN';
    const NAME_SERVICE_CHILD = 'ServiceChild';
    const NAME_NOTES = 'Notes';
    const NAME_UDF = 'UDF';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_YEAR_GROUP,
            self::NAME_REGISTRATION_GROUP,
            self::NAME_HOUSE,
            self::NAME_ACHIEVEMENT_POINTS,
            self::NAME_BEHAVIOUR_POINTS,
            self::NAME_FSM,
            self::NAME_FSM6,
            self::NAME_PUPIL_PREMIUM,
            self::NAME_EAL,
            self::NAME_SEN,
            self::NAME_SERVICE_CHILD,
            self::NAME_NOTES,
            self::NAME_UDF,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sif_action'] = isset($data['sif_action']) ? $data['sif_action'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        $allowed_values = ["YearGroup", "RegistrationGroup", "House", "AchievementPoints", "BehaviourPoints", "FSM", "FSM6", "PupilPremium", "EAL", "SEN", "ServiceChild", "Notes", "UDF"];
        if (!in_array($this->container['name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'name', must be one of 'YearGroup', 'RegistrationGroup', 'House', 'AchievementPoints', 'BehaviourPoints', 'FSM', 'FSM6', 'PupilPremium', 'EAL', 'SEN', 'ServiceChild', 'Notes', 'UDF'.";
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
        if ($this->container['name'] === null) {
            return false;
        }
        $allowed_values = ["YearGroup", "RegistrationGroup", "House", "AchievementPoints", "BehaviourPoints", "FSM", "FSM6", "PupilPremium", "EAL", "SEN", "ServiceChild", "Notes", "UDF"];
        if (!in_array($this->container['name'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the extended element
     * @return $this
     */
    public function setName($name)
    {
        $allowed_values = array('YearGroup', 'RegistrationGroup', 'House', 'AchievementPoints', 'BehaviourPoints', 'FSM', 'FSM6', 'PupilPremium', 'EAL', 'SEN', 'ServiceChild', 'Notes', 'UDF');
        if ((!in_array($name, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'name', must be one of 'YearGroup', 'RegistrationGroup', 'House', 'AchievementPoints', 'BehaviourPoints', 'FSM', 'FSM6', 'PupilPremium', 'EAL', 'SEN', 'ServiceChild', 'Notes', 'UDF'");
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Allows type of element to be explicitly communicated.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sif_action
     * @return string
     */
    public function getSifAction()
    {
        return $this->container['sif_action'];
    }

    /**
     * Sets sif_action
     * @param string $sif_action In a Change event, this flag can be used to indicate an element has been deleted from the parent list container. At a minimum the key for the list must also be present.
     * @return $this
     */
    public function setSifAction($sif_action)
    {
        $this->container['sif_action'] = $sif_action;

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
            return json_encode(\\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\\ObjectSerializer::sanitizeForSerialization($this));
    }
}
