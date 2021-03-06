<?php
/**
 * LightningApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * rpc.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Lnd\Rest;

use \Lnd\Rest\Configuration;
use \Lnd\Rest\ApiException;
use \Lnd\Rest\ObjectSerializer;

/**
 * LightningApiTest Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LightningApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for addInvoice
     *
     * * lncli: `addinvoice` AddInvoice attempts to add a new invoice to the invoice database. Any duplicated invoices are rejected, therefore all invoices *must* have a unique payment preimage..
     *
     */
    public function testAddInvoice()
    {
    }

    /**
     * Test case for channelBalance
     *
     * * lncli: `channelbalance` ChannelBalance returns the total funds available across all open channels in satoshis..
     *
     */
    public function testChannelBalance()
    {
    }

    /**
     * Test case for closeChannel
     *
     * * lncli: `closechannel` CloseChannel attempts to close an active channel identified by its channel outpoint (ChannelPoint). The actions of this method can additionally be augmented to attempt a force close after a timeout period in the case of an inactive peer. If a non-force close (cooperative closure) is requested, then the user can specify either a target number of blocks until the closure transaction is confirmed, or a manual fee rate. If neither are specified, then a default lax, block confirmation target is used..
     *
     */
    public function testCloseChannel()
    {
    }

    /**
     * Test case for connectPeer
     *
     * * lncli: `connect` ConnectPeer attempts to establish a connection to a remote peer. This is at the networking level, and is used for communication between nodes. This is distinct from establishing a channel with a peer..
     *
     */
    public function testConnectPeer()
    {
    }

    /**
     * Test case for decodePayReq
     *
     * * lncli: `decodepayreq` DecodePayReq takes an encoded payment request string and attempts to decode it, returning a full description of the conditions encoded within the payment request..
     *
     */
    public function testDecodePayReq()
    {
    }

    /**
     * Test case for deleteAllPayments
     *
     * * DeleteAllPayments deletes all outgoing payments from DB..
     *
     */
    public function testDeleteAllPayments()
    {
    }

    /**
     * Test case for describeGraph
     *
     * * lncli: `describegraph` DescribeGraph returns a description of the latest graph state from the point of view of the node. The graph information is partitioned into two components: all the nodes/vertexes, and all the edges that connect the vertexes themselves.  As this is a directed graph, the edges also contain the node directional specific routing policy which includes: the time lock delta, fee information, etc..
     *
     */
    public function testDescribeGraph()
    {
    }

    /**
     * Test case for disconnectPeer
     *
     * * lncli: `disconnect` DisconnectPeer attempts to disconnect one peer from another identified by a given pubKey. In the case that we currently have a pending or active channel with the target peer, then this action will be not be allowed..
     *
     */
    public function testDisconnectPeer()
    {
    }

    /**
     * Test case for feeReport
     *
     * * lncli: `feereport` FeeReport allows the caller to obtain a report detailing the current fee schedule enforced by the node globally for each channel..
     *
     */
    public function testFeeReport()
    {
    }

    /**
     * Test case for forwardingHistory
     *
     * * lncli: `fwdinghistory` ForwardingHistory allows the caller to query the htlcswitch for a record of all HTLC's forwarded within the target time range, and integer offset within that time range. If no time-range is specified, then the first chunk of the past 24 hrs of forwarding history are returned..
     *
     */
    public function testForwardingHistory()
    {
    }

    /**
     * Test case for getChanInfo
     *
     * * lncli: `getchaninfo` GetChanInfo returns the latest authenticated network announcement for the given channel identified by its channel ID: an 8-byte integer which uniquely identifies the location of transaction's funding output within the blockchain..
     *
     */
    public function testGetChanInfo()
    {
    }

    /**
     * Test case for getInfo
     *
     * * lncli: `getinfo` GetInfo returns general information concerning the lightning node including it's identity pubkey, alias, the chains it is connected to, and information concerning the number of open+pending channels..
     *
     */
    public function testGetInfo()
    {
    }

    /**
     * Test case for getNetworkInfo
     *
     * * lncli: `getnetworkinfo` GetNetworkInfo returns some basic stats about the known channel graph from the point of view of the node..
     *
     */
    public function testGetNetworkInfo()
    {
    }

    /**
     * Test case for getNodeInfo
     *
     * * lncli: `getnodeinfo` GetNodeInfo returns the latest advertised, aggregated, and authenticated channel information for the specified node identified by its public key..
     *
     */
    public function testGetNodeInfo()
    {
    }

    /**
     * Test case for getTransactions
     *
     * * lncli: `listchaintxns` GetTransactions returns a list describing all the known transactions relevant to the wallet..
     *
     */
    public function testGetTransactions()
    {
    }

    /**
     * Test case for listChannels
     *
     * * lncli: `listchannels` ListChannels returns a description of all the open channels that this node is a participant in..
     *
     */
    public function testListChannels()
    {
    }

    /**
     * Test case for listInvoices
     *
     * * lncli: `listinvoices` ListInvoices returns a list of all the invoices currently stored within the database. Any active debug invoices are ignored..
     *
     */
    public function testListInvoices()
    {
    }

    /**
     * Test case for listPayments
     *
     * * lncli: `listpayments` ListPayments returns a list of all outgoing payments..
     *
     */
    public function testListPayments()
    {
    }

    /**
     * Test case for listPeers
     *
     * * lncli: `listpeers` ListPeers returns a verbose listing of all currently active peers..
     *
     */
    public function testListPeers()
    {
    }

    /**
     * Test case for lookupInvoice
     *
     * * lncli: `lookupinvoice` LookupInvoice attempts to look up an invoice according to its payment hash. The passed payment hash *must* be exactly 32 bytes, if not, an error is returned..
     *
     */
    public function testLookupInvoice()
    {
    }

    /**
     * Test case for newWitnessAddress
     *
     * * NewWitnessAddress creates a new witness address under control of the local wallet..
     *
     */
    public function testNewWitnessAddress()
    {
    }

    /**
     * Test case for openChannelSync
     *
     * * OpenChannelSync is a synchronous version of the OpenChannel RPC call. This call is meant to be consumed by clients to the REST proxy. As with all other sync calls, all byte slices are intended to be populated as hex encoded strings..
     *
     */
    public function testOpenChannelSync()
    {
    }

    /**
     * Test case for pendingChannels
     *
     * * lncli: `pendingchannels` PendingChannels returns a list of all the channels that are currently considered \"pending\". A channel is pending if it has finished the funding workflow and is waiting for confirmations for the funding txn, or is in the process of closure, either initiated cooperatively or non-cooperatively..
     *
     */
    public function testPendingChannels()
    {
    }

    /**
     * Test case for queryRoutes
     *
     * * lncli: `queryroutes` QueryRoutes attempts to query the daemon's Channel Router for a possible route to a target destination capable of carrying a specific amount of satoshis. The retuned route contains the full details required to craft and send an HTLC, also including the necessary information that should be present within the Sphinx packet encapsulated within the HTLC..
     *
     */
    public function testQueryRoutes()
    {
    }

    /**
     * Test case for sendCoins
     *
     * * lncli: `sendcoins` SendCoins executes a request to send coins to a particular address. Unlike SendMany, this RPC call only allows creating a single output at a time. If neither target_conf, or sat_per_byte are set, then the internal wallet will consult its fee model to determine a fee for the default confirmation target..
     *
     */
    public function testSendCoins()
    {
    }

    /**
     * Test case for sendPaymentSync
     *
     * * SendPaymentSync is the synchronous non-streaming version of SendPayment. This RPC is intended to be consumed by clients of the REST proxy. Additionally, this RPC expects the destination's public key and the payment hash (if any) to be encoded as hex strings..
     *
     */
    public function testSendPaymentSync()
    {
    }

    /**
     * Test case for subscribeInvoices
     *
     * * SubscribeInvoices returns a uni-directional stream (sever -> client) for notifying the client of newly added/settled invoices..
     *
     */
    public function testSubscribeInvoices()
    {
    }

    /**
     * Test case for updateChannelPolicy
     *
     * * lncli: `updatechanpolicy` UpdateChannelPolicy allows the caller to update the fee schedule and channel policies for all channels globally, or a particular channel..
     *
     */
    public function testUpdateChannelPolicy()
    {
    }

    /**
     * Test case for walletBalance
     *
     * * lncli: `walletbalance` WalletBalance returns total unspent outputs(confirmed and unconfirmed), all confirmed unspent outputs and all unconfirmed unspent outputs under control of the wallet..
     *
     */
    public function testWalletBalance()
    {
    }
}
