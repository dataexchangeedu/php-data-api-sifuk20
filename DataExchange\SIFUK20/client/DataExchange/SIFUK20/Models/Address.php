<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category    Class */
 // @description The person&amp;#039;s current physical address.
/**
 * @package     
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'local_id' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'paon' => '\DataExchange\SIFUK20\Models\PAON',
        'saon' => '\DataExchange\SIFUK20\Models\SAON',
        'street' => 'string',
        'locality' => 'string',
        'town' => 'string',
        'administrative_area' => 'string',
        'county' => 'string',
        'post_town' => 'string',
        'post_code' => 'string',
        'country' => 'string',
        'unique_property_reference_number' => 'int',
        'unique_street_reference_number' => 'int',
        'location_context' => '\DataExchange\SIFUK20\Models\LocationContext',
        'grid_location' => '\DataExchange\SIFUK20\Models\GridLocation'
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
        'local_id' => 'LocalId',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'paon' => 'PAON',
        'saon' => 'SAON',
        'street' => 'Street',
        'locality' => 'Locality',
        'town' => 'Town',
        'administrative_area' => 'AdministrativeArea',
        'county' => 'County',
        'post_town' => 'PostTown',
        'post_code' => 'PostCode',
        'country' => 'Country',
        'unique_property_reference_number' => 'UniquePropertyReferenceNumber',
        'unique_street_reference_number' => 'UniqueStreetReferenceNumber',
        'location_context' => 'LocationContext',
        'grid_location' => 'GridLocation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'local_id' => 'setLocalId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'paon' => 'setPaon',
        'saon' => 'setSaon',
        'street' => 'setStreet',
        'locality' => 'setLocality',
        'town' => 'setTown',
        'administrative_area' => 'setAdministrativeArea',
        'county' => 'setCounty',
        'post_town' => 'setPostTown',
        'post_code' => 'setPostCode',
        'country' => 'setCountry',
        'unique_property_reference_number' => 'setUniquePropertyReferenceNumber',
        'unique_street_reference_number' => 'setUniqueStreetReferenceNumber',
        'location_context' => 'setLocationContext',
        'grid_location' => 'setGridLocation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'local_id' => 'getLocalId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'paon' => 'getPaon',
        'saon' => 'getSaon',
        'street' => 'getStreet',
        'locality' => 'getLocality',
        'town' => 'getTown',
        'administrative_area' => 'getAdministrativeArea',
        'county' => 'getCounty',
        'post_town' => 'getPostTown',
        'post_code' => 'getPostCode',
        'country' => 'getCountry',
        'unique_property_reference_number' => 'getUniquePropertyReferenceNumber',
        'unique_street_reference_number' => 'getUniqueStreetReferenceNumber',
        'location_context' => 'getLocationContext',
        'grid_location' => 'getGridLocation'
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
        $this->container['local_id'] = isset($data['local_id']) ? $data['local_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['paon'] = isset($data['paon']) ? $data['paon'] : null;
        $this->container['saon'] = isset($data['saon']) ? $data['saon'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['administrative_area'] = isset($data['administrative_area']) ? $data['administrative_area'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['post_town'] = isset($data['post_town']) ? $data['post_town'] : null;
        $this->container['post_code'] = isset($data['post_code']) ? $data['post_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['unique_property_reference_number'] = isset($data['unique_property_reference_number']) ? $data['unique_property_reference_number'] : null;
        $this->container['unique_street_reference_number'] = isset($data['unique_street_reference_number']) ? $data['unique_street_reference_number'] : null;
        $this->container['location_context'] = isset($data['location_context']) ? $data['location_context'] : null;
        $this->container['grid_location'] = isset($data['grid_location']) ? $data['grid_location'] : null;
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
     * @param string $type Code that defines the address type.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $local_id The locally assigned identifier for this address in the publishing system.
     * @return $this
     */
    public function setLocalId($local_id)
    {
        $this->container['local_id'] = $local_id;

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
     * @param \DateTime $start_date Date person began using this address.
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
     * @param \DateTime $end_date Date person stopped using this address.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets paon
     * @return \DataExchange\SIFUK20\Models\PAON
     */
    public function getPaon()
    {
        return $this->container['paon'];
    }

    /**
     * Sets paon
     * @param \DataExchange\SIFUK20\Models\PAON $paon
     * @return $this
     */
    public function setPaon($paon)
    {
        $this->container['paon'] = $paon;

        return $this;
    }

    /**
     * Gets saon
     * @return \DataExchange\SIFUK20\Models\SAON
     */
    public function getSaon()
    {
        return $this->container['saon'];
    }

    /**
     * Sets saon
     * @param \DataExchange\SIFUK20\Models\SAON $saon
     * @return $this
     */
    public function setSaon($saon)
    {
        $this->container['saon'] = $saon;

        return $this;
    }

    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     * @param string $street The name of the street.
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality The locality name refers to a neighbourhood, suburb, district, village, estate, settlement, or parish that may form part of a town, or stand in its own right within the context of an administrative area. Where an industrial estate contains streets it is defined as a locality in its own right. At least one of Locality, Town, or AdministrativeArea must be specified.
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets town
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     * @param string $town The city name refers to a city or town that is not an adminstrative area, a suburb of an administrative area that does not form part of another town or a London district. At least one of Locality, Town, or AdministrativeArea must be specified.
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets administrative_area
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrative_area'];
    }

    /**
     * Sets administrative_area
     * @param string $administrative_area The administrative area is a geographic area that may be the highest level local administrative area, and may be a county or a unitary authority, an island or island group, or London. At least one of Locality, Town, or AdministrativeArea must be specified
     * @return $this
     */
    public function setAdministrativeArea($administrative_area)
    {
        $this->container['administrative_area'] = $administrative_area;

        return $this;
    }

    /**
     * Gets county
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     * @param string $county Where applicable, the name of the county.
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets post_town
     * @return string
     */
    public function getPostTown()
    {
        return $this->container['post_town'];
    }

    /**
     * Sets post_town
     * @param string $post_town Post Office usually assigns these based on Sorting Office.
     * @return $this
     */
    public function setPostTown($post_town)
    {
        $this->container['post_town'] = $post_town;

        return $this;
    }

    /**
     * Gets post_code
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     * @param string $post_code The code allocated by the Post Office (within GBR) to identify a group of postal delivery points. Valid Postcode formats are:
     * @return $this
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Country where physical address is located, if known. Usually this is going to be &#039;GBR&#039; but could be outside the UK.
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets unique_property_reference_number
     * @return int
     */
    public function getUniquePropertyReferenceNumber()
    {
        return $this->container['unique_property_reference_number'];
    }

    /**
     * Sets unique_property_reference_number
     * @param int $unique_property_reference_number
     * @return $this
     */
    public function setUniquePropertyReferenceNumber($unique_property_reference_number)
    {
        $this->container['unique_property_reference_number'] = $unique_property_reference_number;

        return $this;
    }

    /**
     * Gets unique_street_reference_number
     * @return int
     */
    public function getUniqueStreetReferenceNumber()
    {
        return $this->container['unique_street_reference_number'];
    }

    /**
     * Sets unique_street_reference_number
     * @param int $unique_street_reference_number
     * @return $this
     */
    public function setUniqueStreetReferenceNumber($unique_street_reference_number)
    {
        $this->container['unique_street_reference_number'] = $unique_street_reference_number;

        return $this;
    }

    /**
     * Gets location_context
     * @return \DataExchange\SIFUK20\Models\LocationContext
     */
    public function getLocationContext()
    {
        return $this->container['location_context'];
    }

    /**
     * Sets location_context
     * @param \DataExchange\SIFUK20\Models\LocationContext $location_context
     * @return $this
     */
    public function setLocationContext($location_context)
    {
        $this->container['location_context'] = $location_context;

        return $this;
    }

    /**
     * Gets grid_location
     * @return \DataExchange\SIFUK20\Models\GridLocation
     */
    public function getGridLocation()
    {
        return $this->container['grid_location'];
    }

    /**
     * Sets grid_location
     * @param \DataExchange\SIFUK20\Models\GridLocation $grid_location
     * @return $this
     */
    public function setGridLocation($grid_location)
    {
        $this->container['grid_location'] = $grid_location;

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
