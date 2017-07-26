<?php
/**
 * Lesson
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
 * Lesson Class Doc Comment
 *
 * @category    Class */
 // @description A lesson on the timetable
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Lesson implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Lesson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'cycle_ref_id' => 'string',
        'tt_day_id' => 'string',
        'period_index' => 'int',
        'type' => 'string',
        'length' => 'int',
        'teaching_group_ref_id' => 'string',
        'nt_code_ref' => 'string',
        'teacher_list' => 'string[]',
        'tt_room_ref_id' => 'string',
        'sif_extended_elements' => '\DataExchange\SIFUK20\Models\SIFExtendedElement2[]'
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
        'cycle_ref_id' => '@CycleRefId',
        'tt_day_id' => 'TTDayId',
        'period_index' => 'PeriodIndex',
        'type' => 'Type',
        'length' => 'Length',
        'teaching_group_ref_id' => 'TeachingGroupRefId',
        'nt_code_ref' => 'NTCodeRef',
        'teacher_list' => 'TeacherList',
        'tt_room_ref_id' => 'TTRoomRefId',
        'sif_extended_elements' => 'SIF_ExtendedElements'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'cycle_ref_id' => 'setCycleRefId',
        'tt_day_id' => 'setTtDayId',
        'period_index' => 'setPeriodIndex',
        'type' => 'setType',
        'length' => 'setLength',
        'teaching_group_ref_id' => 'setTeachingGroupRefId',
        'nt_code_ref' => 'setNtCodeRef',
        'teacher_list' => 'setTeacherList',
        'tt_room_ref_id' => 'setTtRoomRefId',
        'sif_extended_elements' => 'setSifExtendedElements'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'cycle_ref_id' => 'getCycleRefId',
        'tt_day_id' => 'getTtDayId',
        'period_index' => 'getPeriodIndex',
        'type' => 'getType',
        'length' => 'getLength',
        'teaching_group_ref_id' => 'getTeachingGroupRefId',
        'nt_code_ref' => 'getNtCodeRef',
        'teacher_list' => 'getTeacherList',
        'tt_room_ref_id' => 'getTtRoomRefId',
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
        $this->container['cycle_ref_id'] = isset($data['cycle_ref_id']) ? $data['cycle_ref_id'] : null;
        $this->container['tt_day_id'] = isset($data['tt_day_id']) ? $data['tt_day_id'] : null;
        $this->container['period_index'] = isset($data['period_index']) ? $data['period_index'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['teaching_group_ref_id'] = isset($data['teaching_group_ref_id']) ? $data['teaching_group_ref_id'] : null;
        $this->container['nt_code_ref'] = isset($data['nt_code_ref']) ? $data['nt_code_ref'] : null;
        $this->container['teacher_list'] = isset($data['teacher_list']) ? $data['teacher_list'] : null;
        $this->container['tt_room_ref_id'] = isset($data['tt_room_ref_id']) ? $data['tt_room_ref_id'] : null;
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
        if ($this->container['tt_day_id'] === null) {
            $invalid_properties[] = "'tt_day_id' can't be null";
        }
        if ($this->container['period_index'] === null) {
            $invalid_properties[] = "'period_index' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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
        if ($this->container['tt_day_id'] === null) {
            return false;
        }
        if ($this->container['period_index'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
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
     * Gets cycle_ref_id
     * @return string
     */
    public function getCycleRefId()
    {
        return $this->container['cycle_ref_id'];
    }

    /**
     * Sets cycle_ref_id
     * @param string $cycle_ref_id The RefId of the Cycle to which this Lesson belongs. This is optional to preserve backwards compatibility but it is very strongly advised that it should be correctly populated and considered mandatory in this version of the specification.
     * @return $this
     */
    public function setCycleRefId($cycle_ref_id)
    {
        $this->container['cycle_ref_id'] = $cycle_ref_id;

        return $this;
    }

    /**
     * Gets tt_day_id
     * @return string
     */
    public function getTtDayId()
    {
        return $this->container['tt_day_id'];
    }

    /**
     * Sets tt_day_id
     * @param string $tt_day_id
     * @return $this
     */
    public function setTtDayId($tt_day_id)
    {
        $this->container['tt_day_id'] = $tt_day_id;

        return $this;
    }

    /**
     * Gets period_index
     * @return int
     */
    public function getPeriodIndex()
    {
        return $this->container['period_index'];
    }

    /**
     * Sets period_index
     * @param int $period_index Index of period this lesson/meeting starts
     * @return $this
     */
    public function setPeriodIndex($period_index)
    {
        $this->container['period_index'] = $period_index;

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
     * @param string $type Lesson/meeting type The value here determines whether a TeachingGroupID or an NTCode is required
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets length
     * @return int
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     * @param int $length Length of lesson in periods (1=single, 2=double, etc). Can omit if just a single.
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets teaching_group_ref_id
     * @return string
     */
    public function getTeachingGroupRefId()
    {
        return $this->container['teaching_group_ref_id'];
    }

    /**
     * Sets teaching_group_ref_id
     * @param string $teaching_group_ref_id The Teaching Group being taught (may not be one if Type != &quot;T&quot;) (see TeachingGroup)
     * @return $this
     */
    public function setTeachingGroupRefId($teaching_group_ref_id)
    {
        $this->container['teaching_group_ref_id'] = $teaching_group_ref_id;

        return $this;
    }

    /**
     * Gets nt_code_ref
     * @return string
     */
    public function getNtCodeRef()
    {
        return $this->container['nt_code_ref'];
    }

    /**
     * Sets nt_code_ref
     * @param string $nt_code_ref If there is no TeachingGroupRefID (see NTCode)
     * @return $this
     */
    public function setNtCodeRef($nt_code_ref)
    {
        $this->container['nt_code_ref'] = $nt_code_ref;

        return $this;
    }

    /**
     * Gets teacher_list
     * @return string[]
     */
    public function getTeacherList()
    {
        return $this->container['teacher_list'];
    }

    /**
     * Sets teacher_list
     * @param string[] $teacher_list
     * @return $this
     */
    public function setTeacherList($teacher_list)
    {
        $this->container['teacher_list'] = $teacher_list;

        return $this;
    }

    /**
     * Gets tt_room_ref_id
     * @return string
     */
    public function getTtRoomRefId()
    {
        return $this->container['tt_room_ref_id'];
    }

    /**
     * Sets tt_room_ref_id
     * @param string $tt_room_ref_id The room (or location) where this lesson is taking place (see TTRoom)
     * @return $this
     */
    public function setTtRoomRefId($tt_room_ref_id)
    {
        $this->container['tt_room_ref_id'] = $tt_room_ref_id;

        return $this;
    }

    /**
     * Gets sif_extended_elements
     * @return \DataExchange\SIFUK20\Models\SIFExtendedElement2[]
     */
    public function getSifExtendedElements()
    {
        return $this->container['sif_extended_elements'];
    }

    /**
     * Sets sif_extended_elements
     * @param \DataExchange\SIFUK20\Models\SIFExtendedElement2[] $sif_extended_elements Allows an agent to include data not yet defined within a SIF data object as name/value pairs.
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
