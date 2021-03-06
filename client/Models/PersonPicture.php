<?php
/**
 * PersonPicture
 *
 * PHP version 5
 *
 * @category Class
 * @package  DataExchange\SIFUK20
 * @author   DataExchange team
 * @link     https://developer.dataexchange.education
 */

/**
 * SIF (UK), v.2.0
 *
 * OpenAPI specification for the SIF (UK), v.2.0 data model. Generated by DataExchange (dataexchange.educaton) at 2017-08-13 19:14:57
 *
 * OpenAPI spec version: 1.0.0.20170813191457
 * Contact: support@dataexchange.education
 * Generated by: https://developer.dataexchange.education
 *
 */

/**
 * NOTE: This class is auto generated.
 * https://developer.dataexchange.education
 * Do not edit the class manually.
 */

namespace DataExchange\SIFUK20\Models;

use \ArrayAccess;

/**
 * PersonPicture Class Doc Comment
 *
 * @category    Class
 * @description This object either contains or references a person&amp;#039;s picture. Compare with US/Canada objects:
 * @package     DataExchange\SIFUK20
 * @author      DataExchange team
 * @link        https://developer.dataexchange.education
 */
class PersonPicture implements ArrayAccess
{
    const DISCRIMINATOR = null;

    const IS_ARRAY = false;
    const ITEMS = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PersonPicture';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'person_ref_id' => 'string',
        'sif_ref_object_list' => 'string[]',
        'school_year' => 'string',
        'picture_source' => '\DataExchange\SIFUK20\Models\PictureSource',
        'ok_to_publish' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'person_ref_id' => null,
        'sif_ref_object_list' => null,
        'school_year' => null,
        'picture_source' => null,
        'ok_to_publish' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'person_ref_id' => '@PersonRefId',
        'sif_ref_object_list' => 'SIF_RefObjectList',
        'school_year' => 'SchoolYear',
        'picture_source' => 'PictureSource',
        'ok_to_publish' => 'OKToPublish'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'person_ref_id' => 'setPersonRefId',
        'sif_ref_object_list' => 'setSifRefObjectList',
        'school_year' => 'setSchoolYear',
        'picture_source' => 'setPictureSource',
        'ok_to_publish' => 'setOkToPublish'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'person_ref_id' => 'getPersonRefId',
        'sif_ref_object_list' => 'getSifRefObjectList',
        'school_year' => 'getSchoolYear',
        'picture_source' => 'getPictureSource',
        'ok_to_publish' => 'getOkToPublish'
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
        $this->container['person_ref_id'] = isset($data['person_ref_id']) ? $data['person_ref_id'] : null;
        $this->container['sif_ref_object_list'] = isset($data['sif_ref_object_list']) ? $data['sif_ref_object_list'] : null;
        $this->container['school_year'] = isset($data['school_year']) ? $data['school_year'] : null;
        $this->container['picture_source'] = isset($data['picture_source']) ? $data['picture_source'] : null;
        $this->container['ok_to_publish'] = isset($data['ok_to_publish']) ? $data['ok_to_publish'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['person_ref_id'] === null) {
            $invalid_properties[] = "'person_ref_id' can't be null";
        }
        if ($this->container['sif_ref_object_list'] === null) {
            $invalid_properties[] = "'sif_ref_object_list' can't be null";
        }
        if ($this->container['school_year'] === null) {
            $invalid_properties[] = "'school_year' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['person_ref_id'] === null) {
            return false;
        }
        if ($this->container['sif_ref_object_list'] === null) {
            return false;
        }
        if ($this->container['school_year'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets person_ref_id
     * @return string
     */
    public function getPersonRefId()
    {
        return isset($this->container['person_ref_id']) ? $this->container['person_ref_id'] : null;
    }

    /**
     * Sets person_ref_id
     * @param string $person_ref_id This is the GUID of the person whose picture this is. It is important to note that using the same GUID a person may have a LearnerPersonal record, a WorkforcePersonal record, and a ContactPersonal record all at the same time. This same picture is applicable regardless of the associated object type(s).
     * @return $this
     */
    public function setPersonRefId($person_ref_id)
    {
        $this->container['person_ref_id'] = $person_ref_id;

        return $this;
    }

    /**
     * Gets sif_ref_object_list
     * @return string[]
     */
    public function getSifRefObjectList()
    {
        return isset($this->container['sif_ref_object_list']) ? $this->container['sif_ref_object_list'] : null;
    }

    /**
     * Sets sif_ref_object_list
     * @param string[] $sif_ref_object_list
     * @return $this
     */
    public function setSifRefObjectList($sif_ref_object_list)
    {
        $this->container['sif_ref_object_list'] = $sif_ref_object_list;

        return $this;
    }

    /**
     * Gets school_year
     * @return string
     */
    public function getSchoolYear()
    {
        return isset($this->container['school_year']) ? $this->container['school_year'] : null;
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
     * Gets picture_source
     * @return \DataExchange\SIFUK20\Models\PictureSource
     */
    public function getPictureSource()
    {
        return isset($this->container['picture_source']) ? $this->container['picture_source'] : null;
    }

    /**
     * Sets picture_source
     * @param \DataExchange\SIFUK20\Models\PictureSource $picture_source
     * @return $this
     */
    public function setPictureSource($picture_source)
    {
        $this->container['picture_source'] = $picture_source;

        return $this;
    }

    /**
     * Gets ok_to_publish
     * @return string
     */
    public function getOkToPublish()
    {
        return isset($this->container['ok_to_publish']) ? $this->container['ok_to_publish'] : null;
    }

    /**
     * Sets ok_to_publish
     * @param string $ok_to_publish Can the picture be published?
     * @return $this
     */
    public function setOkToPublish($ok_to_publish)
    {
        $this->container['ok_to_publish'] = $ok_to_publish;

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
     * Gets the string presentation of the object in JSON format
     * @return string
     */
    public function toJson()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DataExchange\SIFUK20\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DataExchange\SIFUK20\ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets the string presentation of the object in XML format
     * @return string
     */
    public function toXml()
    {
        $dom = new \DOMDocument();

        $node = $dom->importNode($this->toXmlNode(), true);

        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $xml = $dom->saveXML($node);

        unset($node);
        unset($dom);

        return $xml;
    }

    /**
     * Gets the string presentation of the object in XML format
     * @return string
     */
    public function toXmlNode()
    {
        $dom = new \DOMDocument();
        $elem = $dom->createElement(self::$swaggerModelName);

        foreach (self::attributeMap() as $key => $property) {
            $value = $this->{$this->getters()[$key]}();

            if (is_null($value)) {
                // Do nothing
                continue;
            }

            if ($property[0] === '@') {
                $elem->setAttribute(substr($property, 1), $value);
            } else {
                if (is_scalar($value)) {
                    $elem->appendChild($dom->createElement($property, $value));
                } elseif ($value instanceof \DateTime) {
                    $format = $this->swaggerFormats()[$key];
                    $str = ($format === 'date') ? $value->format('Y-m-d') : $value->format(\DateTime::ATOM);
                    $elem->appendChild($dom->createElement($property, $str));
                } elseif (is_array($value)) {
                    if (is_scalar($value)) {
                        // TODO
                        /*
                        foreach ($value as $property => $value) {
                            $elem->appendChild($dom->createElement($property, (string) $value));
                        }
                        */
                    } else {
                        // TODO
                        /*
                        foreach ($value as $property => $value) {
                            $elem->appendChild($dom->importNode($value->toXmlNode(), true));
                            // $elem->appendChild($dom->createElement($property, (string) $value));
                        }
                        */
                    }
                } elseif (is_object($value)) {
                    $elem->appendChild($dom->importNode($value->toXmlNode(), true));
                } else {
                    $elem->appendChild($dom->createElement($property, (string) $value));
                }
            }
        }

        if (self::IS_ARRAY) {
            foreach ($this->container as $key => $item) {
                $elem->appendChild($dom->importNode($item->toXmlNode(), true));
            }
        }

        return $elem;
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        return $this->toXml();
    }
}


