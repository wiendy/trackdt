<?php
/**
 * Library for Datatables
 * Created by   : Wiendy Kusuma
 * Link         : https://github.com/wiendy/trackdt
 *
 * Library Name : TrackDT
 * Created Date : Dec 8, 2021
 * Email        : wiendy@opsi.biz
 * Tested       : Datatable 1.11.3
 *              : Codigniter 4.1.5
 *              : PHP 7.3.33
 *
 * If you feel happy with this Library you can donate via paypal wiendy@opsi.biz, thank you
 */

namespace App\Models;

use CodeIgniter\Model;

class Data_model extends Model
{
	protected $table = "tracked";

	function search($search = null, $start = 0, $length = 0)
	{
		$builder = $this->table("trackdt");
		if($search)
		{
			$arr_search = explode(" ", $search);
			for($i = 0; $i < count($arr_search); $i++)
			{
				$builder = $builder->orlike('number', $arr_search[$i]);
				$builder = $builder->orlike('name', $arr_search[$i]);
			}
		}
		if($start != 0 OR $length != 0)
		{
			$builder = $builder->limit($length, $start);
		}
		return $builder->orderBy('number')->get()->getResult();
	}
}

/**
 * End of file Data_model.php
 * Location: app/Models/Data_model.php
 * https://github.com/wiendy/trackdt
 */
