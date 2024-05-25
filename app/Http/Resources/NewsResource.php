<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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
            'category_id' => $this->category_id,
            'title' => $this->title,
            'category_title' => $this->category_title,
            'body' => $this->body,
            'cover' => $this->cover,
            'source' => $this->source,
            'author' => $this->author,
            'views' => $this->views,
        ];
    }
}
