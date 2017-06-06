<?php
/**
 * AssessmentSession
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
 * AssessmentSession Class Doc Comment
 *
 * @category    Class */
 // @description A session is an event where an activity is performed by or on a learner set which contributes to the attainment of the objective. Occurs at a place and time (e.g., a test is taken, assignments are handed in, a test is marked).
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssessmentSession implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AssessmentSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'assessment_learner_set_ref_id' => 'string',
        'session_date' => '\DateTime',
        'session_end_date' => '\DateTime',
        'description' => 'string',
        'school_info_ref_id' => 'string',
        'activity' => 'string',
        'status' => 'string',
        'staff_list' => 'string[]'
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
        'assessment_learner_set_ref_id' => '@AssessmentLearnerSetRefId',
        'session_date' => 'SessionDate',
        'session_end_date' => 'SessionEndDate',
        'description' => 'Description',
        'school_info_ref_id' => 'SchoolInfoRefId',
        'activity' => 'Activity',
        'status' => 'Status',
        'staff_list' => 'StaffList'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'assessment_learner_set_ref_id' => 'setAssessmentLearnerSetRefId',
        'session_date' => 'setSessionDate',
        'session_end_date' => 'setSessionEndDate',
        'description' => 'setDescription',
        'school_info_ref_id' => 'setSchoolInfoRefId',
        'activity' => 'setActivity',
        'status' => 'setStatus',
        'staff_list' => 'setStaffList'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'assessment_learner_set_ref_id' => 'getAssessmentLearnerSetRefId',
        'session_date' => 'getSessionDate',
        'session_end_date' => 'getSessionEndDate',
        'description' => 'getDescription',
        'school_info_ref_id' => 'getSchoolInfoRefId',
        'activity' => 'getActivity',
        'status' => 'getStatus',
        'staff_list' => 'getStaffList'
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
        $this->container['assessment_learner_set_ref_id'] = isset($data['assessment_learner_set_ref_id']) ? $data['assessment_learner_set_ref_id'] : null;
        $this->container['session_date'] = isset($data['session_date']) ? $data['session_date'] : null;
        $this->container['session_end_date'] = isset($data['session_end_date']) ? $data['session_end_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['school_info_ref_id'] = isset($data['school_info_ref_id']) ? $data['school_info_ref_id'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['staff_list'] = isset($data['staff_list']) ? $data['staff_list'] : null;
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
        if ($this->container['assessment_learner_set_ref_id'] === null) {
            $invalid_properties[] = "'assessment_learner_set_ref_id' can't be null";
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
        if ($this->container['assessment_learner_set_ref_id'] === null) {
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
     * @param string $ref_id The ID (GUID) of this session.
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets assessment_learner_set_ref_id
     * @return string
     */
    public function getAssessmentLearnerSetRefId()
    {
        return $this->container['assessment_learner_set_ref_id'];
    }

    /**
     * Sets assessment_learner_set_ref_id
     * @param string $assessment_learner_set_ref_id The ID (GUID) of the set of people the session refers to.
     * @return $this
     */
    public function setAssessmentLearnerSetRefId($assessment_learner_set_ref_id)
    {
        $this->container['assessment_learner_set_ref_id'] = $assessment_learner_set_ref_id;

        return $this;
    }

    /**
     * Gets session_date
     * @return \DateTime
     */
    public function getSessionDate()
    {
        return $this->container['session_date'];
    }

    /**
     * Sets session_date
     * @param \DateTime $session_date The date on which the activity takes place or starts.
     * @return $this
     */
    public function setSessionDate($session_date)
    {
        $this->container['session_date'] = $session_date;

        return $this;
    }

    /**
     * Gets session_end_date
     * @return \DateTime
     */
    public function getSessionEndDate()
    {
        return $this->container['session_end_date'];
    }

    /**
     * Sets session_end_date
     * @param \DateTime $session_end_date The date on which this assessment ends, if different from the start date set in SessionDate.
     * @return $this
     */
    public function setSessionEndDate($session_end_date)
    {
        $this->container['session_end_date'] = $session_end_date;

        return $this;
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
     * @param string $description A title or description for the activity, e.g Math Test.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets activity
     * @return string
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     * @param string $activity The activity which takes place.
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The current status of the session.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets staff_list
     * @return string[]
     */
    public function getStaffList()
    {
        return $this->container['staff_list'];
    }

    /**
     * Sets staff_list
     * @param string[] $staff_list
     * @return $this
     */
    public function setStaffList($staff_list)
    {
        $this->container['staff_list'] = $staff_list;

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