<?php
/**
 * LocationContext
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
 * LocationContext Class Doc Comment
 *
 * @category    Class */
 // @description The physical location of an address in terms of Census District, LA Electoral Ward, Parliamentary Constituency, and other defining location-centric characteristics.
/**
 * @package     DataExchange\UK\20
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LocationContext implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LocationContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'census_district' => 'string',
        'ward_code' => 'string',
        'ward_name' => 'string',
        'constituency_code' => 'string',
        'constituency_name' => 'string',
        'parish' => 'string',
        'church_of_england_diocese' => 'string',
        'church_of_england_parish' => 'string',
        'roman_catholic_diocese' => 'string',
        'roman_catholic_parish' => 'string',
        'ls_council_code' => 'string',
        'catchment_area' => 'string'
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
        'census_district' => 'CensusDistrict',
        'ward_code' => 'WardCode',
        'ward_name' => 'WardName',
        'constituency_code' => 'ConstituencyCode',
        'constituency_name' => 'ConstituencyName',
        'parish' => 'Parish',
        'church_of_england_diocese' => 'ChurchOfEnglandDiocese',
        'church_of_england_parish' => 'ChurchOfEnglandParish',
        'roman_catholic_diocese' => 'RomanCatholicDiocese',
        'roman_catholic_parish' => 'RomanCatholicParish',
        'ls_council_code' => 'LSCouncilCode',
        'catchment_area' => 'CatchmentArea'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'census_district' => 'setCensusDistrict',
        'ward_code' => 'setWardCode',
        'ward_name' => 'setWardName',
        'constituency_code' => 'setConstituencyCode',
        'constituency_name' => 'setConstituencyName',
        'parish' => 'setParish',
        'church_of_england_diocese' => 'setChurchOfEnglandDiocese',
        'church_of_england_parish' => 'setChurchOfEnglandParish',
        'roman_catholic_diocese' => 'setRomanCatholicDiocese',
        'roman_catholic_parish' => 'setRomanCatholicParish',
        'ls_council_code' => 'setLsCouncilCode',
        'catchment_area' => 'setCatchmentArea'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'census_district' => 'getCensusDistrict',
        'ward_code' => 'getWardCode',
        'ward_name' => 'getWardName',
        'constituency_code' => 'getConstituencyCode',
        'constituency_name' => 'getConstituencyName',
        'parish' => 'getParish',
        'church_of_england_diocese' => 'getChurchOfEnglandDiocese',
        'church_of_england_parish' => 'getChurchOfEnglandParish',
        'roman_catholic_diocese' => 'getRomanCatholicDiocese',
        'roman_catholic_parish' => 'getRomanCatholicParish',
        'ls_council_code' => 'getLsCouncilCode',
        'catchment_area' => 'getCatchmentArea'
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
        $this->container['census_district'] = isset($data['census_district']) ? $data['census_district'] : null;
        $this->container['ward_code'] = isset($data['ward_code']) ? $data['ward_code'] : null;
        $this->container['ward_name'] = isset($data['ward_name']) ? $data['ward_name'] : null;
        $this->container['constituency_code'] = isset($data['constituency_code']) ? $data['constituency_code'] : null;
        $this->container['constituency_name'] = isset($data['constituency_name']) ? $data['constituency_name'] : null;
        $this->container['parish'] = isset($data['parish']) ? $data['parish'] : null;
        $this->container['church_of_england_diocese'] = isset($data['church_of_england_diocese']) ? $data['church_of_england_diocese'] : null;
        $this->container['church_of_england_parish'] = isset($data['church_of_england_parish']) ? $data['church_of_england_parish'] : null;
        $this->container['roman_catholic_diocese'] = isset($data['roman_catholic_diocese']) ? $data['roman_catholic_diocese'] : null;
        $this->container['roman_catholic_parish'] = isset($data['roman_catholic_parish']) ? $data['roman_catholic_parish'] : null;
        $this->container['ls_council_code'] = isset($data['ls_council_code']) ? $data['ls_council_code'] : null;
        $this->container['catchment_area'] = isset($data['catchment_area']) ? $data['catchment_area'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['ward_code'] === null) {
            $invalid_properties[] = "'ward_code' can't be null";
        }
        if ($this->container['ward_name'] === null) {
            $invalid_properties[] = "'ward_name' can't be null";
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
        if ($this->container['ward_code'] === null) {
            return false;
        }
        if ($this->container['ward_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets census_district
     * @return string
     */
    public function getCensusDistrict()
    {
        return $this->container['census_district'];
    }

    /**
     * Sets census_district
     * @param string $census_district National Population Census Enumeration District.
     * @return $this
     */
    public function setCensusDistrict($census_district)
    {
        $this->container['census_district'] = $census_district;

        return $this;
    }

    /**
     * Gets ward_code
     * @return string
     */
    public function getWardCode()
    {
        return $this->container['ward_code'];
    }

    /**
     * Sets ward_code
     * @param string $ward_code ONS Ward Code
     * @return $this
     */
    public function setWardCode($ward_code)
    {
        $this->container['ward_code'] = $ward_code;

        return $this;
    }

    /**
     * Gets ward_name
     * @return string
     */
    public function getWardName()
    {
        return $this->container['ward_name'];
    }

    /**
     * Sets ward_name
     * @param string $ward_name ONS Ward Name
     * @return $this
     */
    public function setWardName($ward_name)
    {
        $this->container['ward_name'] = $ward_name;

        return $this;
    }

    /**
     * Gets constituency_code
     * @return string
     */
    public function getConstituencyCode()
    {
        return $this->container['constituency_code'];
    }

    /**
     * Sets constituency_code
     * @param string $constituency_code ONS Parliamentary Constituency Code
     * @return $this
     */
    public function setConstituencyCode($constituency_code)
    {
        $this->container['constituency_code'] = $constituency_code;

        return $this;
    }

    /**
     * Gets constituency_name
     * @return string
     */
    public function getConstituencyName()
    {
        return $this->container['constituency_name'];
    }

    /**
     * Sets constituency_name
     * @param string $constituency_name ONS Parliamentary Constituency Name
     * @return $this
     */
    public function setConstituencyName($constituency_name)
    {
        $this->container['constituency_name'] = $constituency_name;

        return $this;
    }

    /**
     * Gets parish
     * @return string
     */
    public function getParish()
    {
        return $this->container['parish'];
    }

    /**
     * Sets parish
     * @param string $parish ONS Parish Council Name
     * @return $this
     */
    public function setParish($parish)
    {
        $this->container['parish'] = $parish;

        return $this;
    }

    /**
     * Gets church_of_england_diocese
     * @return string
     */
    public function getChurchOfEnglandDiocese()
    {
        return $this->container['church_of_england_diocese'];
    }

    /**
     * Sets church_of_england_diocese
     * @param string $church_of_england_diocese Church of England Diocese Code
     * @return $this
     */
    public function setChurchOfEnglandDiocese($church_of_england_diocese)
    {
        $this->container['church_of_england_diocese'] = $church_of_england_diocese;

        return $this;
    }

    /**
     * Gets church_of_england_parish
     * @return string
     */
    public function getChurchOfEnglandParish()
    {
        return $this->container['church_of_england_parish'];
    }

    /**
     * Sets church_of_england_parish
     * @param string $church_of_england_parish Church of England Parish Code
     * @return $this
     */
    public function setChurchOfEnglandParish($church_of_england_parish)
    {
        $this->container['church_of_england_parish'] = $church_of_england_parish;

        return $this;
    }

    /**
     * Gets roman_catholic_diocese
     * @return string
     */
    public function getRomanCatholicDiocese()
    {
        return $this->container['roman_catholic_diocese'];
    }

    /**
     * Sets roman_catholic_diocese
     * @param string $roman_catholic_diocese Roman Catholic Diocese Code
     * @return $this
     */
    public function setRomanCatholicDiocese($roman_catholic_diocese)
    {
        $this->container['roman_catholic_diocese'] = $roman_catholic_diocese;

        return $this;
    }

    /**
     * Gets roman_catholic_parish
     * @return string
     */
    public function getRomanCatholicParish()
    {
        return $this->container['roman_catholic_parish'];
    }

    /**
     * Sets roman_catholic_parish
     * @param string $roman_catholic_parish Roman Catholic Parish
     * @return $this
     */
    public function setRomanCatholicParish($roman_catholic_parish)
    {
        $this->container['roman_catholic_parish'] = $roman_catholic_parish;

        return $this;
    }

    /**
     * Gets ls_council_code
     * @return string
     */
    public function getLsCouncilCode()
    {
        return $this->container['ls_council_code'];
    }

    /**
     * Sets ls_council_code
     * @param string $ls_council_code Learning and Skills Council area code
     * @return $this
     */
    public function setLsCouncilCode($ls_council_code)
    {
        $this->container['ls_council_code'] = $ls_council_code;

        return $this;
    }

    /**
     * Gets catchment_area
     * @return string
     */
    public function getCatchmentArea()
    {
        return $this->container['catchment_area'];
    }

    /**
     * Sets catchment_area
     * @param string $catchment_area School catchment area description
     * @return $this
     */
    public function setCatchmentArea($catchment_area)
    {
        $this->container['catchment_area'] = $catchment_area;

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
