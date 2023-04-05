<?php
class Technician {

    public function __construct(private array $subordinates= [],private ?Technician $superior = null) {
    }

    public function set_superior(Technician $superior) {
        if($superior === $this){
            throw new Exception('Technician cant be his own superior');
        }
        // Check if technician already has a superior
        if ($this->superior !== null) {
            $this->superior->removeSub($this);
        }
        // Set superior and add technician as subordinate
        if ($superior !== null) {
            $superior->add_subordinate($this);
        }
        $this->superior = $superior;
        return $this;       
    }

    public function add_subordinate(Technician $subordinate) {
        if($subordinate === $this){
            throw new Exception('Technician cant be his own subordinate');
        }
        // Add subordinate and set technician as subordinate's superior
        if(!in_array($subordinate, $this->subordinates, true)){

            $this->subordinates[] = $subordinate;
            return true;
        }
        return false;
    }

    public function removeSub(Technician $subordinate){
        $key = array_search($subordinate, $this->subordinates,true);
        if ($key !== false) {
            unset($this->subordinates[$key]);
            return true;
        } 
        return false;
    }

    public function setSubordinates(array $subordinates): self
    {
        
        $this->subordinates = [];

        foreach ($subordinates as $subordinate) {
            $this->add_subordinate($subordinate);
        }

        return $this;
    }

  
    public function getSubordinates(): array
    {
        return $this->subordinates;
    }

    
    public function getSuperior(): ?Technician
    {
        return $this->superior;
    }

}
