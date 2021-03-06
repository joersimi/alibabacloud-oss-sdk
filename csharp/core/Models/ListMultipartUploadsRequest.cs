// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.OSS.Models
{
    public class ListMultipartUploadsRequest : TeaModel {
        [NameInMap("BucketName")]
        [Validation(Required=true)]
        public string BucketName { get; set; }

        [NameInMap("Filter")]
        [Validation(Required=false)]
        public ListMultipartUploadsRequestFilter Filter { get; set; }
        public class ListMultipartUploadsRequestFilter : TeaModel {
            [NameInMap("delimiter")]
            [Validation(Required=false)]
            public string Delimiter { get; set; }
            [NameInMap("max-uploads")]
            [Validation(Required=false)]
            public string MaxUploads { get; set; }
            [NameInMap("key-marker")]
            [Validation(Required=false)]
            public string KeyMarker { get; set; }
            [NameInMap("prefix")]
            [Validation(Required=false)]
            public string Prefix { get; set; }
            [NameInMap("upload-id-marker")]
            [Validation(Required=false)]
            public string UploadIdMarker { get; set; }
            [NameInMap("encoding-type")]
            [Validation(Required=false)]
            public string EncodingType { get; set; }
        };

    }

}
