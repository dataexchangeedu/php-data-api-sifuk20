<?php
/**
 * SchoolInfo
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
 * SchoolInfo Class Doc Comment
 *
 * @category    Class */
 // @description This object contains basic information about a school or other educational establishment. Compare with US/Canada object with the same name.
/**
 * @package     DataExchange\UK\20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SchoolInfo implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SchoolInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'la_info_ref_id' => 'string',
        'local_id' => 'string',
        'establishment_id' => 'string',
        'la_id' => 'string',
        'school_name' => 'string',
        'school_full_name' => 'string',
        'urn' => 'string',
        'school_url' => 'string',
        'school_address' => '\DataExchange\UK\20\Models\SchoolAddress',
        'address_list' => 'string[]',
        'school_phone_number' => '\DataExchange\UK\20\Models\SchoolPhoneNumber',
        'other_phone_number_list' => 'string[]',
        'school_email' => '\DataExchange\UK\20\Models\SchoolEmail',
        'school_contact_list' => '\DataExchange\UK\20\Models\Contact[]',
        'head_teacher_info' => '\DataExchange\UK\20\Models\HeadTeacherInfo',
        'phase' => 'string',
        'school_type' => 'string',
        'governance' => 'string',
        'intake' => 'string',
        'nc_year_group_list' => 'string[]',
        'gender_of_entry' => 'string',
        'gender_sixth_form' => 'string',
        'boarders' => 'string',
        'sessions_per_day' => 'int',
        'nursery' => 'string',
        'special' => 'string',
        'operational_status' => 'string'
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
        'la_info_ref_id' => '@LAInfoRefId',
        'local_id' => 'LocalId',
        'establishment_id' => 'EstablishmentId',
        'la_id' => 'LAId',
        'school_name' => 'SchoolName',
        'school_full_name' => 'SchoolFullName',
        'urn' => 'URN',
        'school_url' => 'SchoolURL',
        'school_address' => 'SchoolAddress',
        'address_list' => 'AddressList',
        'school_phone_number' => 'SchoolPhoneNumber',
        'other_phone_number_list' => 'OtherPhoneNumberList',
        'school_email' => 'SchoolEmail',
        'school_contact_list' => 'SchoolContactList',
        'head_teacher_info' => 'HeadTeacherInfo',
        'phase' => 'Phase',
        'school_type' => 'SchoolType',
        'governance' => 'Governance',
        'intake' => 'Intake',
        'nc_year_group_list' => 'NCYearGroupList',
        'gender_of_entry' => 'GenderOfEntry',
        'gender_sixth_form' => 'GenderSixthForm',
        'boarders' => 'Boarders',
        'sessions_per_day' => 'SessionsPerDay',
        'nursery' => 'Nursery',
        'special' => 'Special',
        'operational_status' => 'OperationalStatus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'la_info_ref_id' => 'setLaInfoRefId',
        'local_id' => 'setLocalId',
        'establishment_id' => 'setEstablishmentId',
        'la_id' => 'setLaId',
        'school_name' => 'setSchoolName',
        'school_full_name' => 'setSchoolFullName',
        'urn' => 'setUrn',
        'school_url' => 'setSchoolUrl',
        'school_address' => 'setSchoolAddress',
        'address_list' => 'setAddressList',
        'school_phone_number' => 'setSchoolPhoneNumber',
        'other_phone_number_list' => 'setOtherPhoneNumberList',
        'school_email' => 'setSchoolEmail',
        'school_contact_list' => 'setSchoolContactList',
        'head_teacher_info' => 'setHeadTeacherInfo',
        'phase' => 'setPhase',
        'school_type' => 'setSchoolType',
        'governance' => 'setGovernance',
        'intake' => 'setIntake',
        'nc_year_group_list' => 'setNcYearGroupList',
        'gender_of_entry' => 'setGenderOfEntry',
        'gender_sixth_form' => 'setGenderSixthForm',
        'boarders' => 'setBoarders',
        'sessions_per_day' => 'setSessionsPerDay',
        'nursery' => 'setNursery',
        'special' => 'setSpecial',
        'operational_status' => 'setOperationalStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'la_info_ref_id' => 'getLaInfoRefId',
        'local_id' => 'getLocalId',
        'establishment_id' => 'getEstablishmentId',
        'la_id' => 'getLaId',
        'school_name' => 'getSchoolName',
        'school_full_name' => 'getSchoolFullName',
        'urn' => 'getUrn',
        'school_url' => 'getSchoolUrl',
        'school_address' => 'getSchoolAddress',
        'address_list' => 'getAddressList',
        'school_phone_number' => 'getSchoolPhoneNumber',
        'other_phone_number_list' => 'getOtherPhoneNumberList',
        'school_email' => 'getSchoolEmail',
        'school_contact_list' => 'getSchoolContactList',
        'head_teacher_info' => 'getHeadTeacherInfo',
        'phase' => 'getPhase',
        'school_type' => 'getSchoolType',
        'governance' => 'getGovernance',
        'intake' => 'getIntake',
        'nc_year_group_list' => 'getNcYearGroupList',
        'gender_of_entry' => 'getGenderOfEntry',
        'gender_sixth_form' => 'getGenderSixthForm',
        'boarders' => 'getBoarders',
        'sessions_per_day' => 'getSessionsPerDay',
        'nursery' => 'getNursery',
        'special' => 'getSpecial',
        'operational_status' => 'getOperationalStatus'
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
        $this->container['la_info_ref_id'] = isset($data['la_info_ref_id']) ? $data['la_info_ref_id'] : null;
        $this->container['local_id'] = isset($data['local_id']) ? $data['local_id'] : null;
        $this->container['establishment_id'] = isset($data['establishment_id']) ? $data['establishment_id'] : null;
        $this->container['la_id'] = isset($data['la_id']) ? $data['la_id'] : null;
        $this->container['school_name'] = isset($data['school_name']) ? $data['school_name'] : null;
        $this->container['school_full_name'] = isset($data['school_full_name']) ? $data['school_full_name'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['school_url'] = isset($data['school_url']) ? $data['school_url'] : null;
        $this->container['school_address'] = isset($data['school_address']) ? $data['school_address'] : null;
        $this->container['address_list'] = isset($data['address_list']) ? $data['address_list'] : null;
        $this->container['school_phone_number'] = isset($data['school_phone_number']) ? $data['school_phone_number'] : null;
        $this->container['other_phone_number_list'] = isset($data['other_phone_number_list']) ? $data['other_phone_number_list'] : null;
        $this->container['school_email'] = isset($data['school_email']) ? $data['school_email'] : null;
        $this->container['school_contact_list'] = isset($data['school_contact_list']) ? $data['school_contact_list'] : null;
        $this->container['head_teacher_info'] = isset($data['head_teacher_info']) ? $data['head_teacher_info'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['school_type'] = isset($data['school_type']) ? $data['school_type'] : null;
        $this->container['governance'] = isset($data['governance']) ? $data['governance'] : null;
        $this->container['intake'] = isset($data['intake']) ? $data['intake'] : null;
        $this->container['nc_year_group_list'] = isset($data['nc_year_group_list']) ? $data['nc_year_group_list'] : null;
        $this->container['gender_of_entry'] = isset($data['gender_of_entry']) ? $data['gender_of_entry'] : null;
        $this->container['gender_sixth_form'] = isset($data['gender_sixth_form']) ? $data['gender_sixth_form'] : null;
        $this->container['boarders'] = isset($data['boarders']) ? $data['boarders'] : null;
        $this->container['sessions_per_day'] = isset($data['sessions_per_day']) ? $data['sessions_per_day'] : null;
        $this->container['nursery'] = isset($data['nursery']) ? $data['nursery'] : null;
        $this->container['special'] = isset($data['special']) ? $data['special'] : null;
        $this->container['operational_status'] = isset($data['operational_status']) ? $data['operational_status'] : null;
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
        if ($this->container['establishment_id'] === null) {
            $invalid_properties[] = "'establishment_id' can't be null";
        }
        if ($this->container['la_id'] === null) {
            $invalid_properties[] = "'la_id' can't be null";
        }
        if ($this->container['school_name'] === null) {
            $invalid_properties[] = "'school_name' can't be null";
        }
        if ($this->container['sessions_per_day'] === null) {
            $invalid_properties[] = "'sessions_per_day' can't be null";
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
        if ($this->container['establishment_id'] === null) {
            return false;
        }
        if ($this->container['la_id'] === null) {
            return false;
        }
        if ($this->container['school_name'] === null) {
            return false;
        }
        if ($this->container['sessions_per_day'] === null) {
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
     * @param string $ref_id The GUID that identifies this school.
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets la_info_ref_id
     * @return string
     */
    public function getLaInfoRefId()
    {
        return $this->container['la_info_ref_id'];
    }

    /**
     * Sets la_info_ref_id
     * @param string $la_info_ref_id The ID (GUID) assigned to the LA of which this school is a member.
     * @return $this
     */
    public function setLaInfoRefId($la_info_ref_id)
    {
        $this->container['la_info_ref_id'] = $la_info_ref_id;

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
     * @param string $local_id An ID assigned by the publishing agent for this school or establishment. This may be set to any value.
     * @return $this
     */
    public function setLocalId($local_id)
    {
        $this->container['local_id'] = $local_id;

        return $this;
    }

    /**
     * Gets establishment_id
     * @return string
     */
    public function getEstablishmentId()
    {
        return $this->container['establishment_id'];
    }

    /**
     * Sets establishment_id
     * @param string $establishment_id
     * @return $this
     */
    public function setEstablishmentId($establishment_id)
    {
        $this->container['establishment_id'] = $establishment_id;

        return $this;
    }

    /**
     * Gets la_id
     * @return string
     */
    public function getLaId()
    {
        return $this->container['la_id'];
    }

    /**
     * Sets la_id
     * @param string $la_id
     * @return $this
     */
    public function setLaId($la_id)
    {
        $this->container['la_id'] = $la_id;

        return $this;
    }

    /**
     * Gets school_name
     * @return string
     */
    public function getSchoolName()
    {
        return $this->container['school_name'];
    }

    /**
     * Sets school_name
     * @param string $school_name School&#039;s name as indicated on the Annual Schools Census.
     * @return $this
     */
    public function setSchoolName($school_name)
    {
        $this->container['school_name'] = $school_name;

        return $this;
    }

    /**
     * Gets school_full_name
     * @return string
     */
    public function getSchoolFullName()
    {
        return $this->container['school_full_name'];
    }

    /**
     * Sets school_full_name
     * @param string $school_full_name School&#039;s full name as stated in the Instrument of Government.
     * @return $this
     */
    public function setSchoolFullName($school_full_name)
    {
        $this->container['school_full_name'] = $school_full_name;

        return $this;
    }

    /**
     * Gets urn
     * @return string
     */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
     * Sets urn
     * @param string $urn School Unique Reference Number. This number is an alternate to the Establishment Number.
     * @return $this
     */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;

        return $this;
    }

    /**
     * Gets school_url
     * @return string
     */
    public function getSchoolUrl()
    {
        return $this->container['school_url'];
    }

    /**
     * Sets school_url
     * @param string $school_url URL for the school.
     * @return $this
     */
    public function setSchoolUrl($school_url)
    {
        $this->container['school_url'] = $school_url;

        return $this;
    }

    /**
     * Gets school_address
     * @return \DataExchange\UK\20\Models\SchoolAddress
     */
    public function getSchoolAddress()
    {
        return $this->container['school_address'];
    }

    /**
     * Sets school_address
     * @param \DataExchange\UK\20\Models\SchoolAddress $school_address
     * @return $this
     */
    public function setSchoolAddress($school_address)
    {
        $this->container['school_address'] = $school_address;

        return $this;
    }

    /**
     * Gets address_list
     * @return string[]
     */
    public function getAddressList()
    {
        return $this->container['address_list'];
    }

    /**
     * Sets address_list
     * @param string[] $address_list Other addresses associated with the school.
     * @return $this
     */
    public function setAddressList($address_list)
    {
        $this->container['address_list'] = $address_list;

        return $this;
    }

    /**
     * Gets school_phone_number
     * @return \DataExchange\UK\20\Models\SchoolPhoneNumber
     */
    public function getSchoolPhoneNumber()
    {
        return $this->container['school_phone_number'];
    }

    /**
     * Sets school_phone_number
     * @param \DataExchange\UK\20\Models\SchoolPhoneNumber $school_phone_number
     * @return $this
     */
    public function setSchoolPhoneNumber($school_phone_number)
    {
        $this->container['school_phone_number'] = $school_phone_number;

        return $this;
    }

    /**
     * Gets other_phone_number_list
     * @return string[]
     */
    public function getOtherPhoneNumberList()
    {
        return $this->container['other_phone_number_list'];
    }

    /**
     * Sets other_phone_number_list
     * @param string[] $other_phone_number_list A list of the school&#039;s phone numbers.
     * @return $this
     */
    public function setOtherPhoneNumberList($other_phone_number_list)
    {
        $this->container['other_phone_number_list'] = $other_phone_number_list;

        return $this;
    }

    /**
     * Gets school_email
     * @return \DataExchange\UK\20\Models\SchoolEmail
     */
    public function getSchoolEmail()
    {
        return $this->container['school_email'];
    }

    /**
     * Sets school_email
     * @param \DataExchange\UK\20\Models\SchoolEmail $school_email
     * @return $this
     */
    public function setSchoolEmail($school_email)
    {
        $this->container['school_email'] = $school_email;

        return $this;
    }

    /**
     * Gets school_contact_list
     * @return \DataExchange\UK\20\Models\Contact[]
     */
    public function getSchoolContactList()
    {
        return $this->container['school_contact_list'];
    }

    /**
     * Sets school_contact_list
     * @param \DataExchange\UK\20\Models\Contact[] $school_contact_list A list of contacts at the school.
     * @return $this
     */
    public function setSchoolContactList($school_contact_list)
    {
        $this->container['school_contact_list'] = $school_contact_list;

        return $this;
    }

    /**
     * Gets head_teacher_info
     * @return \DataExchange\UK\20\Models\HeadTeacherInfo
     */
    public function getHeadTeacherInfo()
    {
        return $this->container['head_teacher_info'];
    }

    /**
     * Sets head_teacher_info
     * @param \DataExchange\UK\20\Models\HeadTeacherInfo $head_teacher_info
     * @return $this
     */
    public function setHeadTeacherInfo($head_teacher_info)
    {
        $this->container['head_teacher_info'] = $head_teacher_info;

        return $this;
    }

    /**
     * Gets phase
     * @return string
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     * @param string $phase The high level code indicating the level of the educational institution.
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets school_type
     * @return string
     */
    public function getSchoolType()
    {
        return $this->container['school_type'];
    }

    /**
     * Sets school_type
     * @param string $school_type An indication of the level of the educational institution.
     * @return $this
     */
    public function setSchoolType($school_type)
    {
        $this->container['school_type'] = $school_type;

        return $this;
    }

    /**
     * Gets governance
     * @return string
     */
    public function getGovernance()
    {
        return $this->container['governance'];
    }

    /**
     * Sets governance
     * @param string $governance Governance afforded to this school.
     * @return $this
     */
    public function setGovernance($governance)
    {
        $this->container['governance'] = $governance;

        return $this;
    }

    /**
     * Gets intake
     * @return string
     */
    public function getIntake()
    {
        return $this->container['intake'];
    }

    /**
     * Sets intake
     * @param string $intake Intake type.
     * @return $this
     */
    public function setIntake($intake)
    {
        $this->container['intake'] = $intake;

        return $this;
    }

    /**
     * Gets nc_year_group_list
     * @return string[]
     */
    public function getNcYearGroupList()
    {
        return $this->container['nc_year_group_list'];
    }

    /**
     * Sets nc_year_group_list
     * @param string[] $nc_year_group_list Collection of National Curriculum Year Groups offered in this school or establishment.
     * @return $this
     */
    public function setNcYearGroupList($nc_year_group_list)
    {
        $this->container['nc_year_group_list'] = $nc_year_group_list;

        return $this;
    }

    /**
     * Gets gender_of_entry
     * @return string
     */
    public function getGenderOfEntry()
    {
        return $this->container['gender_of_entry'];
    }

    /**
     * Sets gender_of_entry
     * @param string $gender_of_entry Gender of learners allowed for entry to school.
     * @return $this
     */
    public function setGenderOfEntry($gender_of_entry)
    {
        $this->container['gender_of_entry'] = $gender_of_entry;

        return $this;
    }

    /**
     * Gets gender_sixth_form
     * @return string
     */
    public function getGenderSixthForm()
    {
        return $this->container['gender_sixth_form'];
    }

    /**
     * Sets gender_sixth_form
     * @param string $gender_sixth_form Gender of learners allowed for entry to Sixth Form.
     * @return $this
     */
    public function setGenderSixthForm($gender_sixth_form)
    {
        $this->container['gender_sixth_form'] = $gender_sixth_form;

        return $this;
    }

    /**
     * Gets boarders
     * @return string
     */
    public function getBoarders()
    {
        return $this->container['boarders'];
    }

    /**
     * Sets boarders
     * @param string $boarders Indicates whether the school supports boarders or not.
     * @return $this
     */
    public function setBoarders($boarders)
    {
        $this->container['boarders'] = $boarders;

        return $this;
    }

    /**
     * Gets sessions_per_day
     * @return int
     */
    public function getSessionsPerDay()
    {
        return $this->container['sessions_per_day'];
    }

    /**
     * Sets sessions_per_day
     * @param int $sessions_per_day The number of sessions in the usual school day (usually two).
     * @return $this
     */
    public function setSessionsPerDay($sessions_per_day)
    {
        $this->container['sessions_per_day'] = $sessions_per_day;

        return $this;
    }

    /**
     * Gets nursery
     * @return string
     */
    public function getNursery()
    {
        return $this->container['nursery'];
    }

    /**
     * Sets nursery
     * @param string $nursery Indicates whether the school maintains a nursery class or not. Must be NO if Phase is set to MP, MS or SY. Must be YES if Phase is set to NY or EY.
     * @return $this
     */
    public function setNursery($nursery)
    {
        $this->container['nursery'] = $nursery;

        return $this;
    }

    /**
     * Gets special
     * @return string
     */
    public function getSpecial()
    {
        return $this->container['special'];
    }

    /**
     * Sets special
     * @param string $special Indicates whether the school has a special class/unit or not. Must be Yes if Phase = SP. Any details will be stored in the associated SchoolInfoDetail object.
     * @return $this
     */
    public function setSpecial($special)
    {
        $this->container['special'] = $special;

        return $this;
    }

    /**
     * Gets operational_status
     * @return string
     */
    public function getOperationalStatus()
    {
        return $this->container['operational_status'];
    }

    /**
     * Sets operational_status
     * @param string $operational_status Operational condition of a school.
     * @return $this
     */
    public function setOperationalStatus($operational_status)
    {
        $this->container['operational_status'] = $operational_status;

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
