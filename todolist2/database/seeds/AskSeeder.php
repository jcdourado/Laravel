<?php

use Illuminate\Database\Seeder;

class AskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('AskModelSeeder');
    }


}

class AskModelSeeder extends Seeder {
  public function run(){
    DB::insert('insert into asks(nome, prioridade, descricao, user_id) values (?,?,?,?)', array('Fazer Arroz', 3, 'Fazer o arroz de forno',1));

		DB::insert('insert into asks(nome, prioridade, descricao ,user_id) values (?,?,?,?)', array('Comprar um forninho', 1,'Com painel automático e forno elétrico',1));

		DB::insert('insert into asks(nome, prioridade,descricao,user_id) values (?,?,?,?)', array('Sair com o dog', 5,'Andar na praia com o cachorro',1));
  }
}
