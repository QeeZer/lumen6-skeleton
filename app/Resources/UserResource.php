<?php

declare(strict_types=1);

namespace App\Resources;

class UserResource extends BaseResource
{
    public function toArray(): array
    {
        return [
            'id' => $this->data['id'],
            'name' => $this->data['name'],
            'mobile' => substr_replace($this->data['mobile'], '****', 3, 4),
        ];
    }
}
