<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OSS;

use AlibabaCloud\Credentials\Credential;
use AlibabaCloud\SDK\OSS\OSS\AbortMultipartUploadRequest;
use AlibabaCloud\SDK\OSS\OSS\AbortMultipartUploadResponse;
use AlibabaCloud\SDK\OSS\OSS\AppendObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\AppendObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\CallbackRequest;
use AlibabaCloud\SDK\OSS\OSS\CallbackResponse;
use AlibabaCloud\SDK\OSS\OSS\CompleteMultipartUploadRequest;
use AlibabaCloud\SDK\OSS\OSS\CompleteMultipartUploadResponse;
use AlibabaCloud\SDK\OSS\OSS\Config;
use AlibabaCloud\SDK\OSS\OSS\CopyObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\CopyObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketCORSRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketCORSResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketEncryptionRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketEncryptionResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketLifecycleRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketLifecycleResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketLoggingRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketLoggingResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketTagsRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketTagsResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketWebsiteRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteBucketWebsiteResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteLiveChannelRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteLiveChannelResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteMultipleObjectsRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteMultipleObjectsResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\DeleteObjectTaggingRequest;
use AlibabaCloud\SDK\OSS\OSS\DeleteObjectTaggingResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketAclRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketAclResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketCORSRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketCORSResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketEncryptionRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketEncryptionResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketInfoRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketInfoResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketLifecycleRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketLifecycleResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketLocationRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketLocationResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketLoggingRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketLoggingResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketRefererRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketRefererResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketRequestPaymentRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketRequestPaymentResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketTagsRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketTagsResponse;
use AlibabaCloud\SDK\OSS\OSS\GetBucketWebsiteRequest;
use AlibabaCloud\SDK\OSS\OSS\GetBucketWebsiteResponse;
use AlibabaCloud\SDK\OSS\OSS\GetLiveChannelHistoryRequest;
use AlibabaCloud\SDK\OSS\OSS\GetLiveChannelHistoryResponse;
use AlibabaCloud\SDK\OSS\OSS\GetLiveChannelInfoRequest;
use AlibabaCloud\SDK\OSS\OSS\GetLiveChannelInfoResponse;
use AlibabaCloud\SDK\OSS\OSS\GetLiveChannelStatRequest;
use AlibabaCloud\SDK\OSS\OSS\GetLiveChannelStatResponse;
use AlibabaCloud\SDK\OSS\OSS\GetObjectAclRequest;
use AlibabaCloud\SDK\OSS\OSS\GetObjectAclResponse;
use AlibabaCloud\SDK\OSS\OSS\GetObjectMetaRequest;
use AlibabaCloud\SDK\OSS\OSS\GetObjectMetaResponse;
use AlibabaCloud\SDK\OSS\OSS\GetObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\GetObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\GetObjectTaggingRequest;
use AlibabaCloud\SDK\OSS\OSS\GetObjectTaggingResponse;
use AlibabaCloud\SDK\OSS\OSS\GetServiceRequest;
use AlibabaCloud\SDK\OSS\OSS\GetServiceResponse;
use AlibabaCloud\SDK\OSS\OSS\GetSymlinkRequest;
use AlibabaCloud\SDK\OSS\OSS\GetSymlinkResponse;
use AlibabaCloud\SDK\OSS\OSS\GetVodPlaylistRequest;
use AlibabaCloud\SDK\OSS\OSS\GetVodPlaylistResponse;
use AlibabaCloud\SDK\OSS\OSS\HeadObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\HeadObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\InitiateMultipartUploadRequest;
use AlibabaCloud\SDK\OSS\OSS\InitiateMultipartUploadResponse;
use AlibabaCloud\SDK\OSS\OSS\ListLiveChannelRequest;
use AlibabaCloud\SDK\OSS\OSS\ListLiveChannelResponse;
use AlibabaCloud\SDK\OSS\OSS\ListMultipartUploadsRequest;
use AlibabaCloud\SDK\OSS\OSS\ListMultipartUploadsResponse;
use AlibabaCloud\SDK\OSS\OSS\ListPartsRequest;
use AlibabaCloud\SDK\OSS\OSS\ListPartsResponse;
use AlibabaCloud\SDK\OSS\OSS\OptionObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\OptionObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\PostVodPlaylistRequest;
use AlibabaCloud\SDK\OSS\OSS\PostVodPlaylistResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketAclRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketAclResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketCORSRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketCORSResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketEncryptionRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketEncryptionResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketLifecycleRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketLifecycleResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketLoggingRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketLoggingResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketRefererRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketRefererResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketRequestPaymentRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketRequestPaymentResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketTagsRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketTagsResponse;
use AlibabaCloud\SDK\OSS\OSS\PutBucketWebsiteRequest;
use AlibabaCloud\SDK\OSS\OSS\PutBucketWebsiteResponse;
use AlibabaCloud\SDK\OSS\OSS\PutLiveChannelRequest;
use AlibabaCloud\SDK\OSS\OSS\PutLiveChannelResponse;
use AlibabaCloud\SDK\OSS\OSS\PutLiveChannelStatusRequest;
use AlibabaCloud\SDK\OSS\OSS\PutLiveChannelStatusResponse;
use AlibabaCloud\SDK\OSS\OSS\PutObjectAclRequest;
use AlibabaCloud\SDK\OSS\OSS\PutObjectAclResponse;
use AlibabaCloud\SDK\OSS\OSS\PutObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PutObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\PutObjectTaggingRequest;
use AlibabaCloud\SDK\OSS\OSS\PutObjectTaggingResponse;
use AlibabaCloud\SDK\OSS\OSS\PutSymlinkRequest;
use AlibabaCloud\SDK\OSS\OSS\PutSymlinkResponse;
use AlibabaCloud\SDK\OSS\OSS\RestoreObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\RestoreObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\SelectObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\SelectObjectResponse;
use AlibabaCloud\SDK\OSS\OSS\UploadPartCopyRequest;
use AlibabaCloud\SDK\OSS\OSS\UploadPartCopyResponse;
use AlibabaCloud\SDK\OSS\OSS\UploadPartRequest;
use AlibabaCloud\SDK\OSS\OSS\UploadPartResponse;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\FileForm\FileForm;
use AlibabaCloud\Tea\OSSUtils\OSSUtils;
use AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\XML\XML;

