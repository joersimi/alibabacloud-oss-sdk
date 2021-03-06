// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.oss.models;

import com.aliyun.tea.*;

public class AppendObjectRequest extends TeaModel {
    // BucketName
    @NameInMap("BucketName")
    @Validation(required = true)
    public String bucketName;

    // ObjectName
    @NameInMap("ObjectName")
    @Validation(required = true)
    public String objectName;

    // UserMeta
    @NameInMap("UserMeta")
    public java.util.Map<String, String> userMeta;

    // body
    @NameInMap("body")
    public java.io.InputStream body;

    // Filter
    @NameInMap("Filter")
    @Validation(required = true)
    public AppendObjectRequestFilter filter;

    // Header
    @NameInMap("Header")
    public AppendObjectRequestHeader header;

    public static AppendObjectRequest build(java.util.Map<String, ?> map) {
        AppendObjectRequest self = new AppendObjectRequest();
        return TeaModel.build(map, self);
    }

    public AppendObjectRequest setBucketName(String bucketName) {
        this.bucketName = bucketName;
        return this;
    }
    public String getBucketName() {
        return this.bucketName;
    }

    public AppendObjectRequest setObjectName(String objectName) {
        this.objectName = objectName;
        return this;
    }
    public String getObjectName() {
        return this.objectName;
    }

    public AppendObjectRequest setUserMeta(java.util.Map<String, String> userMeta) {
        this.userMeta = userMeta;
        return this;
    }
    public java.util.Map<String, String> getUserMeta() {
        return this.userMeta;
    }

    public AppendObjectRequest setBody(java.io.InputStream body) {
        this.body = body;
        return this;
    }
    public java.io.InputStream getBody() {
        return this.body;
    }

    public AppendObjectRequest setFilter(AppendObjectRequestFilter filter) {
        this.filter = filter;
        return this;
    }
    public AppendObjectRequestFilter getFilter() {
        return this.filter;
    }

    public AppendObjectRequest setHeader(AppendObjectRequestHeader header) {
        this.header = header;
        return this;
    }
    public AppendObjectRequestHeader getHeader() {
        return this.header;
    }

    public static class AppendObjectRequestFilter extends TeaModel {
        // position
        @NameInMap("position")
        @Validation(required = true)
        public String position;

        public static AppendObjectRequestFilter build(java.util.Map<String, ?> map) {
            AppendObjectRequestFilter self = new AppendObjectRequestFilter();
            return TeaModel.build(map, self);
        }

        public AppendObjectRequestFilter setPosition(String position) {
            this.position = position;
            return this;
        }
        public String getPosition() {
            return this.position;
        }

    }

    public static class AppendObjectRequestHeader extends TeaModel {
        // Cache-Control
        @NameInMap("Cache-Control")
        public String cacheControl;

        // Content-Disposition
        @NameInMap("Content-Disposition")
        public String contentDisposition;

        // Content-Encoding
        @NameInMap("Content-Encoding")
        public String contentEncoding;

        // Content-MD5
        @NameInMap("Content-MD5")
        public String contentMD5;

        // Expires
        @NameInMap("Expires")
        public String expires;

        // x-oss-server-side-encryption
        @NameInMap("x-oss-server-side-encryption")
        public String serverSideEncryption;

        // x-oss-object-acl
        @NameInMap("x-oss-object-acl")
        public String objectAcl;

        // x-oss-storage-class
        @NameInMap("x-oss-storage-class")
        public String storageClass;

        // content-type
        @NameInMap("content-type")
        public String contentType;

        public static AppendObjectRequestHeader build(java.util.Map<String, ?> map) {
            AppendObjectRequestHeader self = new AppendObjectRequestHeader();
            return TeaModel.build(map, self);
        }

        public AppendObjectRequestHeader setCacheControl(String cacheControl) {
            this.cacheControl = cacheControl;
            return this;
        }
        public String getCacheControl() {
            return this.cacheControl;
        }

        public AppendObjectRequestHeader setContentDisposition(String contentDisposition) {
            this.contentDisposition = contentDisposition;
            return this;
        }
        public String getContentDisposition() {
            return this.contentDisposition;
        }

        public AppendObjectRequestHeader setContentEncoding(String contentEncoding) {
            this.contentEncoding = contentEncoding;
            return this;
        }
        public String getContentEncoding() {
            return this.contentEncoding;
        }

        public AppendObjectRequestHeader setContentMD5(String contentMD5) {
            this.contentMD5 = contentMD5;
            return this;
        }
        public String getContentMD5() {
            return this.contentMD5;
        }

        public AppendObjectRequestHeader setExpires(String expires) {
            this.expires = expires;
            return this;
        }
        public String getExpires() {
            return this.expires;
        }

        public AppendObjectRequestHeader setServerSideEncryption(String serverSideEncryption) {
            this.serverSideEncryption = serverSideEncryption;
            return this;
        }
        public String getServerSideEncryption() {
            return this.serverSideEncryption;
        }

        public AppendObjectRequestHeader setObjectAcl(String objectAcl) {
            this.objectAcl = objectAcl;
            return this;
        }
        public String getObjectAcl() {
            return this.objectAcl;
        }

        public AppendObjectRequestHeader setStorageClass(String storageClass) {
            this.storageClass = storageClass;
            return this;
        }
        public String getStorageClass() {
            return this.storageClass;
        }

        public AppendObjectRequestHeader setContentType(String contentType) {
            this.contentType = contentType;
            return this;
        }
        public String getContentType() {
            return this.contentType;
        }

    }

}
