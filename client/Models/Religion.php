<?php
/**
 * Religion
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
 * Religion Class Doc Comment
 *
 * @category    Class */
/**
 * @package     DataExchange\UK\20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Religion implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Religion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affiliation_code' => 'string',
        'education_status' => 'string',
        'collective_worship_status' => 'string',
        'source' => 'string'
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
        'affiliation_code' => 'AffiliationCode',
        'education_status' => 'EducationStatus',
        'collective_worship_status' => 'CollectiveWorshipStatus',
        'source' => 'Source'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'affiliation_code' => 'setAffiliationCode',
        'education_status' => 'setEducationStatus',
        'collective_worship_status' => 'setCollectiveWorshipStatus',
        'source' => 'setSource'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'affiliation_code' => 'getAffiliationCode',
        'education_status' => 'getEducationStatus',
        'collective_worship_status' => 'getCollectiveWorshipStatus',
        'source' => 'getSource'
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
        $this->container['affiliation_code'] = isset($data['affiliation_code']) ? $data['affiliation_code'] : null;
        $this->container['education_status'] = isset($data['education_status']) ? $data['education_status'] : null;
        $this->container['collective_worship_status'] = isset($data['collective_worship_status']) ? $data['collective_worship_status'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['affiliation_code'] === null) {
            $invalid_properties[] = "'affiliation_code' can't be null";
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
        if ($this->container['affiliation_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets affiliation_code
     * @return string
     */
    public function getAffiliationCode()
    {
        return $this->container['affiliation_code'];
    }

    /**
     * Sets affiliation_code
     * @param string $affiliation_code Person&#039;s religious faith.
     * @return $this
     */
    public function setAffiliationCode($affiliation_code)
    {
        $this->container['affiliation_code'] = $affiliation_code;

        return $this;
    }

    /**
     * Gets education_status
     * @return string
     */
    public function getEducationStatus()
    {
        return $this->container['education_status'];
    }

    /**
     * Sets education_status
     * @param string $education_status Indicates whether the person is actively attending religious education classes.
     * @return $this
     */
    public function setEducationStatus($education_status)
    {
        $this->container['education_status'] = $education_status;

        return $this;
    }

    /**
     * Gets collective_worship_status
     * @return string
     */
    public function getCollectiveWorshipStatus()
    {
        return $this->container['collective_worship_status'];
    }

    /**
     * Sets collective_worship_status
     * @param string $collective_worship_status Indicates whether the person is participating in religious collective worship.
     * @return $this
     */
    public function setCollectiveWorshipStatus($collective_worship_status)
    {
        $this->container['collective_worship_status'] = $collective_worship_status;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source Source of person&#039;s religious affiliation code.
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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
