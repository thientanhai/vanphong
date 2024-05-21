<?php

namespace Botble\RealEstate\Http\Requests;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class CategoryRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:220',
            'description' => 'nullable|string|max:2000',
            'is_default' => 'sometimes|boolean',
            'status' => Rule::in(BaseStatusEnum::values()),
        ];
    }
}
