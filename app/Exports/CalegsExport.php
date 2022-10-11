<?php

namespace App\Exports;

use App\Models\Caleg;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class CalegsExport implements FromView
{

    public function view(): View
    {
        return view('exports.caleg', [
            'caleg' => Caleg::all()
        ]);
    }
}

