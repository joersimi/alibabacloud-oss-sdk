// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.OSS.Models
{
    public class SelectObjectRequest : TeaModel {
        [NameInMap("BucketName")]
        [Validation(Required=true)]
        public string BucketName { get; set; }

        [NameInMap("ObjectName")]
        [Validation(Required=true)]
        public string ObjectName { get; set; }

        [NameInMap("Filter")]
        [Validation(Required=true)]
        public SelectObjectRequestFilter Filter { get; set; }
        public class SelectObjectRequestFilter : TeaModel {
            [NameInMap("x-oss-process")]
            [Validation(Required=true)]
            public string Porcess { get; set; }
        };

        [NameInMap("Body")]
        [Validation(Required=false)]
        public SelectObjectRequestBody Body { get; set; }
        public class SelectObjectRequestBody : TeaModel {
            [NameInMap("SelectRequest")]
            [Validation(Required=true)]
            public SelectObjectRequestBodySelectRequest SelectRequest { get; set; }
            public class SelectObjectRequestBodySelectRequest : TeaModel {
                [NameInMap("InputSerialization")]
                [Validation(Required=false)]
                public SelectObjectRequestBodySelectRequestInputSerialization InputSerialization { get; set; }
                public class SelectObjectRequestBodySelectRequestInputSerialization : TeaModel {
                    [NameInMap("CSV")]
                    [Validation(Required=false)]
                    public SelectObjectRequestBodySelectRequestInputSerializationCSV CSV { get; set; }
                    public class SelectObjectRequestBodySelectRequestInputSerializationCSV : TeaModel {
                        [NameInMap("FileHeaderInfo")]
                        [Validation(Required=false)]
                        public string FileHeaderInfo { get; set; }

                        [NameInMap("RecordDelimiter")]
                        [Validation(Required=false)]
                        public string RecordDelimiter { get; set; }

                        [NameInMap("FieldDelimiter")]
                        [Validation(Required=false)]
                        public string FieldDelimiter { get; set; }

                        [NameInMap("QuoteCharacter")]
                        [Validation(Required=false)]
                        public string QuoteCharacter { get; set; }

                        [NameInMap("CommentCharacter")]
                        [Validation(Required=false)]
                        public string CommentCharacter { get; set; }

                        [NameInMap("Range")]
                        [Validation(Required=false)]
                        public string Range { get; set; }

                    }
                    [NameInMap("CompressionType")]
                    [Validation(Required=false)]
                    public string CompressionType { get; set; }
                };

                [NameInMap("OutputSerialization")]
                [Validation(Required=false)]
                public SelectObjectRequestBodySelectRequestOutputSerialization OutputSerialization { get; set; }
                public class SelectObjectRequestBodySelectRequestOutputSerialization : TeaModel {
                    [NameInMap("CSV")]
                    [Validation(Required=false)]
                    public SelectObjectRequestBodySelectRequestOutputSerializationCSV CSV { get; set; }
                    public class SelectObjectRequestBodySelectRequestOutputSerializationCSV : TeaModel {
                        [NameInMap("RecordDelimiter")]
                        [Validation(Required=false)]
                        public string RecordDelimiter { get; set; }

                        [NameInMap("FieldDelimiter")]
                        [Validation(Required=false)]
                        public string FieldDelimiter { get; set; }

                    }
                    [NameInMap("KeepAllColumns")]
                    [Validation(Required=false)]
                    public string KeepAllColumns { get; set; }
                    [NameInMap("OutputRawData")]
                    [Validation(Required=false)]
                    public string OutputRawData { get; set; }
                    [NameInMap("EnablePayloadCrc")]
                    [Validation(Required=false)]
                    public string EnablePayloadCrc { get; set; }
                    [NameInMap("OutputHeader")]
                    [Validation(Required=false)]
                    public string OutputHeader { get; set; }
                };

                [NameInMap("Options")]
                [Validation(Required=false)]
                public SelectObjectRequestBodySelectRequestOptions Options { get; set; }
                public class SelectObjectRequestBodySelectRequestOptions : TeaModel {
                    [NameInMap("SkipPartialDataRecord")]
                    [Validation(Required=false)]
                    public string SkipPartialDataRecord { get; set; }
                    [NameInMap("MaxSkippedRecordsAllowed")]
                    [Validation(Required=false)]
                    public string MaxSkippedRecordsAllowed { get; set; }
                };

                [NameInMap("Expression")]
                [Validation(Required=false)]
                public string Expression { get; set; }

            }
        };

    }

}
