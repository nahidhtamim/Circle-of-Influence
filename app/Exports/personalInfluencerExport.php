<?php

namespace App\Exports;

use App\Models\Influencer;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class personalInfluencerExport implements FromCollection, WithMapping, WithHeadings  
{

    public function headings(): array
    {
        return ["Sl.", "Activity", "Last Name", "First Name", "Mobile", "Address",
         "Influencer Type", "Influencer Last Name", "Influencer First Name", "Note", "Created At"];
    }

    public function map($influencers): array
    {
        return [
            $influencers->id,
            $influencers->selection->activity_name,
            $influencers->user_inf->last_name,
            $influencers->user_inf->first_name,
            $influencers->user_inf->mobile,
            $influencers->user_inf->address,
            $influencers->type->influencer_type,
            $influencers->influencer->last_name,
            $influencers->influencer->first_name,
            $influencers->influencer_note,
            Date($influencers->created_at),
        ];
    }

    public function collection()
    {
        $personal_influencers =Influencer::select(
                        'influencers.id',
                        'influencers.selection_id',
                        'influencers.user_id',
                        'influencers.user_id',
                        'influencers.user_id',
                        'influencers.user_id',
                        'influencers.type_id',
                        'influencers.influencer_id',
                        'influencers.influencer_id',
                        'influencers.influencer_note',
                        'influencers.created_at',
                        )->where('influencers.type_id', '1')->get();
                    return $personal_influencers;
    }

}
