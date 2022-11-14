<?php
/**
 * ApiStationRemote
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AzuraCast
 *
 * AzuraCast is a standalone, turnkey web radio management tool. Radio stations hosted by AzuraCast expose a public API for viewing now playing data, making requests and more.
 *
 * OpenAPI spec version: 0.17.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * ApiStationRemote Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiStationRemote extends HasLinks 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Api_StationRemote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'display_name' => 'string',
'is_visible_on_public_pages' => 'bool',
'type' => 'string',
'is_editable' => 'bool',
'enable_autodj' => 'bool',
'autodj_format' => 'string',
'autodj_bitrate' => 'int',
'custom_listen_url' => 'string',
'url' => 'string',
'mount' => 'string',
'admin_password' => 'string',
'source_port' => 'int',
'source_mount' => 'string',
'source_username' => 'string',
'source_password' => 'string',
'is_public' => 'bool',
'listeners_unique' => 'int',
'listeners_total' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'display_name' => null,
'is_visible_on_public_pages' => null,
'type' => null,
'is_editable' => null,
'enable_autodj' => null,
'autodj_format' => null,
'autodj_bitrate' => null,
'custom_listen_url' => null,
'url' => null,
'mount' => null,
'admin_password' => null,
'source_port' => null,
'source_mount' => null,
'source_username' => null,
'source_password' => null,
'is_public' => null,
'listeners_unique' => null,
'listeners_total' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'display_name' => 'display_name',
'is_visible_on_public_pages' => 'is_visible_on_public_pages',
'type' => 'type',
'is_editable' => 'is_editable',
'enable_autodj' => 'enable_autodj',
'autodj_format' => 'autodj_format',
'autodj_bitrate' => 'autodj_bitrate',
'custom_listen_url' => 'custom_listen_url',
'url' => 'url',
'mount' => 'mount',
'admin_password' => 'admin_password',
'source_port' => 'source_port',
'source_mount' => 'source_mount',
'source_username' => 'source_username',
'source_password' => 'source_password',
'is_public' => 'is_public',
'listeners_unique' => 'listeners_unique',
'listeners_total' => 'listeners_total'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'display_name' => 'setDisplayName',
'is_visible_on_public_pages' => 'setIsVisibleOnPublicPages',
'type' => 'setType',
'is_editable' => 'setIsEditable',
'enable_autodj' => 'setEnableAutodj',
'autodj_format' => 'setAutodjFormat',
'autodj_bitrate' => 'setAutodjBitrate',
'custom_listen_url' => 'setCustomListenUrl',
'url' => 'setUrl',
'mount' => 'setMount',
'admin_password' => 'setAdminPassword',
'source_port' => 'setSourcePort',
'source_mount' => 'setSourceMount',
'source_username' => 'setSourceUsername',
'source_password' => 'setSourcePassword',
'is_public' => 'setIsPublic',
'listeners_unique' => 'setListenersUnique',
'listeners_total' => 'setListenersTotal'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'display_name' => 'getDisplayName',
'is_visible_on_public_pages' => 'getIsVisibleOnPublicPages',
'type' => 'getType',
'is_editable' => 'getIsEditable',
'enable_autodj' => 'getEnableAutodj',
'autodj_format' => 'getAutodjFormat',
'autodj_bitrate' => 'getAutodjBitrate',
'custom_listen_url' => 'getCustomListenUrl',
'url' => 'getUrl',
'mount' => 'getMount',
'admin_password' => 'getAdminPassword',
'source_port' => 'getSourcePort',
'source_mount' => 'getSourceMount',
'source_username' => 'getSourceUsername',
'source_password' => 'getSourcePassword',
'is_public' => 'getIsPublic',
'listeners_unique' => 'getListenersUnique',
'listeners_total' => 'getListenersTotal'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['is_visible_on_public_pages'] = isset($data['is_visible_on_public_pages']) ? $data['is_visible_on_public_pages'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['is_editable'] = isset($data['is_editable']) ? $data['is_editable'] : null;
        $this->container['enable_autodj'] = isset($data['enable_autodj']) ? $data['enable_autodj'] : null;
        $this->container['autodj_format'] = isset($data['autodj_format']) ? $data['autodj_format'] : null;
        $this->container['autodj_bitrate'] = isset($data['autodj_bitrate']) ? $data['autodj_bitrate'] : null;
        $this->container['custom_listen_url'] = isset($data['custom_listen_url']) ? $data['custom_listen_url'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['mount'] = isset($data['mount']) ? $data['mount'] : null;
        $this->container['admin_password'] = isset($data['admin_password']) ? $data['admin_password'] : null;
        $this->container['source_port'] = isset($data['source_port']) ? $data['source_port'] : null;
        $this->container['source_mount'] = isset($data['source_mount']) ? $data['source_mount'] : null;
        $this->container['source_username'] = isset($data['source_username']) ? $data['source_username'] : null;
        $this->container['source_password'] = isset($data['source_password']) ? $data['source_password'] : null;
        $this->container['is_public'] = isset($data['is_public']) ? $data['is_public'] : null;
        $this->container['listeners_unique'] = isset($data['listeners_unique']) ? $data['listeners_unique'] : null;
        $this->container['listeners_total'] = isset($data['listeners_total']) ? $data['listeners_total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets is_visible_on_public_pages
     *
     * @return bool
     */
    public function getIsVisibleOnPublicPages()
    {
        return $this->container['is_visible_on_public_pages'];
    }

    /**
     * Sets is_visible_on_public_pages
     *
     * @param bool $is_visible_on_public_pages is_visible_on_public_pages
     *
     * @return $this
     */
    public function setIsVisibleOnPublicPages($is_visible_on_public_pages)
    {
        $this->container['is_visible_on_public_pages'] = $is_visible_on_public_pages;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_editable
     *
     * @return bool
     */
    public function getIsEditable()
    {
        return $this->container['is_editable'];
    }

    /**
     * Sets is_editable
     *
     * @param bool $is_editable is_editable
     *
     * @return $this
     */
    public function setIsEditable($is_editable)
    {
        $this->container['is_editable'] = $is_editable;

        return $this;
    }

    /**
     * Gets enable_autodj
     *
     * @return bool
     */
    public function getEnableAutodj()
    {
        return $this->container['enable_autodj'];
    }

    /**
     * Sets enable_autodj
     *
     * @param bool $enable_autodj enable_autodj
     *
     * @return $this
     */
    public function setEnableAutodj($enable_autodj)
    {
        $this->container['enable_autodj'] = $enable_autodj;

        return $this;
    }

    /**
     * Gets autodj_format
     *
     * @return string
     */
    public function getAutodjFormat()
    {
        return $this->container['autodj_format'];
    }

    /**
     * Sets autodj_format
     *
     * @param string $autodj_format autodj_format
     *
     * @return $this
     */
    public function setAutodjFormat($autodj_format)
    {
        $this->container['autodj_format'] = $autodj_format;

        return $this;
    }

    /**
     * Gets autodj_bitrate
     *
     * @return int
     */
    public function getAutodjBitrate()
    {
        return $this->container['autodj_bitrate'];
    }

    /**
     * Sets autodj_bitrate
     *
     * @param int $autodj_bitrate autodj_bitrate
     *
     * @return $this
     */
    public function setAutodjBitrate($autodj_bitrate)
    {
        $this->container['autodj_bitrate'] = $autodj_bitrate;

        return $this;
    }

    /**
     * Gets custom_listen_url
     *
     * @return string
     */
    public function getCustomListenUrl()
    {
        return $this->container['custom_listen_url'];
    }

    /**
     * Sets custom_listen_url
     *
     * @param string $custom_listen_url custom_listen_url
     *
     * @return $this
     */
    public function setCustomListenUrl($custom_listen_url)
    {
        $this->container['custom_listen_url'] = $custom_listen_url;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets mount
     *
     * @return string
     */
    public function getMount()
    {
        return $this->container['mount'];
    }

    /**
     * Sets mount
     *
     * @param string $mount mount
     *
     * @return $this
     */
    public function setMount($mount)
    {
        $this->container['mount'] = $mount;

        return $this;
    }

    /**
     * Gets admin_password
     *
     * @return string
     */
    public function getAdminPassword()
    {
        return $this->container['admin_password'];
    }

    /**
     * Sets admin_password
     *
     * @param string $admin_password admin_password
     *
     * @return $this
     */
    public function setAdminPassword($admin_password)
    {
        $this->container['admin_password'] = $admin_password;

        return $this;
    }

    /**
     * Gets source_port
     *
     * @return int
     */
    public function getSourcePort()
    {
        return $this->container['source_port'];
    }

    /**
     * Sets source_port
     *
     * @param int $source_port source_port
     *
     * @return $this
     */
    public function setSourcePort($source_port)
    {
        $this->container['source_port'] = $source_port;

        return $this;
    }

    /**
     * Gets source_mount
     *
     * @return string
     */
    public function getSourceMount()
    {
        return $this->container['source_mount'];
    }

    /**
     * Sets source_mount
     *
     * @param string $source_mount source_mount
     *
     * @return $this
     */
    public function setSourceMount($source_mount)
    {
        $this->container['source_mount'] = $source_mount;

        return $this;
    }

    /**
     * Gets source_username
     *
     * @return string
     */
    public function getSourceUsername()
    {
        return $this->container['source_username'];
    }

    /**
     * Sets source_username
     *
     * @param string $source_username source_username
     *
     * @return $this
     */
    public function setSourceUsername($source_username)
    {
        $this->container['source_username'] = $source_username;

        return $this;
    }

    /**
     * Gets source_password
     *
     * @return string
     */
    public function getSourcePassword()
    {
        return $this->container['source_password'];
    }

    /**
     * Sets source_password
     *
     * @param string $source_password source_password
     *
     * @return $this
     */
    public function setSourcePassword($source_password)
    {
        $this->container['source_password'] = $source_password;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool $is_public is_public
     *
     * @return $this
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets listeners_unique
     *
     * @return int
     */
    public function getListenersUnique()
    {
        return $this->container['listeners_unique'];
    }

    /**
     * Sets listeners_unique
     *
     * @param int $listeners_unique The most recent number of unique listeners.
     *
     * @return $this
     */
    public function setListenersUnique($listeners_unique)
    {
        $this->container['listeners_unique'] = $listeners_unique;

        return $this;
    }

    /**
     * Gets listeners_total
     *
     * @return int
     */
    public function getListenersTotal()
    {
        return $this->container['listeners_total'];
    }

    /**
     * Sets listeners_total
     *
     * @param int $listeners_total The most recent number of total (non-unique) listeners.
     *
     * @return $this
     */
    public function setListenersTotal($listeners_total)
    {
        $this->container['listeners_total'] = $listeners_total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange] 
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
