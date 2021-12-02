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



namespace App\Models;

use CodeIgniter\Model,
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate,
    DataTables\Editor\ValidateOptions;

// DataTables PHP library
class Dataeditor_model extends Model
{
    private $datadb = null;

	// @param = database instances
    public function init($dataDb)
    {
		$this->datadb = $dataDb;
    }

	public function post($post) {
	// Build our Editor instance and process the data coming from _POST
	Editor::inst( $this->datadb, 'trackdt' )
		->fields(
        Field::inst( 'number' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'Number is required' ) 
            ) ),
        Field::inst( 'name' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'A Name is required' )  
            ) )
    )
    ->debug(true)
	->process( $post )
    ->json();
	}

}

/**
 * https://github.com/wiendy/trackdt
 */