<?php
/**
 * LearnerSpecialNeeds
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
 * LearnerSpecialNeeds Class Doc Comment
 *
 * @category    Class */
 // @description This object contains information regarding a special education need (SEN) for a learner when provisioned within a school or establishment. A new object exists for each provision. The current status of any provision can be determined by querying StartDate and EndDate. Both dates are allowed to be in the future. The publisher of this object must support queries on these dates.
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnerSpecialNeeds implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnerSpecialNeeds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'learner_personal_ref_id' => 'string',
        'school_info_ref_id' => 'string',
        'unit_member' => 'string',
        'resourced_provision_member' => 'string',
        'next_review_date' => '\DateTime',
        'provision' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'sen_type_list' => '\DataExchange\SIFUK20\Models\SENType[]',
        'advice_and_assessment_level' => 'string',
        'grouping_and_support_level' => 'string',
        'specialised_resources_level' => 'string',
        'teaching_methods_level' => 'string',
        'embedded_basic_skills_support' => 'string',
        'literacy_level_start' => 'string',
        'literacy_level_end' => 'string',
        'numeracy_level_start' => 'string',
        'numeracy_level_end' => 'string',
        'national_curriculum_list' => '\DataExchange\SIFUK20\Models\NationalCurriculum[]',
        'medical_flag' => 'string',
        'paramedical_support' => 'string',
        'medical_notes' => 'string'
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
        'unit_member' => 'UnitMember',
        'resourced_provision_member' => 'ResourcedProvisionMember',
        'next_review_date' => 'NextReviewDate',
        'provision' => 'Provision',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'sen_type_list' => 'SENTypeList',
        'advice_and_assessment_level' => 'AdviceAndAssessmentLevel',
        'grouping_and_support_level' => 'GroupingAndSupportLevel',
        'specialised_resources_level' => 'SpecialisedResourcesLevel',
        'teaching_methods_level' => 'TeachingMethodsLevel',
        'embedded_basic_skills_support' => 'EmbeddedBasicSkillsSupport',
        'literacy_level_start' => 'LiteracyLevelStart',
        'literacy_level_end' => 'LiteracyLevelEnd',
        'numeracy_level_start' => 'NumeracyLevelStart',
        'numeracy_level_end' => 'NumeracyLevelEnd',
        'national_curriculum_list' => 'NationalCurriculumList',
        'medical_flag' => 'MedicalFlag',
        'paramedical_support' => 'ParamedicalSupport',
        'medical_notes' => 'MedicalNotes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'learner_personal_ref_id' => 'setLearnerPersonalRefId',
        'school_info_ref_id' => 'setSchoolInfoRefId',
        'unit_member' => 'setUnitMember',
        'resourced_provision_member' => 'setResourcedProvisionMember',
        'next_review_date' => 'setNextReviewDate',
        'provision' => 'setProvision',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'sen_type_list' => 'setSenTypeList',
        'advice_and_assessment_level' => 'setAdviceAndAssessmentLevel',
        'grouping_and_support_level' => 'setGroupingAndSupportLevel',
        'specialised_resources_level' => 'setSpecialisedResourcesLevel',
        'teaching_methods_level' => 'setTeachingMethodsLevel',
        'embedded_basic_skills_support' => 'setEmbeddedBasicSkillsSupport',
        'literacy_level_start' => 'setLiteracyLevelStart',
        'literacy_level_end' => 'setLiteracyLevelEnd',
        'numeracy_level_start' => 'setNumeracyLevelStart',
        'numeracy_level_end' => 'setNumeracyLevelEnd',
        'national_curriculum_list' => 'setNationalCurriculumList',
        'medical_flag' => 'setMedicalFlag',
        'paramedical_support' => 'setParamedicalSupport',
        'medical_notes' => 'setMedicalNotes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'learner_personal_ref_id' => 'getLearnerPersonalRefId',
        'school_info_ref_id' => 'getSchoolInfoRefId',
        'unit_member' => 'getUnitMember',
        'resourced_provision_member' => 'getResourcedProvisionMember',
        'next_review_date' => 'getNextReviewDate',
        'provision' => 'getProvision',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'sen_type_list' => 'getSenTypeList',
        'advice_and_assessment_level' => 'getAdviceAndAssessmentLevel',
        'grouping_and_support_level' => 'getGroupingAndSupportLevel',
        'specialised_resources_level' => 'getSpecialisedResourcesLevel',
        'teaching_methods_level' => 'getTeachingMethodsLevel',
        'embedded_basic_skills_support' => 'getEmbeddedBasicSkillsSupport',
        'literacy_level_start' => 'getLiteracyLevelStart',
        'literacy_level_end' => 'getLiteracyLevelEnd',
        'numeracy_level_start' => 'getNumeracyLevelStart',
        'numeracy_level_end' => 'getNumeracyLevelEnd',
        'national_curriculum_list' => 'getNationalCurriculumList',
        'medical_flag' => 'getMedicalFlag',
        'paramedical_support' => 'getParamedicalSupport',
        'medical_notes' => 'getMedicalNotes'
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
        $this->container['unit_member'] = isset($data['unit_member']) ? $data['unit_member'] : null;
        $this->container['resourced_provision_member'] = isset($data['resourced_provision_member']) ? $data['resourced_provision_member'] : null;
        $this->container['next_review_date'] = isset($data['next_review_date']) ? $data['next_review_date'] : null;
        $this->container['provision'] = isset($data['provision']) ? $data['provision'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['sen_type_list'] = isset($data['sen_type_list']) ? $data['sen_type_list'] : null;
        $this->container['advice_and_assessment_level'] = isset($data['advice_and_assessment_level']) ? $data['advice_and_assessment_level'] : null;
        $this->container['grouping_and_support_level'] = isset($data['grouping_and_support_level']) ? $data['grouping_and_support_level'] : null;
        $this->container['specialised_resources_level'] = isset($data['specialised_resources_level']) ? $data['specialised_resources_level'] : null;
        $this->container['teaching_methods_level'] = isset($data['teaching_methods_level']) ? $data['teaching_methods_level'] : null;
        $this->container['embedded_basic_skills_support'] = isset($data['embedded_basic_skills_support']) ? $data['embedded_basic_skills_support'] : null;
        $this->container['literacy_level_start'] = isset($data['literacy_level_start']) ? $data['literacy_level_start'] : null;
        $this->container['literacy_level_end'] = isset($data['literacy_level_end']) ? $data['literacy_level_end'] : null;
        $this->container['numeracy_level_start'] = isset($data['numeracy_level_start']) ? $data['numeracy_level_start'] : null;
        $this->container['numeracy_level_end'] = isset($data['numeracy_level_end']) ? $data['numeracy_level_end'] : null;
        $this->container['national_curriculum_list'] = isset($data['national_curriculum_list']) ? $data['national_curriculum_list'] : null;
        $this->container['medical_flag'] = isset($data['medical_flag']) ? $data['medical_flag'] : null;
        $this->container['paramedical_support'] = isset($data['paramedical_support']) ? $data['paramedical_support'] : null;
        $this->container['medical_notes'] = isset($data['medical_notes']) ? $data['medical_notes'] : null;
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
        if ($this->container['provision'] === null) {
            $invalid_properties[] = "'provision' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalid_properties[] = "'start_date' can't be null";
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
        if ($this->container['provision'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
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
     * @param string $ref_id The ID (GUID) that uniquely identifies a learner special need (provision).
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
     * @param string $learner_personal_ref_id The ID (GUID) of the learner with special educational needs.
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
     * @param string $school_info_ref_id The ID (GUID) that uniquely identifies the school provisioned to work with the learner&#039;s special needs.
     * @return $this
     */
    public function setSchoolInfoRefId($school_info_ref_id)
    {
        $this->container['school_info_ref_id'] = $school_info_ref_id;

        return $this;
    }

    /**
     * Gets unit_member
     * @return string
     */
    public function getUnitMember()
    {
        return $this->container['unit_member'];
    }

    /**
     * Sets unit_member
     * @param string $unit_member Is this learner with special education needs (SEN) in a mainstream school a member of an SEN Unit (sometimes called special class)?
     * @return $this
     */
    public function setUnitMember($unit_member)
    {
        $this->container['unit_member'] = $unit_member;

        return $this;
    }

    /**
     * Gets resourced_provision_member
     * @return string
     */
    public function getResourcedProvisionMember()
    {
        return $this->container['resourced_provision_member'];
    }

    /**
     * Sets resourced_provision_member
     * @param string $resourced_provision_member Is this learner with special education needs (SEN) in a mainstream school a member of a resourced provision?
     * @return $this
     */
    public function setResourcedProvisionMember($resourced_provision_member)
    {
        $this->container['resourced_provision_member'] = $resourced_provision_member;

        return $this;
    }

    /**
     * Gets next_review_date
     * @return \DateTime
     */
    public function getNextReviewDate()
    {
        return $this->container['next_review_date'];
    }

    /**
     * Sets next_review_date
     * @param \DateTime $next_review_date Date of learner&#039;s next SEN review.
     * @return $this
     */
    public function setNextReviewDate($next_review_date)
    {
        $this->container['next_review_date'] = $next_review_date;

        return $this;
    }

    /**
     * Gets provision
     * @return string
     */
    public function getProvision()
    {
        return $this->container['provision'];
    }

    /**
     * Sets provision
     * @param string $provision A provision (stage) accommodated for this learner within this school.
     * @return $this
     */
    public function setProvision($provision)
    {
        $this->container['provision'] = $provision;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date Date when learner was placed on the current SEN stage. Date may be in the future.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date Date when learner finished this SEN stage. Assumed to be current unless a date in the past is specified here.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets sen_type_list
     * @return \DataExchange\SIFUK20\Models\SENType[]
     */
    public function getSenTypeList()
    {
        return $this->container['sen_type_list'];
    }

    /**
     * Sets sen_type_list
     * @param \DataExchange\SIFUK20\Models\SENType[] $sen_type_list
     * @return $this
     */
    public function setSenTypeList($sen_type_list)
    {
        $this->container['sen_type_list'] = $sen_type_list;

        return $this;
    }

    /**
     * Gets advice_and_assessment_level
     * @return string
     */
    public function getAdviceAndAssessmentLevel()
    {
        return $this->container['advice_and_assessment_level'];
    }

    /**
     * Sets advice_and_assessment_level
     * @param string $advice_and_assessment_level Level of provision for Advice and Assessment. (Wales)
     * @return $this
     */
    public function setAdviceAndAssessmentLevel($advice_and_assessment_level)
    {
        $this->container['advice_and_assessment_level'] = $advice_and_assessment_level;

        return $this;
    }

    /**
     * Gets grouping_and_support_level
     * @return string
     */
    public function getGroupingAndSupportLevel()
    {
        return $this->container['grouping_and_support_level'];
    }

    /**
     * Sets grouping_and_support_level
     * @param string $grouping_and_support_level Level of provision for Grouping and Support. (Wales)
     * @return $this
     */
    public function setGroupingAndSupportLevel($grouping_and_support_level)
    {
        $this->container['grouping_and_support_level'] = $grouping_and_support_level;

        return $this;
    }

    /**
     * Gets specialised_resources_level
     * @return string
     */
    public function getSpecialisedResourcesLevel()
    {
        return $this->container['specialised_resources_level'];
    }

    /**
     * Sets specialised_resources_level
     * @param string $specialised_resources_level Level of provision for Specialised Resources. (Wales)
     * @return $this
     */
    public function setSpecialisedResourcesLevel($specialised_resources_level)
    {
        $this->container['specialised_resources_level'] = $specialised_resources_level;

        return $this;
    }

    /**
     * Gets teaching_methods_level
     * @return string
     */
    public function getTeachingMethodsLevel()
    {
        return $this->container['teaching_methods_level'];
    }

    /**
     * Sets teaching_methods_level
     * @param string $teaching_methods_level Level of provision for Curriculum and Teaching Methods. (Wales)
     * @return $this
     */
    public function setTeachingMethodsLevel($teaching_methods_level)
    {
        $this->container['teaching_methods_level'] = $teaching_methods_level;

        return $this;
    }

    /**
     * Gets embedded_basic_skills_support
     * @return string
     */
    public function getEmbeddedBasicSkillsSupport()
    {
        return $this->container['embedded_basic_skills_support'];
    }

    /**
     * Sets embedded_basic_skills_support
     * @param string $embedded_basic_skills_support Provision of Embedded Basic Skills support beyond the attainment of formal qualification.
     * @return $this
     */
    public function setEmbeddedBasicSkillsSupport($embedded_basic_skills_support)
    {
        $this->container['embedded_basic_skills_support'] = $embedded_basic_skills_support;

        return $this;
    }

    /**
     * Gets literacy_level_start
     * @return string
     */
    public function getLiteracyLevelStart()
    {
        return $this->container['literacy_level_start'];
    }

    /**
     * Sets literacy_level_start
     * @param string $literacy_level_start Level of literacy at start of this SEN stage. (Wales)
     * @return $this
     */
    public function setLiteracyLevelStart($literacy_level_start)
    {
        $this->container['literacy_level_start'] = $literacy_level_start;

        return $this;
    }

    /**
     * Gets literacy_level_end
     * @return string
     */
    public function getLiteracyLevelEnd()
    {
        return $this->container['literacy_level_end'];
    }

    /**
     * Sets literacy_level_end
     * @param string $literacy_level_end Level of literacy achieved by the end of this SEN stage. (Wales)
     * @return $this
     */
    public function setLiteracyLevelEnd($literacy_level_end)
    {
        $this->container['literacy_level_end'] = $literacy_level_end;

        return $this;
    }

    /**
     * Gets numeracy_level_start
     * @return string
     */
    public function getNumeracyLevelStart()
    {
        return $this->container['numeracy_level_start'];
    }

    /**
     * Sets numeracy_level_start
     * @param string $numeracy_level_start Level of numeracy at start of this SEN stage. (Wales)
     * @return $this
     */
    public function setNumeracyLevelStart($numeracy_level_start)
    {
        $this->container['numeracy_level_start'] = $numeracy_level_start;

        return $this;
    }

    /**
     * Gets numeracy_level_end
     * @return string
     */
    public function getNumeracyLevelEnd()
    {
        return $this->container['numeracy_level_end'];
    }

    /**
     * Sets numeracy_level_end
     * @param string $numeracy_level_end Level of numeracy achieved by the end of this SEN stage. (Wales)
     * @return $this
     */
    public function setNumeracyLevelEnd($numeracy_level_end)
    {
        $this->container['numeracy_level_end'] = $numeracy_level_end;

        return $this;
    }

    /**
     * Gets national_curriculum_list
     * @return \DataExchange\SIFUK20\Models\NationalCurriculum[]
     */
    public function getNationalCurriculumList()
    {
        return $this->container['national_curriculum_list'];
    }

    /**
     * Sets national_curriculum_list
     * @param \DataExchange\SIFUK20\Models\NationalCurriculum[] $national_curriculum_list
     * @return $this
     */
    public function setNationalCurriculumList($national_curriculum_list)
    {
        $this->container['national_curriculum_list'] = $national_curriculum_list;

        return $this;
    }

    /**
     * Gets medical_flag
     * @return string
     */
    public function getMedicalFlag()
    {
        return $this->container['medical_flag'];
    }

    /**
     * Sets medical_flag
     * @param string $medical_flag Is there medical information on this Learner?
     * @return $this
     */
    public function setMedicalFlag($medical_flag)
    {
        $this->container['medical_flag'] = $medical_flag;

        return $this;
    }

    /**
     * Gets paramedical_support
     * @return string
     */
    public function getParamedicalSupport()
    {
        return $this->container['paramedical_support'];
    }

    /**
     * Sets paramedical_support
     * @param string $paramedical_support Type of therapy needed by Learner.
     * @return $this
     */
    public function setParamedicalSupport($paramedical_support)
    {
        $this->container['paramedical_support'] = $paramedical_support;

        return $this;
    }

    /**
     * Gets medical_notes
     * @return string
     */
    public function getMedicalNotes()
    {
        return $this->container['medical_notes'];
    }

    /**
     * Sets medical_notes
     * @param string $medical_notes Summary of learner&#039;s medical condition.
     * @return $this
     */
    public function setMedicalNotes($medical_notes)
    {
        $this->container['medical_notes'] = $medical_notes;

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
