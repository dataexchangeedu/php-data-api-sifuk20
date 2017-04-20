<?php
/**
 * Junction
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
 * Junction Class Doc Comment
 *
 * @category    Class */
 // @description A representation of the Curriculum Diagram.
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Junction implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Junction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'label' => 'string',
        'short_label' => 'string',
        'local_type' => 'string',
        'input_list' => '\DataExchange\SIFUK20\Models\Input[]',
        'output_list' => '\DataExchange\SIFUK20\Models\Output[]'
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
        'label' => 'Label',
        'short_label' => 'ShortLabel',
        'local_type' => 'LocalType',
        'input_list' => 'InputList',
        'output_list' => 'OutputList'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'label' => 'setLabel',
        'short_label' => 'setShortLabel',
        'local_type' => 'setLocalType',
        'input_list' => 'setInputList',
        'output_list' => 'setOutputList'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'label' => 'getLabel',
        'short_label' => 'getShortLabel',
        'local_type' => 'getLocalType',
        'input_list' => 'getInputList',
        'output_list' => 'getOutputList'
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['short_label'] = isset($data['short_label']) ? $data['short_label'] : null;
        $this->container['local_type'] = isset($data['local_type']) ? $data['local_type'] : null;
        $this->container['input_list'] = isset($data['input_list']) ? $data['input_list'] : null;
        $this->container['output_list'] = isset($data['output_list']) ? $data['output_list'] : null;
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
        if ($this->container['label'] === null) {
            $invalid_properties[] = "'label' can't be null";
        }
        if ($this->container['short_label'] === null) {
            $invalid_properties[] = "'short_label' can't be null";
        }
        if ($this->container['input_list'] === null) {
            $invalid_properties[] = "'input_list' can't be null";
        }
        if ($this->container['output_list'] === null) {
            $invalid_properties[] = "'output_list' can't be null";
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
        if ($this->container['label'] === null) {
            return false;
        }
        if ($this->container['short_label'] === null) {
            return false;
        }
        if ($this->container['input_list'] === null) {
            return false;
        }
        if ($this->container['output_list'] === null) {
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
     * @param string $ref_id A unique local identifier for this junction
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets short_label
     * @return string
     */
    public function getShortLabel()
    {
        return $this->container['short_label'];
    }

    /**
     * Sets short_label
     * @param string $short_label
     * @return $this
     */
    public function setShortLabel($short_label)
    {
        $this->container['short_label'] = $short_label;

        return $this;
    }

    /**
     * Gets local_type
     * @return string
     */
    public function getLocalType()
    {
        return $this->container['local_type'];
    }

    /**
     * Sets local_type
     * @param string $local_type
     * @return $this
     */
    public function setLocalType($local_type)
    {
        $this->container['local_type'] = $local_type;

        return $this;
    }

    /**
     * Gets input_list
     * @return \DataExchange\SIFUK20\Models\Input[]
     */
    public function getInputList()
    {
        return $this->container['input_list'];
    }

    /**
     * Sets input_list
     * @param \DataExchange\SIFUK20\Models\Input[] $input_list
     * @return $this
     */
    public function setInputList($input_list)
    {
        $this->container['input_list'] = $input_list;

        return $this;
    }

    /**
     * Gets output_list
     * @return \DataExchange\SIFUK20\Models\Output[]
     */
    public function getOutputList()
    {
        return $this->container['output_list'];
    }

    /**
     * Sets output_list
     * @param \DataExchange\SIFUK20\Models\Output[] $output_list
     * @return $this
     */
    public function setOutputList($output_list)
    {
        $this->container['output_list'] = $output_list;

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
