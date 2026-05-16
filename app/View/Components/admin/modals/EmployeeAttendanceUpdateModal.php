<?php

namespace App\View\Components\admin\modals;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EmployeeAttendanceUpdateModal extends Component
{
    public $leaveTypes;
    /**
     * Create a new component instance.
     */
    public function __construct($leaveTypes)
    {
        $this->leaveTypes = $leaveTypes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.modals.employee-attendance-update-modal');
    }
}
