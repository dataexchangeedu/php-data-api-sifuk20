<?php
/**
 * CurrentSchoolEnrolment
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
 * CurrentSchoolEnrolment Class Doc Comment
 *
 * @category    Class */
/**
 * @package     DataExchange\UK\20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CurrentSchoolEnrolment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CurrentSchoolEnrolment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'learner_school_enrolment_ref_id' => 'string',
        'membership_type' => 'string',
        'sif_ref_id' => '\DataExchange\UK\20\Models\SIFRefId1',
        'la_id' => 'string',
        'establishment_id' => 'string',
        'nc_year_group' => 'string'
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
        'learner_school_enrolment_ref_id' => '@LearnerSchoolEnrolmentRefId',
        'membership_type' => '@MembershipType',
        'sif_ref_id' => 'SIF_RefId',
        'la_id' => 'LAId',
        'establishment_id' => 'EstablishmentId',
        'nc_year_group' => 'NCYearGroup'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'learner_school_enrolment_ref_id' => 'setLearnerSchoolEnrolmentRefId',
        'membership_type' => 'setMembershipType',
        'sif_ref_id' => 'setSifRefId',
        'la_id' => 'setLaId',
        'establishment_id' => 'setEstablishmentId',
        'nc_year_group' => 'setNcYearGroup'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'learner_school_enrolment_ref_id' => 'getLearnerSchoolEnrolmentRefId',
        'membership_type' => 'getMembershipType',
        'sif_ref_id' => 'getSifRefId',
        'la_id' => 'getLaId',
        'establishment_id' => 'getEstablishmentId',
        'nc_year_group' => 'getNcYearGroup'
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
        $this->container['learner_school_enrolment_ref_id'] = isset($data['learner_school_enrolment_ref_id']) ? $data['learner_school_enrolment_ref_id'] : null;
        $this->container['membership_type'] = isset($data['membership_type']) ? $data['membership_type'] : null;
        $this->container['sif_ref_id'] = isset($data['sif_ref_id']) ? $data['sif_ref_id'] : null;
        $this->container['la_id'] = isset($data['la_id']) ? $data['la_id'] : null;
        $this->container['establishment_id'] = isset($data['establishment_id']) ? $data['establishment_id'] : null;
        $this->container['nc_year_group'] = isset($data['nc_year_group']) ? $data['nc_year_group'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['learner_school_enrolment_ref_id'] === null) {
            $invalid_properties[] = "'learner_school_enrolment_ref_id' can't be null";
        }
        if ($this->container['la_id'] === null) {
            $invalid_properties[] = "'la_id' can't be null";
        }
        if ($this->container['establishment_id'] === null) {
            $invalid_properties[] = "'establishment_id' can't be null";
        }
        if ($this->container['nc_year_group'] === null) {
            $invalid_properties[] = "'nc_year_group' can't be null";
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
        if ($this->container['learner_school_enrolment_ref_id'] === null) {
            return false;
        }
        if ($this->container['la_id'] === null) {
            return false;
        }
        if ($this->container['establishment_id'] === null) {
            return false;
        }
        if ($this->container['nc_year_group'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets learner_school_enrolment_ref_id
     * @return string
     */
    public function getLearnerSchoolEnrolmentRefId()
    {
        return $this->container['learner_school_enrolment_ref_id'];
    }

    /**
     * Sets learner_school_enrolment_ref_id
     * @param string $learner_school_enrolment_ref_id The ID (GUID) of the LearnerSchoolEnrolment record associated with this learner that is also designated as the current or current main enrolment.
     * @return $this
     */
    public function setLearnerSchoolEnrolmentRefId($learner_school_enrolment_ref_id)
    {
        $this->container['learner_school_enrolment_ref_id'] = $learner_school_enrolment_ref_id;

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
     * Gets sif_ref_id
     * @return \DataExchange\UK\20\Models\SIFRefId1
     */
    public function getSifRefId()
    {
        return $this->container['sif_ref_id'];
    }

    /**
     * Sets sif_ref_id
     * @param \DataExchange\UK\20\Models\SIFRefId1 $sif_ref_id
     * @return $this
     */
    public function setSifRefId($sif_ref_id)
    {
        $this->container['sif_ref_id'] = $sif_ref_id;

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
     * Gets nc_year_group
     * @return string
     */
    public function getNcYearGroup()
    {
        return $this->container['nc_year_group'];
    }

    /**
     * Sets nc_year_group
     * @param string $nc_year_group
     * @return $this
     */
    public function setNcYearGroup($nc_year_group)
    {
        $this->container['nc_year_group'] = $nc_year_group;

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
