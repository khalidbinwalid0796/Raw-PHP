//arguments can not pass according to arguments name

<?php

    class Human{
        protected string $name;
        protected int $age;
        protected string $gender;

        public function setHuman(string $name, string $gender, int $age){
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }
    }

    $human = new Human();
    $human->setHuman('sakib','Male',35); //follow order
    $human->setHuman(gender:'Male',age:35,name:'sakib');    //donot have to follow

?>