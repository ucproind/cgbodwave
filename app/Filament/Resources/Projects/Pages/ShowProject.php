<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use App\Models\CgbodProject;
use Filament\Pages\Page;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
//use Filament\Resources\Pages\ViewRecord;

class ShowProject extends Page
{
    protected string $view = 'filament.resources.projects.pages.show-project';
    public CgbodProject $record;

    public function mount($recordId)
    {
        $this->record = CgbodProject::findOrFail($recordId);
    }

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
                ->label('Edit')
                ->url(fn() => ProjectResource::getUrl('edit', ['record' => $this->record]))
                ->color('primary'),

            Action::make('back')
                ->label('Back to List')
                ->color('gray')
                ->url(ProjectResource::getUrl('index')),
        ];
    }
}
