<?php
/**
 * Destination
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
 * Destination Class Doc Comment
 *
 * @category    Class
 * @package     DataExchange\SIFUK20
 * @author      DataExchange team
 * @link        https://developer.dataexchange.education
 */
class Destination implements ArrayAccess
{
    const DISCRIMINATOR = null;

    const IS_ARRAY = false;
    const ITEMS = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Destination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'la_id' => 'string',
        'establishment_id' => 'string',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'la_id' => null,
        'establishment_id' => null,
        'name' => null
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
        'code' => 'Code',
        'la_id' => 'LAId',
        'establishment_id' => 'EstablishmentId',
        'name' => 'Name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'la_id' => 'setLaId',
        'establishment_id' => 'setEstablishmentId',
        'name' => 'setName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'la_id' => 'getLaId',
        'establishment_id' => 'getEstablishmentId',
        'name' => 'getName'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['la_id'] = isset($data['la_id']) ? $data['la_id'] : null;
        $this->container['establishment_id'] = isset($data['establishment_id']) ? $data['establishment_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
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

        if ($this->container['code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return isset($this->container['code']) ? $this->container['code'] : null;
    }

    /**
     * Sets code
     * @param string $code Code indicating the destination type.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets la_id
     * @return string
     */
    public function getLaId()
    {
        return isset($this->container['la_id']) ? $this->container['la_id'] : null;
    }

    /**
     * Sets la_id
     * @param string $la_id The LA number for destination school or college.
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
        return isset($this->container['establishment_id']) ? $this->container['establishment_id'] : null;
    }

    /**
     * Sets establishment_id
     * @param string $establishment_id The DfES number for destination school or college.
     * @return $this
     */
    public function setEstablishmentId($establishment_id)
    {
        $this->container['establishment_id'] = $establishment_id;

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
     * @param string $name Name of institution/employer of learner&#039;s destination.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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


