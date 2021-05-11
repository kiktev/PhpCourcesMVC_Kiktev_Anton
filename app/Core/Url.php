<?php

namespace Core;

class Url
{
	public static function getLink($path,$name,$params = [])
	{
		if (!empty($params)) {
			$first_key = array_keys($params)[0];
			foreach ($params as $key => $value) {
				$path .= ($key === $first_key ? '?' : '&');
				$path .= "$key=$value";
			}
		}
		return '<a href = ">' . Route::getBP() . $path . '">' . $name . '</a>';
	}
}