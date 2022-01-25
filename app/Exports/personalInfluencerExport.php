<?php

namespace App\Exports;

use App\Models\User_Influencer;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class personalInfluencerExport implements FromCollection, WithMapping, WithHeadings  
{

    public function headings(): array
    {
        return ["Sl.", "Last Name", "First Name", "Mobile", "Address", "1st Influencer", "Note", "2nd Influencer", "Note", "3rd Influencer", "Note", "Created At"];
    }

    public function map($user_influencers): array
    {
        return [
            $user_influencers->id,
            $user_influencers->user_inf->last_name,
            $user_influencers->user_inf->first_name,
            $user_influencers->user_inf->mobile,
            $user_influencers->user_inf->address,
            $user_influencers->first_per_inf->username,
            $user_influencers->first_per_influencer_note,
            $user_influencers->second_per_inf->username,
            $user_influencers->second_per_influencer_note,
            $user_influencers->third_per_inf->username,
            $user_influencers->third_per_influencer_note,
            Date($user_influencers->created_at),
        ];
    }

    public function collection()
    {
        $personal_influencers =User_Influencer::select(
                        'user_influencers.id',
                        'user_influencers.user_id',
                        'user_influencers.user_id',
                        'user_influencers.user_id',
                        'user_influencers.user_id',
                        'user_influencers.first_per_influencer',
                        'user_influencers.first_per_influencer_note',
                        'user_influencers.second_per_influencer',
                        'user_influencers.second_per_influencer_note',
                        'user_influencers.third_per_influencer',
                        'user_influencers.third_per_influencer_note',
                        'user_influencers.created_at')->get();
                    return $personal_influencers;
        // $personal_influencers =  User_Influencer::select(
        //     'id',
        //     'user_id',
        //     'first_per_influencer',
        //     'first_per_influencer_note',
        //     'second_per_influencer',
        //     'second_per_influencer_note',
        //     'third_per_influencer',
        //     'third_per_influencer_note',
        //     'created_at')->get();
        // return $personal_influencers;
    }

}
