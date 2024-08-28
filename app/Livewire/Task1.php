<?php

namespace App\Livewire;

use Livewire\Component;

class Task1 extends Component
{

    public ?array $rows = [];

    public ?array $totalPerson = [];
    public ?array $totalWeek = [];
    public function render()
    {
        return view('livewire.task1');
    }

    public function updatedRows()
    {
        foreach($this->rows as $key =>  $r){
            $this->totalPerson[$key] = array_sum($r);
            foreach ($r as $k => $value) {
                $this->totalWeek[$k] = array_sum($value);
            }
        }
    }
}
