<?php
/**
 * LearnerSchoolEnrolment
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
 * LearnerSchoolEnrolment Class Doc Comment
 *
 * @category    Class */
 // @description This object defines information related to a learner&amp;#039;s enrolment within a particular school or establishment.The current status on an enrolment is based on EntryDate and ExitDate. Future enrolments are supported where EntryDate is in the future. ExitDate may also be specified as a future occurance.
/**
 * @package     DataExchange\UK\20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnerSchoolEnrolment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnerSchoolEnrolment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'learner_personal_ref_id' => 'string',
        'school_info_ref_id' => 'string',
        'membership_type' => 'string',
        'entry_date' => '\DateTime',
        'nc_year_group_actual' => 'string',
        'class_type' => 'string',
        'exit_date' => '\DateTime',
        'exit_type' => '\DataExchange\UK\20\Models\ExitType',
        'sessions' => 'int',
        'ftpt_status' => 'string',
        'boarder' => 'string',
        'alternative_tuition' => '\DataExchange\UK\20\Models\AlternativeTuition'
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
        'school_info_ref_id' => '@SchoolInfoRefId',
        'membership_type' => '@MembershipType',
        'entry_date' => 'EntryDate',
        'nc_year_group_actual' => 'NCYearGroupActual',
        'class_type' => 'ClassType',
        'exit_date' => 'ExitDate',
        'exit_type' => 'ExitType',
        'sessions' => 'Sessions',
        'ftpt_status' => 'FTPTStatus',
        'boarder' => 'Boarder',
        'alternative_tuition' => 'AlternativeTuition'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'learner_personal_ref_id' => 'setLearnerPersonalRefId',
        'school_info_ref_id' => 'setSchoolInfoRefId',
        'membership_type' => 'setMembershipType',
        'entry_date' => 'setEntryDate',
        'nc_year_group_actual' => 'setNcYearGroupActual',
        'class_type' => 'setClassType',
        'exit_date' => 'setExitDate',
        'exit_type' => 'setExitType',
        'sessions' => 'setSessions',
        'ftpt_status' => 'setFtptStatus',
        'boarder' => 'setBoarder',
        'alternative_tuition' => 'setAlternativeTuition'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'learner_personal_ref_id' => 'getLearnerPersonalRefId',
        'school_info_ref_id' => 'getSchoolInfoRefId',
        'membership_type' => 'getMembershipType',
        'entry_date' => 'getEntryDate',
        'nc_year_group_actual' => 'getNcYearGroupActual',
        'class_type' => 'getClassType',
        'exit_date' => 'getExitDate',
        'exit_type' => 'getExitType',
        'sessions' => 'getSessions',
        'ftpt_status' => 'getFtptStatus',
        'boarder' => 'getBoarder',
        'alternative_tuition' => 'getAlternativeTuition'
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
        $this->container['membership_type'] = isset($data['membership_type']) ? $data['membership_type'] : null;
        $this->container['entry_date'] = isset($data['entry_date']) ? $data['entry_date'] : null;
        $this->container['nc_year_group_actual'] = isset($data['nc_year_group_actual']) ? $data['nc_year_group_actual'] : null;
        $this->container['class_type'] = isset($data['class_type']) ? $data['class_type'] : null;
        $this->container['exit_date'] = isset($data['exit_date']) ? $data['exit_date'] : null;
        $this->container['exit_type'] = isset($data['exit_type']) ? $data['exit_type'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
        $this->container['ftpt_status'] = isset($data['ftpt_status']) ? $data['ftpt_status'] : null;
        $this->container['boarder'] = isset($data['boarder']) ? $data['boarder'] : null;
        $this->container['alternative_tuition'] = isset($data['alternative_tuition']) ? $data['alternative_tuition'] : null;
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
        if ($this->container['membership_type'] === null) {
            $invalid_properties[] = "'membership_type' can't be null";
        }
        if ($this->container['entry_date'] === null) {
            $invalid_properties[] = "'entry_date' can't be null";
        }
        if ($this->container['nc_year_group_actual'] === null) {
            $invalid_properties[] = "'nc_year_group_actual' can't be null";
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
        if ($this->container['membership_type'] === null) {
            return false;
        }
        if ($this->container['entry_date'] === null) {
            return false;
        }
        if ($this->container['nc_year_group_actual'] === null) {
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
     * @param string $ref_id The ID (GUID) that uniquely identifies a particular enrolment.
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
     * @param string $learner_personal_ref_id The ID (GUID) of the learner to whom this information is linked.
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
     * @param string $school_info_ref_id The ID (GUID) of the school to which this enrolment applies.
     * @return $this
     */
    public function setSchoolInfoRefId($school_info_ref_id)
    {
        $this->container['school_info_ref_id'] = $school_info_ref_id;

        return $this;
    }

    /**
     * Gets membership_type
     * @return string
     */
    public function getMembershipType()
    {
        return $this->container['membership_type'];
    }

    /**
     * Sets membership_type
     * @param string $membership_type The type of this enrolment as it relates to the school identified by SchoolInfoRefId.
     * @return $this
     */
    public function setMembershipType($membership_type)
    {
        $this->container['membership_type'] = $membership_type;

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
     * @param \DateTime $entry_date The date from when this enrolment is valid.
     * @return $this
     */
    public function setEntryDate($entry_date)
    {
        $this->container['entry_date'] = $entry_date;

        return $this;
    }

    /**
     * Gets nc_year_group_actual
     * @return string
     */
    public function getNcYearGroupActual()
    {
        return $this->container['nc_year_group_actual'];
    }

    /**
     * Sets nc_year_group_actual
     * @param string $nc_year_group_actual The year group in which the learner is taught for the majority of their time, regardless of their chronological age.
     * @return $this
     */
    public function setNcYearGroupActual($nc_year_group_actual)
    {
        $this->container['nc_year_group_actual'] = $nc_year_group_actual;

        return $this;
    }

    /**
     * Gets class_type
     * @return string
     */
    public function getClassType()
    {
        return $this->container['class_type'];
    }

    /**
     * Sets class_type
     * @param string $class_type Indicates if the learner is in a nursery class. Must be set to &#039;O&#039; if age on August 31 is &gt;= 6.
     * @return $this
     */
    public function setClassType($class_type)
    {
        $this->container['class_type'] = $class_type;

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
     * @param \DateTime $exit_date The ending date of this enrolment. If the learner has exited before the end of the school year, ExitDate must have a value.
     * @return $this
     */
    public function setExitDate($exit_date)
    {
        $this->container['exit_date'] = $exit_date;

        return $this;
    }

    /**
     * Gets exit_type
     * @return \DataExchange\UK\20\Models\ExitType
     */
    public function getExitType()
    {
        return $this->container['exit_type'];
    }

    /**
     * Sets exit_type
     * @param \DataExchange\UK\20\Models\ExitType $exit_type
     * @return $this
     */
    public function setExitType($exit_type)
    {
        $this->container['exit_type'] = $exit_type;

        return $this;
    }

    /**
     * Gets sessions
     * @return int
     */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
     * Sets sessions
     * @param int $sessions
     * @return $this
     */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;

        return $this;
    }

    /**
     * Gets ftpt_status
     * @return string
     */
    public function getFtptStatus()
    {
        return $this->container['ftpt_status'];
    }

    /**
     * Sets ftpt_status
     * @param string $ftpt_status An indication of whether the learner is enroled only part time.
     * @return $this
     */
    public function setFtptStatus($ftpt_status)
    {
        $this->container['ftpt_status'] = $ftpt_status;

        return $this;
    }

    /**
     * Gets boarder
     * @return string
     */
    public function getBoarder()
    {
        return $this->container['boarder'];
    }

    /**
     * Sets boarder
     * @param string $boarder Indicates whether the learner is a boarder at the school or not.
     * @return $this
     */
    public function setBoarder($boarder)
    {
        $this->container['boarder'] = $boarder;

        return $this;
    }

    /**
     * Gets alternative_tuition
     * @return \DataExchange\UK\20\Models\AlternativeTuition
     */
    public function getAlternativeTuition()
    {
        return $this->container['alternative_tuition'];
    }

    /**
     * Sets alternative_tuition
     * @param \DataExchange\UK\20\Models\AlternativeTuition $alternative_tuition
     * @return $this
     */
    public function setAlternativeTuition($alternative_tuition)
    {
        $this->container['alternative_tuition'] = $alternative_tuition;

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
