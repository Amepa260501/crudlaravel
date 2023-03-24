<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $table = 'order';
    public function order1()
    {
        $eloselect = Order::select('*')->get();
        $join = Order::join('order_item', 'order_item.kodeorder', '=', 'order.kodeorder')
            ->join('barang', 'order_item.kodebarang', '=', 'barang.kodebrg')
            ->select('order.*', 'barang.namabrg')
            ->get();    
        $elowhere = Order::where('do', 'do1213')->first();
        $eloorderby = Order::orderBy('grandtotal', 'desc')->get();
        $eloorderinsert = Order::insert([
            'kodeorder' => 'o7',
            'kodesupplier' => 'S001',
            'kodekaryawan' => 'K001',
            'tanggal' => '02/12/2022',
            'do' => 'do1236',
            'keterangan' => 'uwawww',
            'grandtotal' => 1000000
        ]);
        $orderupdate = Order::where('kodeorder', 'o3')->update(['grandtotal' => 400000]);
        $orderdelete = Order::where('kodeorder', '=', 'o7')->delete();
        return compact('join');
    }
}
