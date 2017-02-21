<?php

use Illuminate\Database\Seeder;
use App\Message;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $arrayMessages = array(
        array(
            'name' => 'Lluis',
            'text' => 'Texto 1',
            ),
        array(
            'name' => 'Alina',
            'text' => 'Texto 2',
            )
        );
    private $arrayUsers = array(
        array(
            'name' => 'Lluis',
            'email' => 'lluis_96_13@hotmail.com',
            'password' => 'P@ssw0rd',
            'comments' => 0,
            ),
        array(
            'name' => 'Alina',
            'email' => 'alina@gmail.com',
            'password' => 'kiev',
            'comments' => 0,
            ),
        array(
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'P@ssw0rd',
            'comments' => 0,
            )
        );
    public function run()
    {
       self::seedMessages();
       $this->command->info('Tabla Messages inicializada con exito');
       self::seedUsers();
       $this->command->info('Tabla usuarios inicializada con exito');
    }

    public function seedMessages(){
        DB::table('messages')->delete();
        foreach ($this->arrayMessages as $message){
            $m = new Message;
            $m->name = $message['name'];
            $m->text = $message['text'];
            $m->save();
        }
    }
    public function seedUsers(){
        DB::table('users')->delete();
        foreach ($this->arrayUsers as $user){
            $u = new User;
            $u->name = $user['name'];
            $u->email = $user['email'];
            $u->password = bcrypt($user['password']);
            $u->comments = $user['comments'];
            $u->save();

        }
    }
    
}
