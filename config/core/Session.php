<?php

namespace Config\Core;
class Session{

    private array $session;


    public function unset($key)
    {
    }


    public function isset($key)
    {
    }
    public function destroy($key)
    {
    }
    public function getInstance($key)
    {
    }

    


    /**
     * Get the value of session
     */ 
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set the value of session
     *
     * @return  self
     */ 
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }
}