<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\DeleteRequest;
use App\Models\User;
use Carbon\Carbon;

class DeleteUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:user'; // Define the command signature

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete users who are scheduled for deletion after 24 hours'; // Set the description

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Get the current time
        $now = Carbon::now();

        // Fetch all delete requests where the deletion time has passed
        $deleteRequests = DeleteRequest::where('deletion_scheduled_at', '<=', $now)
            ->where('status', 'approved')
            ->get();

        foreach ($deleteRequests as $deleteRequest) {
            $user = User::find($deleteRequest->user_id);

            if ($user) {
                $user->delete(); // Delete the user
                $deleteRequest->delete(); // Remove the delete request
                $this->info("User with ID {$deleteRequest->user_id} has been deleted.");
            }
        }
    }
}
