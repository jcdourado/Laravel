<?php

namespace TodoList;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
  protected $fillable = array('user_id','nome',	'descricao', 'prioridade');
}
