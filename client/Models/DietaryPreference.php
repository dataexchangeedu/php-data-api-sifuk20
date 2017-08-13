<?php
/**
 * DietaryPreference
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
 * DietaryPreference Class Doc Comment
 *
 * @category    Class
 * @package     DataExchange\SIFUK20
 * @author      DataExchange team
 * @link        https://developer.dataexchange.education
 */
class DietaryPreference implements ArrayAccess
{
    const DISCRIMINATOR = null;

    const IS_ARRAY = false;
    const ITEMS = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DietaryPreference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'preference_type' => 'string',
        'meal_component' => 'string',
        'note' => 'string',
        'meal_effect' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'preference_type' => null,
        'meal_component' => null,
        'note' => null,
        'meal_effect' => null
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
        'preference_type' => 'PreferenceType',
        'meal_component' => 'MealComponent',
        'note' => 'Note',
        'meal_effect' => 'MealEffect'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'preference_type' => 'setPreferenceType',
        'meal_component' => 'setMealComponent',
        'note' => 'setNote',
        'meal_effect' => 'setMealEffect'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'preference_type' => 'getPreferenceType',
        'meal_component' => 'getMealComponent',
        'note' => 'getNote',
        'meal_effect' => 'getMealEffect'
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
        $this->container['preference_type'] = isset($data['preference_type']) ? $data['preference_type'] : null;
        $this->container['meal_component'] = isset($data['meal_component']) ? $data['meal_component'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['meal_effect'] = isset($data['meal_effect']) ? $data['meal_effect'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['preference_type'] === null) {
            $invalid_properties[] = "'preference_type' can't be null";
        }
        if ($this->container['meal_component'] === null) {
            $invalid_properties[] = "'meal_component' can't be null";
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

        if ($this->container['preference_type'] === null) {
            return false;
        }
        if ($this->container['meal_component'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets preference_type
     * @return string
     */
    public function getPreferenceType()
    {
        return isset($this->container['preference_type']) ? $this->container['preference_type'] : null;
    }

    /**
     * Sets preference_type
     * @param string $preference_type The Type of preference
     * @return $this
     */
    public function setPreferenceType($preference_type)
    {
        $this->container['preference_type'] = $preference_type;

        return $this;
    }

    /**
     * Gets meal_component
     * @return string
     */
    public function getMealComponent()
    {
        return isset($this->container['meal_component']) ? $this->container['meal_component'] : null;
    }

    /**
     * Sets meal_component
     * @param string $meal_component The component of meal
     * @return $this
     */
    public function setMealComponent($meal_component)
    {
        $this->container['meal_component'] = $meal_component;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return isset($this->container['note']) ? $this->container['note'] : null;
    }

    /**
     * Sets note
     * @param string $note A note relating to dietary preference
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets meal_effect
     * @return string
     */
    public function getMealEffect()
    {
        return isset($this->container['meal_effect']) ? $this->container['meal_effect'] : null;
    }

    /**
     * Sets meal_effect
     * @param string $meal_effect Should the Meal component be Included or Excluded from the meal. Default is Exclude
     * @return $this
     */
    public function setMealEffect($meal_effect)
    {
        $this->container['meal_effect'] = $meal_effect;

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


