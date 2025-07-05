<?php
namespace Config\Core;
abstract class AbstractRepository{
    abstract public  function selectAll();
    abstract public  function insert();
    abstract public  function update();
    abstract public  function delete();
    abstract public  function selectById();
    abstract public  function selectBy(array $filter);
}