class OSS
{
    protected $_endpoint;

    protected $_regionId;

    protected $_hostModel;

    protected $_protocol;

    protected $_readTimeout;

    protected $_connectTimeout;

    protected $_signatureVersion;

    protected $_addtionalHeaders;

    protected $_localAddr;

    protected $_httpProxy;

    protected $_httpsProxy;

    protected $_noProxy;

    protected $_userAgent;

    protected $_socks5Proxy;

    protected $_isEnableCrc;

    protected $_isEnableMD5;

    protected $_socks5NetWork;

    protected $_maxIdleConns;

    protected $_credential;

    public function __construct(Config $config)
    {
        if (Utils::isUnset($config)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config' can not be unset",
            ]);
        }
        if (Utils::empty_($config->type)) {
            $config->type = 'access_key';
        }
        $credentialConfig = new \AlibabaCloud\Credentials\Credential\Config([
            'accessKeyId'     => $config->accessKeyId,
            'type'            => $config->type,
            'accessKeySecret' => $config->accessKeySecret,
            'securityToken'   => $config->securityToken,
        ]);
        $this->_credential = new Credential($credentialConfig);
        if (Utils::isUnset($config->isEnableMD5)) {
            $config->isEnableMD5 = false;
        }
        if (Utils::isUnset($config->isEnableCrc)) {
            $config->isEnableCrc = false;
        }
        $this->_endpoint         = $config->endpoint;
        $this->_protocol         = $config->protocol;
        $this->_regionId         = $config->regionId;
        $this->_userAgent        = $config->userAgent;
        $this->_readTimeout      = $config->readTimeout;
        $this->_connectTimeout   = $config->connectTimeout;
        $this->_localAddr        = $config->localAddr;
        $this->_httpProxy        = $config->httpProxy;
        $this->_httpsProxy       = $config->httpsProxy;
        $this->_noProxy          = $config->noProxy;
        $this->_socks5Proxy      = $config->socks5Proxy;
        $this->_socks5NetWork    = $config->socks5NetWork;
        $this->_maxIdleConns     = $config->maxIdleConns;
        $this->_signatureVersion = $config->signatureVersion;
        $this->_addtionalHeaders = $config->addtionalHeaders;
        $this->_hostModel        = $config->hostModel;
        $this->_isEnableMD5      = $config->isEnableMD5;
        $this->_isEnableCrc      = $config->isEnableCrc;
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketLifecycleResponse
     */
    public function putBucketLifecycle(PutBucketLifecycleRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/?lifecycle';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketLifecycleResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMultipleObjectsResponse
     */
    public function deleteMultipleObjects(DeleteMultipleObjectsRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'POST';
                $_request->pathname = '/?delete';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body = $reqBody;
                if (!Utils::isUnset($request->header) && !Utils::empty_($request->header->contentMD5)) {
                    $_request->headers['content-md5'] = $request->header->contentMD5;
                } else {
                    $_request->headers['content-md5'] = OSSUtils::getContentMD5($reqBody, $this->_isEnableMD5);
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, DeleteMultipleObjectsResponse::class);

                return DeleteMultipleObjectsResponse::fromMap(Tea::merge([
                    'DeleteResult' => $respMap['DeleteResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketRefererResponse
     */
    public function putBucketReferer(PutBucketRefererRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/?referer';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketRefererResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketWebsiteResponse
     */
    public function putBucketWebsite(PutBucketWebsiteRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/?website';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketWebsiteResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return CompleteMultipartUploadResponse
     */
    public function completeMultipartUpload(CompleteMultipartUploadRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'POST';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, CompleteMultipartUploadResponse::class);

                return CompleteMultipartUploadResponse::fromMap(Tea::merge([
                    'CompleteMultipartUploadResult' => $respMap['CompleteMultipartUploadResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketLoggingResponse
     */
    public function putBucketLogging(PutBucketLoggingRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/?logging';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketLoggingResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketRequestPaymentResponse
     */
    public function putBucketRequestPayment(PutBucketRequestPaymentRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/?requestPayment';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketRequestPaymentResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketEncryptionResponse
     */
    public function putBucketEncryption(PutBucketEncryptionRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/?encryption';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketEncryptionResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutLiveChannelResponse
     */
    public function putLiveChannel(PutLiveChannelRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/' . $request->channelName . '?live';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, PutLiveChannelResponse::class);

                return PutLiveChannelResponse::fromMap(Tea::merge([
                    'CreateLiveChannelResult' => $respMap['CreateLiveChannelResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketTagsResponse
     */
    public function putBucketTags(PutBucketTagsRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/?tagging';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketTagsResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutObjectTaggingResponse
     */
    public function putObjectTagging(PutObjectTaggingRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/' . $request->objectName . '?tagging';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutObjectTaggingResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return SelectObjectResponse
     */
    public function selectObject(SelectObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'POST';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return SelectObjectResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketCORSResponse
     */
    public function putBucketCORS(PutBucketCORSRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/?cors';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketCORSResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketResponse
     */
    public function putBucket(PutBucketRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $reqBody            = XML::toXML($request->body);
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body                     = $reqBody;
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return ListMultipartUploadsResponse
     */
    public function listMultipartUploads(ListMultipartUploadsRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?uploads';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, ListMultipartUploadsResponse::class);

                return ListMultipartUploadsResponse::fromMap(Tea::merge([
                    'ListMultipartUploadsResult' => $respMap['ListMultipartUploadsResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketRequestPaymentResponse
     */
    public function getBucketRequestPayment(GetBucketRequestPaymentRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?requestPayment';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketRequestPaymentResponse::class);

                return GetBucketRequestPaymentResponse::fromMap(Tea::merge([
                    'RequestPaymentConfiguration' => $respMap['RequestPaymentConfiguration'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketEncryptionResponse
     */
    public function getBucketEncryption(GetBucketEncryptionRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?encryption';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketEncryptionResponse::class);

                return GetBucketEncryptionResponse::fromMap(Tea::merge([
                    'ServerSideEncryptionRule' => $respMap['ServerSideEncryptionRule'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketTagsResponse
     */
    public function getBucketTags(GetBucketTagsRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?tagging';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketTagsResponse::class);

                return GetBucketTagsResponse::fromMap(Tea::merge([
                    'Tagging' => $respMap['Tagging'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetServiceResponse
     */
    public function getService(GetServiceRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost('', $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, '', $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetServiceResponse::class);

                return GetServiceResponse::fromMap(Tea::merge([
                    'ListAllMyBucketsResult' => $respMap['ListAllMyBucketsResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBucketEncryptionResponse
     */
    public function deleteBucketEncryption(DeleteBucketEncryptionRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/?encryption';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteBucketEncryptionResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBucketTagsResponse
     */
    public function deleteBucketTags(DeleteBucketTagsRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteBucketTagsResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketWebsiteResponse
     */
    public function getBucketWebsite(GetBucketWebsiteRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?website';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketWebsiteResponse::class);

                return GetBucketWebsiteResponse::fromMap(Tea::merge([
                    'WebsiteConfiguration' => $respMap['WebsiteConfiguration'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLiveChannelResponse
     */
    public function deleteLiveChannel(DeleteLiveChannelRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/' . $request->channelName . '?live';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteLiveChannelResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketLocationResponse
     */
    public function getBucketLocation(GetBucketLocationRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?location';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketLocationResponse::class);

                return GetBucketLocationResponse::fromMap(Tea::merge([
                    'LocationConstraint' => $respMap['LocationConstraint'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return ListLiveChannelResponse
     */
    public function listLiveChannel(ListLiveChannelRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?live';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, ListLiveChannelResponse::class);

                return ListLiveChannelResponse::fromMap(Tea::merge([
                    'ListLiveChannelResult' => $respMap['ListLiveChannelResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetObjectMetaResponse
     */
    public function getObjectMeta(GetObjectMetaRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'HEAD';
                $_request->pathname = '/' . $request->objectName . '?objectMeta';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return GetObjectMetaResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketAclResponse
     */
    public function getBucketAcl(GetBucketAclRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?acl';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketAclResponse::class);

                return GetBucketAclResponse::fromMap(Tea::merge([
                    'AccessControlPolicy' => $respMap['AccessControlPolicy'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return ListPartsResponse
     */
    public function listParts(ListPartsRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, ListPartsResponse::class);

                return ListPartsResponse::fromMap(Tea::merge([
                    'ListPartsResult' => $respMap['ListPartsResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetLiveChannelHistoryResponse
     */
    public function getLiveChannelHistory(GetLiveChannelHistoryRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/' . $request->channelName . '?live';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetLiveChannelHistoryResponse::class);

                return GetLiveChannelHistoryResponse::fromMap(Tea::merge([
                    'LiveChannelHistory' => $respMap['LiveChannelHistory'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketResponse
     */
    public function getBucket(GetBucketRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketResponse::class);

                return GetBucketResponse::fromMap(Tea::merge([
                    'ListBucketResult' => $respMap['ListBucketResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetLiveChannelInfoResponse
     */
    public function getLiveChannelInfo(GetLiveChannelInfoRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/' . $request->channelName . '?live';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetLiveChannelInfoResponse::class);

                return GetLiveChannelInfoResponse::fromMap(Tea::merge([
                    'LiveChannelConfiguration' => $respMap['LiveChannelConfiguration'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetLiveChannelStatResponse
     */
    public function getLiveChannelStat(GetLiveChannelStatRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/' . $request->channelName . '?live';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetLiveChannelStatResponse::class);

                return GetLiveChannelStatResponse::fromMap(Tea::merge([
                    'LiveChannelStat' => $respMap['LiveChannelStat'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteObjectResponse
     */
    public function deleteObject(DeleteObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteObjectResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return AbortMultipartUploadResponse
     */
    public function abortMultipartUpload(AbortMultipartUploadRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return AbortMultipartUploadResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return AppendObjectResponse
     */
    public function appendObject(AppendObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $ctx                = [];
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'POST';
                $_request->pathname = '/' . $request->objectName . '?append';
                $_request->headers  = Tea::merge(
                    [
                        'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                        'date'       => Utils::getDateUTCString(),
                        'user-agent' => $this->getUserAgent(),
                    ],
                    Utils::stringifyMapValue($request->header),
                    OSSUtils::parseMeta($request->userMeta, 'x-oss-meta-')
                );
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query = Utils::stringifyMapValue($request->filter);
                $_request->body  = OSSUtils::inject($request->body, $ctx);
                if (!Utils::isUnset($request->header) && !Utils::empty_($request->header->contentType)) {
                    $_request->headers['content-type'] = $request->header->contentType;
                } else {
                    $_request->headers['content-type'] = OSSUtils::getContentType($request->objectName);
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                if ($this->_isEnableCrc && !Utils::equalString($ctx['crc'], $_response->headers['x-oss-hash-crc64ecma'])) {
                    throw new TeaError([
                        'code' => 'CrcNotMatched',
                        'data' => [
                            'clientCrc' => $ctx['crc'],
                            'serverCrc' => $_response->headers['x-oss-hash-crc64ecma'],
                        ],
                    ]);
                }
                if ($this->_isEnableMD5 && !Utils::equalString($ctx['md5'], $_response->headers['content-md5'])) {
                    throw new TeaError([
                        'code' => 'MD5NotMatched',
                        'data' => [
                            'clientMD5' => $ctx['md5'],
                            'serverMD5' => $_response->headers['content-md5'],
                        ],
                    ]);
                }

                return AppendObjectResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return UploadPartCopyResponse
     */
    public function uploadPartCopy(UploadPartCopyRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, UploadPartCopyResponse::class);

                return UploadPartCopyResponse::fromMap(Tea::merge([
                    'CopyPartResult' => $respMap['CopyPartResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetVodPlaylistResponse
     */
    public function getVodPlaylist(GetVodPlaylistRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/' . $request->channelName . '?vod';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return GetVodPlaylistResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBucketCORSResponse
     */
    public function deleteBucketCORS(DeleteBucketCORSRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/?cors';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteBucketCORSResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetObjectResponse
     */
    public function getObject(GetObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return GetObjectResponse::fromMap(Tea::merge([
                    'body' => $_response->body,
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return UploadPartResponse
     */
    public function uploadPart(UploadPartRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $ctx                = [];
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->body                     = OSSUtils::inject($request->body, $ctx);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                if ($this->_isEnableCrc && !Utils::equalString($ctx['crc'], $_response->headers['x-oss-hash-crc64ecma'])) {
                    throw new TeaError([
                        'code' => 'CrcNotMatched',
                        'data' => [
                            'clientCrc' => $ctx['crc'],
                            'serverCrc' => $_response->headers['x-oss-hash-crc64ecma'],
                        ],
                    ]);
                }
                if ($this->_isEnableMD5 && !Utils::equalString($ctx['md5'], $_response->headers['content-md5'])) {
                    throw new TeaError([
                        'code' => 'MD5NotMatched',
                        'data' => [
                            'clientMD5' => $ctx['md5'],
                            'serverMD5' => $_response->headers['content-md5'],
                        ],
                    ]);
                }

                return UploadPartResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketCORSResponse
     */
    public function getBucketCORS(GetBucketCORSRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?cors';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketCORSResponse::class);

                return GetBucketCORSResponse::fromMap(Tea::merge([
                    'CORSConfiguration' => $respMap['CORSConfiguration'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return CopyObjectResponse
     */
    public function copyObject(CopyObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/' . $request->destObjectName . '';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['x-oss-copy-source'] = OSSUtils::encode($_request->headers['x-oss-copy-source'], 'UrlEncode');
                $_request->headers['authorization']     = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                           = $_request;
                $_response                              = Tea::send($_request, $_runtime);
                $respMap                                = null;
                $bodyStr                                = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, CopyObjectResponse::class);

                return CopyObjectResponse::fromMap(Tea::merge([
                    'CopyObjectResult' => $respMap['CopyObjectResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetObjectTaggingResponse
     */
    public function getObjectTagging(GetObjectTaggingRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/' . $request->objectName . '?tagging';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetObjectTaggingResponse::class);

                return GetObjectTaggingResponse::fromMap(Tea::merge([
                    'Tagging' => $respMap['Tagging'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBucketLifecycleResponse
     */
    public function deleteBucketLifecycle(DeleteBucketLifecycleRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/?lifecycle';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteBucketLifecycleResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBucketLoggingResponse
     */
    public function deleteBucketLogging(DeleteBucketLoggingRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/?logging';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteBucketLoggingResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBucketWebsiteResponse
     */
    public function deleteBucketWebsite(DeleteBucketWebsiteRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/?website';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteBucketWebsiteResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetSymlinkResponse
     */
    public function getSymlink(GetSymlinkRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/' . $request->objectName . '?symlink';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return GetSymlinkResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketLifecycleResponse
     */
    public function getBucketLifecycle(GetBucketLifecycleRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?lifecycle';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketLifecycleResponse::class);

                return GetBucketLifecycleResponse::fromMap(Tea::merge([
                    'LifecycleConfiguration' => $respMap['LifecycleConfiguration'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutSymlinkResponse
     */
    public function putSymlink(PutSymlinkRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/' . $request->objectName . '?symlink';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutSymlinkResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketRefererResponse
     */
    public function getBucketReferer(GetBucketRefererRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?referer';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketRefererResponse::class);

                return GetBucketRefererResponse::fromMap(Tea::merge([
                    'RefererConfiguration' => $respMap['RefererConfiguration'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return CallbackResponse
     */
    public function callback(CallbackRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return CallbackResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketLoggingResponse
     */
    public function getBucketLogging(GetBucketLoggingRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?logging';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketLoggingResponse::class);

                return GetBucketLoggingResponse::fromMap(Tea::merge([
                    'BucketLoggingStatus' => $respMap['BucketLoggingStatus'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutObjectAclResponse
     */
    public function putObjectAcl(PutObjectAclRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/' . $request->objectName . '?acl';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutObjectAclResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetBucketInfoResponse
     */
    public function getBucketInfo(GetBucketInfoRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/?bucketInfo';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetBucketInfoResponse::class);

                return GetBucketInfoResponse::fromMap(Tea::merge([
                    'BucketInfo' => $respMap['BucketInfo'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutLiveChannelStatusResponse
     */
    public function putLiveChannelStatus(PutLiveChannelStatusRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/' . $request->channelName . '?live';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutLiveChannelStatusResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return InitiateMultipartUploadResponse
     */
    public function initiateMultipartUpload(InitiateMultipartUploadRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'POST';
                $_request->pathname = '/' . $request->objectName . '?uploads';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query = Utils::stringifyMapValue($request->filter);
                if (!Utils::isUnset($request->header) && !Utils::empty_($request->header->contentType)) {
                    $_request->headers['content-type'] = $request->header->contentType;
                } else {
                    $_request->headers['content-type'] = OSSUtils::getContentType($request->objectName);
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, InitiateMultipartUploadResponse::class);

                return InitiateMultipartUploadResponse::fromMap(Tea::merge([
                    'InitiateMultipartUploadResult' => $respMap['InitiateMultipartUploadResult'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return OptionObjectResponse
     */
    public function optionObject(OptionObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'OPTIONS';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return OptionObjectResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PostVodPlaylistResponse
     */
    public function postVodPlaylist(PostVodPlaylistRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'POST';
                $_request->pathname = '/' . $request->channelName . '/' . $request->playlistName . '?vod';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->query                    = Utils::stringifyMapValue($request->filter);
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PostVodPlaylistResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PostObjectResponse
     */
    public function postObject(PostObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $boundary           = FileForm::getBoundary();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'POST';
                $_request->pathname = '/';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                $_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $form                              = Tea::merge([
                    'OSSAccessKeyId'        => $request->header->accessKeyId,
                    'policy'                => $request->header->policy,
                    'Signature'             => $request->header->signature,
                    'key'                   => $request->header->key,
                    'success_action_status' => $request->header->successActionStatus,
                    'file'                  => $request->header->file,
                ], OSSUtils::toMeta($request->header->userMeta, 'x-oss-meta-'));
                $_request->body = FileForm::toFileForm($form, $boundary);
                $_lastRequest   = $_request;
                $_response      = Tea::send($_request, $_runtime);
                $respMap        = null;
                $bodyStr        = Utils::readAsString($_response->body);
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $respMap = XML::parseXml($bodyStr, PostObjectResponse::class);

                return PostObjectResponse::fromMap(Tea::merge($respMap));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return HeadObjectResponse
     */
    public function headObject(HeadObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'HEAD';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return HeadObjectResponse::fromMap(Tea::merge([
                    'usermeta' => OSSUtils::toMeta($_response->headers, 'x-oss-meta-'),
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteObjectTaggingResponse
     */
    public function deleteObjectTagging(DeleteObjectTaggingRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/' . $request->objectName . '?tagging';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteObjectTaggingResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return RestoreObjectResponse
     */
    public function restoreObject(RestoreObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'POST';
                $_request->pathname = '/' . $request->objectName . '?restore';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return RestoreObjectResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return GetObjectAclResponse
     */
    public function getObjectAcl(GetObjectAclRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'GET';
                $_request->pathname = '/' . $request->objectName . '?acl';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                $bodyStr = Utils::readAsString($_response->body);
                $respMap = XML::parseXml($bodyStr, GetObjectAclResponse::class);

                return GetObjectAclResponse::fromMap(Tea::merge([
                    'AccessControlPolicy' => $respMap['AccessControlPolicy'],
                ], $_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutBucketAclResponse
     */
    public function putBucketAcl(PutBucketAclRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/?acl';
                $_request->headers  = Tea::merge([
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ], Utils::stringifyMapValue($request->header));
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return PutBucketAclResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteBucketResponse
     */
    public function deleteBucket(DeleteBucketRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'DELETE';
                $_request->pathname = '/';
                $_request->headers  = [
                    'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                    'date'       => Utils::getDateUTCString(),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }

                return DeleteBucketResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return PutObjectResponse
     */
    public function putObject(PutObjectRequest $request, RuntimeOptions $runtime)
    {
        $request->validate();
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'localAddr'      => Utils::defaultString($runtime->localAddr, $this->_localAddr),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'socks5Proxy'    => Utils::defaultString($runtime->socks5Proxy, $this->_socks5Proxy),
            'socks5NetWork'  => Utils::defaultString($runtime->socks5NetWork, $this->_socks5NetWork),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $ctx                = [];
                $accessKeyId        = $this->_credential->getAccessKeyId();
                $accessKeySecret    = $this->_credential->getAccessKeySecret();
                $token              = $this->_credential->getSecurityToken();
                $_request->protocol = $this->_protocol;
                $_request->method   = 'PUT';
                $_request->pathname = '/' . $request->objectName . '';
                $_request->headers  = Tea::merge(
                    [
                        'host'       => OSSUtils::getHost($request->bucketName, $this->_regionId, $this->_endpoint, $this->_hostModel),
                        'date'       => Utils::getDateUTCString(),
                        'user-agent' => $this->getUserAgent(),
                    ],
                    Utils::stringifyMapValue($request->header),
                    OSSUtils::parseMeta($request->userMeta, 'x-oss-meta-')
                );
                if (!Utils::empty_($token)) {
                    $_request->headers['x-oss-security-token'] = $token;
                }
                $_request->body = OSSUtils::inject($request->body, $ctx);
                if (!Utils::isUnset($request->header) && !Utils::empty_($request->header->contentType)) {
                    $_request->headers['content-type'] = $request->header->contentType;
                } else {
                    $_request->headers['content-type'] = OSSUtils::getContentType($request->objectName);
                }
                $_request->headers['authorization'] = OSSUtils::getSignature($_request, $request->bucketName, $accessKeyId, $accessKeySecret, $this->_signatureVersion, $this->_addtionalHeaders);
                $_lastRequest                       = $_request;
                $_response                          = Tea::send($_request, $_runtime);
                $respMap                            = null;
                $bodyStr                            = null;
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    $bodyStr = Utils::readAsString($_response->body);
                    $respMap = OSSUtils::getErrMessage($bodyStr);

                    throw new TeaError([
                        'code'    => $respMap['Code'],
                        'message' => $respMap['Message'],
                        'data'    => [
                            'httpCode'  => $_response->statusCode,
                            'requestId' => $respMap['RequestId'],
                            'hostId'    => $respMap['HostId'],
                        ],
                    ]);
                }
                if ($this->_isEnableCrc && !Utils::equalString($ctx['crc'], $_response->headers['x-oss-hash-crc64ecma'])) {
                    throw new TeaError([
                        'code' => 'CrcNotMatched',
                        'data' => [
                            'clientCrc' => $ctx['crc'],
                            'serverCrc' => $_response->headers['x-oss-hash-crc64ecma'],
                        ],
                    ]);
                }
                if ($this->_isEnableMD5 && !Utils::equalString($ctx['md5'], $_response->headers['content-md5'])) {
                    throw new TeaError([
                        'code' => 'MD5NotMatched',
                        'data' => [
                            'clientMD5' => $ctx['md5'],
                            'serverMD5' => $_response->headers['content-md5'],
                        ],
                    ]);
                }

                return PutObjectResponse::fromMap(Tea::merge($_response->headers));
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @param string $userAgent
     *
     * @throws \Exception
     */
    public function setUserAgent($userAgent)
    {
        $this->_userAgent = $userAgent;
    }

    /**
     * @param string $userAgent
     *
     * @throws \Exception
     */
    public function appendUserAgent($userAgent)
    {
        $this->_userAgent = '' . $this->_userAgent . ' ' . $userAgent . '';
    }

    /**
     * @throws \Exception
     *
     * @return string
     */
    public function getUserAgent()
    {
        return Utils::getUserAgent($this->_userAgent);
    }

    /**
     * @throws \Exception
     *
     * @return string
     */
    public function getAccessKeyId()
    {
        if (Utils::isUnset($this->_credential)) {
            return '';
        }

        return $this->_credential->getAccessKeyId();
    }

    /**
     * @throws \Exception
     *
     * @return string
     */
    public function getAccessKeySecret()
    {
        if (Utils::isUnset($this->_credential)) {
            return '';
        }

        return $this->_credential->getAccessKeySecret();
    }
}
