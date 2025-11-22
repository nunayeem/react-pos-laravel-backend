<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description ?? 'N/A',
            'photo' => $this->photo,
            'serial' => $this->serial,
            'status' => $this->status == 1 ? 'Active' : 'Inactive',
            'created_by' => $this->user?->name,
            'created_at' => Carbon::parse($this->created_at)->format('d M, Y'),
            'updated_at' => $this->updated_at != $this->updated_at ? Carbon::parse($this->updated_at)->format('d M, Y') : 'Not updated yet',
            'user' => $this->user?->name,
        ];
    }
}
