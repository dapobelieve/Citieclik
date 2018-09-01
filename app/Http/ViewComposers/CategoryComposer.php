<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Cat;
use App\State;


class CategoryComposer 
{
    private $cat;
    private $state;

    public function compose(View $view)
    {
        if (!$this->cat && !$this->state) {

            $this->cat = Cat::with('categories', 'services')->get();
            $this->state = State::with('locations')->get();
        }

        return $view->with('cats', $this->cat)
                    ->with('states', $this->state);
    }
}