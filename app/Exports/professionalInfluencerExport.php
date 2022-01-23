<?php

namespace App\Exports;

use App\Models\User_Influencer;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class professionalInfluencerExport implements FromCollection, WithMapping, WithHeadings  
{

    public function headings(): array
    {
        return ["Sl.", "Username", "1st Influencer", "Note", "2nd Influencer", "Note", "3rd Influencer", "Note", "Created At"];
    }

    public function map($user_influencers): array
    {
        return [
            $user_influencers->id,
            $user_influencers->user_inf->username,
            $user_influencers->first_pro_inf->username,
            $user_influencers->first_pro_influencer_note,
            $user_influencers->second_pro_inf->username,
            $user_influencers->second_pro_influencer_note,
            $user_influencers->third_pro_inf->username,
            $user_influencers->third_pro_influencer_note,
            Date($user_influencers->created_at),
        ];
    }

    public function collection()
    {
        $professional_influencers =  User_Influencer::select(
            'id',
            'user_id',
            'first_pro_influencer',
            'first_pro_influencer_note',
            'second_pro_influencer',
            'second_pro_influencer_note',
            'third_pro_influencer',
            'third_pro_influencer_note',
            'created_at'
        )->get();
        
        return $professional_influencers;
    }
}
