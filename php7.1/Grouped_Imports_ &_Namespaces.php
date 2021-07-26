<?php

namespace Country{
    class India{

    }
    class Pakisthan{

    }
}

namespace Country\State{
    class Panjub{

    }
}

namespace App{
//    use Country\India;
//    use Country\Pakisthan;

    //uporer namespace gulok aksathe group import kora jai
    use Country\{
      India,
      Pakisthan,
      State\Panjub
    };

    var_dump(new India);
    var_dump(new Pakisthan);
}
?>