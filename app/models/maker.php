<?php

   class Maker extends Eloquent {
      public function models(){
         return $this->has_many('Model');
      }
   }

?>
