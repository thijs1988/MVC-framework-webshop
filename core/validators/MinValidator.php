<?php
class MinValidator extends CustomValidator{
  public function runValidation(){
    $pass = (strlen($this->_model->{$this->field}) >= $this->rule);
    return $pass;
  }
}
