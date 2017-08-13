<?php
/**
 * GroupDefinition
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
 * GroupDefinition Class Doc Comment
 *
 * @category    Class
 * @package     DataExchange\SIFUK20
 * @author      DataExchange team
 * @link        https://developer.dataexchange.education
 */
class GroupDefinition implements ArrayAccess
{
    const DISCRIMINATOR = null;

    const IS_ARRAY = false;
    const ITEMS = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GroupDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'short_name' => 'string',
        'long_name' => 'string',
        'tt_subject_ref_id' => 'string',
        'set' => 'string',
        'block' => 'string',
        'level' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'short_name' => null,
        'long_name' => null,
        'tt_subject_ref_id' => null,
        'set' => null,
        'block' => null,
        'level' => null
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
        'short_name' => 'ShortName',
        'long_name' => 'LongName',
        'tt_subject_ref_id' => 'TTSubjectRefId',
        'set' => 'Set',
        'block' => 'Block',
        'level' => 'Level'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'short_name' => 'setShortName',
        'long_name' => 'setLongName',
        'tt_subject_ref_id' => 'setTtSubjectRefId',
        'set' => 'setSet',
        'block' => 'setBlock',
        'level' => 'setLevel'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'short_name' => 'getShortName',
        'long_name' => 'getLongName',
        'tt_subject_ref_id' => 'getTtSubjectRefId',
        'set' => 'getSet',
        'block' => 'getBlock',
        'level' => 'getLevel'
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
        $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
        $this->container['long_name'] = isset($data['long_name']) ? $data['long_name'] : null;
        $this->container['tt_subject_ref_id'] = isset($data['tt_subject_ref_id']) ? $data['tt_subject_ref_id'] : null;
        $this->container['set'] = isset($data['set']) ? $data['set'] : null;
        $this->container['block'] = isset($data['block']) ? $data['block'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['short_name'] === null) {
            $invalid_properties[] = "'short_name' can't be null";
        }
        if ($this->container['long_name'] === null) {
            $invalid_properties[] = "'long_name' can't be null";
        }
        if ($this->container['tt_subject_ref_id'] === null) {
            $invalid_properties[] = "'tt_subject_ref_id' can't be null";
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

        if ($this->container['short_name'] === null) {
            return false;
        }
        if ($this->container['long_name'] === null) {
            return false;
        }
        if ($this->container['tt_subject_ref_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets short_name
     * @return string
     */
    public function getShortName()
    {
        return isset($this->container['short_name']) ? $this->container['short_name'] : null;
    }

    /**
     * Sets short_name
     * @param string $short_name
     * @return $this
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets long_name
     * @return string
     */
    public function getLongName()
    {
        return isset($this->container['long_name']) ? $this->container['long_name'] : null;
    }

    /**
     * Sets long_name
     * @param string $long_name
     * @return $this
     */
    public function setLongName($long_name)
    {
        $this->container['long_name'] = $long_name;

        return $this;
    }

    /**
     * Gets tt_subject_ref_id
     * @return string
     */
    public function getTtSubjectRefId()
    {
        return isset($this->container['tt_subject_ref_id']) ? $this->container['tt_subject_ref_id'] : null;
    }

    /**
     * Sets tt_subject_ref_id
     * @param string $tt_subject_ref_id Subject being taught - see TTSubject NB: We do not allow a TG to have no subject
     * @return $this
     */
    public function setTtSubjectRefId($tt_subject_ref_id)
    {
        $this->container['tt_subject_ref_id'] = $tt_subject_ref_id;

        return $this;
    }

    /**
     * Gets set
     * @return string
     */
    public function getSet()
    {
        return isset($this->container['set']) ? $this->container['set'] : null;
    }

    /**
     * Sets set
     * @param string $set
     * @return $this
     */
    public function setSet($set)
    {
        $this->container['set'] = $set;

        return $this;
    }

    /**
     * Gets block
     * @return string
     */
    public function getBlock()
    {
        return isset($this->container['block']) ? $this->container['block'] : null;
    }

    /**
     * Sets block
     * @param string $block
     * @return $this
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets level
     * @return string
     */
    public function getLevel()
    {
        return isset($this->container['level']) ? $this->container['level'] : null;
    }

    /**
     * Sets level
     * @param string $level Level / Assessment Stage, eg &quot;KS3&quot; (if known / relevant)
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

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


