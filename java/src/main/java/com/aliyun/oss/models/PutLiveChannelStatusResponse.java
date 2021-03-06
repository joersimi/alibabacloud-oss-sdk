// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.oss.models;

import com.aliyun.tea.*;

public class PutLiveChannelStatusResponse extends TeaModel {
    // x-oss-request-id
    @NameInMap("x-oss-request-id")
    @Validation(required = true)
    public String requestId;

    public static PutLiveChannelStatusResponse build(java.util.Map<String, ?> map) {
        PutLiveChannelStatusResponse self = new PutLiveChannelStatusResponse();
        return TeaModel.build(map, self);
    }

    public PutLiveChannelStatusResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

}
