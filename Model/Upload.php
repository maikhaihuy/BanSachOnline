<?php
class Upload
{
	public static function CheckFile($fileName,$arr)
	{	
		$fileType = strstr($fileName,".");
		foreach($arr as $item)
		{
			if($item == $fileType)
				return true;
		}
		return false;
	}
	public static function IsImage($fileName)
	{
		$arr= array(".jpg",".png",".gif",".jpeg");
		return self::CheckFile($fileName,$arr);
	}
	public static function UploadImage($name,$dir)
	{
		$fileName = rand().str_replace(" ","",$_FILES[$name]["name"]);
		//echo $fileName;
		$fileTmp = $_FILES[$name]["tmp_name"];
		if(self::IsImage($fileName))
		{
			$ret = move_uploaded_file($fileTmp,"$dir/$fileName");
			if($ret)
				return $fileName;
		}
		return "";
	}
}

?>