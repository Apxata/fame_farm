<?php

    class Fame {

    public $fame;
    public $fame_time;
    public $connection;
    public $user_id = 0;

    function __construct($fame){
        if(isset($fame)){
            $this->fame = $fame;
        }else{
            $this->fame = "";
        }
        if(isset($user_id)){
            $this->user_id = $user_id;
        }else{
            $this->user_id = 0;
        }
        $this->connection = DB::get_connect(); 
    }

    static public function find_all(){
        $static_connection = DB::get_connect();

        $fame = $static_connection->query("SELECT * FROM fame ORDER BY fame_time DESC ");
        return $fame->fetchAll();
    }

    public function create() {

        $sth = $this->connection->prepare(
            "INSERT INTO fame (
                fame
            ) values (
                :fame
            )"
        );
        $sth->execute([
            'fame' => $this->fame,
        ]);

        return !isset($sth->errorInfo()[2]) ?  true : $sth->errorInfo()[2];
    }

        
}