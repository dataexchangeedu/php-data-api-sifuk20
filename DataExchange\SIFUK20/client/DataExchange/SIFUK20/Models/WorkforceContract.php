<?php
/**
 * WorkforceContract
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
 * WorkforceContract Class Doc Comment
 *
 * @category    Class */
 // @description Extends the details specified in a WorkforceAssignment to include details of contracts governing WorkforceAssignments. This is a stub only at the moment and may be expanded in the future to contain additional contract details such as renumeration. Based around the US SIF 2.4 EmployeeContract object.
/**
 * @package     
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WorkforceContract implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'WorkforceContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'workforce_assignment_ref_id' => 'string',
        'contract_start_date' => '\DateTime',
        'contract_end_date' => '\DateTime',
        'contract_assignment_code' => 'string',
        'contract_hours_per_week' => 'double',
        'contract_weeks_per_year' => 'double',
        'contract_fte' => 'double'
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
        'workforce_assignment_ref_id' => '@WorkforceAssignmentRefId',
        'contract_start_date' => 'ContractStartDate',
        'contract_end_date' => 'ContractEndDate',
        'contract_assignment_code' => 'ContractAssignmentCode',
        'contract_hours_per_week' => 'ContractHoursPerWeek',
        'contract_weeks_per_year' => 'ContractWeeksPerYear',
        'contract_fte' => 'ContractFTE'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'workforce_assignment_ref_id' => 'setWorkforceAssignmentRefId',
        'contract_start_date' => 'setContractStartDate',
        'contract_end_date' => 'setContractEndDate',
        'contract_assignment_code' => 'setContractAssignmentCode',
        'contract_hours_per_week' => 'setContractHoursPerWeek',
        'contract_weeks_per_year' => 'setContractWeeksPerYear',
        'contract_fte' => 'setContractFte'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'workforce_assignment_ref_id' => 'getWorkforceAssignmentRefId',
        'contract_start_date' => 'getContractStartDate',
        'contract_end_date' => 'getContractEndDate',
        'contract_assignment_code' => 'getContractAssignmentCode',
        'contract_hours_per_week' => 'getContractHoursPerWeek',
        'contract_weeks_per_year' => 'getContractWeeksPerYear',
        'contract_fte' => 'getContractFte'
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
        $this->container['workforce_assignment_ref_id'] = isset($data['workforce_assignment_ref_id']) ? $data['workforce_assignment_ref_id'] : null;
        $this->container['contract_start_date'] = isset($data['contract_start_date']) ? $data['contract_start_date'] : null;
        $this->container['contract_end_date'] = isset($data['contract_end_date']) ? $data['contract_end_date'] : null;
        $this->container['contract_assignment_code'] = isset($data['contract_assignment_code']) ? $data['contract_assignment_code'] : null;
        $this->container['contract_hours_per_week'] = isset($data['contract_hours_per_week']) ? $data['contract_hours_per_week'] : null;
        $this->container['contract_weeks_per_year'] = isset($data['contract_weeks_per_year']) ? $data['contract_weeks_per_year'] : null;
        $this->container['contract_fte'] = isset($data['contract_fte']) ? $data['contract_fte'] : null;
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
        if ($this->container['workforce_assignment_ref_id'] === null) {
            $invalid_properties[] = "'workforce_assignment_ref_id' can't be null";
        }
        if ($this->container['contract_start_date'] === null) {
            $invalid_properties[] = "'contract_start_date' can't be null";
        }
        if ($this->container['contract_assignment_code'] === null) {
            $invalid_properties[] = "'contract_assignment_code' can't be null";
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
        if ($this->container['workforce_assignment_ref_id'] === null) {
            return false;
        }
        if ($this->container['contract_start_date'] === null) {
            return false;
        }
        if ($this->container['contract_assignment_code'] === null) {
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
     * @param string $ref_id The ID (GUID) of the WorkforceContract object.
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets workforce_assignment_ref_id
     * @return string
     */
    public function getWorkforceAssignmentRefId()
    {
        return $this->container['workforce_assignment_ref_id'];
    }

    /**
     * Sets workforce_assignment_ref_id
     * @param string $workforce_assignment_ref_id RefId of WorkforceAssignment object this applies to.
     * @return $this
     */
    public function setWorkforceAssignmentRefId($workforce_assignment_ref_id)
    {
        $this->container['workforce_assignment_ref_id'] = $workforce_assignment_ref_id;

        return $this;
    }

    /**
     * Gets contract_start_date
     * @return \DateTime
     */
    public function getContractStartDate()
    {
        return $this->container['contract_start_date'];
    }

    /**
     * Sets contract_start_date
     * @param \DateTime $contract_start_date Date this contract becomes effective.
     * @return $this
     */
    public function setContractStartDate($contract_start_date)
    {
        $this->container['contract_start_date'] = $contract_start_date;

        return $this;
    }

    /**
     * Gets contract_end_date
     * @return \DateTime
     */
    public function getContractEndDate()
    {
        return $this->container['contract_end_date'];
    }

    /**
     * Sets contract_end_date
     * @param \DateTime $contract_end_date Date this contract ceases effect.
     * @return $this
     */
    public function setContractEndDate($contract_end_date)
    {
        $this->container['contract_end_date'] = $contract_end_date;

        return $this;
    }

    /**
     * Gets contract_assignment_code
     * @return string
     */
    public function getContractAssignmentCode()
    {
        return $this->container['contract_assignment_code'];
    }

    /**
     * Sets contract_assignment_code
     * @param string $contract_assignment_code Reference identifying this contract and assignment.
     * @return $this
     */
    public function setContractAssignmentCode($contract_assignment_code)
    {
        $this->container['contract_assignment_code'] = $contract_assignment_code;

        return $this;
    }

    /**
     * Gets contract_hours_per_week
     * @return double
     */
    public function getContractHoursPerWeek()
    {
        return $this->container['contract_hours_per_week'];
    }

    /**
     * Sets contract_hours_per_week
     * @param double $contract_hours_per_week
     * @return $this
     */
    public function setContractHoursPerWeek($contract_hours_per_week)
    {
        $this->container['contract_hours_per_week'] = $contract_hours_per_week;

        return $this;
    }

    /**
     * Gets contract_weeks_per_year
     * @return double
     */
    public function getContractWeeksPerYear()
    {
        return $this->container['contract_weeks_per_year'];
    }

    /**
     * Sets contract_weeks_per_year
     * @param double $contract_weeks_per_year
     * @return $this
     */
    public function setContractWeeksPerYear($contract_weeks_per_year)
    {
        $this->container['contract_weeks_per_year'] = $contract_weeks_per_year;

        return $this;
    }

    /**
     * Gets contract_fte
     * @return double
     */
    public function getContractFte()
    {
        return $this->container['contract_fte'];
    }

    /**
     * Sets contract_fte
     * @param double $contract_fte
     * @return $this
     */
    public function setContractFte($contract_fte)
    {
        $this->container['contract_fte'] = $contract_fte;

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
