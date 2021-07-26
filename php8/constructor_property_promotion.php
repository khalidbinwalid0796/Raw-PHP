<?php


//    class Human{
//        protected string $name;
//        protected int $age;
//        protected string $gender;
//
//        public function setHuman(string $name, string $gender, int $age){
//            $this->name = $name;
//            $this->age = $age;
//            $this->gender = $gender;
//        }
//    }

//uporer kaj tuku nicher 1 line die kora possible

    class Human{
        public function __construct(protected string $name, protected string $gender, protected int $age){
        }
    }
    $human = new Human(name:'sakib',gender:'Male',age:35);

?>