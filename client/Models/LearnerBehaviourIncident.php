<?php
/**
 * LearnerBehaviourIncident
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
 * LearnerBehaviourIncident Class Doc Comment
 *
 * @category    Class */
 // @description Object to represent a behaviour incident at an educational establishment
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnerBehaviourIncident implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnerBehaviourIncident';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'school_info_ref_id' => 'string',
        'behaviour_type' => '\DataExchange\SIFUK20\Models\BehaviourType',
        'incident' => '\DataExchange\SIFUK20\Models\Incident',
        'participants' => '\DataExchange\SIFUK20\Models\Participants'
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
        'school_info_ref_id' => 'SchoolInfoRefId',
        'behaviour_type' => 'BehaviourType',
        'incident' => 'Incident',
        'participants' => 'Participants'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'school_info_ref_id' => 'setSchoolInfoRefId',
        'behaviour_type' => 'setBehaviourType',
        'incident' => 'setIncident',
        'participants' => 'setParticipants'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'school_info_ref_id' => 'getSchoolInfoRefId',
        'behaviour_type' => 'getBehaviourType',
        'incident' => 'getIncident',
        'participants' => 'getParticipants'
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
        $this->container['behaviour_type'] = isset($data['behaviour_type']) ? $data['behaviour_type'] : null;
        $this->container['incident'] = isset($data['incident']) ? $data['incident'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
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
        if ($this->container['school_info_ref_id'] === null) {
            $invalid_properties[] = "'school_info_ref_id' can't be null";
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
        if ($this->container['school_info_ref_id'] === null) {
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
     * @param string $ref_id The ID (GUID) that uniquely identifies a particular incident
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
     * @param string $school_info_ref_id The ID (GUID) of the school that the event takes place.
     * @return $this
     */
    public function setSchoolInfoRefId($school_info_ref_id)
    {
        $this->container['school_info_ref_id'] = $school_info_ref_id;

        return $this;
    }

    /**
     * Gets behaviour_type
     * @return \DataExchange\SIFUK20\Models\BehaviourType
     */
    public function getBehaviourType()
    {
        return $this->container['behaviour_type'];
    }

    /**
     * Sets behaviour_type
     * @param \DataExchange\SIFUK20\Models\BehaviourType $behaviour_type
     * @return $this
     */
    public function setBehaviourType($behaviour_type)
    {
        $this->container['behaviour_type'] = $behaviour_type;

        return $this;
    }

    /**
     * Gets incident
     * @return \DataExchange\SIFUK20\Models\Incident
     */
    public function getIncident()
    {
        return $this->container['incident'];
    }

    /**
     * Sets incident
     * @param \DataExchange\SIFUK20\Models\Incident $incident
     * @return $this
     */
    public function setIncident($incident)
    {
        $this->container['incident'] = $incident;

        return $this;
    }

    /**
     * Gets participants
     * @return \DataExchange\SIFUK20\Models\Participants
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     * @param \DataExchange\SIFUK20\Models\Participants $participants
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

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