<?php
/**
 * PreviousEstablishment
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
 * PreviousEstablishment Class Doc Comment
 *
 * @category    Class */
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PreviousEstablishment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PreviousEstablishment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'establishment_id' => 'string',
        'establishment_name' => 'string',
        'la_id' => 'string',
        'entry_date' => '\DateTime',
        'exit_date' => '\DateTime',
        'exit_type' => 'string',
        'last_school' => 'string'
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
        'establishment_id' => 'EstablishmentId',
        'establishment_name' => 'EstablishmentName',
        'la_id' => 'LAId',
        'entry_date' => 'EntryDate',
        'exit_date' => 'ExitDate',
        'exit_type' => 'ExitType',
        'last_school' => 'LastSchool'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'establishment_id' => 'setEstablishmentId',
        'establishment_name' => 'setEstablishmentName',
        'la_id' => 'setLaId',
        'entry_date' => 'setEntryDate',
        'exit_date' => 'setExitDate',
        'exit_type' => 'setExitType',
        'last_school' => 'setLastSchool'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'establishment_id' => 'getEstablishmentId',
        'establishment_name' => 'getEstablishmentName',
        'la_id' => 'getLaId',
        'entry_date' => 'getEntryDate',
        'exit_date' => 'getExitDate',
        'exit_type' => 'getExitType',
        'last_school' => 'getLastSchool'
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
        $this->container['establishment_id'] = isset($data['establishment_id']) ? $data['establishment_id'] : null;
        $this->container['establishment_name'] = isset($data['establishment_name']) ? $data['establishment_name'] : null;
        $this->container['la_id'] = isset($data['la_id']) ? $data['la_id'] : null;
        $this->container['entry_date'] = isset($data['entry_date']) ? $data['entry_date'] : null;
        $this->container['exit_date'] = isset($data['exit_date']) ? $data['exit_date'] : null;
        $this->container['exit_type'] = isset($data['exit_type']) ? $data['exit_type'] : null;
        $this->container['last_school'] = isset($data['last_school']) ? $data['last_school'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
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
        return true;
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
     * @param string $establishment_id Establishment Number for this school
     * @return $this
     */
    public function setEstablishmentId($establishment_id)
    {
        $this->container['establishment_id'] = $establishment_id;

        return $this;
    }

    /**
     * Gets establishment_name
     * @return string
     */
    public function getEstablishmentName()
    {
        return $this->container['establishment_name'];
    }

    /**
     * Sets establishment_name
     * @param string $establishment_name School&#039;s name as indicated on the Annual Schools Census.
     * @return $this
     */
    public function setEstablishmentName($establishment_name)
    {
        $this->container['establishment_name'] = $establishment_name;

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
     * @param string $la_id The 3-digit LA number assigned by DfES.
     * @return $this
     */
    public function setLaId($la_id)
    {
        $this->container['la_id'] = $la_id;

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
     * @param \DateTime $entry_date The date the learner entered this school or establishment.
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
     * @param \DateTime $exit_date The date the learner exited this school or establishment.
     * @return $this
     */
    public function setExitDate($exit_date)
    {
        $this->container['exit_date'] = $exit_date;

        return $this;
    }

    /**
     * Gets exit_type
     * @return string
     */
    public function getExitType()
    {
        return $this->container['exit_type'];
    }

    /**
     * Sets exit_type
     * @param string $exit_type Code indicating the type of exit from this school or establishment.
     * @return $this
     */
    public function setExitType($exit_type)
    {
        $this->container['exit_type'] = $exit_type;

        return $this;
    }

    /**
     * Gets last_school
     * @return string
     */
    public function getLastSchool()
    {
        return $this->container['last_school'];
    }

    /**
     * Sets last_school
     * @param string $last_school An indication of whether the described school or establishment was the last establishment the learner attended. Note that it is possible that more than one establishment can be marked as LastSchool when a learner is enroled in more than one school simultaneously.
     * @return $this
     */
    public function setLastSchool($last_school)
    {
        $this->container['last_school'] = $last_school;

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
