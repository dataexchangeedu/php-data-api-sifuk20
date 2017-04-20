<?php
/**
 * AssessmentResultComponent
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
 * AssessmentResultComponent Class Doc Comment
 *
 * @category    Class */
 // @description A psychological construct measured by the assessment. Operationally, an assessment component or subtest is a class of scores within an assessment that might collectively represent a column within a mark book. Some assessments may consist of only one component, aspect or subtest although it is more common for assessments to have several.
/**
 * @package     DataExchange\UK\20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssessmentResultComponent implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AssessmentResultComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'name' => 'string',
        'local_id' => 'string',
        'short_description' => 'string',
        'description' => 'string',
        'year_list' => 'string[]',
        'assessment_subject_list' => 'string[]',
        'stage_list' => 'string[]',
        'assessment_result_grade_set_ref_id' => 'string',
        'mark_set_list' => '\DataExchange\UK\20\Models\MarkSet[]',
        'component_type' => 'string',
        'result_qualifier' => 'string',
        'assessment_method' => 'string',
        'supplier_name' => 'string'
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
        'name' => 'Name',
        'local_id' => 'LocalId',
        'short_description' => 'ShortDescription',
        'description' => 'Description',
        'year_list' => 'YearList',
        'assessment_subject_list' => 'AssessmentSubjectList',
        'stage_list' => 'StageList',
        'assessment_result_grade_set_ref_id' => 'AssessmentResultGradeSetRefId',
        'mark_set_list' => 'MarkSetList',
        'component_type' => 'ComponentType',
        'result_qualifier' => 'ResultQualifier',
        'assessment_method' => 'AssessmentMethod',
        'supplier_name' => 'SupplierName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'name' => 'setName',
        'local_id' => 'setLocalId',
        'short_description' => 'setShortDescription',
        'description' => 'setDescription',
        'year_list' => 'setYearList',
        'assessment_subject_list' => 'setAssessmentSubjectList',
        'stage_list' => 'setStageList',
        'assessment_result_grade_set_ref_id' => 'setAssessmentResultGradeSetRefId',
        'mark_set_list' => 'setMarkSetList',
        'component_type' => 'setComponentType',
        'result_qualifier' => 'setResultQualifier',
        'assessment_method' => 'setAssessmentMethod',
        'supplier_name' => 'setSupplierName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'name' => 'getName',
        'local_id' => 'getLocalId',
        'short_description' => 'getShortDescription',
        'description' => 'getDescription',
        'year_list' => 'getYearList',
        'assessment_subject_list' => 'getAssessmentSubjectList',
        'stage_list' => 'getStageList',
        'assessment_result_grade_set_ref_id' => 'getAssessmentResultGradeSetRefId',
        'mark_set_list' => 'getMarkSetList',
        'component_type' => 'getComponentType',
        'result_qualifier' => 'getResultQualifier',
        'assessment_method' => 'getAssessmentMethod',
        'supplier_name' => 'getSupplierName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['local_id'] = isset($data['local_id']) ? $data['local_id'] : null;
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['year_list'] = isset($data['year_list']) ? $data['year_list'] : null;
        $this->container['assessment_subject_list'] = isset($data['assessment_subject_list']) ? $data['assessment_subject_list'] : null;
        $this->container['stage_list'] = isset($data['stage_list']) ? $data['stage_list'] : null;
        $this->container['assessment_result_grade_set_ref_id'] = isset($data['assessment_result_grade_set_ref_id']) ? $data['assessment_result_grade_set_ref_id'] : null;
        $this->container['mark_set_list'] = isset($data['mark_set_list']) ? $data['mark_set_list'] : null;
        $this->container['component_type'] = isset($data['component_type']) ? $data['component_type'] : null;
        $this->container['result_qualifier'] = isset($data['result_qualifier']) ? $data['result_qualifier'] : null;
        $this->container['assessment_method'] = isset($data['assessment_method']) ? $data['assessment_method'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
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
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['short_description'] === null) {
            $invalid_properties[] = "'short_description' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['component_type'] === null) {
            $invalid_properties[] = "'component_type' can't be null";
        }
        if ($this->container['result_qualifier'] === null) {
            $invalid_properties[] = "'result_qualifier' can't be null";
        }
        if ($this->container['assessment_method'] === null) {
            $invalid_properties[] = "'assessment_method' can't be null";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['short_description'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['component_type'] === null) {
            return false;
        }
        if ($this->container['result_qualifier'] === null) {
            return false;
        }
        if ($this->container['assessment_method'] === null) {
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
     * @param string $ref_id The ID (GUID) of this aspect or subtest.
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
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
     * @param string $name The name used to identify this component or aspect.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $local_id The identifier used within the publishing application.
     * @return $this
     */
    public function setLocalId($local_id)
    {
        $this->container['local_id'] = $local_id;

        return $this;
    }

    /**
     * Gets short_description
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     * @param string $short_description Shorter description used for column headers in marksheets, etc.
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->container['short_description'] = $short_description;

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
     * @param string $description Longer text describing features of the component.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets year_list
     * @return string[]
     */
    public function getYearList()
    {
        return $this->container['year_list'];
    }

    /**
     * Sets year_list
     * @param string[] $year_list
     * @return $this
     */
    public function setYearList($year_list)
    {
        $this->container['year_list'] = $year_list;

        return $this;
    }

    /**
     * Gets assessment_subject_list
     * @return string[]
     */
    public function getAssessmentSubjectList()
    {
        return $this->container['assessment_subject_list'];
    }

    /**
     * Sets assessment_subject_list
     * @param string[] $assessment_subject_list
     * @return $this
     */
    public function setAssessmentSubjectList($assessment_subject_list)
    {
        $this->container['assessment_subject_list'] = $assessment_subject_list;

        return $this;
    }

    /**
     * Gets stage_list
     * @return string[]
     */
    public function getStageList()
    {
        return $this->container['stage_list'];
    }

    /**
     * Sets stage_list
     * @param string[] $stage_list
     * @return $this
     */
    public function setStageList($stage_list)
    {
        $this->container['stage_list'] = $stage_list;

        return $this;
    }

    /**
     * Gets assessment_result_grade_set_ref_id
     * @return string
     */
    public function getAssessmentResultGradeSetRefId()
    {
        return $this->container['assessment_result_grade_set_ref_id'];
    }

    /**
     * Sets assessment_result_grade_set_ref_id
     * @param string $assessment_result_grade_set_ref_id The gradeset associated with the component or aspect.
     * @return $this
     */
    public function setAssessmentResultGradeSetRefId($assessment_result_grade_set_ref_id)
    {
        $this->container['assessment_result_grade_set_ref_id'] = $assessment_result_grade_set_ref_id;

        return $this;
    }

    /**
     * Gets mark_set_list
     * @return \DataExchange\UK\20\Models\MarkSet[]
     */
    public function getMarkSetList()
    {
        return $this->container['mark_set_list'];
    }

    /**
     * Sets mark_set_list
     * @param \DataExchange\UK\20\Models\MarkSet[] $mark_set_list
     * @return $this
     */
    public function setMarkSetList($mark_set_list)
    {
        $this->container['mark_set_list'] = $mark_set_list;

        return $this;
    }

    /**
     * Gets component_type
     * @return string
     */
    public function getComponentType()
    {
        return $this->container['component_type'];
    }

    /**
     * Sets component_type
     * @param string $component_type Defines the associated result format.
     * @return $this
     */
    public function setComponentType($component_type)
    {
        $this->container['component_type'] = $component_type;

        return $this;
    }

    /**
     * Gets result_qualifier
     * @return string
     */
    public function getResultQualifier()
    {
        return $this->container['result_qualifier'];
    }

    /**
     * Sets result_qualifier
     * @param string $result_qualifier Defines the format or type of result(s) awarded.
     * @return $this
     */
    public function setResultQualifier($result_qualifier)
    {
        $this->container['result_qualifier'] = $result_qualifier;

        return $this;
    }

    /**
     * Gets assessment_method
     * @return string
     */
    public function getAssessmentMethod()
    {
        return $this->container['assessment_method'];
    }

    /**
     * Sets assessment_method
     * @param string $assessment_method The method or format of the Assessment.
     * @return $this
     */
    public function setAssessmentMethod($assessment_method)
    {
        $this->container['assessment_method'] = $assessment_method;

        return $this;
    }

    /**
     * Gets supplier_name
     * @return string
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     * @param string $supplier_name The supplier/originator/designer/owner of the aspect.
     * @return $this
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

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
