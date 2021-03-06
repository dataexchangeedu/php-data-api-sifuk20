<?php
/**
 * WorkforceAssignment
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
 * WorkforceAssignment Class Doc Comment
 *
 * @category    Class
 * @description A more detailed, temporal and referenced view of the posts a person holds compared to the WorkforcePersonal CurrentAssignmentList element. Based around the US SIF 2.4 EmployeeAssignment object.
 * @package     DataExchange\SIFUK20
 * @author      DataExchange team
 * @link        https://developer.dataexchange.education
 */
class WorkforceAssignment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    const IS_ARRAY = false;
    const ITEMS = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'WorkforceAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ref_id' => 'string',
        'workforce_personal_ref_id' => 'string',
        'sif_ref_id' => '\DataExchange\SIFUK20\Models\SIFRefId2',
        'assignment_start_date' => '\DateTime',
        'assignment_end_date' => '\DateTime',
        'post' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ref_id' => null,
        'workforce_personal_ref_id' => null,
        'sif_ref_id' => null,
        'assignment_start_date' => 'date',
        'assignment_end_date' => 'date',
        'post' => null
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
        'workforce_personal_ref_id' => '@WorkforcePersonalRefId',
        'sif_ref_id' => 'SIF_RefId',
        'assignment_start_date' => 'AssignmentStartDate',
        'assignment_end_date' => 'AssignmentEndDate',
        'post' => 'Post'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ref_id' => 'setRefId',
        'workforce_personal_ref_id' => 'setWorkforcePersonalRefId',
        'sif_ref_id' => 'setSifRefId',
        'assignment_start_date' => 'setAssignmentStartDate',
        'assignment_end_date' => 'setAssignmentEndDate',
        'post' => 'setPost'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ref_id' => 'getRefId',
        'workforce_personal_ref_id' => 'getWorkforcePersonalRefId',
        'sif_ref_id' => 'getSifRefId',
        'assignment_start_date' => 'getAssignmentStartDate',
        'assignment_end_date' => 'getAssignmentEndDate',
        'post' => 'getPost'
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
        $this->container['workforce_personal_ref_id'] = isset($data['workforce_personal_ref_id']) ? $data['workforce_personal_ref_id'] : null;
        $this->container['sif_ref_id'] = isset($data['sif_ref_id']) ? $data['sif_ref_id'] : null;
        $this->container['assignment_start_date'] = isset($data['assignment_start_date']) ? $data['assignment_start_date'] : null;
        $this->container['assignment_end_date'] = isset($data['assignment_end_date']) ? $data['assignment_end_date'] : null;
        $this->container['post'] = isset($data['post']) ? $data['post'] : null;
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
        if ($this->container['workforce_personal_ref_id'] === null) {
            $invalid_properties[] = "'workforce_personal_ref_id' can't be null";
        }
        if ($this->container['assignment_start_date'] === null) {
            $invalid_properties[] = "'assignment_start_date' can't be null";
        }
        if ($this->container['post'] === null) {
            $invalid_properties[] = "'post' can't be null";
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
        if ($this->container['workforce_personal_ref_id'] === null) {
            return false;
        }
        if ($this->container['assignment_start_date'] === null) {
            return false;
        }
        if ($this->container['post'] === null) {
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
     * @param string $ref_id The ID (GUID) of the WorkforceAssignment object.
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets workforce_personal_ref_id
     * @return string
     */
    public function getWorkforcePersonalRefId()
    {
        return isset($this->container['workforce_personal_ref_id']) ? $this->container['workforce_personal_ref_id'] : null;
    }

    /**
     * Sets workforce_personal_ref_id
     * @param string $workforce_personal_ref_id RefId of WorkforcePersonal object this applies to.
     * @return $this
     */
    public function setWorkforcePersonalRefId($workforce_personal_ref_id)
    {
        $this->container['workforce_personal_ref_id'] = $workforce_personal_ref_id;

        return $this;
    }

    /**
     * Gets sif_ref_id
     * @return \DataExchange\SIFUK20\Models\SIFRefId2
     */
    public function getSifRefId()
    {
        return isset($this->container['sif_ref_id']) ? $this->container['sif_ref_id'] : null;
    }

    /**
     * Sets sif_ref_id
     * @param \DataExchange\SIFUK20\Models\SIFRefId2 $sif_ref_id
     * @return $this
     */
    public function setSifRefId($sif_ref_id)
    {
        $this->container['sif_ref_id'] = $sif_ref_id;

        return $this;
    }

    /**
     * Gets assignment_start_date
     * @return \DateTime
     */
    public function getAssignmentStartDate()
    {
        return isset($this->container['assignment_start_date']) ? $this->container['assignment_start_date'] : null;
    }

    /**
     * Sets assignment_start_date
     * @param \DateTime $assignment_start_date The date this assignment commenced.
     * @return $this
     */
    public function setAssignmentStartDate($assignment_start_date)
    {
        $this->container['assignment_start_date'] = $assignment_start_date;

        return $this;
    }

    /**
     * Gets assignment_end_date
     * @return \DateTime
     */
    public function getAssignmentEndDate()
    {
        return isset($this->container['assignment_end_date']) ? $this->container['assignment_end_date'] : null;
    }

    /**
     * Sets assignment_end_date
     * @param \DateTime $assignment_end_date The date this assignment ends.
     * @return $this
     */
    public function setAssignmentEndDate($assignment_end_date)
    {
        $this->container['assignment_end_date'] = $assignment_end_date;

        return $this;
    }

    /**
     * Gets post
     * @return string
     */
    public function getPost()
    {
        return isset($this->container['post']) ? $this->container['post'] : null;
    }

    /**
     * Sets post
     * @param string $post The post held under this particular assignment
     * @return $this
     */
    public function setPost($post)
    {
        $this->container['post'] = $post;

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


