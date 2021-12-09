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

namespace App\Controllers;

use App\Libraries\Datatableslib;

class Data extends BaseController
{
	/**
	 * Default method, call view dataeditor
	 */
	public function index()
	{
		return view('data');
	}

	/**
	 * Method call by ajax in Views
	 */
    public function ajax()
    {
		// Create editorlib object that connect to Model
		$dt = new Datatableslib('\App\Models\Data_model');

		// call post method to process CRUD
		$dt->post($_POST);
	}

}

/**
 * End of file Data.php
 * Location: app/Controllers/Data.php
 * https://github.com/wiendy/trackdt
 */



