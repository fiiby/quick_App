<?php 
namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\User;
// use App\Models\Contacts;
// use App\Models\Organizations;
use App\Models\Deal;
use App\Models\Deals_Stages;
// use App\Models\Leads;

class DatabaseSeeder extends Seeder
{
/**
* Seed the application's database.
*/
public function run(): void
{
// Create 10 users
// User::factory()->times(10)->create();

// Create 10 organizations
// Organizations::factory()->times(10)->create();

// Create 10 contacts
// Contacts::factory()->times(10)->create();

// Create 10 deals
Deal::factory()->times(10)->create();

 // Create 10 deal stages
Deals_Stages::factory()->times(10)->create();

// Generate fake leads
// Leads::factory()->times(10)->create();
}
}
