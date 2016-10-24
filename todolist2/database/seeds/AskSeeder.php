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
        $this->call('AskModelSeeder')
    }


}

class AskModelSeeder extends Seeder {
  public function run(){
    DB::insert('insert into asks(nome, descricao, prioridade) values (?,?,?)', array('Fazer Arroz', 3, 'Fazer o arroz de forno'));

		DB::insert('insert into asks(nome, descricao, prioridade) values (?,?,?)', array('Comprar um forninho', 1,'Com painel automático e forno elétrico'));

		DB::insert('insert into asks(nome, descricao, prioridade) values (?,?,?)', array('Sair com o dog', 5,'Andar na praia com o cachorro'));
  }
}
