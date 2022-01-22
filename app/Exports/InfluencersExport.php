<?php

namespace App\Exports;

use App\Models\User;
use App\Models\User_Influencer;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;


class InfluencersExport implements FromCollection, FromQuery, WithMapping, WithHeadings

{

    public function query()
    {
        $personal_influencers =  User_Influencer::query()->with(['user_inf', 'first_per_inf', 'second_per_inf', 'third_per_inf']);
    
        return $personal_influencers;
    }

    public function map($personal_influencers): array
    {
        return [
            $personal_influencers->id,
            $personal_influencers->user_inf->username,
            $personal_influencers->first_per_inf->username,
            $personal_influencers->first_per_influencer_note,
            $personal_influencers->second_per_inf->username,
            $personal_influencers->second_per_influencer_note,
            $personal_influencers->third_per_inf->username,
            $personal_influencers->third_per_influencer_note,
            date('dS M, Y', strtotime($personal_influencers->created_at)),
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

        $personal_influencers =  User_Influencer::get(
            'id',
            'user_id',
            'first_per_influencer',
            'first_per_influencer_note',
            'second_per_influencer',
            'second_per_influencer_note',
            'third_per_influencer',
            'third_per_influencer_note',
            // 'first_pro_influencer',
            // 'first_pro_influencer_note',
            // 'second_pro_influencer',
            // 'second_pro_influencer_note',
            // 'third_pro_influencer',
            // 'third_pro_influencer_note',
            'created_at');
        return $personal_influencers;
    }
}
