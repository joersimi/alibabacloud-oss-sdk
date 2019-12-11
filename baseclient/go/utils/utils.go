package utils

import (
	"bytes"
	"crypto/md5"
	"crypto/rand"
	"encoding/base64"
	"encoding/hex"
	"hash"
	"io"
	"io/ioutil"
	"mime"
	"net/url"
	"os"
	"path"
	"strings"
	"time"
)

type UUID [16]byte

var extToMimeType = map[string]string{
	".xlsx":    "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
	".xltx":    "application/vnd.openxmlformats-officedocument.spreadsheetml.template",
	".potx":    "application/vnd.openxmlformats-officedocument.presentationml.template",
	".ppsx":    "application/vnd.openxmlformats-officedocument.presentationml.slideshow",
	".pptx":    "application/vnd.openxmlformats-officedocument.presentationml.presentation",
	".sldx":    "application/vnd.openxmlformats-officedocument.presentationml.slide",
	".docx":    "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
	".dotx":    "application/vnd.openxmlformats-officedocument.wordprocessingml.template",
	".xlam":    "application/vnd.ms-excel.addin.macroEnabled.12",
	".xlsb":    "application/vnd.ms-excel.sheet.binary.macroEnabled.12",
	".apk":     "application/vnd.android.package-archive",
	".hqx":     "application/mac-binhex40",
	".cpt":     "application/mac-compactpro",
	".doc":     "application/msword",
	".ogg":     "application/ogg",
	".pdf":     "application/pdf",
	".rtf":     "text/rtf",
	".mif":     "application/vnd.mif",
	".xls":     "application/vnd.ms-excel",
	".ppt":     "application/vnd.ms-powerpoint",
	".odc":     "application/vnd.oasis.opendocument.chart",
	".odb":     "application/vnd.oasis.opendocument.database",
	".odf":     "application/vnd.oasis.opendocument.formula",
	".odg":     "application/vnd.oasis.opendocument.graphics",
	".otg":     "application/vnd.oasis.opendocument.graphics-template",
	".odi":     "application/vnd.oasis.opendocument.image",
	".odp":     "application/vnd.oasis.opendocument.presentation",
	".otp":     "application/vnd.oasis.opendocument.presentation-template",
	".ods":     "application/vnd.oasis.opendocument.spreadsheet",
	".ots":     "application/vnd.oasis.opendocument.spreadsheet-template",
	".odt":     "application/vnd.oasis.opendocument.text",
	".odm":     "application/vnd.oasis.opendocument.text-master",
	".ott":     "application/vnd.oasis.opendocument.text-template",
	".oth":     "application/vnd.oasis.opendocument.text-web",
	".sxw":     "application/vnd.sun.xml.writer",
	".stw":     "application/vnd.sun.xml.writer.template",
	".sxc":     "application/vnd.sun.xml.calc",
	".stc":     "application/vnd.sun.xml.calc.template",
	".sxd":     "application/vnd.sun.xml.draw",
	".std":     "application/vnd.sun.xml.draw.template",
	".sxi":     "application/vnd.sun.xml.impress",
	".sti":     "application/vnd.sun.xml.impress.template",
	".sxg":     "application/vnd.sun.xml.writer.global",
	".sxm":     "application/vnd.sun.xml.math",
	".sis":     "application/vnd.symbian.install",
	".wbxml":   "application/vnd.wap.wbxml",
	".wmlc":    "application/vnd.wap.wmlc",
	".wmlsc":   "application/vnd.wap.wmlscriptc",
	".bcpio":   "application/x-bcpio",
	".torrent": "application/x-bittorrent",
	".bz2":     "application/x-bzip2",
	".vcd":     "application/x-cdlink",
	".pgn":     "application/x-chess-pgn",
	".cpio":    "application/x-cpio",
	".csh":     "application/x-csh",
	".dvi":     "application/x-dvi",
	".spl":     "application/x-futuresplash",
	".gtar":    "application/x-gtar",
	".hdf":     "application/x-hdf",
	".jar":     "application/x-java-archive",
	".jnlp":    "application/x-java-jnlp-file",
	".js":      "application/x-javascript",
	".ksp":     "application/x-kspread",
	".chrt":    "application/x-kchart",
	".kil":     "application/x-killustrator",
	".latex":   "application/x-latex",
	".rpm":     "application/x-rpm",
	".sh":      "application/x-sh",
	".shar":    "application/x-shar",
	".swf":     "application/x-shockwave-flash",
	".sit":     "application/x-stuffit",
	".sv4cpio": "application/x-sv4cpio",
	".sv4crc":  "application/x-sv4crc",
	".tar":     "application/x-tar",
	".tcl":     "application/x-tcl",
	".tex":     "application/x-tex",
	".man":     "application/x-troff-man",
	".me":      "application/x-troff-me",
	".ms":      "application/x-troff-ms",
	".ustar":   "application/x-ustar",
	".src":     "application/x-wais-source",
	".zip":     "application/zip",
	".m3u":     "audio/x-mpegurl",
	".ra":      "audio/x-pn-realaudio",
	".wav":     "audio/x-wav",
	".wma":     "audio/x-ms-wma",
	".wax":     "audio/x-ms-wax",
	".pdb":     "chemical/x-pdb",
	".xyz":     "chemical/x-xyz",
	".bmp":     "image/bmp",
	".gif":     "image/gif",
	".ief":     "image/ief",
	".png":     "image/png",
	".wbmp":    "image/vnd.wap.wbmp",
	".ras":     "image/x-cmu-raster",
	".pnm":     "image/x-portable-anymap",
	".pbm":     "image/x-portable-bitmap",
	".pgm":     "image/x-portable-graymap",
	".ppm":     "image/x-portable-pixmap",
	".rgb":     "image/x-rgb",
	".xbm":     "image/x-xbitmap",
	".xpm":     "image/x-xpixmap",
	".xwd":     "image/x-xwindowdump",
	".css":     "text/css",
	".rtx":     "text/richtext",
	".tsv":     "text/tab-separated-values",
	".jad":     "text/vnd.sun.j2me.app-descriptor",
	".wml":     "text/vnd.wap.wml",
	".wmls":    "text/vnd.wap.wmlscript",
	".etx":     "text/x-setext",
	".mxu":     "video/vnd.mpegurl",
	".flv":     "video/x-flv",
	".wm":      "video/x-ms-wm",
	".wmv":     "video/x-ms-wmv",
	".wmx":     "video/x-ms-wmx",
	".wvx":     "video/x-ms-wvx",
	".avi":     "video/x-msvideo",
	".movie":   "video/x-sgi-movie",
	".ice":     "x-conference/x-cooltalk",
	".3gp":     "video/3gpp",
	".ai":      "application/postscript",
	".aif":     "audio/x-aiff",
	".aifc":    "audio/x-aiff",
	".aiff":    "audio/x-aiff",
	".asc":     "text/plain",
	".atom":    "application/atom+xml",
	".au":      "audio/basic",
	".bin":     "application/octet-stream",
	".cdf":     "application/x-netcdf",
	".cgm":     "image/cgm",
	".class":   "application/octet-stream",
	".dcr":     "application/x-director",
	".dif":     "video/x-dv",
	".dir":     "application/x-director",
	".djv":     "image/vnd.djvu",
	".djvu":    "image/vnd.djvu",
	".dll":     "application/octet-stream",
	".dmg":     "application/octet-stream",
	".dms":     "application/octet-stream",
	".dtd":     "application/xml-dtd",
	".dv":      "video/x-dv",
	".dxr":     "application/x-director",
	".eps":     "application/postscript",
	".exe":     "application/octet-stream",
	".ez":      "application/andrew-inset",
	".gram":    "application/srgs",
	".grxml":   "application/srgs+xml",
	".gz":      "application/x-gzip",
	".htm":     "text/html",
	".html":    "text/html",
	".ico":     "image/x-icon",
	".ics":     "text/calendar",
	".ifb":     "text/calendar",
	".iges":    "model/iges",
	".igs":     "model/iges",
	".jp2":     "image/jp2",
	".jpe":     "image/jpeg",
	".jpeg":    "image/jpeg",
	".jpg":     "image/jpeg",
	".kar":     "audio/midi",
	".lha":     "application/octet-stream",
	".lzh":     "application/octet-stream",
	".m4a":     "audio/mp4a-latm",
	".m4p":     "audio/mp4a-latm",
	".m4u":     "video/vnd.mpegurl",
	".m4v":     "video/x-m4v",
	".mac":     "image/x-macpaint",
	".mathml":  "application/mathml+xml",
	".mesh":    "model/mesh",
	".mid":     "audio/midi",
	".midi":    "audio/midi",
	".mov":     "video/quicktime",
	".mp2":     "audio/mpeg",
	".mp3":     "audio/mpeg",
	".mp4":     "video/mp4",
	".mpe":     "video/mpeg",
	".mpeg":    "video/mpeg",
	".mpg":     "video/mpeg",
	".mpga":    "audio/mpeg",
	".msh":     "model/mesh",
	".nc":      "application/x-netcdf",
	".oda":     "application/oda",
	".ogv":     "video/ogv",
	".pct":     "image/pict",
	".pic":     "image/pict",
	".pict":    "image/pict",
	".pnt":     "image/x-macpaint",
	".pntg":    "image/x-macpaint",
	".ps":      "application/postscript",
	".qt":      "video/quicktime",
	".qti":     "image/x-quicktime",
	".qtif":    "image/x-quicktime",
	".ram":     "audio/x-pn-realaudio",
	".rdf":     "application/rdf+xml",
	".rm":      "application/vnd.rn-realmedia",
	".roff":    "application/x-troff",
	".sgm":     "text/sgml",
	".sgml":    "text/sgml",
	".silo":    "model/mesh",
	".skd":     "application/x-koan",
	".skm":     "application/x-koan",
	".skp":     "application/x-koan",
	".skt":     "application/x-koan",
	".smi":     "application/smil",
	".smil":    "application/smil",
	".snd":     "audio/basic",
	".so":      "application/octet-stream",
	".svg":     "image/svg+xml",
	".t":       "application/x-troff",
	".texi":    "application/x-texinfo",
	".texinfo": "application/x-texinfo",
	".tif":     "image/tiff",
	".tiff":    "image/tiff",
	".tr":      "application/x-troff",
	".txt":     "text/plain",
	".vrml":    "model/vrml",
	".vxml":    "application/voicexml+xml",
	".webm":    "video/webm",
	".wrl":     "model/vrml",
	".xht":     "application/xhtml+xml",
	".xhtml":   "application/xhtml+xml",
	".xml":     "application/xml",
	".xsl":     "application/xml",
	".xslt":    "application/xslt+xml",
	".xul":     "application/vnd.mozilla.xul+xml",
	".webp":    "image/webp",
}

