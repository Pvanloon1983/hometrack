<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'              => ['required', 'string', 'max:255'],
            'category'          => ['nullable', 'string', 'max:255'],
            'purchase_date'     => ['nullable', 'date'],
            'purchase_price'    => ['nullable', 'numeric', 'min:0'],
            'warranty_until'    => ['nullable', 'date'],
            'notes'             => ['nullable', 'string']
        ]);

        Item::create($validate);

        return response()->json('Item is has been created', 201);
    }
}
