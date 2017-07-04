<?php
/**
 * Scope
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
 * Scope Class Doc Comment
 *
 * @category    Class */
 // @description Scope of this timetable, ie: a general description of what dates the timetable covers, etc
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Scope implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Scope';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'tt_scope_name' => 'string',
        'supplier_name' => 'string',
        'supplier_url' => 'string',
        'product' => 'string',
        'version' => 'string',
        'school_info_ref_id' => 'string',
        'school_name' => 'string',
        'schedule_creation_date' => '\DateTime',
        'schedule_name' => 'string',
        'school_year' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'status' => 'string',
        'phone_number_list' => 'string[]'
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
        'tt_scope_name' => 'TTScopeName',
        'supplier_name' => 'SupplierName',
        'supplier_url' => 'SupplierURL',
        'product' => 'Product',
        'version' => 'Version',
        'school_info_ref_id' => 'SchoolInfoRefId',
        'school_name' => 'SchoolName',
        'schedule_creation_date' => 'ScheduleCreationDate',
        'schedule_name' => 'ScheduleName',
        'school_year' => 'SchoolYear',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'status' => 'Status',
        'phone_number_list' => 'PhoneNumberList'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'tt_scope_name' => 'setTtScopeName',
        'supplier_name' => 'setSupplierName',
        'supplier_url' => 'setSupplierUrl',
        'product' => 'setProduct',
        'version' => 'setVersion',
        'school_info_ref_id' => 'setSchoolInfoRefId',
        'school_name' => 'setSchoolName',
        'schedule_creation_date' => 'setScheduleCreationDate',
        'schedule_name' => 'setScheduleName',
        'school_year' => 'setSchoolYear',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'status' => 'setStatus',
        'phone_number_list' => 'setPhoneNumberList'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'tt_scope_name' => 'getTtScopeName',
        'supplier_name' => 'getSupplierName',
        'supplier_url' => 'getSupplierUrl',
        'product' => 'getProduct',
        'version' => 'getVersion',
        'school_info_ref_id' => 'getSchoolInfoRefId',
        'school_name' => 'getSchoolName',
        'schedule_creation_date' => 'getScheduleCreationDate',
        'schedule_name' => 'getScheduleName',
        'school_year' => 'getSchoolYear',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'status' => 'getStatus',
        'phone_number_list' => 'getPhoneNumberList'
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
        $this->container['tt_scope_name'] = isset($data['tt_scope_name']) ? $data['tt_scope_name'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['supplier_url'] = isset($data['supplier_url']) ? $data['supplier_url'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['school_info_ref_id'] = isset($data['school_info_ref_id']) ? $data['school_info_ref_id'] : null;
        $this->container['school_name'] = isset($data['school_name']) ? $data['school_name'] : null;
        $this->container['schedule_creation_date'] = isset($data['schedule_creation_date']) ? $data['schedule_creation_date'] : null;
        $this->container['schedule_name'] = isset($data['schedule_name']) ? $data['schedule_name'] : null;
        $this->container['school_year'] = isset($data['school_year']) ? $data['school_year'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['phone_number_list'] = isset($data['phone_number_list']) ? $data['phone_number_list'] : null;
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
        if ($this->container['tt_scope_name'] === null) {
            $invalid_properties[] = "'tt_scope_name' can't be null";
        }
        if ($this->container['supplier_name'] === null) {
            $invalid_properties[] = "'supplier_name' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalid_properties[] = "'product' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['school_info_ref_id'] === null) {
            $invalid_properties[] = "'school_info_ref_id' can't be null";
        }
        if ($this->container['school_name'] === null) {
            $invalid_properties[] = "'school_name' can't be null";
        }
        if ($this->container['school_year'] === null) {
            $invalid_properties[] = "'school_year' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
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
        if ($this->container['tt_scope_name'] === null) {
            return false;
        }
        if ($this->container['supplier_name'] === null) {
            return false;
        }
        if ($this->container['product'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['school_info_ref_id'] === null) {
            return false;
        }
        if ($this->container['school_name'] === null) {
            return false;
        }
        if ($this->container['school_year'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
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
     * @param string $ref_id Unique GUID for this Timetable transfer
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets tt_scope_name
     * @return string
     */
    public function getTtScopeName()
    {
        return $this->container['tt_scope_name'];
    }

    /**
     * Sets tt_scope_name
     * @param string $tt_scope_name
     * @return $this
     */
    public function setTtScopeName($tt_scope_name)
    {
        $this->container['tt_scope_name'] = $tt_scope_name;

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
     * @param string $supplier_name
     * @return $this
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

        return $this;
    }

    /**
     * Gets supplier_url
     * @return string
     */
    public function getSupplierUrl()
    {
        return $this->container['supplier_url'];
    }

    /**
     * Sets supplier_url
     * @param string $supplier_url A URL to a page on the supplierâ€™s website that gives information about the transfer and/or contact details for the supplier.
     * @return $this
     */
    public function setSupplierUrl($supplier_url)
    {
        $this->container['supplier_url'] = $supplier_url;

        return $this;
    }

    /**
     * Gets product
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     * @param string $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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
     * @param string $school_info_ref_id The unique school ID, taken from the existing SchoolInfo object (requested from ZIS)
     * @return $this
     */
    public function setSchoolInfoRefId($school_info_ref_id)
    {
        $this->container['school_info_ref_id'] = $school_info_ref_id;

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
     * @param string $school_name
     * @return $this
     */
    public function setSchoolName($school_name)
    {
        $this->container['school_name'] = $school_name;

        return $this;
    }

    /**
     * Gets schedule_creation_date
     * @return \DateTime
     */
    public function getScheduleCreationDate()
    {
        return $this->container['schedule_creation_date'];
    }

    /**
     * Sets schedule_creation_date
     * @param \DateTime $schedule_creation_date Date schedule was created or last edited (omitted for &quot;Basic data only&quot; message)
     * @return $this
     */
    public function setScheduleCreationDate($schedule_creation_date)
    {
        $this->container['schedule_creation_date'] = $schedule_creation_date;

        return $this;
    }

    /**
     * Gets schedule_name
     * @return string
     */
    public function getScheduleName()
    {
        return $this->container['schedule_name'];
    }

    /**
     * Sets schedule_name
     * @param string $schedule_name
     * @return $this
     */
    public function setScheduleName($schedule_name)
    {
        $this->container['schedule_name'] = $schedule_name;

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
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date First day of the timetable
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
     * @param \DateTime $end_date Last day of the timetable
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param string $status The &quot;Status&quot; of the timetable transfer &#039;BT&#039; and &#039;ET&#039; are sent by TTSoftware when sending a timetable. The others are sent by the MIS after receiving a timetable. (See also &quot;Reasons for Status&quot; below).
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets phone_number_list
     * @return string[]
     */
    public function getPhoneNumberList()
    {
        return $this->container['phone_number_list'];
    }

    /**
     * Sets phone_number_list
     * @param string[] $phone_number_list The supplier&#039;s phone number(s).
     * @return $this
     */
    public function setPhoneNumberList($phone_number_list)
    {
        $this->container['phone_number_list'] = $phone_number_list;

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
