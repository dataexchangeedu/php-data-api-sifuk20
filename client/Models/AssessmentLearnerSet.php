<?php
/**
 * AssessmentLearnerSet
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
 * AssessmentLearnerSet Class Doc Comment
 *
 * @category    Class */
 // @description This object describes learners assigned to take an assessment or component grouping (can represent a markbook, exam entry, or an cohort objective).
/**
 * @package     DataExchange\UK\20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssessmentLearnerSet implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AssessmentLearnerSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'assessment_result_component_group_ref_id' => 'string',
        'creation_date_time' => '\DateTime',
        'local_id' => 'string',
        'learner_list' => 'string[]',
        'school_group_ref_id' => 'string',
        'workforce_personal_ref_id' => 'string'
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
        'assessment_result_component_group_ref_id' => '@AssessmentResultComponentGroupRefId',
        'creation_date_time' => 'CreationDateTime',
        'local_id' => 'LocalId',
        'learner_list' => 'LearnerList',
        'school_group_ref_id' => 'SchoolGroupRefId',
        'workforce_personal_ref_id' => 'WorkforcePersonalRefId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'assessment_result_component_group_ref_id' => 'setAssessmentResultComponentGroupRefId',
        'creation_date_time' => 'setCreationDateTime',
        'local_id' => 'setLocalId',
        'learner_list' => 'setLearnerList',
        'school_group_ref_id' => 'setSchoolGroupRefId',
        'workforce_personal_ref_id' => 'setWorkforcePersonalRefId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'assessment_result_component_group_ref_id' => 'getAssessmentResultComponentGroupRefId',
        'creation_date_time' => 'getCreationDateTime',
        'local_id' => 'getLocalId',
        'learner_list' => 'getLearnerList',
        'school_group_ref_id' => 'getSchoolGroupRefId',
        'workforce_personal_ref_id' => 'getWorkforcePersonalRefId'
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
        $this->container['assessment_result_component_group_ref_id'] = isset($data['assessment_result_component_group_ref_id']) ? $data['assessment_result_component_group_ref_id'] : null;
        $this->container['creation_date_time'] = isset($data['creation_date_time']) ? $data['creation_date_time'] : null;
        $this->container['local_id'] = isset($data['local_id']) ? $data['local_id'] : null;
        $this->container['learner_list'] = isset($data['learner_list']) ? $data['learner_list'] : null;
        $this->container['school_group_ref_id'] = isset($data['school_group_ref_id']) ? $data['school_group_ref_id'] : null;
        $this->container['workforce_personal_ref_id'] = isset($data['workforce_personal_ref_id']) ? $data['workforce_personal_ref_id'] : null;
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
        if ($this->container['assessment_result_component_group_ref_id'] === null) {
            $invalid_properties[] = "'assessment_result_component_group_ref_id' can't be null";
        }
        if ($this->container['creation_date_time'] === null) {
            $invalid_properties[] = "'creation_date_time' can't be null";
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
        if ($this->container['assessment_result_component_group_ref_id'] === null) {
            return false;
        }
        if ($this->container['creation_date_time'] === null) {
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
     * @param string $ref_id The ID (GUID) that uniquely identifies an instance of this object.
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets assessment_result_component_group_ref_id
     * @return string
     */
    public function getAssessmentResultComponentGroupRefId()
    {
        return $this->container['assessment_result_component_group_ref_id'];
    }

    /**
     * Sets assessment_result_component_group_ref_id
     * @param string $assessment_result_component_group_ref_id The assessment result component group (test or assessment) associated with the set of listed learners.
     * @return $this
     */
    public function setAssessmentResultComponentGroupRefId($assessment_result_component_group_ref_id)
    {
        $this->container['assessment_result_component_group_ref_id'] = $assessment_result_component_group_ref_id;

        return $this;
    }

    /**
     * Gets creation_date_time
     * @return \DateTime
     */
    public function getCreationDateTime()
    {
        return $this->container['creation_date_time'];
    }

    /**
     * Sets creation_date_time
     * @param \DateTime $creation_date_time Date/time assignment is created.
     * @return $this
     */
    public function setCreationDateTime($creation_date_time)
    {
        $this->container['creation_date_time'] = $creation_date_time;

        return $this;
    }

    /**
     * Gets local_id
     * @return string
     */
    public function getLocalId()
    {
        return $this->container['local_id'];
    }

    /**
     * Sets local_id
     * @param string $local_id Value supplied by publishing vendor/supplier.
     * @return $this
     */
    public function setLocalId($local_id)
    {
        $this->container['local_id'] = $local_id;

        return $this;
    }

    /**
     * Gets learner_list
     * @return string[]
     */
    public function getLearnerList()
    {
        return $this->container['learner_list'];
    }

    /**
     * Sets learner_list
     * @param string[] $learner_list
     * @return $this
     */
    public function setLearnerList($learner_list)
    {
        $this->container['learner_list'] = $learner_list;

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
     * @param string $school_group_ref_id Optional reference to the class group(s) to which this will be/are drawn.
     * @return $this
     */
    public function setSchoolGroupRefId($school_group_ref_id)
    {
        $this->container['school_group_ref_id'] = $school_group_ref_id;

        return $this;
    }

    /**
     * Gets workforce_personal_ref_id
     * @return string
     */
    public function getWorkforcePersonalRefId()
    {
        return $this->container['workforce_personal_ref_id'];
    }

    /**
     * Sets workforce_personal_ref_id
     * @param string $workforce_personal_ref_id The ID (GUID) that uniquely identifies the teacher or staff member who created the learner set.
     * @return $this
     */
    public function setWorkforcePersonalRefId($workforce_personal_ref_id)
    {
        $this->container['workforce_personal_ref_id'] = $workforce_personal_ref_id;

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
