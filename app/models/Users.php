<?php  


class Users extends Eloquent{

    protected $table = 'user';

    protected $primaryKey = 'id';

    public $timestamps = false;
	
}


?>