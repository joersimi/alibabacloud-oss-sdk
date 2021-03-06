// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ossutil;

import com.aliyun.ossutil.models.ErrorResponse;
import com.aliyun.tea.*;
import com.aliyun.tea.utils.StringUtils;

import javax.crypto.Mac;
import javax.crypto.spec.SecretKeySpec;
import javax.xml.bind.DatatypeConverter;
import java.io.IOException;
import java.net.URLEncoder;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.*;

public class Client {

    private static Map<String, String> contentType = new HashMap<>();
    private static Map<String, String> systemContenType = new HashMap<>();
    private static char[] characters = {'-', '_', '.', '~'};
    protected static final String _defaultUserAgent;
    private static String[] signKeyList = {
            "location",
            "cors",
            "objectMeta",
            "uploadId",
            "partNumber",
            "security-token",
            "position",
            "img",
            "style",
            "styleName",
            "replication",
            "replicationProgress",
            "replicationLocation",
            "cname",
            "qos",
            "startTime",
            "endTime",
            "symlink",
            "x-oss-process",
            "response-content-type",
            "response-content-language",
            "response-expires",
            "response-cache-control",
            "response-content-disposition",
            "response-content-encoding",
            "udf",
            "udfName",
            "udfImage",
            "udfId",
            "udfImageDesc",
            "udfApplication",
            "udfApplicationLog",
            "restore",
            "callback",
            "callback-var",
            "policy",
            "encryption",
            "versions",
            "versioning",
            "versionId"
    };

