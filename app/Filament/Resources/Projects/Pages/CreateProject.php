<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource as ProjectsProjectResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectsProjectResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Multi-Tenancy
        //$data['tenant_id'] = tenant()->id;
        // اضافه کردن user_id کاربر لاگین شده
        $data['user_id'] = Auth::id();

        return $data;
    }
}
