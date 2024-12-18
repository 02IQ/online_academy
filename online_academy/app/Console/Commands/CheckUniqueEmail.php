<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckUniqueEmail extends Command
{
    protected $signature = 'check:unique-email';
    protected $description = 'Проверяет уникальность email';

    public function handle()
    {
        $this->info('Проверка уникальности email...');
        
        $emails = DB::table('users')->pluck('email');
        
        foreach ($emails as $email) {
            if (empty($email)) continue;
            
            $count = DB::table('users')
                ->where('email', $email)
                ->count();
            
            if ($count > 1) {
                $this->error("Email {$email} зарегистрирован более одного раза!");
            }
        }
        
        $this->info('Проверка завершена.');
    }
}