    static {
        systemContenType.put(".323", "text/h323");
        systemContenType.put(".asx", "video/x-ms-asf");
        systemContenType.put(".acx", "application/internet-property-stream");
        systemContenType.put(".ai", "application/postscript");
        systemContenType.put(".aif", "audio/x-aiff");
        systemContenType.put(".aiff", "audio/aiff");
        systemContenType.put(".axs", "application/olescript");
        systemContenType.put(".aifc", "audio/aiff");
        systemContenType.put(".asr", "video/x-ms-asf");
        systemContenType.put(".avi", "video/x-msvideo");
        systemContenType.put(".asf", "video/x-ms-asf");
        systemContenType.put(".au", "audio/basic");
        systemContenType.put(".application", "application/x-ms-application");
        systemContenType.put(".bin", "application/octet-stream");
        systemContenType.put(".bas", "text/plain");
        systemContenType.put(".bcpio", "application/x-bcpio");
        systemContenType.put(".bmp", "image/bmp");
        systemContenType.put(".cdf", "application/x-cdf");
        systemContenType.put(".cat", "application/vndms-pkiseccat");
        systemContenType.put(".crt", "application/x-x509-ca-cert");
        systemContenType.put(".c", "text/plain");
        systemContenType.put(".css", "text/css");
        systemContenType.put(".cer", "application/x-x509-ca-cert");
        systemContenType.put(".crl", "application/pkix-crl");
        systemContenType.put(".cmx", "image/x-cmx");
        systemContenType.put(".csh", "application/x-csh");
        systemContenType.put(".cod", "image/cis-cod");
        systemContenType.put(".cpio", "application/x-cpio");
        systemContenType.put(".clp", "application/x-msclip");
        systemContenType.put(".crd", "application/x-mscardfile");
        systemContenType.put(".deploy", "application/octet-stream");
        systemContenType.put(".dll", "application/x-msdownload");
        systemContenType.put(".dot", "application/msword");
        systemContenType.put(".doc", "application/msword");
        systemContenType.put(".dvi", "application/x-dvi");
        systemContenType.put(".dir", "application/x-director");
        systemContenType.put(".dxr", "application/x-director");
        systemContenType.put(".der", "application/x-x509-ca-cert");
        systemContenType.put(".dib", "image/bmp");
        systemContenType.put(".dcr", "application/x-director");
        systemContenType.put(".disco", "text/xml");
        systemContenType.put(".exe", "application/octet-stream");
        systemContenType.put(".etx", "text/x-setext");
        systemContenType.put(".evy", "application/envoy");
        systemContenType.put(".eml", "message/rfc822");
        systemContenType.put(".eps", "application/postscript");
        systemContenType.put(".flr", "x-world/x-vrml");
        systemContenType.put(".fif", "application/fractals");
        systemContenType.put(".gtar", "application/x-gtar");
        systemContenType.put(".gif", "image/gif");
        systemContenType.put(".gz", "application/x-gzip");
        systemContenType.put(".hta", "application/hta");
        systemContenType.put(".htc", "text/x-component");
        systemContenType.put(".htt", "text/webviewhtml");
        systemContenType.put(".h", "text/plain");
        systemContenType.put(".hdf", "application/x-hdf");
        systemContenType.put(".hlp", "application/winhlp");
        systemContenType.put(".html", "text/html");
        systemContenType.put(".htm", "text/html");
        systemContenType.put(".hqx", "application/mac-binhex40");
        systemContenType.put(".isp", "application/x-internet-signup");
        systemContenType.put(".iii", "application/x-iphone");
        systemContenType.put(".ief", "image/ief");
        systemContenType.put(".ivf", "video/x-ivf");
        systemContenType.put(".ins", "application/x-internet-signup");
        systemContenType.put(".ico", "image/x-icon");
        systemContenType.put(".jpg", "image/jpeg");
        systemContenType.put(".jfif", "image/pjpeg");
        systemContenType.put(".jpe", "image/jpeg");
        systemContenType.put(".jpeg", "image/jpeg");
        systemContenType.put(".js", "application/x-javascript");
        systemContenType.put(".lsx", "video/x-la-asf");
        systemContenType.put(".latex", "application/x-latex");
        systemContenType.put(".lsf", "video/x-la-asf");
        systemContenType.put(".manifest", "application/x-ms-manifest");
        systemContenType.put(".mhtml", "message/rfc822");
        systemContenType.put(".mny", "application/x-msmoney");
        systemContenType.put(".mht", "message/rfc822");
        systemContenType.put(".mid", "audio/mid");
        systemContenType.put(".mpv2", "video/mpeg");
        systemContenType.put(".man", "application/x-troff-man");
        systemContenType.put(".mvb", "application/x-msmediaview");
        systemContenType.put(".mpeg", "video/mpeg");
        systemContenType.put(".m3u", "audio/x-mpegurl");
        systemContenType.put(".mdb", "application/x-msaccess");
        systemContenType.put(".mpp", "application/vnd.ms-project");
        systemContenType.put(".m1v", "video/mpeg");
        systemContenType.put(".mpa", "video/mpeg");
        systemContenType.put(".me", "application/x-troff-me");
        systemContenType.put(".m13", "application/x-msmediaview");
        systemContenType.put(".movie", "video/x-sgi-movie");
        systemContenType.put(".m14", "application/x-msmediaview");
        systemContenType.put(".mpe", "video/mpeg");
        systemContenType.put(".mp2", "video/mpeg");
        systemContenType.put(".mov", "video/quicktime");
        systemContenType.put(".mp3", "audio/mpeg");
        systemContenType.put(".mpg", "video/mpeg");
        systemContenType.put(".ms", "application/x-troff-ms");
        systemContenType.put(".nc", "application/x-netcdf");
        systemContenType.put(".nws", "message/rfc822");
        systemContenType.put(".oda", "application/oda");
        systemContenType.put(".ods", "application/oleobject");
        systemContenType.put(".pmc", "application/x-perfmon");
        systemContenType.put(".p7r", "application/x-pkcs7-certreqresp");
        systemContenType.put(".p7b", "application/x-pkcs7-certificates");
        systemContenType.put(".p7s", "application/pkcs7-signature");
        systemContenType.put(".pmw", "application/x-perfmon");
        systemContenType.put(".ps", "application/postscript");
        systemContenType.put(".p7c", "application/pkcs7-mime");
        systemContenType.put(".pbm", "image/x-portable-bitmap");
        systemContenType.put(".ppm", "image/x-portable-pixmap");
        systemContenType.put(".pub", "application/x-mspublisher");
        systemContenType.put(".pnm", "image/x-portable-anymap");
        systemContenType.put(".png", "image/png");
        systemContenType.put(".pml", "application/x-perfmon");
        systemContenType.put(".p10", "application/pkcs10");
        systemContenType.put(".pfx", "application/x-pkcs12");
        systemContenType.put(".p12", "application/x-pkcs12");
        systemContenType.put(".pdf", "application/pdf");
        systemContenType.put(".pps", "application/vnd.ms-powerpoint");
        systemContenType.put(".p7m", "application/pkcs7-mime");
        systemContenType.put(".pko", "application/vndms-pkipko");
        systemContenType.put(".ppt", "application/vnd.ms-powerpoint");
        systemContenType.put(".pmr", "application/x-perfmon");
        systemContenType.put(".pma", "application/x-perfmon");
        systemContenType.put(".pot", "application/vnd.ms-powerpoint");
        systemContenType.put(".prf", "application/pics-rules");
        systemContenType.put(".pgm", "image/x-portable-graymap");
        systemContenType.put(".qt", "video/quicktime");
        systemContenType.put(".ra", "audio/x-pn-realaudio");
        systemContenType.put(".rgb", "image/x-rgb");
        systemContenType.put(".ram", "audio/x-pn-realaudio");
        systemContenType.put(".rmi", "audio/mid");
        systemContenType.put(".ras", "image/x-cmu-raster");
        systemContenType.put(".roff", "application/x-troff");
        systemContenType.put(".rtf", "application/rtf");
        systemContenType.put(".rtx", "text/richtext");
        systemContenType.put(".sv4crc", "application/x-sv4crc");
        systemContenType.put(".spc", "application/x-pkcs7-certificates");
        systemContenType.put(".setreg", "application/set-registration-initiation");
        systemContenType.put(".snd", "audio/basic");
        systemContenType.put(".stl", "application/vndms-pkistl");
        systemContenType.put(".setpay", "application/set-payment-initiation");
        systemContenType.put(".stm", "text/html");
        systemContenType.put(".shar", "application/x-shar");
        systemContenType.put(".sh", "application/x-sh");
        systemContenType.put(".sit", "application/x-stuffit");
        systemContenType.put(".spl", "application/futuresplash");
        systemContenType.put(".sct", "text/scriptlet");
        systemContenType.put(".scd", "application/x-msschedule");
        systemContenType.put(".sst", "application/vndms-pkicertstore");
        systemContenType.put(".src", "application/x-wais-source");
        systemContenType.put(".sv4cpio", "application/x-sv4cpio");
        systemContenType.put(".tex", "application/x-tex");
        systemContenType.put(".tgz", "application/x-compressed");
        systemContenType.put(".t", "application/x-troff");
        systemContenType.put(".tar", "application/x-tar");
        systemContenType.put(".tr", "application/x-troff");
        systemContenType.put(".tif", "image/tiff");
        systemContenType.put(".txt", "text/plain");
        systemContenType.put(".texinfo", "application/x-texinfo");
        systemContenType.put(".trm", "application/x-msterminal");
        systemContenType.put(".tiff", "image/tiff");
        systemContenType.put(".tcl", "application/x-tcl");
        systemContenType.put(".texi", "application/x-texinfo");
        systemContenType.put(".tsv", "text/tab-separated-values");
        systemContenType.put(".ustar", "application/x-ustar");
        systemContenType.put(".uls", "text/iuls");
        systemContenType.put(".vcf", "text/x-vcard");
        systemContenType.put(".wps", "application/vnd.ms-works");
        systemContenType.put(".wav", "audio/wav");
        systemContenType.put(".wrz", "x-world/x-vrml");
        systemContenType.put(".wri", "application/x-mswrite");
        systemContenType.put(".wks", "application/vnd.ms-works");
        systemContenType.put(".wmf", "application/x-msmetafile");
        systemContenType.put(".wcm", "application/vnd.ms-works");
        systemContenType.put(".wrl", "x-world/x-vrml");
        systemContenType.put(".wdb", "application/vnd.ms-works");
        systemContenType.put(".wsdl", "text/xml");
        systemContenType.put(".xap", "application/x-silverlight-app");
        systemContenType.put(".xml", "text/xml");
        systemContenType.put(".xlm", "application/vnd.ms-excel");
        systemContenType.put(".xaf", "x-world/x-vrml");
        systemContenType.put(".xla", "application/vnd.ms-excel");
        systemContenType.put(".xls", "application/vnd.ms-excel");
        systemContenType.put(".xof", "x-world/x-vrml");
        systemContenType.put(".xlt", "application/vnd.ms-excel");
        systemContenType.put(".xlc", "application/vnd.ms-excel");
        systemContenType.put(".xsl", "text/xml");
        systemContenType.put(".xbm", "image/x-xbitmap");
        systemContenType.put(".xlw", "application/vnd.ms-excel");
        systemContenType.put(".xpm", "image/x-xpixmap");
        systemContenType.put(".xwd", "image/x-xwindowdump");
        systemContenType.put(".xsd", "text/xml");
        systemContenType.put(".z", "application/x-compress");
        systemContenType.put(".zip", "application/x-zip-compressed");
        systemContenType.put(".*", "application/octet-stream");

        contentType.put(".xlsx", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        contentType.put(".xltx", "application/vnd.openxmlformats-officedocument.spreadsheetml.template");
        contentType.put(".potx", "application/vnd.openxmlformats-officedocument.presentationml.template");
        contentType.put(".ppsx", "application/vnd.openxmlformats-officedocument.presentationml.slideshow");
        contentType.put(".pptx", "application/vnd.openxmlformats-officedocument.presentationml.presentation");
        contentType.put(".sldx", "application/vnd.openxmlformats-officedocument.presentationml.slide");
        contentType.put(".docx", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        contentType.put(".dotx", "application/vnd.openxmlformats-officedocument.wordprocessingml.template");
        contentType.put(".xlam", "application/vnd.ms-excel.addin.macroEnabled.12");
        contentType.put(".xlsb", "application/vnd.ms-excel.sheet.binary.macroEnabled.12");
        contentType.put(".apk", "application/vnd.android.package-archive");
        contentType.put(".cpt", "application/mac-compactpro");
        contentType.put(".ogg", "application/ogg");
        contentType.put(".mif", "application/vnd.mif");
        contentType.put(".odc", "application/vnd.oasis.opendocument.chart");
        contentType.put(".odb", "application/vnd.oasis.opendocument.database");
        contentType.put(".odf", "application/vnd.oasis.opendocument.formula");
        contentType.put(".odg", "application/vnd.oasis.opendocument.graphics");
        contentType.put(".otg", "application/vnd.oasis.opendocument.graphics-template");
        contentType.put(".odi", "application/vnd.oasis.opendocument.image");
        contentType.put(".odp", "application/vnd.oasis.opendocument.presentation");
        contentType.put(".otp", "application/vnd.oasis.opendocument.presentation-template");
        contentType.put(".ots", "application/vnd.oasis.opendocument.spreadsheet-template");
        contentType.put(".odt", "application/vnd.oasis.opendocument.text");
        contentType.put(".odm", "application/vnd.oasis.opendocument.text-master");
        contentType.put(".ott", "application/vnd.oasis.opendocument.text-template");
        contentType.put(".oth", "application/vnd.oasis.opendocument.text-web");
        contentType.put(".sxw", "application/vnd.sun.xml.writer");
        contentType.put(".stw", "application/vnd.sun.xml.writer.template");
        contentType.put(".sxc", "application/vnd.sun.xml.calc");
        contentType.put(".stc", "application/vnd.sun.xml.calc.template");
        contentType.put(".sxd", "application/vnd.sun.xml.draw");
        contentType.put(".std", "application/vnd.sun.xml.draw.template");
        contentType.put(".sxi", "application/vnd.sun.xml.impress");
        contentType.put(".sti", "application/vnd.sun.xml.impress.template");
        contentType.put(".sxg", "application/vnd.sun.xml.writer.global");
        contentType.put(".sxm", "application/vnd.sun.xml.math");
        contentType.put(".sis", "application/vnd.symbian.install");
        contentType.put(".wbxml", "application/vnd.wap.wbxml");
        contentType.put(".wmlc", "application/vnd.wap.wmlc");
        contentType.put(".wmlsc", "application/vnd.wap.wmlscriptc");
        contentType.put(".torrent", "application/x-bittorrent");
        contentType.put(".bz2", "application/x-bzip2");
        contentType.put(".vcd", "application/x-cdlink");
        contentType.put(".pgn", "application/x-chess-pgn");
        contentType.put(".jar", "application/x-java-archive");
        contentType.put(".jnlp", "application/x-java-jnlp-file");
        contentType.put(".ksp", "application/x-kspread");
        contentType.put(".chrt", "application/x-kchart");
        contentType.put(".kil", "application/x-killustrator");
        contentType.put(".rpm", "application/x-rpm");
        contentType.put(".swf", "application/x-shockwave-flash");
        contentType.put(".ms", "application/x-troff-ms");
        contentType.put(".wma", "audio/x-ms-wma");
        contentType.put(".wax", "audio/x-ms-wax");
        contentType.put(".pdb", "chemical/x-pdb");
        contentType.put(".xyz", "chemical/x-xyz");
        contentType.put(".wbmp", "image/vnd.wap.wbmp");
        contentType.put(".ras", "image/x-cmu-raster");
        contentType.put(".pnm", "image/x-portable-anymap");
        contentType.put(".pbm", "image/x-portable-bitmap");
        contentType.put(".pgm", "image/x-portable-graymap");
        contentType.put(".ppm", "image/x-portable-pixmap");
        contentType.put(".rgb", "image/x-rgb");
        contentType.put(".xbm", "image/x-xbitmap");
        contentType.put(".xpm", "image/x-xpixmap");
        contentType.put(".xwd", "image/x-xwindowdump");
        contentType.put(".css", "text/css");
        contentType.put(".rtx", "text/richtext");
        contentType.put(".tsv", "text/tab-separated-values");
        contentType.put(".jad", "text/vnd.sun.j2me.app-descriptor");
        contentType.put(".wml", "text/vnd.wap.wml");
        contentType.put(".wmls", "text/vnd.wap.wmlscript");
        contentType.put(".etx", "text/x-setext");
        contentType.put(".mxu", "video/vnd.mpegurl");
        contentType.put(".flv", "video/x-flv");
        contentType.put(".wm", "video/x-ms-wm");
        contentType.put(".wmv", "video/x-ms-wmv");
        contentType.put(".wmx", "video/x-ms-wmx");
        contentType.put(".wvx", "video/x-ms-wvx");
        contentType.put(".avi", "video/x-msvideo");
        contentType.put(".movie", "video/x-sgi-movie");
        contentType.put(".ice", "x-conference/x-cooltalk");
        contentType.put(".3gp", "video/3gpp");
        contentType.put(".ai", "application/postscript");
        contentType.put(".aif", "audio/x-aiff");
        contentType.put(".aifc", "audio/x-aiff");
        contentType.put(".aiff", "audio/x-aiff");
        contentType.put(".asc", "text/plain");
        contentType.put(".atom", "application/atom+xml");
        contentType.put(".au", "audio/basic");
        contentType.put(".bin", "application/octet-stream");
        contentType.put(".cdf", "application/x-netcdf");
        contentType.put(".cgm", "image/cgm");
        contentType.put(".class", "application/octet-stream");
        contentType.put(".dcr", "application/x-director");
        contentType.put(".dif", "video/x-dv");
        contentType.put(".dir", "application/x-director");
        contentType.put(".djv", "image/vnd.djvu");
        contentType.put(".djvu", "image/vnd.djvu");
        contentType.put(".dll", "application/octet-stream");
        contentType.put(".dmg", "application/octet-stream");
        contentType.put(".dms", "application/octet-stream");
        contentType.put(".dtd", "application/xml-dtd");
        contentType.put(".dv", "video/x-dv");
        contentType.put(".dxr", "application/x-director");
        contentType.put(".eps", "application/postscript");
        contentType.put(".exe", "application/octet-stream");
        contentType.put(".ez", "application/andrew-inset");
        contentType.put(".gram", "application/srgs");
        contentType.put(".grxml", "application/srgs+xml");
        contentType.put(".gz", "application/x-gzip");
        contentType.put(".htm", "text/html");
        contentType.put(".html", "text/html");
        contentType.put(".ico", "image/x-icon");
        contentType.put(".ics", "text/calendar");
        contentType.put(".ifb", "text/calendar");
        contentType.put(".iges", "model/iges");
        contentType.put(".igs", "model/iges");
        contentType.put(".jp2", "image/jp2");
        contentType.put(".jpe", "image/jpeg");
        contentType.put(".jpeg", "image/jpeg");
        contentType.put(".jpg", "image/jpeg");
        contentType.put(".kar", "audio/midi");
        contentType.put(".lha", "application/octet-stream");
        contentType.put(".lzh", "application/octet-stream");
        contentType.put(".m4a", "audio/mp4a-latm");
        contentType.put(".m4p", "audio/mp4a-latm");
        contentType.put(".m4u", "video/vnd.mpegurl");
        contentType.put(".m4v", "video/x-m4v");
        contentType.put(".mac", "image/x-macpaint");
        contentType.put(".mathml", "application/mathml+xml");
        contentType.put(".mesh", "model/mesh");
        contentType.put(".mid", "audio/midi");
        contentType.put(".midi", "audio/midi");
        contentType.put(".mp4", "video/mp4");
        contentType.put(".mpeg", "video/mpeg");
        contentType.put(".mpg", "video/mpeg");
        contentType.put(".mpga", "audio/mpeg");
        contentType.put(".msh", "model/mesh");
        contentType.put(".nc", "application/x-netcdf");
        contentType.put(".oda", "application/oda");
        contentType.put(".ogv", "video/ogv");
        contentType.put(".pct", "image/pict");
        contentType.put(".pic", "image/pict");
        contentType.put(".pict", "image/pict");
        contentType.put(".pnt", "image/x-macpaint");
        contentType.put(".pntg", "image/x-macpaint");
        contentType.put(".ps", "application/postscript");
        contentType.put(".qt", "video/quicktime");
        contentType.put(".qti", "image/x-quicktime");
        contentType.put(".qtif", "image/x-quicktime");
        contentType.put(".ram", "audio/x-pn-realaudio");
        contentType.put(".rdf", "application/rdf+xml");
        contentType.put(".rm", "application/vnd.rn-realmedia");
        contentType.put(".roff", "application/x-troff");
        contentType.put(".sgm", "text/sgml");
        contentType.put(".sgml", "text/sgml");
        contentType.put(".silo", "model/mesh");
        contentType.put(".skd", "application/x-koan");
        contentType.put(".skm", "application/x-koan");
        contentType.put(".skp", "application/x-koan");
        contentType.put(".skt", "application/x-koan");
        contentType.put(".smi", "application/smil");
        contentType.put(".smil", "application/smil");
        contentType.put(".snd", "audio/basic");
        contentType.put(".so", "application/octet-stream");
        contentType.put(".svg", "image/svg+xml");
        contentType.put(".t", "application/x-troff");
        contentType.put(".texi", "application/x-texinfo");
        contentType.put(".texinfo", "application/x-texinfo");
        contentType.put(".tif", "image/tiff");
        contentType.put(".tiff", "image/tiff");
        contentType.put(".tr", "application/x-troff");
        contentType.put(".txt", "text/plain");
        contentType.put(".vrml", "model/vrml");
        contentType.put(".vxml", "application/voicexml+xml");
        contentType.put(".webm", "video/webm");
        contentType.put(".wrl", "model/vrml");
        contentType.put(".xht", "application/xhtml+xml");
        contentType.put(".xhtml", "application/xhtml+xml");
        contentType.put(".xml", "application/xml");
        contentType.put(".xsl", "application/xml");
        contentType.put(".xslt", "application/xslt+xml");
        contentType.put(".xul", "application/vnd.mozilla.xul+xml");
        contentType.put(".webp", "image/webp");

        Properties sysProps = System.getProperties();
        String coreVersion = "";
        Properties props = new Properties();
        try {
            props.load(Client.class.getClassLoader().getResourceAsStream("project.properties"));
            coreVersion = props.getProperty("sdk.project.version");
        } catch (IOException e) {
            e.printStackTrace();
        }
        _defaultUserAgent = String.format("AlibabaCloud (%s; %s) Java/%s %s/%s", sysProps.getProperty("os.name"), sysProps
                .getProperty("os.arch"), sysProps.getProperty("java.runtime.version"), "oss-baseClient", coreVersion);
    }

    public static java.util.Map<String, Object> getErrMessage(String msg) {
        Map<String, Object> result = null;
        try {
            result = XmlUtil.DeserializeXml(msg, ErrorResponse.class);
        } catch (Exception e) {
          throw new RuntimeException(e);
        }
        result = result.get("Error") == null ? result : (Map<String, Object>) result.get("Error");
        return result;
    }

    public static java.util.Map<String, String> toQuery(java.util.Map<String, Object> filter) {
        Map<String, String> outMap = new HashMap<>(16);
        if (null != filter) {
            filter.forEach((k, v) -> outMap.put(k, v == null ? "" : String.valueOf(v)));
        }
        return outMap;
    }

    public static java.util.Map<String, String> toMeta(java.util.Map<String, ?> val, String prefix) {
        Map<String, String> result = new HashMap<>();
        if (null == val) {
            return result;
        }
        for (Map.Entry<String, ?> entry : val.entrySet()) {
            if (entry.getKey().contains(prefix)) {
                result.put(entry.getKey(), String.valueOf(entry.getValue()));
            } else {
                result.put(prefix + entry.getKey(), String.valueOf(entry.getValue()));
            }
        }
        return result;
    }

    public static java.util.Map<String, String> parseMeta(java.util.Map<String, ?> val, String prefix) {
        Map<String, String> result = new HashMap<>();
        if (null == val) {
            return result;
        }
        for (Map.Entry<String, ?> entry : val.entrySet()) {
            if (entry.getKey().startsWith(prefix)) {
                result.put(entry.getKey().replace(prefix, ""), String.valueOf(entry.getValue()));
            } else {
                result.put(entry.getKey(), String.valueOf(entry.getValue()));
            }
        }
        return result;
    }

    public static String getContentType(String fileName) {
        String suffix = fileName.substring(fileName.lastIndexOf("."));
        String type = systemContenType.get(suffix);
        return type == null ? contentType.get(suffix) : type;
    }

    public static String getContentMD5(String body, boolean isEnableMD5) {
        try {
            MessageDigest md = MessageDigest.getInstance("MD5");
            byte[] messageDigest = md.digest(body.getBytes(TeaRequest.URL_ENCODING));
            return Base64.getEncoder().encodeToString(messageDigest);
        } catch (Exception e) {
            throw new RuntimeException(e);
        }
    }

    public static String encode(String val, String encodeType) {
        if (null == encodeType) {
            return val;
        }
        String[] strs = val.split("/");
        try {
            switch (encodeType) {
                case "Base64":
                    strs[strs.length - 1] = Base64.getEncoder().encodeToString(
                            strs[strs.length - 1].getBytes("UTF-8"));
                    break;
                case "UrlEncode":
                    strs[strs.length - 1] = URLEncoder.encode(strs[strs.length - 1], "UTF-8");
                    break;
                default:
                    break;
            }
        } catch (Exception e) {
            throw new RuntimeException(e);
        }
        return String.join("/", strs);
    }

    public static String getUserAgent(String val) {
        if (StringUtils.isEmpty(val)) {
            return _defaultUserAgent;
        }
        return _defaultUserAgent + " " + val;
    }

    public static String getHost(String bucketName, String regionId, String endpoint, String hostModel) {
        String host;
        if (StringUtils.isEmpty(regionId)) {
            regionId = "cn-hangzhou";
        }
        if (StringUtils.isEmpty(endpoint)) {
            endpoint = "oss-" + regionId + ".aliyuncs.com";
        }
        if (!StringUtils.isEmpty(bucketName)) {
            if ("ip".equals(hostModel)) {
                host = endpoint + "/" + bucketName;
            } else if ("cname".equals(hostModel)) {
                host = endpoint;
            } else {
                host = bucketName + "." + endpoint;
            }
        } else {
            host = endpoint;
        }
        return host;
    }

    public static java.io.InputStream inject(java.io.InputStream body, java.util.Map<String, String> res) {
        try {
            return new VerifyInputStream(body, res);
        } catch (NoSuchAlgorithmException e) {
            throw new RuntimeException(e);
        }
    }

    protected static boolean ifListEmpty(List<String> strs) {
        if (strs == null) {
            return true;
        }
        return strs.size() <= 0;
    }

    public static String getSignature(TeaRequest request, String bucketName, String accessKeyId, String accessKeySecret, String signatureVersion, java.util.List<String> addtionalHeaders) {
        String[] headers;
        if (null == addtionalHeaders) {
            headers = new String[]{};
        } else {
            headers = addtionalHeaders.toArray(new String[]{});
        }
        if ("V2".equals(signatureVersion.toUpperCase())) {
            if (ifListEmpty(addtionalHeaders)) {
                return "OSS2 AccessKeyId:" + accessKeyId + ",Signature:" + getSignatureV2(request, bucketName, accessKeySecret, headers) + "";
            } else {
                return "OSS2 AccessKeyId:" + accessKeyId + ",AdditionalHeaders:" + String.join(";", addtionalHeaders) + ",Signature:" + getSignatureV2(request, bucketName, accessKeySecret, headers) + "";
            }
        } else {
            return "OSS " + accessKeyId + ":" + getSignatureV1(request, bucketName, accessKeySecret) + "";
        }
    }

    protected static String getSignatureV1(TeaRequest teaRequest, String bucketName, String accessKeySecret) {
        String resource = "";
        if (!StringUtils.isEmpty(bucketName)) {
            resource = "/" + bucketName;
        }
        resource = resource + teaRequest.pathname;
        if (teaRequest.query != null) {
            List<String> sigenKeys = Arrays.asList(signKeyList);
            for (Map.Entry<String, String> entry : teaRequest.query.entrySet()) {
                if (sigenKeys.contains(entry.getKey()) && !StringUtils.isEmpty(entry.getValue())) {
                    resource = resource + "&" + entry.getKey() + "=" + entry.getValue();
                }
            }
        }
        return getSignedStrV1(teaRequest, resource, accessKeySecret);
    }

    protected static String getSignedStrV1(TeaRequest teaRequest, String canonicalizedResource, String accessKeySecret) {
        Map<String, String> temp = new HashMap<>();
        for (Map.Entry<String, String> entry : teaRequest.headers.entrySet()) {
            if (entry.getKey().toLowerCase().startsWith("x-oss-")) {
                if (null != entry.getValue()) {
                    temp.put(entry.getKey().toLowerCase(), entry.getValue());
                }
            }
        }
        String[] sortedKeys = temp.keySet().toArray(new String[]{});
        Arrays.sort(sortedKeys);
        StringBuilder StringBuilder = new StringBuilder();
        for (String key : sortedKeys) {
            StringBuilder.append(key);
            StringBuilder.append(":");
            StringBuilder.append(temp.get(key));
            StringBuilder.append("\n");
        }
        String date = teaRequest.headers.get("date");
        String contentType = teaRequest.headers.get("content-type");
        if (contentType == null) {
            contentType = "";
        }
        String contentMd5 = teaRequest.headers.get("content-md5");
        if (contentMd5 == null) {
            contentMd5 = "";
        }
        try {
            String signStr = teaRequest.method + "\n" + contentMd5 + "\n" + contentType + "\n" + date + "\n" + StringBuilder.toString() + canonicalizedResource;
            Mac mac = Mac.getInstance("HmacSHA1");
            mac.init(new SecretKeySpec(accessKeySecret.getBytes("UTF-8"), "HmacSHA1"));
            byte[] signData = mac.doFinal(signStr.getBytes("UTF-8"));
            String signedStr = DatatypeConverter.printBase64Binary(signData);
            return signedStr;
        } catch (Exception e) {
            throw new RuntimeException(e);
        }

    }

    protected static String getSignatureV2(TeaRequest teaRequest, String bucketName, String accessKeySecret,
                                           String[] additionalHeaders) {
        String resource = "";
        String pathName = teaRequest.pathname;
        if (!StringUtils.isEmpty(bucketName)) {
            pathName = "/" + bucketName + pathName;
        }

        String[] sortedKeys = new String[]{};
        if (teaRequest.query != null) {
            sortedKeys = teaRequest.query.keySet().toArray(new String[]{});
        }
        String[] strs = pathName.split("\\?");
        resource += UriEncode(strs[0], true);
        if (pathName.contains("?")) {
            sortedKeys = Arrays.copyOf(sortedKeys, sortedKeys.length + 1);
            sortedKeys[sortedKeys.length - 1] = strs[1];
        }
        Arrays.sort(sortedKeys);
        if (sortedKeys.length > 0) {
            resource += "?";
        }
        for (String key : sortedKeys) {
            if (!StringUtils.isEmpty(teaRequest.query.get(key))) {
                if (resource.endsWith("?")) {
                    resource += UriEncode(key, true) + "=" + UriEncode(teaRequest.query.get(key), true);
                } else {
                    resource += "&" + UriEncode(key, true) + "=" + UriEncode(teaRequest.query.get(key), true);
                }
            } else {
                if (resource.endsWith("?")) {
                    resource += UriEncode(key, true);
                } else {
                    resource += "&" + UriEncode(key, true);
                }
            }
        }
        return getSignedStrV2(teaRequest, resource, accessKeySecret, additionalHeaders);
    }

    protected static String UriEncode(String rawStr, boolean encodeSlash) {
        String res = "";
        for (char ch : rawStr.toCharArray()) {
            if ((ch >= 'a' && ch <= 'z') || (ch >= 'A' && ch <= 'Z') ||
                    (ch >= '0' && ch <= '9') || charContains(ch)) {
                res += ch;
            } else if (ch == '/') {
                if (encodeSlash) {
                    res += "%2F";
                } else {
                    res += ch;
                }
            } else {
                res = res + "%" + Integer.toHexString(ch);
            }
        }
        return res;
    }

    protected static String getSignedStrV2(TeaRequest teaRequest, String canonicalizedResource,
                                           String accessKeySecret, String[] additionalHeaders) {
        Map<String, String> temp = new HashMap<>();
        List<String> headers;
        if (null == additionalHeaders) {
            headers = new ArrayList<>();
            additionalHeaders = new String[]{};
        } else {
            headers = Arrays.asList(additionalHeaders);
        }
        for (Map.Entry<String, String> keypair : teaRequest.headers.entrySet()) {
            if (keypair.getValue() != null) {
                if (headers.contains(keypair.getKey())) {
                    temp.put(keypair.getKey().toLowerCase(), keypair.getValue());
                } else if (keypair.getKey().toLowerCase().startsWith("x-oss-")) {
                    temp.put(keypair.getKey().toLowerCase(), keypair.getValue());
                }
            }
        }
        String[] sortedKeys = temp.keySet().toArray(new String[]{});
        Arrays.sort(sortedKeys);
        String canonicalizedOSSHeaders = "";
        for (String key : sortedKeys) {
            canonicalizedOSSHeaders += key + ":" + temp.get(key) + "\n";
        }
        String date = teaRequest.headers.get("date");
        String contentType = teaRequest.headers.get("content-type");
        String contentMd5 = teaRequest.headers.get("content-md5");
        if (contentType == null) {
            contentType = "";
        }
        if (contentMd5 == null) {
            contentMd5 = "";
        }
        String signStr = teaRequest.method + "\n" + contentMd5 + "\n" + contentType + "\n" + date + "\n" + canonicalizedOSSHeaders + String.join(";", additionalHeaders) + "\n" + canonicalizedResource;
        String signedStr = getOssSignature(accessKeySecret, signStr);
        return signedStr;
    }

    protected static String getOssSignature(String accessKeySecret, String str) {
        try {
            Mac sha256_HMAC = Mac.getInstance("HmacSHA256");
            SecretKeySpec secret_key = new SecretKeySpec(accessKeySecret.getBytes("UTF-8"), "HmacSHA256");
            sha256_HMAC.init(secret_key);
            byte[] bytes = sha256_HMAC.doFinal(str.getBytes("UTF-8"));
            return DatatypeConverter.printBase64Binary(bytes);
        } catch (Exception e) {
            throw new RuntimeException(e);
        }
    }

    protected static boolean charContains(char ch) {
        for (char character : characters) {
            if (ch == character) {
                return true;
            }
        }
        return false;
    }

    public static String decode(String val, String decodeType) {
        if (null == decodeType) {
            return val;
        }
        String[] strs = val.split("/");
        try {
            switch (decodeType) {
                case "Base64Decode":
                    strs[strs.length - 1] = Base64.getEncoder().encodeToString(
                            strs[strs.length - 1].getBytes("UTF-8"));
                    break;
                case "UrlDecode":
                    strs[strs.length - 1] = URLEncoder.encode(strs[strs.length - 1], "UTF-8");
                    break;
                default:
                    break;
            }
        } catch (Exception e) {
            throw new RuntimeException(e);
        }
        return String.join("/", strs);
    }
}
