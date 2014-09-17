<?php

   class Model extends Eloquent {
      public function maker(){
         return $this->belongs_to('Maker');
      }
   }

?>
