<?php
/**
 * Margin
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BitMEX API
 *
 * ## REST API for the BitMEX Trading Platform  [View Changelog](/app/apiChangelog)    #### Getting Started  Base URI: [https://www.bitmex.com/api/v1](/api/v1)  ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](/app/restAPI).  *All* table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  *This is only a small subset of what is available, to get you started.*  Fill in the parameters and click the `Try it out!` button to try any of these queries.  * [Pricing Data](#!/Quote/Quote_get)  * [Trade Data](#!/Trade/Trade_get)  * [OrderBook Data](#!/OrderBook/OrderBook_getL2)  * [Settlement Data](#!/Settlement/Settlement_get)  * [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  ##### Swagger Specification  [⇩ Download Swagger JSON](swagger.json)    ## All API Endpoints  Click to expand a section.
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Margin Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Margin implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Margin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account' => 'float',
        'currency' => 'string',
        'risk_limit' => 'float',
        'prev_state' => 'string',
        'state' => 'string',
        'action' => 'string',
        'amount' => 'float',
        'pending_credit' => 'float',
        'pending_debit' => 'float',
        'confirmed_debit' => 'float',
        'prev_realised_pnl' => 'float',
        'prev_unrealised_pnl' => 'float',
        'gross_comm' => 'float',
        'gross_open_cost' => 'float',
        'gross_open_premium' => 'float',
        'gross_exec_cost' => 'float',
        'gross_mark_value' => 'float',
        'risk_value' => 'float',
        'taxable_margin' => 'float',
        'init_margin' => 'float',
        'maint_margin' => 'float',
        'session_margin' => 'float',
        'target_excess_margin' => 'float',
        'var_margin' => 'float',
        'realised_pnl' => 'float',
        'unrealised_pnl' => 'float',
        'indicative_tax' => 'float',
        'unrealised_profit' => 'float',
        'synthetic_margin' => 'float',
        'wallet_balance' => 'float',
        'margin_balance' => 'float',
        'margin_balance_pcnt' => 'double',
        'margin_leverage' => 'double',
        'margin_used_pcnt' => 'double',
        'excess_margin' => 'float',
        'excess_margin_pcnt' => 'double',
        'available_margin' => 'float',
        'withdrawable_margin' => 'float',
        'timestamp' => '\DateTime',
        'gross_last_value' => 'float',
        'commission' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account' => 'int64',
        'currency' => null,
        'risk_limit' => 'int64',
        'prev_state' => null,
        'state' => null,
        'action' => null,
        'amount' => 'int64',
        'pending_credit' => 'int64',
        'pending_debit' => 'int64',
        'confirmed_debit' => 'int64',
        'prev_realised_pnl' => 'int64',
        'prev_unrealised_pnl' => 'int64',
        'gross_comm' => 'int64',
        'gross_open_cost' => 'int64',
        'gross_open_premium' => 'int64',
        'gross_exec_cost' => 'int64',
        'gross_mark_value' => 'int64',
        'risk_value' => 'int64',
        'taxable_margin' => 'int64',
        'init_margin' => 'int64',
        'maint_margin' => 'int64',
        'session_margin' => 'int64',
        'target_excess_margin' => 'int64',
        'var_margin' => 'int64',
        'realised_pnl' => 'int64',
        'unrealised_pnl' => 'int64',
        'indicative_tax' => 'int64',
        'unrealised_profit' => 'int64',
        'synthetic_margin' => 'int64',
        'wallet_balance' => 'int64',
        'margin_balance' => 'int64',
        'margin_balance_pcnt' => 'double',
        'margin_leverage' => 'double',
        'margin_used_pcnt' => 'double',
        'excess_margin' => 'int64',
        'excess_margin_pcnt' => 'double',
        'available_margin' => 'int64',
        'withdrawable_margin' => 'int64',
        'timestamp' => 'date-time',
        'gross_last_value' => 'int64',
        'commission' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account' => 'account',
        'currency' => 'currency',
        'risk_limit' => 'riskLimit',
        'prev_state' => 'prevState',
        'state' => 'state',
        'action' => 'action',
        'amount' => 'amount',
        'pending_credit' => 'pendingCredit',
        'pending_debit' => 'pendingDebit',
        'confirmed_debit' => 'confirmedDebit',
        'prev_realised_pnl' => 'prevRealisedPnl',
        'prev_unrealised_pnl' => 'prevUnrealisedPnl',
        'gross_comm' => 'grossComm',
        'gross_open_cost' => 'grossOpenCost',
        'gross_open_premium' => 'grossOpenPremium',
        'gross_exec_cost' => 'grossExecCost',
        'gross_mark_value' => 'grossMarkValue',
        'risk_value' => 'riskValue',
        'taxable_margin' => 'taxableMargin',
        'init_margin' => 'initMargin',
        'maint_margin' => 'maintMargin',
        'session_margin' => 'sessionMargin',
        'target_excess_margin' => 'targetExcessMargin',
        'var_margin' => 'varMargin',
        'realised_pnl' => 'realisedPnl',
        'unrealised_pnl' => 'unrealisedPnl',
        'indicative_tax' => 'indicativeTax',
        'unrealised_profit' => 'unrealisedProfit',
        'synthetic_margin' => 'syntheticMargin',
        'wallet_balance' => 'walletBalance',
        'margin_balance' => 'marginBalance',
        'margin_balance_pcnt' => 'marginBalancePcnt',
        'margin_leverage' => 'marginLeverage',
        'margin_used_pcnt' => 'marginUsedPcnt',
        'excess_margin' => 'excessMargin',
        'excess_margin_pcnt' => 'excessMarginPcnt',
        'available_margin' => 'availableMargin',
        'withdrawable_margin' => 'withdrawableMargin',
        'timestamp' => 'timestamp',
        'gross_last_value' => 'grossLastValue',
        'commission' => 'commission'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'currency' => 'setCurrency',
        'risk_limit' => 'setRiskLimit',
        'prev_state' => 'setPrevState',
        'state' => 'setState',
        'action' => 'setAction',
        'amount' => 'setAmount',
        'pending_credit' => 'setPendingCredit',
        'pending_debit' => 'setPendingDebit',
        'confirmed_debit' => 'setConfirmedDebit',
        'prev_realised_pnl' => 'setPrevRealisedPnl',
        'prev_unrealised_pnl' => 'setPrevUnrealisedPnl',
        'gross_comm' => 'setGrossComm',
        'gross_open_cost' => 'setGrossOpenCost',
        'gross_open_premium' => 'setGrossOpenPremium',
        'gross_exec_cost' => 'setGrossExecCost',
        'gross_mark_value' => 'setGrossMarkValue',
        'risk_value' => 'setRiskValue',
        'taxable_margin' => 'setTaxableMargin',
        'init_margin' => 'setInitMargin',
        'maint_margin' => 'setMaintMargin',
        'session_margin' => 'setSessionMargin',
        'target_excess_margin' => 'setTargetExcessMargin',
        'var_margin' => 'setVarMargin',
        'realised_pnl' => 'setRealisedPnl',
        'unrealised_pnl' => 'setUnrealisedPnl',
        'indicative_tax' => 'setIndicativeTax',
        'unrealised_profit' => 'setUnrealisedProfit',
        'synthetic_margin' => 'setSyntheticMargin',
        'wallet_balance' => 'setWalletBalance',
        'margin_balance' => 'setMarginBalance',
        'margin_balance_pcnt' => 'setMarginBalancePcnt',
        'margin_leverage' => 'setMarginLeverage',
        'margin_used_pcnt' => 'setMarginUsedPcnt',
        'excess_margin' => 'setExcessMargin',
        'excess_margin_pcnt' => 'setExcessMarginPcnt',
        'available_margin' => 'setAvailableMargin',
        'withdrawable_margin' => 'setWithdrawableMargin',
        'timestamp' => 'setTimestamp',
        'gross_last_value' => 'setGrossLastValue',
        'commission' => 'setCommission'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'currency' => 'getCurrency',
        'risk_limit' => 'getRiskLimit',
        'prev_state' => 'getPrevState',
        'state' => 'getState',
        'action' => 'getAction',
        'amount' => 'getAmount',
        'pending_credit' => 'getPendingCredit',
        'pending_debit' => 'getPendingDebit',
        'confirmed_debit' => 'getConfirmedDebit',
        'prev_realised_pnl' => 'getPrevRealisedPnl',
        'prev_unrealised_pnl' => 'getPrevUnrealisedPnl',
        'gross_comm' => 'getGrossComm',
        'gross_open_cost' => 'getGrossOpenCost',
        'gross_open_premium' => 'getGrossOpenPremium',
        'gross_exec_cost' => 'getGrossExecCost',
        'gross_mark_value' => 'getGrossMarkValue',
        'risk_value' => 'getRiskValue',
        'taxable_margin' => 'getTaxableMargin',
        'init_margin' => 'getInitMargin',
        'maint_margin' => 'getMaintMargin',
        'session_margin' => 'getSessionMargin',
        'target_excess_margin' => 'getTargetExcessMargin',
        'var_margin' => 'getVarMargin',
        'realised_pnl' => 'getRealisedPnl',
        'unrealised_pnl' => 'getUnrealisedPnl',
        'indicative_tax' => 'getIndicativeTax',
        'unrealised_profit' => 'getUnrealisedProfit',
        'synthetic_margin' => 'getSyntheticMargin',
        'wallet_balance' => 'getWalletBalance',
        'margin_balance' => 'getMarginBalance',
        'margin_balance_pcnt' => 'getMarginBalancePcnt',
        'margin_leverage' => 'getMarginLeverage',
        'margin_used_pcnt' => 'getMarginUsedPcnt',
        'excess_margin' => 'getExcessMargin',
        'excess_margin_pcnt' => 'getExcessMarginPcnt',
        'available_margin' => 'getAvailableMargin',
        'withdrawable_margin' => 'getWithdrawableMargin',
        'timestamp' => 'getTimestamp',
        'gross_last_value' => 'getGrossLastValue',
        'commission' => 'getCommission'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['risk_limit'] = isset($data['risk_limit']) ? $data['risk_limit'] : null;
        $this->container['prev_state'] = isset($data['prev_state']) ? $data['prev_state'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['pending_credit'] = isset($data['pending_credit']) ? $data['pending_credit'] : null;
        $this->container['pending_debit'] = isset($data['pending_debit']) ? $data['pending_debit'] : null;
        $this->container['confirmed_debit'] = isset($data['confirmed_debit']) ? $data['confirmed_debit'] : null;
        $this->container['prev_realised_pnl'] = isset($data['prev_realised_pnl']) ? $data['prev_realised_pnl'] : null;
        $this->container['prev_unrealised_pnl'] = isset($data['prev_unrealised_pnl']) ? $data['prev_unrealised_pnl'] : null;
        $this->container['gross_comm'] = isset($data['gross_comm']) ? $data['gross_comm'] : null;
        $this->container['gross_open_cost'] = isset($data['gross_open_cost']) ? $data['gross_open_cost'] : null;
        $this->container['gross_open_premium'] = isset($data['gross_open_premium']) ? $data['gross_open_premium'] : null;
        $this->container['gross_exec_cost'] = isset($data['gross_exec_cost']) ? $data['gross_exec_cost'] : null;
        $this->container['gross_mark_value'] = isset($data['gross_mark_value']) ? $data['gross_mark_value'] : null;
        $this->container['risk_value'] = isset($data['risk_value']) ? $data['risk_value'] : null;
        $this->container['taxable_margin'] = isset($data['taxable_margin']) ? $data['taxable_margin'] : null;
        $this->container['init_margin'] = isset($data['init_margin']) ? $data['init_margin'] : null;
        $this->container['maint_margin'] = isset($data['maint_margin']) ? $data['maint_margin'] : null;
        $this->container['session_margin'] = isset($data['session_margin']) ? $data['session_margin'] : null;
        $this->container['target_excess_margin'] = isset($data['target_excess_margin']) ? $data['target_excess_margin'] : null;
        $this->container['var_margin'] = isset($data['var_margin']) ? $data['var_margin'] : null;
        $this->container['realised_pnl'] = isset($data['realised_pnl']) ? $data['realised_pnl'] : null;
        $this->container['unrealised_pnl'] = isset($data['unrealised_pnl']) ? $data['unrealised_pnl'] : null;
        $this->container['indicative_tax'] = isset($data['indicative_tax']) ? $data['indicative_tax'] : null;
        $this->container['unrealised_profit'] = isset($data['unrealised_profit']) ? $data['unrealised_profit'] : null;
        $this->container['synthetic_margin'] = isset($data['synthetic_margin']) ? $data['synthetic_margin'] : null;
        $this->container['wallet_balance'] = isset($data['wallet_balance']) ? $data['wallet_balance'] : null;
        $this->container['margin_balance'] = isset($data['margin_balance']) ? $data['margin_balance'] : null;
        $this->container['margin_balance_pcnt'] = isset($data['margin_balance_pcnt']) ? $data['margin_balance_pcnt'] : 0.0;
        $this->container['margin_leverage'] = isset($data['margin_leverage']) ? $data['margin_leverage'] : 0.0;
        $this->container['margin_used_pcnt'] = isset($data['margin_used_pcnt']) ? $data['margin_used_pcnt'] : 0.0;
        $this->container['excess_margin'] = isset($data['excess_margin']) ? $data['excess_margin'] : null;
        $this->container['excess_margin_pcnt'] = isset($data['excess_margin_pcnt']) ? $data['excess_margin_pcnt'] : 0.0;
        $this->container['available_margin'] = isset($data['available_margin']) ? $data['available_margin'] : null;
        $this->container['withdrawable_margin'] = isset($data['withdrawable_margin']) ? $data['withdrawable_margin'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['gross_last_value'] = isset($data['gross_last_value']) ? $data['gross_last_value'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : 0.0;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
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
     * Gets account
     *
     * @return float
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param float $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets risk_limit
     *
     * @return float
     */
    public function getRiskLimit()
    {
        return $this->container['risk_limit'];
    }

    /**
     * Sets risk_limit
     *
     * @param float $risk_limit risk_limit
     *
     * @return $this
     */
    public function setRiskLimit($risk_limit)
    {
        $this->container['risk_limit'] = $risk_limit;

        return $this;
    }

    /**
     * Gets prev_state
     *
     * @return string
     */
    public function getPrevState()
    {
        return $this->container['prev_state'];
    }

    /**
     * Sets prev_state
     *
     * @param string $prev_state prev_state
     *
     * @return $this
     */
    public function setPrevState($prev_state)
    {
        $this->container['prev_state'] = $prev_state;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets pending_credit
     *
     * @return float
     */
    public function getPendingCredit()
    {
        return $this->container['pending_credit'];
    }

    /**
     * Sets pending_credit
     *
     * @param float $pending_credit pending_credit
     *
     * @return $this
     */
    public function setPendingCredit($pending_credit)
    {
        $this->container['pending_credit'] = $pending_credit;

        return $this;
    }

    /**
     * Gets pending_debit
     *
     * @return float
     */
    public function getPendingDebit()
    {
        return $this->container['pending_debit'];
    }

    /**
     * Sets pending_debit
     *
     * @param float $pending_debit pending_debit
     *
     * @return $this
     */
    public function setPendingDebit($pending_debit)
    {
        $this->container['pending_debit'] = $pending_debit;

        return $this;
    }

    /**
     * Gets confirmed_debit
     *
     * @return float
     */
    public function getConfirmedDebit()
    {
        return $this->container['confirmed_debit'];
    }

    /**
     * Sets confirmed_debit
     *
     * @param float $confirmed_debit confirmed_debit
     *
     * @return $this
     */
    public function setConfirmedDebit($confirmed_debit)
    {
        $this->container['confirmed_debit'] = $confirmed_debit;

        return $this;
    }

    /**
     * Gets prev_realised_pnl
     *
     * @return float
     */
    public function getPrevRealisedPnl()
    {
        return $this->container['prev_realised_pnl'];
    }

    /**
     * Sets prev_realised_pnl
     *
     * @param float $prev_realised_pnl prev_realised_pnl
     *
     * @return $this
     */
    public function setPrevRealisedPnl($prev_realised_pnl)
    {
        $this->container['prev_realised_pnl'] = $prev_realised_pnl;

        return $this;
    }

    /**
     * Gets prev_unrealised_pnl
     *
     * @return float
     */
    public function getPrevUnrealisedPnl()
    {
        return $this->container['prev_unrealised_pnl'];
    }

    /**
     * Sets prev_unrealised_pnl
     *
     * @param float $prev_unrealised_pnl prev_unrealised_pnl
     *
     * @return $this
     */
    public function setPrevUnrealisedPnl($prev_unrealised_pnl)
    {
        $this->container['prev_unrealised_pnl'] = $prev_unrealised_pnl;

        return $this;
    }

    /**
     * Gets gross_comm
     *
     * @return float
     */
    public function getGrossComm()
    {
        return $this->container['gross_comm'];
    }

    /**
     * Sets gross_comm
     *
     * @param float $gross_comm gross_comm
     *
     * @return $this
     */
    public function setGrossComm($gross_comm)
    {
        $this->container['gross_comm'] = $gross_comm;

        return $this;
    }

    /**
     * Gets gross_open_cost
     *
     * @return float
     */
    public function getGrossOpenCost()
    {
        return $this->container['gross_open_cost'];
    }

    /**
     * Sets gross_open_cost
     *
     * @param float $gross_open_cost gross_open_cost
     *
     * @return $this
     */
    public function setGrossOpenCost($gross_open_cost)
    {
        $this->container['gross_open_cost'] = $gross_open_cost;

        return $this;
    }

    /**
     * Gets gross_open_premium
     *
     * @return float
     */
    public function getGrossOpenPremium()
    {
        return $this->container['gross_open_premium'];
    }

    /**
     * Sets gross_open_premium
     *
     * @param float $gross_open_premium gross_open_premium
     *
     * @return $this
     */
    public function setGrossOpenPremium($gross_open_premium)
    {
        $this->container['gross_open_premium'] = $gross_open_premium;

        return $this;
    }

    /**
     * Gets gross_exec_cost
     *
     * @return float
     */
    public function getGrossExecCost()
    {
        return $this->container['gross_exec_cost'];
    }

    /**
     * Sets gross_exec_cost
     *
     * @param float $gross_exec_cost gross_exec_cost
     *
     * @return $this
     */
    public function setGrossExecCost($gross_exec_cost)
    {
        $this->container['gross_exec_cost'] = $gross_exec_cost;

        return $this;
    }

    /**
     * Gets gross_mark_value
     *
     * @return float
     */
    public function getGrossMarkValue()
    {
        return $this->container['gross_mark_value'];
    }

    /**
     * Sets gross_mark_value
     *
     * @param float $gross_mark_value gross_mark_value
     *
     * @return $this
     */
    public function setGrossMarkValue($gross_mark_value)
    {
        $this->container['gross_mark_value'] = $gross_mark_value;

        return $this;
    }

    /**
     * Gets risk_value
     *
     * @return float
     */
    public function getRiskValue()
    {
        return $this->container['risk_value'];
    }

    /**
     * Sets risk_value
     *
     * @param float $risk_value risk_value
     *
     * @return $this
     */
    public function setRiskValue($risk_value)
    {
        $this->container['risk_value'] = $risk_value;

        return $this;
    }

    /**
     * Gets taxable_margin
     *
     * @return float
     */
    public function getTaxableMargin()
    {
        return $this->container['taxable_margin'];
    }

    /**
     * Sets taxable_margin
     *
     * @param float $taxable_margin taxable_margin
     *
     * @return $this
     */
    public function setTaxableMargin($taxable_margin)
    {
        $this->container['taxable_margin'] = $taxable_margin;

        return $this;
    }

    /**
     * Gets init_margin
     *
     * @return float
     */
    public function getInitMargin()
    {
        return $this->container['init_margin'];
    }

    /**
     * Sets init_margin
     *
     * @param float $init_margin init_margin
     *
     * @return $this
     */
    public function setInitMargin($init_margin)
    {
        $this->container['init_margin'] = $init_margin;

        return $this;
    }

    /**
     * Gets maint_margin
     *
     * @return float
     */
    public function getMaintMargin()
    {
        return $this->container['maint_margin'];
    }

    /**
     * Sets maint_margin
     *
     * @param float $maint_margin maint_margin
     *
     * @return $this
     */
    public function setMaintMargin($maint_margin)
    {
        $this->container['maint_margin'] = $maint_margin;

        return $this;
    }

    /**
     * Gets session_margin
     *
     * @return float
     */
    public function getSessionMargin()
    {
        return $this->container['session_margin'];
    }

    /**
     * Sets session_margin
     *
     * @param float $session_margin session_margin
     *
     * @return $this
     */
    public function setSessionMargin($session_margin)
    {
        $this->container['session_margin'] = $session_margin;

        return $this;
    }

    /**
     * Gets target_excess_margin
     *
     * @return float
     */
    public function getTargetExcessMargin()
    {
        return $this->container['target_excess_margin'];
    }

    /**
     * Sets target_excess_margin
     *
     * @param float $target_excess_margin target_excess_margin
     *
     * @return $this
     */
    public function setTargetExcessMargin($target_excess_margin)
    {
        $this->container['target_excess_margin'] = $target_excess_margin;

        return $this;
    }

    /**
     * Gets var_margin
     *
     * @return float
     */
    public function getVarMargin()
    {
        return $this->container['var_margin'];
    }

    /**
     * Sets var_margin
     *
     * @param float $var_margin var_margin
     *
     * @return $this
     */
    public function setVarMargin($var_margin)
    {
        $this->container['var_margin'] = $var_margin;

        return $this;
    }

    /**
     * Gets realised_pnl
     *
     * @return float
     */
    public function getRealisedPnl()
    {
        return $this->container['realised_pnl'];
    }

    /**
     * Sets realised_pnl
     *
     * @param float $realised_pnl realised_pnl
     *
     * @return $this
     */
    public function setRealisedPnl($realised_pnl)
    {
        $this->container['realised_pnl'] = $realised_pnl;

        return $this;
    }

    /**
     * Gets unrealised_pnl
     *
     * @return float
     */
    public function getUnrealisedPnl()
    {
        return $this->container['unrealised_pnl'];
    }

    /**
     * Sets unrealised_pnl
     *
     * @param float $unrealised_pnl unrealised_pnl
     *
     * @return $this
     */
    public function setUnrealisedPnl($unrealised_pnl)
    {
        $this->container['unrealised_pnl'] = $unrealised_pnl;

        return $this;
    }

    /**
     * Gets indicative_tax
     *
     * @return float
     */
    public function getIndicativeTax()
    {
        return $this->container['indicative_tax'];
    }

    /**
     * Sets indicative_tax
     *
     * @param float $indicative_tax indicative_tax
     *
     * @return $this
     */
    public function setIndicativeTax($indicative_tax)
    {
        $this->container['indicative_tax'] = $indicative_tax;

        return $this;
    }

    /**
     * Gets unrealised_profit
     *
     * @return float
     */
    public function getUnrealisedProfit()
    {
        return $this->container['unrealised_profit'];
    }

    /**
     * Sets unrealised_profit
     *
     * @param float $unrealised_profit unrealised_profit
     *
     * @return $this
     */
    public function setUnrealisedProfit($unrealised_profit)
    {
        $this->container['unrealised_profit'] = $unrealised_profit;

        return $this;
    }

    /**
     * Gets synthetic_margin
     *
     * @return float
     */
    public function getSyntheticMargin()
    {
        return $this->container['synthetic_margin'];
    }

    /**
     * Sets synthetic_margin
     *
     * @param float $synthetic_margin synthetic_margin
     *
     * @return $this
     */
    public function setSyntheticMargin($synthetic_margin)
    {
        $this->container['synthetic_margin'] = $synthetic_margin;

        return $this;
    }

    /**
     * Gets wallet_balance
     *
     * @return float
     */
    public function getWalletBalance()
    {
        return $this->container['wallet_balance'];
    }

    /**
     * Sets wallet_balance
     *
     * @param float $wallet_balance wallet_balance
     *
     * @return $this
     */
    public function setWalletBalance($wallet_balance)
    {
        $this->container['wallet_balance'] = $wallet_balance;

        return $this;
    }

    /**
     * Gets margin_balance
     *
     * @return float
     */
    public function getMarginBalance()
    {
        return $this->container['margin_balance'];
    }

    /**
     * Sets margin_balance
     *
     * @param float $margin_balance margin_balance
     *
     * @return $this
     */
    public function setMarginBalance($margin_balance)
    {
        $this->container['margin_balance'] = $margin_balance;

        return $this;
    }

    /**
     * Gets margin_balance_pcnt
     *
     * @return double
     */
    public function getMarginBalancePcnt()
    {
        return $this->container['margin_balance_pcnt'];
    }

    /**
     * Sets margin_balance_pcnt
     *
     * @param double $margin_balance_pcnt margin_balance_pcnt
     *
     * @return $this
     */
    public function setMarginBalancePcnt($margin_balance_pcnt)
    {
        $this->container['margin_balance_pcnt'] = $margin_balance_pcnt;

        return $this;
    }

    /**
     * Gets margin_leverage
     *
     * @return double
     */
    public function getMarginLeverage()
    {
        return $this->container['margin_leverage'];
    }

    /**
     * Sets margin_leverage
     *
     * @param double $margin_leverage margin_leverage
     *
     * @return $this
     */
    public function setMarginLeverage($margin_leverage)
    {
        $this->container['margin_leverage'] = $margin_leverage;

        return $this;
    }

    /**
     * Gets margin_used_pcnt
     *
     * @return double
     */
    public function getMarginUsedPcnt()
    {
        return $this->container['margin_used_pcnt'];
    }

    /**
     * Sets margin_used_pcnt
     *
     * @param double $margin_used_pcnt margin_used_pcnt
     *
     * @return $this
     */
    public function setMarginUsedPcnt($margin_used_pcnt)
    {
        $this->container['margin_used_pcnt'] = $margin_used_pcnt;

        return $this;
    }

    /**
     * Gets excess_margin
     *
     * @return float
     */
    public function getExcessMargin()
    {
        return $this->container['excess_margin'];
    }

    /**
     * Sets excess_margin
     *
     * @param float $excess_margin excess_margin
     *
     * @return $this
     */
    public function setExcessMargin($excess_margin)
    {
        $this->container['excess_margin'] = $excess_margin;

        return $this;
    }

    /**
     * Gets excess_margin_pcnt
     *
     * @return double
     */
    public function getExcessMarginPcnt()
    {
        return $this->container['excess_margin_pcnt'];
    }

    /**
     * Sets excess_margin_pcnt
     *
     * @param double $excess_margin_pcnt excess_margin_pcnt
     *
     * @return $this
     */
    public function setExcessMarginPcnt($excess_margin_pcnt)
    {
        $this->container['excess_margin_pcnt'] = $excess_margin_pcnt;

        return $this;
    }

    /**
     * Gets available_margin
     *
     * @return float
     */
    public function getAvailableMargin()
    {
        return $this->container['available_margin'];
    }

    /**
     * Sets available_margin
     *
     * @param float $available_margin available_margin
     *
     * @return $this
     */
    public function setAvailableMargin($available_margin)
    {
        $this->container['available_margin'] = $available_margin;

        return $this;
    }

    /**
     * Gets withdrawable_margin
     *
     * @return float
     */
    public function getWithdrawableMargin()
    {
        return $this->container['withdrawable_margin'];
    }

    /**
     * Sets withdrawable_margin
     *
     * @param float $withdrawable_margin withdrawable_margin
     *
     * @return $this
     */
    public function setWithdrawableMargin($withdrawable_margin)
    {
        $this->container['withdrawable_margin'] = $withdrawable_margin;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets gross_last_value
     *
     * @return float
     */
    public function getGrossLastValue()
    {
        return $this->container['gross_last_value'];
    }

    /**
     * Sets gross_last_value
     *
     * @param float $gross_last_value gross_last_value
     *
     * @return $this
     */
    public function setGrossLastValue($gross_last_value)
    {
        $this->container['gross_last_value'] = $gross_last_value;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return double
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param double $commission commission
     *
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


