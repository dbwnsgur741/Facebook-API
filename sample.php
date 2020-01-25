<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdsInsights;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = 'EAAhDTse5nKMBALmPfigJ5hXTaEiflvZCRaMe7ZC1xffj0B87kvZA5R4WGG17HqjIAIt4aKpd9J3hRrUA1q1y6t52OdDhRBYphiamtgEAd1gGY9Hiu9lCZCDrM2gagFD3VdTZAPGQFqVUHvNYMIiwtnGWtEjrhF1SdrZBfWuVYTQqfZAlZAiOxXV1LNm3XQZCZAbRwZD';
$ad_account_id = 'act_311649756378865';
$app_secret = 'b416caf71d5583e57c87c461831d8e08';
$app_id = '2325805451025571';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
    'cost_per_inline_link_click',
);
$params = array(
    'level' => 'ad',
    'filtering' => array(),
    'date_preset' => 'last_7d',
    //'breakdowns' => array('hourly_stats_aggregated_by_advertiser_time_zone'),
    'time_range' => array('since' => '2019-12-30','until' => '2020-01-06'),
);
echo json_encode((new AdAccount($ad_account_id))->getInsights(
    $fields,
    $params
)->getResponse()->getContent(), JSON_PRETTY_PRINT);