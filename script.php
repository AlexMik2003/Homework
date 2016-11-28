<?php
/**
 * Get Cisco Configs via SNMP
 * Check and Compare Changes
 * Copy New File to Configs Folder
 */

define ("Community","public");
define ("Tftp", "192.168.71.30");
define ("Tftp_dir", "/srv/tftp/");
define ("Config_dir","/home/cisco/");

$switches = [
    "bvz" => [
        "sw-1" => "192.168.32.20",
        "sw-2" => "192.168.32.30",
        "sw-3" => "192.168.32.40"
    ]
];

foreach ($switches as $branch => $sw)
{
    switch($branch)
    {
        case "bvz":
            $folder = "Sw-Bvz/";
            break;
    }
    foreach($sw as $key => $ip)
    {
        $file = Tftp_dir.$branch.".".$key;
        ciscoConfig($file,$ip);
        $config = getlastConfigFile($file,$folder);
        if($config!==null)
        {
            if(checkConfigs($file,$config))
            {
                copyConfig($file,$folder);
            }
        }
        else
        {
            copyConfig($file,$folder);
        }
    }
}
/**
 * Get Cisco Congig via SNMP
 *
 * @param string $file Congig File
 *
 * @param string $ip IP address of Cisco
 *
 * @return void
 */

function ciscoConfig($file,$ip)
{
    if(!file_exists($file))
    {
        $fp = fopen($file,"w");
        chmod($file,0777);
        fclose($fp);
    }
    $i = rand(100, 999);
    snmp2_set($ip, Community, "iso.3.6.1.4.1.9.9.96.1.1.1.1.14.".$i, "i", 5);
    snmp2_set($ip, Community, "iso.3.6.1.4.1.9.9.96.1.1.1.1.2.".$i, "i", 1);
    snmp2_set($ip, Community, "iso.3.6.1.4.1.9.9.96.1.1.1.1.3.".$i, "i", 4);
    snmp2_set($ip, Community, "iso.3.6.1.4.1.9.9.96.1.1.1.1.4.".$i, "i", 1);
    snmp2_set($ip, Community, "iso.3.6.1.4.1.9.9.96.1.1.1.1.5.".$i, "a", Tftp);
    snmp2_set($ip, Community, "iso.3.6.1.4.1.9.9.96.1.1.1.1.6.".$i, "s", $file);
    snmp2_set($ip, Community, "iso.3.6.1.4.1.9.9.96.1.1.1.1.14.".$i, "i", 1);
}

/**
 * Get Last Config File From Configs Folder
 *
 * @param string $config Config File From SNMP
 *
 * @param string $folder Config Folder
 *
 * @return mixed|string
 */
function getLastConfigFile($config,$folder)
{
    $config_file = explode(".",$config);
    $files = scandir(Config_dir.$folder);
    $files = array_flip($files);
    unset($files["."]);
    unset($files[".."]);
    $files = array_flip($files);
    if(count($files)!==0)
    {
        $configs = [];
        foreach($files as $file)
        {
            if($file!=="." && $file!=="..")
            {
                if(strpos($file,$config_file[1])!==false)
                {
                    $configs[$file]  =  filemtime(Config_dir.$folder.$file);
                }
            }
        }
        $configs = array_flip($configs);
        krsort($configs,SORT_NUMERIC);
        $last_config_file = reset($configs);
        $last_config_file = Config_dir.$folder.$last_config_file;
    }
    else
    {
        $last_config_file = null;
    }

    return $last_config_file;
}

/**
 * Compare Configs Files
 *
 * @param string $file Config File From SNMP
 *
 * @param string $sw_config Last Config File in Configs Folder
 *
 * @return bool
 */
function checkConfigs($file,$config)
{
    $sw_file_array = file($file);
    $sw_config_array = file($config);
    if(strnatcasecmp($sw_file_array[3],$sw_config_array[3])!==0)
    {
        return true;

    }
    return false;
}

/**
 * Copy New Config File to Configs Folder
 *
 * @param string $file New Config File
 *
 * @param string $folder Configs Folder
 *
 * @return void
 */
function copyConfig($file,$folder)
{
    $config = explode(".",$file);
    $date = date("M-d-H-i-s");
    $config_file = Config_dir.$folder.$config[1].".".$date;

    copy($file,$config_file);
}

