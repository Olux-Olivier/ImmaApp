<?php

namespace app\console;
use App\Jobs\SendMedicationReminder;
use App\Models\Prescription;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel{
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $now =  now();
            $prescriptions = Prescription::whereTime ('heure', '=', $now->format('H:i'))->get();

            foreach ($prescriptions as $prescription) {
                SendMedicationReminder::dispatch($prescription);
            }
        })->everyMinute();
    }
}
