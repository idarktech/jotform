<?php
class Decryption
{

    public $privateKey = '-----BEGIN RSA PRIVATE KEY-----
MIIEoQIBAAKCAQBsUHjO3fTA/w75dBU9NOdZSipP7WRNNMjSWwcF4n1SZDwayosk
HD+zoj1Iwb+tuB9zdvHUk+9Fu96zpFcgUEV7O+UX7cNgXwagqpL4DU8z+3puLqji
ImczrjLXi+dTaysBBcqwqSk9RpMilexa5QlE90SDV7DnmnK3/zRJQPPasp982ShG
qRYChGbiSRE8DuqHmafl1JzIy/2TJD8RrXwyjQXwyEI4JbgLBhx/gt1qCmZ129XS
bQlPLGLpT32CGU9cjF9lhTguZXxU5HSVghqP81uDiRt8eQcJk2u7OsVnUegiESVc
ZtgCuygLHg6fheTGlCA4MCDJvWiUA/iq0rk7AgMBAAECggEAXwUVhj0XGzxmUZZx
j3lav20dw3J5fHWi+08Z0SLJWD9QrxwihnI1vAvHAY3e7rJI/Q1Kx3dj/+P5UdUJ
DfL9kUeRCbXuoRub/s9TEC9H5OpwR4pkSVRdjO+ZE+ezk6bxpRINlNiegYv4H0958
M50bzaGyPBrwua03mIzMvLq7co34F949OT5I+zoxBRuhwExc+uKzcOJSbwlRrrNR
I9k6raknY39/U1U/CzrISsaIZSvKtly/0BPisP5LqBmajvDzj6muqtFD8p0r/n40
XFMp9KUY/fuHRg7vXbQsATQpOoReKy1GMjxVJtbXxuqrzIGjyjCF+vt1fY5Uhv5b
/ALcgQKBgQDONqBkpgGEqbfskkRZzz6juGeCG4pafebkVY5UHDCjDUg+GrwQ2jg3
jOAJhfWRzymHnAiUPcv0oX0NpuUny5WuUNO00WfyHcYJpu17WJS0MfAkykz3/WsU
OmDcgKeQzBUy9N8ejchGxZWc9wxkD2XGpaOQ+R7wTahSsiXe2O2QOQQKBgQCGdwbH
DvbA/RgjIarNrhcC3mPVgnN1YaUa/Gb9yMa9G3kzxF3MbdWyLtZ1DWO6fON2ZyAq
ytemW8b5XM4yiLhdZJePFLD3hQHlEkG/qp4fWgpdzyT4VD2eC2wrhsBYXz439ZQ6
xcGSp2/9bNqq5o4gDAlazTHcSpOI558M0YfgewKBgBeYmgpPhtuzCKsyEFBQetbEw
KY/mrNcb7u6Tp5ySOTJ/E5QfpQNcpPAeS4hrbqUHil39CbJEu/C7Bb8pKLF8Bx2S
HBdlmrpGk+GI20Ww5hsUV8Et8M6zjawb3fd9NS9JWuegw2MQoCkQ9MSoNB/C70di
mMdTl/60tbbkZ/FPLGzBAoGACJvuTyhiHBEYToeFTpA3tYz2h3rWvdsB9tbCbV3xX
XRw5MltMNh6CJBpjmLL2w6XjWl1X7eV20SvnHWgXu5yNUU1zdrG4cuCNMoFsvDzM
Su2U5FSy5UNffpL0pgTGo+HVNff/OZQXxK/7t5oUlglSU7PBYWPvySUxtDcLmqAdy
T6kCgYBCa6xyvnOrAo9ZRQ7ZTg4eQ4AqGhR5v+hRP0idhxdbdGaEvGGFTRZSc85y
FE7qvjuPHMp6E4q/xpV9OMxFP5r2WgJScAeIg3lPEYr4nuHXj4Q6DKCT/n64UvbDD
jybGEdA/tHkHsb0o5aPfC8suVV5O5A74xQ1c4qBWnuyaMTdKuw==
-----END RSA PRIVATE KEY-----';

    public function decrypt($data)
    {
        if (openssl_private_decrypt(base64_decode($data), $decryptedData, $this->privateKey))
            return $decryptedData;
        	return "Decryption failed!";
    }
}

$name = "EQL6IEHhChVqsRg8G8khoufTYjrQM8KbcDLQYPOqu4NC3SWu6JzmhQ73Z+ygtshdwHft656ORFfcYQ1F2tnstTiq7JjdJ5wdx3D/xzq3LpAPS8ZNIlhqkGb8VNnap2gsiguzpud8edhZZAtInDC0DxlHw3kDIOYK0+u4Ed5IqQiG0ILg2bMGBpN0uJNPP/mCBw402Vwxv4ky5rNkXiSdl9+rsNlbhKMLCecMBLdaK2OaRpHQr6pumrfrbKW9jqy+44InThPk1CDFMsb7TKdfMtxSL3pM3r7Y4OFJ2szHeDpxhr09OPorcYkgYHu3e55S/cmL5pLv8JzfOAMakmT8wQ==";
$decrypter = new Decryption;
$decoded = $decrypter->decrypt($name);
echo "$decoded";

?>