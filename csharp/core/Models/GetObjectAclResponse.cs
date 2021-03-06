// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.OSS.Models
{
    public class GetObjectAclResponse : TeaModel {
        [NameInMap("x-oss-request-id")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AccessControlPolicy")]
        [Validation(Required=true)]
        public GetObjectAclResponseAccessControlPolicy AccessControlPolicy { get; set; }
        public class GetObjectAclResponseAccessControlPolicy : TeaModel {
            [NameInMap("Owner")]
            [Validation(Required=true)]
            public GetObjectAclResponseAccessControlPolicyOwner Owner { get; set; }
            public class GetObjectAclResponseAccessControlPolicyOwner : TeaModel {
                [NameInMap("ID")]
                [Validation(Required=false)]
                public string ID { get; set; }

                [NameInMap("DisplayName")]
                [Validation(Required=false)]
                public string DisplayName { get; set; }

            }
            [NameInMap("AccessControlList")]
            [Validation(Required=true)]
            public GetObjectAclResponseAccessControlPolicyAccessControlList AccessControlList { get; set; }
            public class GetObjectAclResponseAccessControlPolicyAccessControlList : TeaModel {
                [NameInMap("Grant")]
                [Validation(Required=false)]
                public string Grant { get; set; }

            }
        };

    }

}
