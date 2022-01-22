<?php

namespace App\Exports;

use App\Models\User_Influencer;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class UsersExport implements FromCollection, WithCustomCsvSettings, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }

    public function headings(): array
    {
        return ["Sl.", "Username", "1st Influencer", "Note", "2nd Influencer", "Note", "3rd Influencer", "Note", "Created At"];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       $personal_influencers =  User_Influencer::select(
        'user_id',
        'first_per_influencer',
        'first_per_influencer_note',
        'second_per_influencer',
        'second_per_influencer_note',
        'third_per_influencer',
        'third_per_influencer_note',
        'first_pro_influencer',
        'first_pro_influencer_note',
        'second_pro_influencer',
        'second_pro_influencer_note',
        'third_pro_influencer',
        'third_pro_influencer_note',
        'created_at')->get();


        return $personal_influencers;
    }
}
