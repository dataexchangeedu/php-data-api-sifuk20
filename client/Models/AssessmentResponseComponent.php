<?php
/**
 * AssessmentResponseComponent
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
 * AssessmentResponseComponent Class Doc Comment
 *
 * @category    Class
 * @description This object describes a single component of the assessment or test paper/quiz taken by a learner. A response component has one or more responses.
 * @package     DataExchange\SIFUK20
 * @author      DataExchange team
 * @link        https://developer.dataexchange.education
 */
class AssessmentResponseComponent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    const IS_ARRAY = false;
    const ITEMS = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AssessmentResponseComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'name' => 'string',
        'local_id' => 'string',
        'supplier_name' => 'string',
        'description' => 'string',
        'year_list' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ref_id' => null,
        'name' => null,
        'local_id' => null,
        'supplier_name' => null,
        'description' => null,
        'year_list' => null
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
        'ref_id' => '@RefId',
        'name' => 'Name',
        'local_id' => 'LocalId',
        'supplier_name' => 'SupplierName',
        'description' => 'Description',
        'year_list' => 'YearList'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'name' => 'setName',
        'local_id' => 'setLocalId',
        'supplier_name' => 'setSupplierName',
        'description' => 'setDescription',
        'year_list' => 'setYearList'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'name' => 'getName',
        'local_id' => 'getLocalId',
        'supplier_name' => 'getSupplierName',
        'description' => 'getDescription',
        'year_list' => 'getYearList'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['local_id'] = isset($data['local_id']) ? $data['local_id'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['year_list'] = isset($data['year_list']) ? $data['year_list'] : null;
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
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
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

        if ($this->container['ref_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
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
        return isset($this->container['ref_id']) ? $this->container['ref_id'] : null;
    }

    /**
     * Sets ref_id
     * @param string $ref_id The GUID that uniquely identifies an instance of this object.
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return isset($this->container['name']) ? $this->container['name'] : null;
    }

    /**
     * Sets name
     * @param string $name The identifier used within the publishing application.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets local_id
     * @return string
     */
    public function getLocalId()
    {
        return isset($this->container['local_id']) ? $this->container['local_id'] : null;
    }

    /**
     * Sets local_id
     * @param string $local_id Optional reference to the school associated with the administration.
     * @return $this
     */
    public function setLocalId($local_id)
    {
        $this->container['local_id'] = $local_id;

        return $this;
    }

    /**
     * Gets supplier_name
     * @return string
     */
    public function getSupplierName()
    {
        return isset($this->container['supplier_name']) ? $this->container['supplier_name'] : null;
    }

    /**
     * Sets supplier_name
     * @param string $supplier_name The supplier/originator/designer/owner of the described component.
     * @return $this
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return isset($this->container['description']) ? $this->container['description'] : null;
    }

    /**
     * Sets description
     * @param string $description Longer text describing features of the component.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets year_list
     * @return string[]
     */
    public function getYearList()
    {
        return isset($this->container['year_list']) ? $this->container['year_list'] : null;
    }

    /**
     * Sets year_list
     * @param string[] $year_list
     * @return $this
     */
    public function setYearList($year_list)
    {
        $this->container['year_list'] = $year_list;

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


