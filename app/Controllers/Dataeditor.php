<?php
/**
 * Library for Editor Datatables
 * Created by   : Wiendy Kusuma
 * Link         : https://github.com/wiendy/trackdt
 *
 * Library Name : TrackDT
 * Created Date : Dec 1, 2021
 * Email        : wiendy@opsi.biz
 * Tested       : Editor Datatable 1.9.4, 1.9.6
 *              : Codigniter 4.1.5
 *              : PHP 7.3.33
 * 
 * If you feel happy with this Library you can donate via paypal wiendy@opsi.biz, thank you
 */

namespace App\Controllers;

use App\Libraries\Editorlib;

class Dataeditor extends BaseController
{
	/**
	 * Default method, call view dataeditor
	 */
	public function index()
	{
		return view('dataeditor');
	}

	/**
	 * Method call by ajax in Views
	 */
    public function ajax()
    {
		// Create editorlib object that connect to Model
		$ed = new Editorlib('\App\Models\Dataeditor_model');

		// call post method to process CRUD
		$ed->post($_POST);
	}

}

/**
 * https://github.com/wiendy/trackdt
 */