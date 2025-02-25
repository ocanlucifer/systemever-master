<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index()
    {
        $data = [];

        $breadcrumbs = array(
            [ 
                'label' => 'Home',
                "link"  => route("get.home"),
            ],
            [ 
                'label' => 'Official Store',
                'link'  => route("get.store")
            ], 
        );

        $store = \App\Store::where("type", "OFFICIAL")->get();

        $seo = seohelper("PAGE", "OFFICIAL STORE");

        $data = [
            "breadcrumbs"   => $breadcrumbs,
            "store"         => $store,
            "seo"           => $seo,
            "url"           => route("get.store"),
        ];

        return view("web/pages/stores/official_store", $data);
    }

    public function mitra()
    {
        $data = [];

        $breadcrumbs = array(
            [ 
                'label' => 'Home',
                "link"  => route("get.home"),
            ],
            [ 
                'label' => 'Store Mitra',
                'link'  => route("get.store")
            ], 
        );        

        $store = \App\Store::where("type", "MITRA");
        if (!empty(get('search'))) {
            $search = get('search');
            $store = $store->whereRaw("(name LIKE '%$search%' or id IN (
                SELECT unofficial_store_addresses.store_id 
                FROM unofficial_store_addresses 
                WHERE unofficial_store_addresses.address LIKE '%$search%')
            )");
        }
        $store = $store->get()->map(function($row){
            $row->addresses = \App\UnofficialStoreAddress::where("store_id", $row->id)->get();
            return $row;
        });        

        $seo = seohelper("PAGE", "STORE MITRA");

        $data = [
            "breadcrumbs"   => $breadcrumbs,
            "store"         => $store,
            "seo"           => $seo,
            "url"           => route("get.store.mitra"),
        ];

        return view("web/pages/stores/store_mitra", $data);
    }
}
