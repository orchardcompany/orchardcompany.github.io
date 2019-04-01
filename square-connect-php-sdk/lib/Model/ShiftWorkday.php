<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * ShiftWorkday Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ShiftWorkday implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'date_range' => '\SquareConnect\Model\DateRange',
        'match_shifts_by' => 'string',
        'default_timezone' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'date_range' => 'date_range',
        'match_shifts_by' => 'match_shifts_by',
        'default_timezone' => 'default_timezone'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'date_range' => 'setDateRange',
        'match_shifts_by' => 'setMatchShiftsBy',
        'default_timezone' => 'setDefaultTimezone'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'date_range' => 'getDateRange',
        'match_shifts_by' => 'getMatchShiftsBy',
        'default_timezone' => 'getDefaultTimezone'
    );
  
    /**
      * $date_range Dates for fetching the shifts
      * @var \SquareConnect\Model\DateRange
      */
    protected $date_range;
    /**
      * $match_shifts_by The strategy on which the dates are applied. See [ShiftWorkdayMatcher](#type-shiftworkdaymatcher) for possible values
      * @var string
      */
    protected $match_shifts_by;
    /**
      * $default_timezone Location-specific timezones convert workdays to datetime filters. Every location included in the query must have a timezone, or this field must be provided as a fallback. Format: the IANA timezone database identifier for the relevant timezone.
      * @var string
      */
    protected $default_timezone;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["date_range"])) {
              $this->date_range = $data["date_range"];
            } else {
              $this->date_range = null;
            }
            if (isset($data["match_shifts_by"])) {
              $this->match_shifts_by = $data["match_shifts_by"];
            } else {
              $this->match_shifts_by = null;
            }
            if (isset($data["default_timezone"])) {
              $this->default_timezone = $data["default_timezone"];
            } else {
              $this->default_timezone = null;
            }
        }
    }
    /**
     * Gets date_range
     * @return \SquareConnect\Model\DateRange
     */
    public function getDateRange()
    {
        return $this->date_range;
    }
  
    /**
     * Sets date_range
     * @param \SquareConnect\Model\DateRange $date_range Dates for fetching the shifts
     * @return $this
     */
    public function setDateRange($date_range)
    {
        $this->date_range = $date_range;
        return $this;
    }
    /**
     * Gets match_shifts_by
     * @return string
     */
    public function getMatchShiftsBy()
    {
        return $this->match_shifts_by;
    }
  
    /**
     * Sets match_shifts_by
     * @param string $match_shifts_by The strategy on which the dates are applied. See [ShiftWorkdayMatcher](#type-shiftworkdaymatcher) for possible values
     * @return $this
     */
    public function setMatchShiftsBy($match_shifts_by)
    {
        $this->match_shifts_by = $match_shifts_by;
        return $this;
    }
    /**
     * Gets default_timezone
     * @return string
     */
    public function getDefaultTimezone()
    {
        return $this->default_timezone;
    }
  
    /**
     * Sets default_timezone
     * @param string $default_timezone Location-specific timezones convert workdays to datetime filters. Every location included in the query must have a timezone, or this field must be provided as a fallback. Format: the IANA timezone database identifier for the relevant timezone.
     * @return $this
     */
    public function setDefaultTimezone($default_timezone)
    {
        $this->default_timezone = $default_timezone;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
