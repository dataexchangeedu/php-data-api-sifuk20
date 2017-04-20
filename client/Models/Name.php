<?php
/**
 * Name
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
 * Name Class Doc Comment
 *
 * @category    Class */
 // @description The Name element defines name information for a person and occurs within the PersonalInformation element.
/**
 * @package     DataExchange\UK\20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Name implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Name';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'title' => 'string',
        'family_name' => 'string',
        'given_name' => 'string',
        'middle_names' => 'string',
        'family_name_first' => 'string',
        'preferred_family_name' => 'string',
        'preferred_family_name_first' => 'string',
        'preferred_given_name' => 'string',
        'suffix' => 'string',
        'full_name' => 'string'
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
        'type' => '@Type',
        'title' => 'Title',
        'family_name' => 'FamilyName',
        'given_name' => 'GivenName',
        'middle_names' => 'MiddleNames',
        'family_name_first' => 'FamilyNameFirst',
        'preferred_family_name' => 'PreferredFamilyName',
        'preferred_family_name_first' => 'PreferredFamilyNameFirst',
        'preferred_given_name' => 'PreferredGivenName',
        'suffix' => 'Suffix',
        'full_name' => 'FullName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'title' => 'setTitle',
        'family_name' => 'setFamilyName',
        'given_name' => 'setGivenName',
        'middle_names' => 'setMiddleNames',
        'family_name_first' => 'setFamilyNameFirst',
        'preferred_family_name' => 'setPreferredFamilyName',
        'preferred_family_name_first' => 'setPreferredFamilyNameFirst',
        'preferred_given_name' => 'setPreferredGivenName',
        'suffix' => 'setSuffix',
        'full_name' => 'setFullName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'title' => 'getTitle',
        'family_name' => 'getFamilyName',
        'given_name' => 'getGivenName',
        'middle_names' => 'getMiddleNames',
        'family_name_first' => 'getFamilyNameFirst',
        'preferred_family_name' => 'getPreferredFamilyName',
        'preferred_family_name_first' => 'getPreferredFamilyNameFirst',
        'preferred_given_name' => 'getPreferredGivenName',
        'suffix' => 'getSuffix',
        'full_name' => 'getFullName'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['middle_names'] = isset($data['middle_names']) ? $data['middle_names'] : null;
        $this->container['family_name_first'] = isset($data['family_name_first']) ? $data['family_name_first'] : null;
        $this->container['preferred_family_name'] = isset($data['preferred_family_name']) ? $data['preferred_family_name'] : null;
        $this->container['preferred_family_name_first'] = isset($data['preferred_family_name_first']) ? $data['preferred_family_name_first'] : null;
        $this->container['preferred_given_name'] = isset($data['preferred_given_name']) ? $data['preferred_given_name'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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
        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Code that specifies what type of name this is.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title A title or prefix associated with the name. If any of: Mr, Mrs, Ms, Miss, Rev, Fr, Dr, Prof, Hon, Sir, Lord, Lady - these must be as shown, otherwise free text. Note that title is not applicable to learners.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets family_name
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     * @param string $family_name Full legal family name. That part of the person&#039;s name which is used to describe family, clan, tribal group, or marital association. Note that this element is always required. However, when associated with a contact it may not be possible to know the family name in which case you should add the available information to the FullName element.
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets given_name
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     * @param string $given_name Full given name (forename) of the person. Note that this element is always required. However, when associated with a contact it may not be possible to know the given name in which case you should add the available information to the FullName element.
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets middle_names
     * @return string
     */
    public function getMiddleNames()
    {
        return $this->container['middle_names'];
    }

    /**
     * Sets middle_names
     * @param string $middle_names All other given or middle names, each separated with a single space character.
     * @return $this
     */
    public function setMiddleNames($middle_names)
    {
        $this->container['middle_names'] = $middle_names;

        return $this;
    }

    /**
     * Gets family_name_first
     * @return string
     */
    public function getFamilyNameFirst()
    {
        return $this->container['family_name_first'];
    }

    /**
     * Sets family_name_first
     * @param string $family_name_first An indicator used to identify the naming conventions used by some predominantly non-European, ethnic or language groups and related to the display nature of a name.
     * @return $this
     */
    public function setFamilyNameFirst($family_name_first)
    {
        $this->container['family_name_first'] = $family_name_first;

        return $this;
    }

    /**
     * Gets preferred_family_name
     * @return string
     */
    public function getPreferredFamilyName()
    {
        return $this->container['preferred_family_name'];
    }

    /**
     * Sets preferred_family_name
     * @param string $preferred_family_name The family name preferred most by the person (as written).
     * @return $this
     */
    public function setPreferredFamilyName($preferred_family_name)
    {
        $this->container['preferred_family_name'] = $preferred_family_name;

        return $this;
    }

    /**
     * Gets preferred_family_name_first
     * @return string
     */
    public function getPreferredFamilyNameFirst()
    {
        return $this->container['preferred_family_name_first'];
    }

    /**
     * Sets preferred_family_name_first
     * @param string $preferred_family_name_first An indicator used to identify the naming conventions used by some predominantly non-European, ethnic or language groups and related to the display nature of a name.
     * @return $this
     */
    public function setPreferredFamilyNameFirst($preferred_family_name_first)
    {
        $this->container['preferred_family_name_first'] = $preferred_family_name_first;

        return $this;
    }

    /**
     * Gets preferred_given_name
     * @return string
     */
    public function getPreferredGivenName()
    {
        return $this->container['preferred_given_name'];
    }

    /**
     * Sets preferred_given_name
     * @param string $preferred_given_name The given name preferred most by the person (as written).
     * @return $this
     */
    public function setPreferredGivenName($preferred_given_name)
    {
        $this->container['preferred_given_name'] = $preferred_given_name;

        return $this;
    }

    /**
     * Gets suffix
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     * @param string $suffix Textual suffix like PHD, JP, BSc.
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets full_name
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     * @param string $full_name A free text field for the complete name for display purposes. If this is associated with a ContactPersonal record and the FamilyName and GivenName are not both specified, then this becomes mandatory.
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

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
