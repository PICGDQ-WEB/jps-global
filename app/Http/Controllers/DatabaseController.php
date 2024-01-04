<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB;
use Illuminate\Support\Facades\Schema;

class DatabaseController extends Controller
{
    public function createTable()
    {
        return view('back.db.table.create');
    }
    public function openTable($tablename)
    {
        $table = $tablename;
        $columns = Schema::getColumnListing($table);
        $tabledata = DB::table($table)->get();
        return view('back.db.table.table', [
            'table' => $table,
            'columns' => $columns,
            'tabledata' => $tabledata
        ]);
    }
    public function updateTableRow(Request $req)
    {
        $row = $req->id;
        if (!$row) {
            // Handle the case if the row is not found (optional)
            return redirect()->back()->with('error', 'Row not found.');
        }
    }
}
