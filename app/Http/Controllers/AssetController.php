<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Asset;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class AssetController extends Controller
{
    public function index()
    {

        $pageTitle = 'List Asset';

        // ELOQUENT
        $assets = Asset::all();

        return view('asset.index', [
            'pageTitle' => $pageTitle,
            'assets' => $assets
        ]);

    }

    public function create()
    {
        $pageTitle = 'Add New Asset';

        // ELOQUENT
        $types = Type::all();

        return view('asset.create', compact('pageTitle', 'types'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'Harap Diisi dengan benar',
            'min' => 'Harap diisi lebih dari sama dengan 3 karakter',
            'max' => 'Harap diisi kurang dari sama dengan 5 karakter',
            'alpha_num' => 'Hanya bisa diidi oleh angka dan huruf saja',
            'numeric' => 'Harap diisi dengan format angka'

        ];
        $validator = Validator::make($request->all(), [
            'assetCode' => 'required | min:3 | max:5 | alpha_num ',
            'assetName' => 'required',
            'assetPrice' => 'required | numeric',
            'assetDescription' => 'required',
            'type_id' => 'numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //ELOQUENT
        $asset = New asset;
        $asset->assetCode = $request->assetCode;
        $asset->assetName = $request->assetName;
        $asset->assetPrice= $request->assetPrice;
        $asset->assetDescription = $request->assetDescription;
        $asset->type_id = $request->type;
        $asset->save();

        return redirect()->route('assets.index');
    }


    public function show(string $id)
    {
        $pageTitle = 'Preview';

        // ELOQUENT
        $asset = Asset::find($id);

        return view('asset.show', compact('pageTitle', 'asset'));


    }

    public function edit(string $id)
    {
        $pageTitle = 'Edit Asset';

        // ELOQUENT
        $types = Type::all();
        $asset = Asset::find($id);


        return view('asset.edit', compact('pageTitle', 'types', 'asset'));

    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Harap Diisi dengan benar',
            'min' => 'Harap diisi lebih dari sama dengan 3 karakter',
            'max' => 'Harap diisi kurang dari sama dengan 5 karakter',
            'alpha_num' => 'Hanya bisa diidi oleh angka dan huruf saja',
            'numeric' => 'Harap diisi dengan format angka'
        ];

        $validator = Validator::make($request->all(), [
            'assetCode' => 'required | min:3 | max:5 | alpha_num ',
            'assetName' => 'required',
            'assetPrice' => 'required | numeric',
            'assetDescription' => 'required',
            'type_id' => 'numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $asset = Asset::find($id);
        $asset->assetCode = $request->assetCode;
        $asset->assetName = $request->assetName;
        $asset->assetPrice= $request->assetPrice;
        $asset->assetDescription = $request->assetDescription;
        $asset->type_id = $request->type;
        $asset->save();

        return redirect()->route('assets.index');
    }


    public function destroy(string $id)
    {
        // ELOQUENT
        Asset::find($id)->delete();

    return redirect()->route('assets.index');

    }
}