func GetUUID() (uuidHex string) {
	uuid := NewUUID()
	uuidHex = hex.EncodeToString(uuid[:])
	return
}

func GetTimeInFormatISO8601() (timeStr string) {
	gmt := time.FixedZone("GMT", 0)

	return time.Now().In(gmt).Format("2006-01-02T15:04:05Z")
}

func TypeByExtension(filePath string) string {
	typ := mime.TypeByExtension(path.Ext(filePath))
	if typ == "" {
		typ = extToMimeType[strings.ToLower(path.Ext(filePath))]
	}
	if typ == "" {
		typ = "text/plain"
	}
	return typ
}

func NewUUID() UUID {
	ns := UUID{}
	safeRandom(ns[:])
	na := UUID{}
	safeRandom(na[:])
	name := hex.EncodeToString(na[:])
	u := newFromHash(md5.New(), ns, name)
	u[6] = (u[6] & 0x0f) | (byte(2) << 4)
	u[8] = (u[8]&(0xff>>2) | (0x02 << 6))

	return u
}

func newFromHash(h hash.Hash, ns UUID, name string) UUID {
	u := UUID{}
	h.Write(ns[:])
	h.Write([]byte(name))
	copy(u[:], h.Sum(nil))

	return u
}

func safeRandom(dest []byte) {
	if _, err := rand.Read(dest); err != nil {
		panic(err)
	}
}

func GetUrlFormedMap(source map[string]string) (urlEncoded string) {
	urlEncoder := url.Values{}
	for key, value := range source {
		urlEncoder.Add(key, value)
	}
	urlEncoded = urlEncoder.Encode()
	return
}

func CalcMD5(body io.Reader, contentLen, md5Threshold int64) (reader io.Reader, b64 string) {
	if contentLen == 0 || contentLen > md5Threshold {
		// Huge body, use temporary file
		tempFile, err := ioutil.TempFile(os.TempDir(), "oss-go-temp-")
		if err != nil {
			return
		}
		if tempFile != nil {
			io.Copy(tempFile, body)
			tempFile.Seek(0, os.SEEK_SET)
			md5 := md5.New()
			io.Copy(md5, tempFile)
			sum := md5.Sum(nil)
			b64 = base64.StdEncoding.EncodeToString(sum[:])
			tempFile.Seek(0, os.SEEK_SET)
			reader = tempFile
		}
	} else {
		// Small body, use memory
		buf, _ := ioutil.ReadAll(body)
		sum := md5.Sum(buf)
		b64 = base64.StdEncoding.EncodeToString(sum[:])
		reader = bytes.NewReader(buf)
	}
	return
}