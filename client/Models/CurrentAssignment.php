<?php
/**
 * CurrentAssignment
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
 * CurrentAssignment Class Doc Comment
 *
 * @category    Class */
/**
 * @package     DataExchange\SIFUK20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CurrentAssignment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CurrentAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sif_ref_id' => '\DataExchange\SIFUK20\Models\SIFRefId1',
        'la_id' => 'string',
        'establishment_id' => 'string',
        'posts' => '\DataExchange\SIFUK20\Models\Posts'
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
        'sif_ref_id' => 'SIF_RefId',
        'la_id' => 'LAId',
        'establishment_id' => 'EstablishmentId',
        'posts' => 'Posts'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'sif_ref_id' => 'setSifRefId',
        'la_id' => 'setLaId',
        'establishment_id' => 'setEstablishmentId',
        'posts' => 'setPosts'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'sif_ref_id' => 'getSifRefId',
        'la_id' => 'getLaId',
        'establishment_id' => 'getEstablishmentId',
        'posts' => 'getPosts'
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
        $this->container['sif_ref_id'] = isset($data['sif_ref_id']) ? $data['sif_ref_id'] : null;
        $this->container['la_id'] = isset($data['la_id']) ? $data['la_id'] : null;
        $this->container['establishment_id'] = isset($data['establishment_id']) ? $data['establishment_id'] : null;
        $this->container['posts'] = isset($data['posts']) ? $data['posts'] : null;
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
     * Gets sif_ref_id
     * @return \DataExchange\SIFUK20\Models\SIFRefId1
     */
    public function getSifRefId()
    {
        return $this->container['sif_ref_id'];
    }

    /**
     * Sets sif_ref_id
     * @param \DataExchange\SIFUK20\Models\SIFRefId1 $sif_ref_id
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
     * @param string $la_id The DfES assigned number for the LA in which the workforce member is working, if associated.
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
     * @param string $establishment_id The DfES assigned number for the school or establishment in which the workforce member is working. Note that the school may not necessarily be in the same LA listed as the LAId.
     * @return $this
     */
    public function setEstablishmentId($establishment_id)
    {
        $this->container['establishment_id'] = $establishment_id;

        return $this;
    }

    /**
     * Gets posts
     * @return \DataExchange\SIFUK20\Models\Posts
     */
    public function getPosts()
    {
        return $this->container['posts'];
    }

    /**
     * Sets posts
     * @param \DataExchange\SIFUK20\Models\Posts $posts
     * @return $this
     */
    public function setPosts($posts)
    {
        $this->container['posts'] = $posts;

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
