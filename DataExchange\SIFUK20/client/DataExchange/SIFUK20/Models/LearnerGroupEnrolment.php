<?php
/**
 * LearnerGroupEnrolment
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
 * LearnerGroupEnrolment Class Doc Comment
 *
 * @category    Class */
 // @description This object contains information about a learner&amp;#039;s enrolment in a course (teaching group) or other (class, homeroom or registration) group. Compare with US/Canada object:
/**
 * @package     
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnerGroupEnrolment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnerGroupEnrolment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'learner_personal_ref_id' => 'string',
        'school_group_ref_id' => 'string',
        'school_year' => 'string',
        'entry_date' => '\DateTime',
        'exit_date' => '\DateTime'
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
        'learner_personal_ref_id' => '@LearnerPersonalRefId',
        'school_group_ref_id' => '@SchoolGroupRefId',
        'school_year' => 'SchoolYear',
        'entry_date' => 'EntryDate',
        'exit_date' => 'ExitDate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'learner_personal_ref_id' => 'setLearnerPersonalRefId',
        'school_group_ref_id' => 'setSchoolGroupRefId',
        'school_year' => 'setSchoolYear',
        'entry_date' => 'setEntryDate',
        'exit_date' => 'setExitDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'learner_personal_ref_id' => 'getLearnerPersonalRefId',
        'school_group_ref_id' => 'getSchoolGroupRefId',
        'school_year' => 'getSchoolYear',
        'entry_date' => 'getEntryDate',
        'exit_date' => 'getExitDate'
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
        $this->container['school_group_ref_id'] = isset($data['school_group_ref_id']) ? $data['school_group_ref_id'] : null;
        $this->container['school_year'] = isset($data['school_year']) ? $data['school_year'] : null;
        $this->container['entry_date'] = isset($data['entry_date']) ? $data['entry_date'] : null;
        $this->container['exit_date'] = isset($data['exit_date']) ? $data['exit_date'] : null;
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
        if ($this->container['school_group_ref_id'] === null) {
            $invalid_properties[] = "'school_group_ref_id' can't be null";
        }
        if ($this->container['school_year'] === null) {
            $invalid_properties[] = "'school_year' can't be null";
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
        if ($this->container['school_group_ref_id'] === null) {
            return false;
        }
        if ($this->container['school_year'] === null) {
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
     * @param string $ref_id The ID (GUID) that uniquely identifies this LearnerGroupEnrolment entity.
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
     * @param string $learner_personal_ref_id The ID (GUID) of the learner to whom the enrolment information applies.
     * @return $this
     */
    public function setLearnerPersonalRefId($learner_personal_ref_id)
    {
        $this->container['learner_personal_ref_id'] = $learner_personal_ref_id;

        return $this;
    }

    /**
     * Gets school_group_ref_id
     * @return string
     */
    public function getSchoolGroupRefId()
    {
        return $this->container['school_group_ref_id'];
    }

    /**
     * Sets school_group_ref_id
     * @param string $school_group_ref_id The ID (GUID) of the group in which this learner is enroled.
     * @return $this
     */
    public function setSchoolGroupRefId($school_group_ref_id)
    {
        $this->container['school_group_ref_id'] = $school_group_ref_id;

        return $this;
    }

    /**
     * Gets school_year
     * @return string
     */
    public function getSchoolYear()
    {
        return $this->container['school_year'];
    }

    /**
     * Sets school_year
     * @param string $school_year
     * @return $this
     */
    public function setSchoolYear($school_year)
    {
        $this->container['school_year'] = $school_year;

        return $this;
    }

    /**
     * Gets entry_date
     * @return \DateTime
     */
    public function getEntryDate()
    {
        return $this->container['entry_date'];
    }

    /**
     * Sets entry_date
     * @param \DateTime $entry_date Date from when this enrolment is valid.
     * @return $this
     */
    public function setEntryDate($entry_date)
    {
        $this->container['entry_date'] = $entry_date;

        return $this;
    }

    /**
     * Gets exit_date
     * @return \DateTime
     */
    public function getExitDate()
    {
        return $this->container['exit_date'];
    }

    /**
     * Sets exit_date
     * @param \DateTime $exit_date Date on which the learner&#039;s enrolment ends or has ended.
     * @return $this
     */
    public function setExitDate($exit_date)
    {
        $this->container['exit_date'] = $exit_date;

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
