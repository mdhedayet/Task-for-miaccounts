<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportTwoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=> $this->id,
            "main_level_id"=>$this->main_level_id,
            "sub_level_id"=> $this->sub_level_id,
            "child_level_id"=> $this->child_level_id,
            "name"=> $this->name,
            "total_amount"=> $this->total_amount,
            "main_level" =>new MainLevelTwoResource($this->whenLoaded('mainLevel')),
            "sub_level"=>new SubLevelTwoResource($this->whenLoaded('subLevel')),
            "child_level"=>new ChildLevelTwoResource($this->whenLoaded('childLevel')),
        ];
    }
}
